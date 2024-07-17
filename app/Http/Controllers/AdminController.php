<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\UpdateRequest;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    // PRODUCT --------------------------------------------------------------------------------------------------------------------------
    public function listPro()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('id', 'ASC')->paginate(15);
        return view('admin.product.list', compact('categories', 'products'));
    }
    public function formaddPro()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.product.add', compact('categories'));
    }
    public function insertPro(ProductRequest $request)
    {
        $productData = $request->all();

        // Kiểm tra và xử lý file hình ảnh
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $productData['img'] = $imageName;

            // Kiểm tra xem file có tồn tại không
            if (!file_exists(public_path('uploaded') . '/' . $imageName)) {
                return redirect()->back()->with('error', 'Tải lên hình ảnh thất bại');
            }
        }



        // $products = Product::create($validatedData);
        // if(Product::create($request->all())){
        //     return redirect()->route('listPro')->with('success', 'Thêm sản phẩm thành công');

        // }
        if (Product::create($productData)) {
            return redirect()->route('listPro')->with('success', 'Thêm sản phẩm thành công');
        } else {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm sản phẩm');
        }
        // if ($products) {
        //     return redirect()->route('listPro')->with('success', 'Thêm sản phẩm thành công');
        // } else {
        //     return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi thêm sản phẩm');
        // }
        // return redirect()->route('productlist');
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

    public function formupdatePro($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        $product = Product::find($id);
        return view('admin.product.edit', compact('categories', 'products', 'product'));
    }
    public function updatePro(UpdateRequest $request)
    {
        $id = $request->id;
        $product = Product::findOrFail($id);

        // Lấy dữ liệu đã được validate
        $validatedData = $request->validated();

        $isImageUpdated = false; // Biến để kiểm tra xem ảnh có được cập nhật hay không

        // Kiểm tra xem có file hình ảnh mới không
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $validatedData['img'] = $imageName;

            // Xóa hình ảnh cũ nếu tồn tại
            $oldImagePath = public_path('uploaded/' . $product->img);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $isImageUpdated = true; // Đánh dấu là ảnh đã được cập nhật
        } else {
            // Nếu không có file hình ảnh mới, giữ lại hình ảnh cũ
            $validatedData['img'] = $product->img;
        }

        // Kiểm tra nếu không có sự thay đổi
        $isChanged = false;
        foreach ($validatedData as $key => $value) {
            if ($product[$key] != $value) {
                $isChanged = true;
                break;
            }
        }

        if (!$isChanged && !$isImageUpdated) {
            return redirect()->route('listPro')->with('info', 'Không có gì thay đổi');
        }

        // Cập nhật sản phẩm
        $product->update($validatedData);

        return redirect()->route('listPro')->with('success', 'Cập nhật sản phẩm thành công');
    }
    public function delPro($id)
    {
        // Tìm sản phẩm theo ID
        $product = Product::find($id);

        // Kiểm tra nếu sản phẩm tồn tại

        // Kiểm tra nếu có tệp hình ảnh và tệp tồn tại trên hệ thống
        $imagePath = "public/uploaded/" . $product->img;
        if (file_exists($imagePath)) {
            // Xóa tệp hình ảnh
            unlink($imagePath);
        }

        // Xóa sản phẩm khỏi cơ sở dữ liệu
        $product->delete();

        // Bạn có thể trả về thông báo thành công hoặc chuyển hướng đến trang khác
        return redirect()->route('listPro')->with('success', 'Sản phẩm đã được xóa thành công.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->orderBy('id', 'DESC')
            ->paginate(5); //số sản phẩm để phân trang

        $categories = Category::orderBy('name', 'ASC')->get();

        return view('admin.productlist', compact('categories', 'products', 'query'));
    }

    // CATEGORY -------------------------------------------------------------------------------------------------------------------------------
    public function listCate()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(6);
        return view('admin.category.list', compact('categories'));
    }
    public function formaddCate()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.category.add', compact('categories'));
    }
    public function insertCate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:20',
            'description' => 'nullable|string',
        ], [
            'name.required' => 'Vui lòng nhập tên danh mục.',
            'name.max' => 'Tên danh mục không được vượt quá 50 ký tự.',
        ]);

        $categories = Category::create($validatedData);

        if ($categories) {
            return redirect()->route('listCate')->with('success', 'Thêm danh mục thành công');
        } else {
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi thêm danh mục');
        }
        // return redirect()->route('productlist');
    }
    public function formupdateCate($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $category = Category::find($id);
        return view('admin.category.edit', compact('categories', 'category'));
    }
    public function updateCate(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
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

        $id = $request->id;
        $categories = Category::findOrFail($id);
        $categories->update($validatedData);
        return redirect()->route('listCate');
    }
    public function delCate($id)
    {
        $categories = Category::find($id);
        if (!$categories) {
            return redirect()->route('listCate')->with('error', 'Danh mục không tồn tại');
        }
        $categories->delete();
        return redirect()->route('listCate')->with('success', 'Xóa danh mục thành công');
    }

    // ROLE -------------------------------------------------------------------------------------------------------------------------------
    public function listRole()
    {
        $roles = Role::orderBy('id', 'ASC')->paginate(6);
        return view('admin.role.list', compact('roles'));
    }
    public function formaddRole()
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        return view('admin.role.add', compact('roles'));
    }
    public function insertRole(Request $request)
    {
        $validatedData = $request->validate([
            'role_name' => 'required|string|max:20',
            'description' => 'nullable|string',
        ], [
            'role_name.required' => 'Vui lòng nhập tên phân quyền.',
            'role_name.max' => 'Tên phân quyền không được vượt quá 50 ký tự.',
        ]);

        $roles = Role::create($validatedData);

        if ($roles) {
            return redirect()->route('listRole')->with('success', 'Thêm phân quyền thành công');
        } else {
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi thêm phân quyền');
        }
    }
    public function formupdateRole($id)
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        $role = Role::find($id);
        return view('admin.role.edit', compact('roles', 'role'));
    }
    public function updateRole(Request $request)
    {
        $validatedData = $request->validate([
            'role_name' => 'required|string|max:50',
            'description' => 'nullable|string',
        ], [
            'role_name.required' => 'Vui lòng nhập tên phân quyền.',
            'role_name.max' => 'Tên phân quyền không được vượt quá 50 ký tự.'
        ]);

        $id = $request->id;
        $roles = Role::findOrFail($id);
        $roles->update($validatedData);
        return redirect()->route('listRole');
    }
    public function delRole($id)
    {
        $roles = Role::find($id);
        if (!$roles) {
            return redirect()->route('listRole')->with('error', 'Phân quyền không tồn tại');
        }
        $roles->delete();
        return redirect()->route('listRole')->with('success', 'Xóa phân quyền thành công');
    }

    // USERS -----------------------------------------------------------------------------------------------------------------------







    // ĐƠN HÀNG --------------------------------------------------------------------------------------------------------------------







    // COMMENT -------------------------------------------------------------------------------------------------------------------------
}
