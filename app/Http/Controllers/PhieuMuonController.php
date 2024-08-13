<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\PhieuMuon;
use Illuminate\Support\Arr;

use App\Http\Requests\PhieuMuon\UpdatePMRequest;
use App\Http\Requests\PhieuMuon\InsertPMRequest;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PhieuMuonController extends Controller
{  

    public function listPhieuMuon(Request $request)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        $users = User::orderBy('id', 'DESC')->get();
        $products = Product::orderBy('id', 'DESC')->get();
        $query = PhieuMuon::orderBy('id', 'DESC');
    
        // Kiểm tra nếu có yêu cầu lọc theo trạng thái
        if ($request->has('status') && $request->status != '') {
            $query->where('status', $request->status);
        }
    
        $phieumuon = $query->paginate(100);
        $getOnePM = PhieuMuon::orderBy('id', 'DESC')->paginate(100);
    
        return view('admin.phieumuon.list', compact('phieumuon', 'users', 'products', 'getOnePM', 'categories'));
    }
    

    public function formaddPhieuMuon()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        $users = User::orderBy('id', 'ASC')->get();
        $products = Product::orderBy('id', 'ASC')->get();
        $phieumuon = PhieuMuon::orderBy('id', 'ASC')->paginate(15);
        return view('admin.phieumuon.add', compact('phieumuon', 'users','products', 'categories'));
    }

    public function showCreatePhieuMuonForm()
    {
    $cart = session('cart', []); // Lấy danh sách sách từ giỏ hàng trong session
    return view('path.to.your.view', compact('cart'));
    }

    public function insertPhieuMuon(InsertPMRequest $request)
    {
        DB::beginTransaction();
    
        try {
            $userId = $request->input('userId');
            $userName = $request->input('userName');
            $phone = $request->input('phone');
            $status = $request->input('status');
            $borrowed_at = $request->input('borrowed_at');
            $returned_at = $request->input('returned_at');
    
            $maSachList = $request->input('bookId', []);
            $tenSachList = $request->input('bookName', []);
            $quantityList = $request->input('quantity_in_card', []);
    
            // Kiểm tra nếu trạng thái là 3 thì không cho phép
            if ($status == 3) {
                return redirect()->back()->with('error', 'Không thể chọn trạng thái 3 khi thêm phiếu mượn mới.');
            }
    
            // Kiểm tra số lượng sách trước khi tạo phiếu mượn nếu trạng thái là 2
            if ($status == 2) {
                foreach ($maSachList as $index => $bookId) {
                    if ($bookId && isset($quantityList[$index]) && $quantityList[$index] > 0) {
                        $product = Product::find($bookId);
                        if (!$product) {
                            return redirect()->back()->with('error', 'Sách với mã ' . $bookId . ' không tồn tại.');
                        }
                        if ($quantityList[$index] > $product->quantity) {
                            return redirect()->back()->with('error', 'Số lượng sách ' . $product->name . ' không đủ. Chỉ còn ' . $product->quantity . ' sách trong kho.')->with('alert', true);
                        }
                    }
                }
            }
    
            // Tạo phiếu mượn và cập nhật số lượng sách nếu trạng thái là 2
            foreach ($maSachList as $index => $bookId) {
                if ($bookId && isset($quantityList[$index]) && $quantityList[$index] > 0) {
                    $phieumuonData = [
                        'userId' => $userId,
                        'userName' => $userName,
                        'phone' => $phone,
                        'bookId' => $bookId,
                        'bookName' => $tenSachList[$index],
                        'status' => $status,
                        'quantity_in_card' => $quantityList[$index],
                        'borrowed_at' => $borrowed_at,
                        'returned_at' => $returned_at,
                    ];
    
                    PhieuMuon::create($phieumuonData);
    
                    if ($status == 2) {
                        $product = Product::find($bookId);
                        if ($product) {
                            $product->quantity -= $quantityList[$index];
                            $product->save();
                        }
                    }
                }
            }
    
            // Xóa giỏ hàng của người dùng
            Cart::where('user_id', $userId)->delete();
    
            DB::commit();
            if (Auth::user()->role_id == 1) {
                return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Thêm phiếu mượn thành công.');
            } else {
                return redirect()->route('cart')->with('success', 'Yêu cầu của bạn đã được gửi');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm phiếu mượn: ' . $e->getMessage());
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
    
        DB::beginTransaction();
    
        try {
            // Nếu trạng thái là 3, không thể cập nhật bất kỳ thuộc tính nào
            if ($phieumuon->status == 3) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Không thể cập nhật phiếu mượn khi đã trả sách.');
            }
    
            // Nếu trạng thái hiện tại là 1
            if ($phieumuon->status == 1) {
                if (isset($validatedData['status'])) {
                    // Chỉ cho phép cập nhật trạng thái lên 2
                    if ($validatedData['status'] == 2) {
                        // Xử lý cập nhật trạng thái
                        $product = Product::find($phieumuon->bookId);
    
                        if ($product) {
                            $product->quantity -= $phieumuon->quantity_in_card;
    
                            if ($product->quantity < 0) {
                                DB::rollBack();
                                return redirect()->back()->with('error', 'Số lượng sản phẩm không đủ.');
                            }
    
                            $product->save();
    
                            // Cập nhật trạng thái
                            $phieumuon->update(['status' => $validatedData['status']]);
                        } else {
                            DB::rollBack();
                            return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
                        }
                    } elseif ($validatedData['status'] == 3) {
                        DB::rollBack();
                        return redirect()->back()->with('error', 'Không thể trả sách khi khách hàng chưa mượn.');
                    }
                }
    
                // Cập nhật các thuộc tính khác khi trạng thái là 1
                $otherAttributes = Arr::except($validatedData, ['status']);
    
                if (!empty($otherAttributes)) {
                    $phieumuon->update($otherAttributes);
                }
            } elseif ($phieumuon->status == 2) {
                // Nếu trạng thái hiện tại là 2, chỉ cho phép thay đổi trạng thái sang 3
                if (isset($validatedData['status'])) {
                    if ($validatedData['status'] != 3) {
                        DB::rollBack();
                        return redirect()->back()->with('error', 'Không thể thay đổi trạng thái khác ngoài 3 khi phiếu mượn đang trong trạng thái cho mượn.');
                    }
    
                    // Xử lý chuyển trạng thái từ 2 sang 3
                    $product = Product::find($phieumuon->bookId);
    
                    if ($product) {
                        $product->quantity += $phieumuon->quantity_in_card;
                        $product->save();
                    } else {
                        DB::rollBack();
                        return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
                    }
    
                    // Cập nhật trạng thái
                    $phieumuon->update(['status' => $validatedData['status']]);
                } else {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Trạng thái không được để trống.');
                }
            } else {
                // Trạng thái không hợp lệ hoặc không được phép cập nhật
                DB::rollBack();
                return redirect()->back()->with('error', 'Trạng thái không hợp lệ hoặc không được phép cập nhật.');
            }
    
            DB::commit();
    
            return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Cập nhật phiếu mượn thành công');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi cập nhật phiếu mượn: ' . $e->getMessage());
        }
    }
    
    

    public function updateStatus($id)
    {
        $phieumuon = PhieuMuon::findOrFail($id);
    
        DB::beginTransaction();
    
        try {
            // Kiểm tra nếu phiếu mượn đã có trạng thái 3 thì không làm gì cả
            if ($phieumuon->status == 3) {
                DB::rollBack();
                return redirect()->back()->with('info', 'Không thể sửa khi đã trả sách.');
            }
    
            // Nếu trạng thái ban đầu là 1 thì không thể đổi sang 3
            if ($phieumuon->status == 1) {
                DB::rollBack();
                return redirect()->back()->with('info', 'trạng thái không phù hợp');
            }
    
            // Nếu trạng thái ban đầu là 2, cập nhật trạng thái và số lượng sản phẩm
            if ($phieumuon->status == 2) {
                // Cập nhật trạng thái phiếu mượn
                $phieumuon->status = 3;
                $phieumuon->save();
    
                // Cập nhật số lượng sản phẩm trong kho
                $product = Product::find($phieumuon->bookId);
    
                if ($product) {
                    // Thay vì kiểm tra điều kiện phức tạp, chỉ cần cộng số lượng
                    $product->quantity += $phieumuon->quantity_in_card;
                    $product->save();
                } else {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
                }
            }
    
            DB::commit();
            return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Trạng thái phiếu mượn đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi cập nhật phiếu mượn: ' . $e->getMessage());
        }
    }
    
    
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');
    
        if (empty($ids)) {
            return redirect()->back()->with('error', 'Chưa chọn phiếu mượn nào để xóa.');
        }
    
        DB::beginTransaction();
    
        try {
            PhieuMuon::whereIn('id', $ids)->delete();
            DB::commit();
    
            return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Xóa đồng loạt thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi xóa phiếu mượn: ' . $e->getMessage());
        }
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
    

    public function listDeletedCards()
    {
        // Lấy danh sách người dùng đã bị xóa mềm
        $deletedCards= PhieuMuon::onlyTrashed()->get();

        // Truyền dữ liệu sang view
        return view('admin.phieumuon.deletedCards', compact('deletedCards'));
    }


    public function restoreCard($id)
    {
        // Tìm người dùng đã bị xóa mềm theo ID
        $phieumuon = PhieuMuon::withTrashed()->find($id);

        // Kiểm tra nếu người dùng tồn tại
        if ($phieumuon) {
            // Khôi phục người dùng
            $phieumuon->restore();

            // Trả về thông báo thành công hoặc chuyển hướng đến trang khác
            return redirect()->route('admin.phieumuon.listPhieuMuon')->with('success', 'Phiếu mượn đã được khôi phục thành công.');
        }

        // Trả về thông báo lỗi nếu người dùng không tồn tại
        return redirect()->route('admin.phieumuon.listPhieuMuon')->with('error', 'Phiếu mượn không tồn tại.');
    }

}
