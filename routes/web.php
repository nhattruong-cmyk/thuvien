<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;




Route::get('/', function () {
    return view('client.home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');


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


// user
Route::get('/admin/listUser', [AdminController::class, 'listUser'])->name('listUser');
Route::get('/admin/formaddUser', [AdminController::class, 'formaddUser'])->name('formaddUser');
Route::post('/insertUser', [AdminController::class, 'insertUser'])->name('insertUser');
Route::get('/delUser/{id}', [AdminController::class, 'delUser'])->name('delUser');
Route::get('/admin/formupdateUser/{id}', [AdminController::class, 'formupdateUser'])->name('formupdateUser');
Route::post('/updateUser', [AdminController::class, 'updateUser'])->name('updateUser');


Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
