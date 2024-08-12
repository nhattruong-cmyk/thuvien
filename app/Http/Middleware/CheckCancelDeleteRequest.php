<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCancelDeleteRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if ($user && $user->delete_request_cancelled) {
            // Hiển thị thông báo
            session()->flash('cancelDeleteMessage', 'Yêu cầu xóa tài khoản của bạn đã bị hủy bởi quản trị viên.');
            
            // Đặt lại trạng thái để chỉ hiển thị một lần
            $user->delete_request_cancelled = false;
            $user->save();
        }

        return $next($request);
    }
}
