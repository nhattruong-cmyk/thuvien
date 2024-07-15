<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');

    }
    public function productlist()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('id', 'ASC')->paginate(6);

        return view('admin.product.productlist', compact('categories', 'products'));


    }
    public function productadd(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'quantity' => 'required|numeric',
            'img' => 'required|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ], [
            'name.required' => 'Vui lòng nhập tên sản phẩm.',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự.',
            'price.required' => 'Vui lòng nhập giá sản phẩm.',
            'price.numeric' => 'Giá sản phẩm phải là số.',
            'category_id.required' => 'Vui lòng chọn danh mục.',
            'category_id.integer' => 'Danh mục không hợp lệ.',
            'category_id.exists' => 'Danh mục không tồn tại.',
            'quantity.required' => 'Vui lòng nhập số lượng sản phẩm.',
            'quantity.numeric' => 'Số lượng sản phẩm phải là số.',
            'img.required' => 'Vui lòng chọn hình ảnh sản phẩm.',
            'img.file' => 'File tải lên phải là định dạng hình ảnh.',
            'img.mimes' => 'Hình ảnh phải có định dạng jpeg, png, jpg, gif hoặc svg.',
            'img.max' => 'Kích thước hình ảnh tối đa là 2MB.',
        ]);

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $validatedData['img'] = $imageName;
        }

        $products = Product::create($validatedData);

        if ($products) {
            return redirect()->route('productlist')->with('success', 'Thêm sản phẩm thành công');
        } else {
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi thêm sản phẩm');
        }
        // return redirect()->route('productlist');
    }
    public function productaddform()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.product.productaddform',compact('categories'));
     

    }
    public function productdelete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('productlist')->with('error', 'Sản phẩm không tồn tại');
        }

        $imgpath = "uploaded/" . $product->img;
        if (file_exists($imgpath)) {
            unlink($imgpath);
        }
        $product->delete();
        // return redirect()->route('productlist');
        return redirect()->route('productlist')->with('success', 'Xóa sản phẩm thành công');


    }

    public function productupdateform($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        $product = Product::find($id);
        return view('admin.product.productupdateform', compact('categories', 'products', 'product'));
    }

    public function productupdate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|integer|exists:categories,id',
            'img' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'quantity' => 'nullable|numeric',

        ]);

        $id = $request->id;
        $product = Product::findOrFail($id);

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $validatedData['img'] = $imageName;
            // kiểm tra hình củ và xóa
            $oldImagePath = public_path('uploaded/' . $product->img);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $product->update($validatedData);

        return redirect()->route('productlist');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->orderBy('id', 'DESC')
            ->paginate(5);//số sản phẩm để phân trang

        $categories = Category::orderBy('name', 'ASC')->get();

        return view('admin.productlist', compact('categories', 'products', 'query'));
    }


}
