<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Xác thực người dùng
        $request->authenticate();
    
        // Tái tạo session ID
        $request->session()->regenerate();
    
        // Lấy người dùng hiện tại
        $user = $request->user();
    
        // Kiểm tra vai trò của người dùng và chuyển hướng tương ứng
        if ($user->role_id == 1) {
            // Nếu role_id = 1, chuyển hướng đến trang admin
            return redirect()->route('admin');
        } else {
            // Nếu role_id khác 1, chuyển hướng về trang home
            return redirect()->route('home');
        }
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
