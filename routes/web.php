<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Client routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products/detail/{product_id}', [ProductController::class, 'detail'])->name('productsdetail');
Route::get('/products/{category_id}', [ProductController::class, 'products'])->name('productsByCategoryId');

Route::get('/category', [CategoryController::class, 'category'])->name('category');
Route::get('/search', [ProductController::class, 'search'])->name('products.search');


//Admin sử dụng asm
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/productlist', [AdminController::class, 'productlist'])->name('productlist');

Route::post('/productadd', [AdminController::class, 'productadd'])->name('productadd');
Route::get('/admin/productaddform', [AdminController::class, 'productaddform'])->name('productaddform');

Route::get('/productdelete/{id}', [AdminController::class, 'productdelete'])->name('productdelete');



Route::get('/admin/productupdateform/{id}', [AdminController::class, 'productupdateform'])->name('productupdateform');
Route::post('/productupdate', [AdminController::class, 'productupdate'])->name('productupdate');

Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');



// Admin routes thayho
// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
// Route::get('/productlist', [AdminController::class, 'productlist'])->name('productlist');
// Route::post('/productadd', [AdminController::class, 'productadd'])->name('productadd');
// Route::get('/productdelete/{id}', [AdminController::class, 'productdelete'])->name('productdelete');
// Route::get('/productupdateform/{id}', [AdminController::class, 'productupdateform'])->name('productupdateform');
// Route::post('/productupdate', [AdminController::class, 'productupdate'])->name('productupdate');
// Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');
