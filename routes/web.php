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


// product
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/listPro', [AdminController::class, 'listPro'])->name('listPro');
Route::get('/admin/formaddPro', [AdminController::class, 'formaddPro'])->name('formaddPro');
Route::post('/insertPro', [AdminController::class, 'insertPro'])->name('insertPro');
Route::get('/delPro/{id}', [AdminController::class, 'delPro'])->name('delPro');
Route::get('/admin/formupdatePro/{id}', [AdminController::class, 'formupdatePro'])->name('formupdatePro');
Route::post('/updatePro', [AdminController::class, 'updatePro'])->name('updatePro');


// category
Route::get('/admin/listCate', [AdminController::class, 'listCate'])->name('listCate');
Route::get('/admin/formaddCate', [AdminController::class, 'formaddCate'])->name('formaddCate');
Route::get('/admin/formupdateCate/{id}', [AdminController::class, 'formupdateCate'])->name('formupdateCate');
Route::post('/insertCate', [AdminController::class, 'insertCate'])->name('insertCate');
Route::post('/updateCate', [AdminController::class, 'updateCate'])->name('updateCate');
Route::get('/delCate/{id}', [AdminController::class, 'delCate'])->name('delCate');


// role
Route::get('/admin/listRole', [AdminController::class, 'listRole'])->name('listRole');
Route::get('/admin/formaddRole', [AdminController::class, 'formaddRole'])->name('formaddRole');
Route::get('/admin/formupdateRole/{id}', [AdminController::class, 'formupdateRole'])->name('formupdateRole');
Route::post('/insertRole', [AdminController::class, 'insertRole'])->name('insertRole');
Route::post('/updateRole', [AdminController::class, 'updateRole'])->name('updateRole');
Route::get('/delRole/{id}', [AdminController::class, 'delRole'])->name('delRole');


Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');
