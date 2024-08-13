<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function home(Request $request)
  {
    $productController = new ProductController();
    $authors = Product::select('author')->distinct()->get();
    $publicationYears = Product::select('publication_year')->distinct()->get();
    $categories = Category::all();
    // Thực hiện tìm kiếm sản phẩm nếu có yêu cầu tìm kiếm
    if ($request->has('publication_year') || $request->has('category_id') || $request->has('author')) {
      $newBooks = $productController->search($request);
    } else {
      // Nếu không có tìm kiếm, chỉ lấy sản phẩm mới nhất
      $newBooks = Product::orderBy('created_at', 'desc')->limit(4)->get();
    }

    return view('client.home', compact('newBooks','authors', 'publicationYears','categories'));
  }
}