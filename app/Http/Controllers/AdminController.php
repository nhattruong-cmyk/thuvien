<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use App\Models\PhieuMuon;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Category\CategoryRequest;
use App\Http\Requests\Category\UpdateCateRequest;
use App\Http\Requests\PhieuMuon\UpdatePMRequest;
use App\Http\Requests\PhieuMuon\InsertPMRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Http\Requests\Role\InsertRoleRequest;
use App\Http\Requests\User\InsertUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Log;

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
        $products = Product::orderBy('id', 'ASC')->paginate(100);
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

        try {
            Product::create($productData);
            return redirect()->route('admin.product.listPro')->with('success', 'Thêm sản phẩm thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm sản phẩm: ' . $e->getMessage());
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
            return redirect()->route('admin.product.listPro')->with('info', 'Không có gì thay đổi');
        }

        // Cập nhật sản phẩm
        $product->update($validatedData);

        return redirect()->route('admin.product.listPro')->with('success', 'Cập nhật sản phẩm thành công');
    }
    public function delPro($id)
    {
        // Tìm sản phẩm theo ID
        $product = Product::find($id);

        // Kiểm tra nếu sản phẩm tồn tại
        if ($product) {

            // Kiểm tra xem sản phẩm có đang được mượn hay không
            $isBeingLoaned = PhieuMuon::where('bookId', $id)
                ->whereIn('status', [1, 2]) // Trạng thái 1 hoặc 2 tượng trưng cho "đang mượn"
                ->exists();

            if ($isBeingLoaned) {
                return redirect()->route('admin.product.listPro')->with('error', 'Sản phẩm đang được mượn và không thể xóa.');
            }

            // Xóa mềm sản phẩm khỏi cơ sở dữ liệu
            $product->delete();

            // Trả về thông báo thành công hoặc chuyển hướng đến trang khác
            return redirect()->route('admin.product.listPro')->with('success', 'Sản phẩm đã được xóa thành công.');
        } else {
            // Sản phẩm không tồn tại
            return redirect()->route('admin.product.listPro')->with('error', 'Sản phẩm không tồn tại.');
        }
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
    public function productDetails($id)
    {
        try {
            $product = Product::with('category')->findOrFail($id); // Với mối quan hệ category
            return response()->json([
                'name' => $product->name,
                'price' => $product->price,
                'author' => $product->author,
                'quantity' => $product->quantity,
                'publication_year' => $product->publication_year,
                'description' => $product->description,
                'img' => $product->img,
                'category_id' => $product->category_id,
                'category_name' => $product->category ? $product->category->name : 'Chưa có danh mục'
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Có lỗi xảy ra'], 500);
        }
    }

    public function listDeletedProducts()
    {
        // Lấy danh sách người dùng đã bị xóa mềm
        $deletedProducts = Product::onlyTrashed()->get();

        // Truyền dữ liệu sang view
        return view('admin.product.deletedProducts', compact('deletedProducts'));
    }


    public function restoreProduct($id)
    {
        // Tìm người dùng đã bị xóa mềm theo ID
        $product = Product::withTrashed()->find($id);

        // Kiểm tra nếu người dùng tồn tại
        if ($product) {
            // Khôi phục người dùng
            $product->restore();

            // Trả về thông báo thành công hoặc chuyển hướng đến trang khác
            return redirect()->route('admin.product.listPro')->with('success', 'Sản phảm đã được khôi phục thành công.');
        }

        // Trả về thông báo lỗi nếu người dùng không tồn tại
        return redirect()->route('admin.product.listPro')->with('error', 'Sản phẩm không tồn tại.');
    }

    public function forceDeleteProduct($id)
    {
        // Tìm sản phẩm với cả những sản phẩm đã bị xóa mềm
        $product = Product::withTrashed()->find($id);

        if ($product) {
            // Tiến hành xóa cứng sản phẩm
            $product->forceDelete();

            return redirect()->route('admin.product.listPro')->with('success', 'Sản phẩm đã được xóa vĩnh viễn.');
        }

        return redirect()->route('admin.product.listPro')->with('error', 'Sản phẩm không tồn tại.');
    }



    // COMMENT --------------------------------------------------------------------------------------------------------------------------
    public function listComment()
    {
        $comments = Comment::with('user', 'product')->orderBy('created_at', 'desc')->paginate(100);
        return view('admin.comment.list', compact('comments'));
    }
    public function delComment($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
            $comment->delete();
            return response()->json(['success' => true, 'message' => 'Bình luận đã được xóa thành công.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Không tìm thấy bình luận.']);
        }
    }
    // USERS -----------------------------------------------------------------------------------------------------------------------
    public function listUser()
    {
        $roles = Role::orderBy('role_name', 'ASC')->get();
        $usersWithDeleteRequest = User::where('delete_request', true)->paginate(10);
        $users = User::orderBy('id', 'ASC')->paginate(15);
        return view('admin.user.list', compact('roles', 'users', 'usersWithDeleteRequest'));
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
            return redirect()->route('admin.user.listUser')->with('success', 'Thêm tài khoản thành công');
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
            return redirect()->route('admin.user.listUser')->with('info', 'Không có gì thay đổi');
        }

        // Cập nhật tài khoản
        $user->update($validatedData);

        return redirect()->route('admin.user.listUser')->with('success', 'Cập nhật tài khoản thành công');
    }

    public function delUser($id)
    {
        // Tìm người dùng theo ID
        $user = User::find($id);

        // Kiểm tra nếu người dùng tồn tại
        if ($user) {
            // Kiểm tra xem người dùng có bất kỳ phiếu mượn nào không phải status = 3
            $hasNonReturnBooks = PhieuMuon::where('userId', $id)->where('status', '<>', 3)->exists();
            if ($hasNonReturnBooks) {
                return redirect()->route('admin.user.listUser')->with('error', 'Người dùng này vẫn đang mượn sách chưa trả hoặc trong trạng thái khác và không thể xóa.');
            }

            // Xóa mềm người dùng khỏi cơ sở dữ liệu
            $user->delete();

            // Trả về thông báo thành công hoặc chuyển hướng đến trang khác
            return redirect()->route('admin.user.listUser')->with('success', 'Tài khoản đã được xóa thành công.');
        }

        // Trả về thông báo lỗi nếu người dùng không tồn tại
        return redirect()->route('admin.user.listUser')->with('error', 'Tài khoản không tồn tại.');
    }

    public function listDeletedUsers()
    {
        // Lấy danh sách người dùng đã bị xóa mềm
        $deletedUsers = User::onlyTrashed()->get();

        // Truyền dữ liệu sang view
        return view('admin.user.deletedUsers', compact('deletedUsers'));
    }

    public function restoreUser($id)
    {
        // Tìm người dùng đã bị xóa mềm theo ID
        $user = User::withTrashed()->find($id);

        // Kiểm tra nếu người dùng tồn tại
        if ($user) {
            // Khôi phục người dùng
            $user->restore();

            // Trả về thông báo thành công hoặc chuyển hướng đến trang khác
            return redirect()->route('admin.user.listUser')->with('success', 'Tài khoản đã được khôi phục thành công.');
        }

        // Trả về thông báo lỗi nếu người dùng không tồn tại
        return redirect()->route('admin.user.listUser')->with('error', 'Tài khoản không tồn tại.');
    }

    public function forceDeleteUser($id)
    {
        // Tìm người dùng với cả người dùng đã bị xóa mềm
        $user = User::withTrashed()->find($id);

        if ($user) {
            // Tiến hành xóa cứng người dùng
            $user->forceDelete();

            return redirect()->route('admin.user.listUser')->with('success', 'Tài khoản đã được xóa vĩnh viễn.');
        }

        return redirect()->route('admin.user.listUser')->with('error', 'Tài khoản không tồn tại.');
    }


    public function approveDelete(User $user)
    {
        $requestedAt = Carbon::parse($user->delete_requested_at);

        $hasActiveLoans = PhieuMuon::where('userId', $user->id)
            ->whereIn('status', [1, 2])
            ->exists();

        if ($hasActiveLoans) {
            return redirect()->route('admin.user.listUser')->with('error', 'Người dùng đang mượn sách, không thể xóa tài khoản.');
        }

        if ($user->delete_request && $requestedAt->diffInDays(now()) <= 3) {
            $user->delete();
            return redirect()->route('admin.user.listUser')->with('status', 'Tài khoản đã được xóa.');
        }

        return redirect()->route('admin.user.listUser')->with('error', 'Yêu cầu xóa tài khoản đã hết hạn hoặc không hợp lệ.');
    }



    public function cancelDelete(User $user)
    {
        $user->delete_request = false;
        $user->delete_requested_at = null;
        $user->delete_request_cancelled = true;
        $user->save();

        return redirect()->route('admin.user.listUser')->with('status', 'Yêu cầu xóa tài khoản đã bị hủy.');
    }





}
