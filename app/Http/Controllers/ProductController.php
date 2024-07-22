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
    // public function detail()
    // {
    //     return view('client.detail');
    // }
    public function detail($id)
{
    $product = Product::with('categories')->findOrFail($id);
    return view('client.productsdetail', compact('product'));
}
}
