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
            'bookId_cart' => $request->bookId_cart,
            'bookName_cart' => $request->bookName_cart,
            'quantity_cart' => $request->quantity_cart,
        ];

        // Save to session
        $cart[] = $book;
        Session::put($cartKey, $cart);

        // Save to database
        $cartItem = new Cart;
        $cartItem->user_id = $user->id;
        $cartItem->bookId_cart = $request->bookId_cart;
        $cartItem->bookName_cart = $request->bookName_cart;
        $cartItem->quantity_cart = $request->quantity_cart;
        $cartItem->save();

        return response()->json(['success' => true]);
    }


    public function delOneCart($id)
    {
        $cartItem = Cart::find($id);
    
        if ($cartItem) {
            $cartItem->delete();

            return redirect()->route('cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
        } else {
            return redirect()->route('cart')->with('error', 'Sản phẩm không tồn tại trong giỏ hàng.');
        }
    }
    
    
    
    
}
