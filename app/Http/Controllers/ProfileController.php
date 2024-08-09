<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB; 
use App\Models\User;



class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }


    public function change_password(){
        return view('auth.change-password');
    }

    public function check_change_password(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'old_password' => ['required', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Mật khẩu không trùng khớp');
                }
            }],
            'password' => 'required|min:4',
            'password_confirmation' => 'required|same:password',
        ]);
    
        // Cập nhật mật khẩu cho người dùng hiện tại
        $user = Auth::user();
        $user->password = bcrypt($request->password);
        
        if($user->save()) {
            return redirect()->route('login')->with('success', 'Đổi mật khẩu thành công');
        }
    
        return redirect()->back()->with('error', 'Đổi mật khẩu không thành công, vui lòng thử lại');
    }

    public function requestDelete(Request $request)
    {
        $user = Auth::user();
        $user->delete_request = true;
        $user->delete_requested_at = now();
        $user->save();

        return redirect()->back()->with('status', 'Yêu cầu xóa tài khoản của bạn đã được gửi đến admin.');
    }



}
