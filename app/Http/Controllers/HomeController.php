<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home()
  {
    $newBooks = Product::orderBy('created_at', 'desc')->limit(4)->get();

    return view('client.home', compact('newBooks'));
    
  }

}