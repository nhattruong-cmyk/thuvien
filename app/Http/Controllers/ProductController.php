<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = Product::paginate(6);
        $pageTitle = 'Sản phẩm';
        $categories = Category::all();
        return view('client.products', compact('products', 'categories','pageTitle'));
    }
    public function productsdetail($id)
    {
        $product = Product::with('category')->findOrFail($id);

        // Lấy sản phẩm liên quan cùng danh mục, loại trừ sản phẩm hiện tại
        $relatedproducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->limit(4)
            ->get();

        $pageTitle = $product->name;

        return view('client.productsdetail', compact('product', 'relatedproducts','pageTitle'));
    }
    public function productsByCategory($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->paginate(6);
        $categories = Category::all();
        return view('client.products', compact('products', 'categories', 'category'));
    }
}
