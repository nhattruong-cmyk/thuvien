<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('cilent.products');
    }
    public function detail()
    {
        return view('cilent.detail');
    }
}
