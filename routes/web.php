<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\NewPasswordController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PhieuMuonController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\User;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/home', [HomeController::class, 'home'])->name('home.page');

Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/products/{id}', [ProductController::class, 'productsdetail'])->name('products.detail');
Route::get('/category/{id}/products', [ProductController::class, 'productsByCategory'])->name('category.products');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::get('create-phieu-muon', [PhieuMuonController::class, 'showCreatePhieuMuonForm'])->name('create.phieu.muon.form');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
});




Route::get('/admin', function () {
    if (Auth::check() && Auth::user()->role_id == 1) {
        return app(App\Http\Controllers\AdminController::class)->index();
    }
    return redirect('/login')->with('error', 'Vui lòng đăng nhập tài khoản admin.');
})->name('admin');


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
        Route::get('/listCate', [CategoryController::class, 'listCate'])->name('listCate');
        Route::get('/formaddCate', [CategoryController::class, 'formaddCate'])->name('formaddCate');
        Route::get('/formupdateCate/{id}', [CategoryController::class, 'formupdateCate'])->name('formupdateCate');
        Route::post('/insertCate', [CategoryController::class, 'insertCate'])->name('insertCate');
        Route::post('/updateCate', [CategoryController::class, 'updateCate'])->name('updateCate');
        Route::get('/delCate/{id}', [CategoryController::class, 'delCate'])->name('delCate');
    });

    //role
    Route::prefix('role')->name('role.')->group(function () {
        Route::get('listRole', [RoleController::class, 'listRole'])->name('listRole');
        Route::get('formaddRole', [RoleController::class, 'formaddRole'])->name('formaddRole');
        Route::get('formupdateRole/{id}', [RoleController::class, 'formupdateRole'])->name('formupdateRole');
        Route::post('/insertRole', [RoleController::class, 'insertRole'])->name('insertRole');
        Route::post('/updateRole', [RoleController::class, 'updateRole'])->name('updateRole');
        Route::get('/delRole/{id}', [RoleController::class, 'delRole'])->name('delRole');
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

    //phiếu mượn
    Route::prefix('phieumuon')->name('phieumuon.')->group(function () {
        Route::get('listPhieuMuon', [PhieuMuonController::class, 'listPhieuMuon'])->name('listPhieuMuon');
        Route::get('formaddPhieuMuon', [PhieuMuonController::class, 'formaddPhieuMuon'])->name('formaddPhieuMuon');
        Route::post('/insertPhieuMuon', [PhieuMuonController::class, 'insertPhieuMuon'])->name('insertPhieuMuon');
        Route::get('/delPhieuMuon/{id}', [PhieuMuonController::class, 'delPhieuMuon'])->name('delPhieuMuon');
        Route::get('formupdatePhieuMuon/{id}', [PhieuMuonController::class, 'formupdatePhieuMuon'])->name('formupdatePhieuMuon');
        Route::post('/updatePhieuMuon', [PhieuMuonController::class, 'updatePhieuMuon'])->name('updatePhieuMuon');
        Route::post('/updateStatus/{id}', [PhieuMuonController::class, 'updateStatus'])->name('updateStatus');
        // web.php
        Route::delete('/phieumuon/bulk-delete', [PhieuMuonController::class, 'bulkDelete'])->name('bulkDelete');



    });
    //comment
    Route::prefix('comment')->name('comment.')->group(function () {
        Route::get('listComment', [AdminController::class, 'listComment'])->name('listComment');
        Route::delete('/delComment/{id}', [AdminController::class, 'delComment'])->name('delComment');
    });
});

Route::get('/admin/phieumuon/details/{id}', [PhieuMuonController::class, 'getDetails'])->name('admin.phieumuon.getDetails');

//comment
Route::post('/comments/load-more', [CommentController::class, 'loadMoreComments'])->name('comments.loadMore');


// verifycation email

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile/request-delete', [ProfileController::class, 'requestDelete'])->name('profile.requestDelete');

    Route::post('/admin/users/{user}/approve-delete', [AdminController::class, 'approveDelete'])->name('admin.approveDelete');


    Route::get('/change-password', [ProfileController::class, 'change_password'])->name('auth.change-password');
    Route::post('/change-password', [ProfileController::class, 'check_change_password']);

    //Route comment
    Route::post('/comments/send', [CommentController::class, 'send'])->name('comments.send');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

    Route::post('/comments/reply', [CommentController::class, 'reply'])->name('comments.reply');


});




Route::get('/dashboard', function () {
    return view('email-verified');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';

