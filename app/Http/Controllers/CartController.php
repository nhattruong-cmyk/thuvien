<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->get();

        return view('client.cart', compact('cart'));
    }

    public function addToCart(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['success' => false, 'message' => 'User not logged in'], 401);
        }

        $user = Auth::user();
        $cartKey = 'cart_' . $user->id;
        $cart = Session::get($cartKey, []);

        $book = [
            'maSach' => $request->maSach,
            'tenSach' => $request->tenSach,
            'soLuong' => $request->soLuong,
        ];

        // Save to session
        $cart[] = $book;
        Session::put($cartKey, $cart);

        // Save to database
        $cartItem = new Cart;
        $cartItem->user_id = $user->id;
        $cartItem->maSach = $request->maSach;
        $cartItem->tenSach = $request->tenSach;
        $cartItem->soLuong = $request->soLuong;
        $cartItem->save();

        return response()->json(['success' => true]);
    }

}
