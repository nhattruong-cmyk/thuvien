<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;




// client
Route::get('/', function () {
    return redirect('/home');
});
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'productsdetail'])->name('products.detail');
Route::get('/category/{id}/products', [ProductController::class, 'productsByCategory'])->name('category.products');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');


Route::prefix('admin')->name('admin.')->group(function () {

    //product
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('listPro', [AdminController::class, 'listPro'])->name('listPro');
        Route::get('formaddPro', [AdminController::class, 'formaddPro'])->name('formaddPro');
        Route::post('/insertPro', [AdminController::class, 'insertPro'])->name('insertPro');
        Route::get('/delPro/{id}', [AdminController::class, 'delPro'])->name('delPro');
        Route::get('formupdatePro/{id}', [AdminController::class, 'formupdatePro'])->name('formupdatePro');
        Route::post('/updatePro', [AdminController::class, 'updatePro'])->name('updatePro');
    });

    //category
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/listCate', [AdminController::class, 'listCate'])->name('listCate');
        Route::get('/formaddCate', [AdminController::class, 'formaddCate'])->name('formaddCate');
        Route::get('/formupdateCate/{id}', [AdminController::class, 'formupdateCate'])->name('formupdateCate');
        Route::post('/insertCate', [AdminController::class, 'insertCate'])->name('insertCate');
        Route::post('/updateCate', [AdminController::class, 'updateCate'])->name('updateCate');
        Route::get('/delCate/{id}', [AdminController::class, 'delCate'])->name('delCate');
    });

    //role
    Route::prefix('role')->name('role.')->group(function () {
        Route::get('listRole', [AdminController::class, 'listRole'])->name('listRole');
        Route::get('formaddRole', [AdminController::class, 'formaddRole'])->name('formaddRole');
        Route::get('formupdateRole/{id}', [AdminController::class, 'formupdateRole'])->name('formupdateRole');
        Route::post('/insertRole', [AdminController::class, 'insertRole'])->name('insertRole');
        Route::post('/updateRole', [AdminController::class, 'updateRole'])->name('updateRole');
        Route::get('/delRole/{id}', [AdminController::class, 'delRole'])->name('delRole');
    });

    //user
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('listUser', [AdminController::class, 'listUser'])->name('listUser');
        Route::get('formaddUser', [AdminController::class, 'formaddUser'])->name('formaddUser');
        Route::post('/insertUser', [AdminController::class, 'insertUser'])->name('insertUser');
        Route::get('/delUser/{id}', [AdminController::class, 'delUser'])->name('delUser');
        Route::get('formupdateUser/{id}', [AdminController::class, 'formupdateUser'])->name('formupdateUser');
        Route::post('/updateUser', [AdminController::class, 'updateUser'])->name('updateUser');
    });
});

// verifycation email

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', function () {
    return view('email-verified');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';

