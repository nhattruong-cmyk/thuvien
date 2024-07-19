<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Category\UpdateCateRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Http\Requests\Role\InsertRoleRequest;
use App\Http\Requests\User\InsertUserRequest;
use App\Http\Requests\User\UpdateUserRequest;





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

        if (Product::create($productData)) {
            return redirect()->route('listPro')->with('success', 'Thêm sản phẩm thành công');
        } else {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm sản phẩm');
        }

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
    public function insertCate(CategoryRequest $request)
    {
        $categoriesData = $request->all();

        if (Category::create($categoriesData)) {
            return redirect()->route('listCate')->with('success', 'Thêm danh mục thành công');
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
            return redirect()->route('listCate')->with('info', 'Không có gì thay đổi');
        }
        // Cập nhật sản phẩm
        $categories->update($validatedData);

        return redirect()->route('listCate')->with('success', 'Cập nhật danh mục thành công');
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
    public function insertRole(InsertRoleRequest $request)
    {
        $roleData = $request->all();

        $roles = Role::create($roleData);

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
    public function updateRole(UpdateRoleRequest $request)
    {
        
        $id = $request->id;
        $roles = Role::findOrFail($id);
        $validatedData = $request->validated();
                // Kiểm tra nếu không có sự thay đổi
                $isChanged = false;
                foreach ($validatedData as $key => $value) {
                    if ($roles[$key] != $value) {
                        $isChanged = true;
                        break;
                    }
                }
        
                if (!$isChanged) {
                    return redirect()->route('listRole')->with('info', 'Không có gì thay đổi');
                }
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
    public function listUser()
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        $users = User::orderBy('id', 'ASC')->paginate(15);
        return view('admin.user.list', compact('roles', 'users'));
    }
    public function formaddUser()
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        return view('admin.user.add', compact('roles'));
    }

    public function insertUser(InsertUserRequest $request)
    {
        $userData = $request->all();
    
        // Kiểm tra và xử lý file hình ảnh
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('avata'), $imageName);
            $userData['img'] = $imageName;
    
            // Kiểm tra xem file có tồn tại không
            if (!file_exists(public_path('avata') . '/' . $imageName)) {
                return redirect()->back()->with('error', 'Tải lên hình ảnh thất bại');
            }
        }
    
        if (User::create($userData)) {
            return redirect()->route('listUser')->with('success', 'Thêm tài khoản thành công');
        } else {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm tài khoản');
        }
    }
     

    public function formupdateUser($id)
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        $users = User::orderBy('id', 'DESC')->paginate(10);
        $user = User::find($id);
        return view('admin.user.edit', compact('roles', 'users', 'user'));
    }
    public function updateUser(UpdateUserRequest $request)
    {
        $id = $request->id;
        $user = User::findOrFail($id);
    
        // Lấy dữ liệu đã được validate
        $validatedData = $request->validated();
    
        // Kiểm tra xem có file hình ảnh mới không
        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('avata'), $imageName);
    
            // Xóa hình ảnh cũ nếu tồn tại
            $oldImagePath = public_path('avata/' . $user->img);
            if (file_exists($oldImagePath) && !is_dir($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            // Cập nhật tên hình ảnh mới vào dữ liệu
            $validatedData['img'] = $imageName;
        } else {
            // Nếu không có file hình ảnh mới, giữ lại hình ảnh cũ
            $validatedData['img'] = $user->img;
        }
    
        // Kiểm tra sự thay đổi trong dữ liệu
        $isChanged = false;
        foreach ($validatedData as $key => $value) {
            if ($user[$key] != $value) {
                $isChanged = true;
                break;
            }
        }
    
        if (!$isChanged) {
            return redirect()->route('listUser')->with('info', 'Không có gì thay đổi');
        }
    
        // Cập nhật tài khoản
        $user->update($validatedData);
    
        return redirect()->route('listUser')->with('success', 'Cập nhật tài khoản thành công');
    }
    
    public function delUser($id)
    {
        // Tìm sản phẩm theo ID
        $user = User::find($id);

        // Kiểm tra nếu sản phẩm tồn tại

        // Kiểm tra nếu có tệp hình ảnh và tệp tồn tại trên hệ thống
        $imagePath = "public/avata/" . $user->img;
        if (file_exists($imagePath)) {
            // Xóa tệp hình ảnh
            unlink($imagePath);
        }

        // Xóa sản phẩm khỏi cơ sở dữ liệu
        $user->delete();

        // Bạn có thể trả về thông báo thành công hoặc chuyển hướng đến trang khác
        return redirect()->route('listUer')->with('success', 'Tài khoản đã được xóa thành công.');
    }






    // ĐƠN HÀNG --------------------------------------------------------------------------------------------------------------------







    // COMMENT -------------------------------------------------------------------------------------------------------------------------
}
