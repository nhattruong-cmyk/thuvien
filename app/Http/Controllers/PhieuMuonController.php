<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\PhieuMuon;

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
        if ($request->has('trangthai') && $request->trangthai != '') {
            $query->where('trangthai', $request->trangthai);
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
            $trangthai = $request->input('trangthai');
            $ngayMuon = $request->input('ngayMuon');
            $hanTra = $request->input('hanTra');
    
            $maSachList = $request->input('maSach', []);
            $tenSachList = $request->input('tenSach', []);
            $soLuongList = $request->input('soluong', []);
    
            // Kiểm tra nếu trạng thái là 3 thì không cho phép
            if ($trangthai == 3) {
                return redirect()->back()->with('error', 'Không thể chọn trạng thái 3 khi thêm phiếu mượn mới.');
            }
    
            // Kiểm tra số lượng sách trước khi tạo phiếu mượn nếu trạng thái là 2
            if ($trangthai == 2) {
                foreach ($maSachList as $index => $maSach) {
                    if ($maSach && isset($soLuongList[$index]) && $soLuongList[$index] > 0) {
                        $product = Product::find($maSach);
                        if (!$product) {
                            return redirect()->back()->with('error', 'Sách với mã ' . $maSach . ' không tồn tại.');
                        }
                        if ($soLuongList[$index] > $product->quantity) {
                            return redirect()->back()->with('error', 'Số lượng sách ' . $product->name . ' không đủ. Chỉ còn ' . $product->quantity . ' sách trong kho.')->with('alert', true);
                        }
                    }
                }
            }
    
            // Tạo phiếu mượn và cập nhật số lượng sách nếu trạng thái là 2
            foreach ($maSachList as $index => $maSach) {
                if ($maSach && isset($soLuongList[$index]) && $soLuongList[$index] > 0) {
                    $phieumuonData = [
                        'userId' => $userId,
                        'userName' => $userName,
                        'phone' => $phone,
                        'maSach' => $maSach,
                        'tenSach' => $tenSachList[$index],
                        'trangthai' => $trangthai,
                        'soluong' => $soLuongList[$index],
                        'ngayMuon' => $ngayMuon,
                        'hanTra' => $hanTra,
                    ];
    
                    PhieuMuon::create($phieumuonData);
    
                    if ($trangthai == 2) {
                        $product = Product::find($maSach);
                        if ($product) {
                            $product->quantity -= $soLuongList[$index];
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
    
        DB::beginTransaction();
    
        try {
            if ($phieumuon->trangthai == 1 && isset($validatedData['trangthai']) && $validatedData['trangthai'] != 2) {
                return redirect()->back()->with('error', 'Chỉ có thể thay đổi trạng thái từ 1 sang 2.');
            }
    
            if ($phieumuon->trangthai == 2 && isset($validatedData['trangthai']) && !in_array($validatedData['trangthai'], [1, 3])) {
                return redirect()->back()->with('error', 'Chỉ có thể thay đổi trạng thái từ 2 sang 1 hoặc 3.');
            }
    
            if ($phieumuon->trangthai == 3) {
                return redirect()->back()->with('error', 'Không thể thay đổi trạng thái từ 3.');
            }
    
            if (isset($validatedData['trangthai']) && $validatedData['trangthai'] == 2) {
                $product = Product::find($phieumuon->maSach);
    
                if ($product) {
                    $product->quantity -= $phieumuon->soluong;
    
                    if ($product->quantity < 0) {
                        DB::rollBack();
                        return redirect()->back()->with('error', 'Số lượng sản phẩm không đủ.');
                    }
    
                    $product->save();
                } else {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
                }
            }
    
            if (isset($validatedData['trangthai']) && $validatedData['trangthai'] == 3) {
                $product = Product::find($phieumuon->maSach);
    
                if ($product) {
                    $soluongtrongkho = $product->quantity;
                    $soluongmuon = $soluongtrongkho + $phieumuon->soluong;
    
                    if ($soluongmuon < $soluongtrongkho) {
                        DB::rollBack();
                        return redirect()->back()->with('error', 'Lỗi trạng thái, vui lòng xem lại.');
                    } else {
                        $product->quantity = $soluongmuon;
                        $product->save();
                    }
                } else {
                    DB::rollBack();
                    return redirect()->back()->with('error', 'Sản phẩm không tồn tại.');
                }
            }
    
            // Cập nhật phiếu mượn
            $phieumuon->update($validatedData);
    
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
            if ($phieumuon->trangthai == 3) {
                DB::rollBack();
                return redirect()->back()->with('info', 'Phiếu mượn đã có trạng thái 3.');
            }
    
            // Nếu trạng thái là 1 hoặc 2, cập nhật trạng thái và số lượng sản phẩm
            if ($phieumuon->trangthai != 3) {
                // Cập nhật trạng thái phiếu mượn
                $phieumuon->trangthai = 3;
                $phieumuon->save();
    
                // Cập nhật số lượng sản phẩm trong kho
                $product = Product::find($phieumuon->maSach);
    
                if ($product) {
                    // Thay vì kiểm tra điều kiện phức tạp, chỉ cần cộng số lượng
                    $product->quantity += $phieumuon->soluong;
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
    
}
