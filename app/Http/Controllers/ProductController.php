<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::paginate(4);
        return view('client.products', compact('products'));
    }
    public function productsdetail($id)
    {
        $product = Product::with('category')->findOrFail($id);

        // Lấy sản phẩm liên quan cùng danh mục, loại trừ sản phẩm hiện tại
        $relatedproducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->limit(4)
            ->get();

        return view('client.productsdetail', compact('product', 'relatedproducts'));
    }

}
