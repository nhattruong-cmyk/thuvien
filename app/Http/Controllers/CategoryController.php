<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use App\Models\PhieuMuon;
use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Category\UpdateCateRequest;




class CategoryController extends Controller
{
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
    public function insertCate(CategoryRequest $request)
    {
        $categoriesData = $request->all();

        if (Category::create($categoriesData)) {
            return redirect()->route('admin.category.listCate')->with('success', 'Thêm danh mục thành công');
        } else {
            return redirect()->back()->withInput()->with('error', 'Đã xảy ra lỗi khi thêm danh mục');
        }
    }
    public function formupdateCate($id)
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        $category = Category::find($id);
        return view('admin.category.edit', compact('categories', 'category'));
    }
    public function updateCate(UpdateCateRequest $request)
    {
        $id = $request->id;
        $categories = Category::findOrFail($id);
        $validatedData = $request->validated();
        // Kiểm tra nếu không có sự thay đổi

        $isChanged = false;
        foreach ($validatedData as $key => $value) {
            if ($categories[$key] != $value) {
                $isChanged = true;
                break;
            }
        }

        if (!$isChanged) {
            return redirect()->route('admin.category.listCate')->with('info', 'Không có gì thay đổi');
        }
        // Cập nhật sản phẩm
        $categories->update($validatedData);

        return redirect()->route('admin.category.listCate')->with('success', 'Cập nhật danh mục thành công');
    }

    public function delCate($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('admin.category.listCate')->with('error', 'Danh mục không tồn tại');
        }

        $category->delete();

        return redirect()->route('admin.category.listCate')->with('success', 'Xóa danh mục thành công');
    }

}
