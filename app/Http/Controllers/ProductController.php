<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use App\Models\PhieuMuon;
use App\Http\Requests\PhieuMuon\UpdatePMRequest;
use App\Http\Requests\PhieuMuon\InsertPMRequest;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::paginate(6);
        $pageTitle = 'Sản phẩm';
        $categories = Category::all();
        return view('client.products', compact('products', 'categories','pageTitle'));
    }
    public function productsdetail($id)
    {
        $product = Product::with('category')->findOrFail($id);

        // Lấy sản phẩm liên quan cùng danh mục, loại trừ sản phẩm hiện tại
        $relatedproducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->limit(4)
            ->get();

        $pageTitle = $product->name;

        return view('client.productsdetail', compact('product', 'relatedproducts','pageTitle'));
    }
    public function productsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->paginate(6);
        $categories = Category::all();
        return view('client.products', compact('products', 'categories', 'category'));
    }












    public function listPhieuMuon()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $users = User::orderBy('id', 'ASC')->get();
        $phieumuon = PhieuMuon::orderBy('id', 'ASC')->paginate(15);
        $products = Product::orderBy('id', 'ASC')->get();
        $getOnePM = PhieuMuon::orderBy('id', 'ASC')->paginate(15);


        return view('admin.phieumuon.list', compact('phieumuon', 'users', 'products','getOnePM', 'categories'));
    }


    public function formaddPhieuMuon()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $users = User::orderBy('id', 'ASC')->get();
        $products = Product::orderBy('id', 'ASC')->get();
        $phieumuon = PhieuMuon::orderBy('id', 'ASC')->paginate(15);
        return view('admin.phieumuon.add', compact('phieumuon', 'users','products', 'categories'));
    }

    public function insertPhieuMuon(InsertPMRequest $request)
    {
        $phieumuonData = $request->all();

        if (PhieuMuon::create($phieumuonData)) {
            return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Thêm phiếu mượn thành công');
        } else {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm phiếu mượn');
        }
    }


    public function formupdatePhieuMuon($id)
    {
        $phieumuon = PhieuMuon::find($id);
        $categories = Category::orderBy('id', 'ASC')->get();
        $products = Product::orderBy('id', 'ASC')->get();
        $users = User::orderBy('id', 'ASC')->get();
        $phieumuons = PhieuMuon::orderBy('id', 'ASC')->paginate(15);
        return view('admin.phieumuon.edit', compact('phieumuons','phieumuon', 'users','products', 'categories'));
    }
    public function updatePhieuMuon(UpdatePMRequest $request)
    {
        $id = $request->id;
        $phieumuon = PhieuMuon::findOrFail($id);
        $validatedData = $request->validated();
        $isChanged = false;
        foreach ($validatedData as $key => $value) {
            if ($phieumuon[$key] != $value) {
                $isChanged = true;
                break;
            }
        }
        if (!$isChanged) {
            return redirect()->route('admin.phieumuon.listPhieuMuon')->with('info', 'Không có gì thay đổi');
        }
        $phieumuon->update($validatedData);

        return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Cập nhật phiếu mượn thành công');
    }

    public function delPhieuMuon($id)
    {
        // Tìm sản phẩm theo ID
        $phieumuon = PhieuMuon::find($id);

        // Xóa sản phẩm khỏi cơ sở dữ liệu
        $phieumuon->delete();

        // Bạn có thể trả về thông báo thành công hoặc chuyển hướng đến trang khác
        return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Phiếu mượn đã được xóa thành công.');
    }
    public function getDetails($id)
    {
        $phieuMuon = PhieuMuon::findOrFail($id);
        return response()->json($phieuMuon);
    }



}
