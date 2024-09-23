<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductCategoryController;









Route::get('/dashboard/dashboard', [AuthController::class, 'dashboard'])->middleware('check_admin')->name('dashboard');
Route::get('/register', [AuthController::class, 'index'])->name('user.register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login_form'])->name('user.login');
Route::get('/logout',[AuthController::class,'logout'])->name('user.logout');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/show', [AuthController::class, 'show'])->middleware('check_admin')->name('user.show');
Route::get('/user/delete/{id}',[AuthController::class,'destroy'])->middleware('check_admin')->name('user.delete');
Route::get('/user/edit/{id}',[AuthController::class,'edit'])->middleware('check_admin')->name('user.edit');
Route::post('/user/update/{id}',[AuthController::class,'update'])->middleware('check_admin')->name('user.update');



Route::get('/', [WebsiteController::class, 'index'])->name('website');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/cart', [WebsiteController::class, 'cart'])->name('cart');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/product/details/{id}', [WebsiteController::class, 'productdetails'])->name('product-detail');
// Route::get('/blog/details/{id}', [WebsiteController::class, 'blogdetails'])->name('blog-details');
Route::get('/shop/category', [WebsiteController::class, 'shopcategory'])->name('shop-category');
Route::get('/index2', [WebsiteController::class, 'index2'])->name('index2');
Route::get('/index3', [WebsiteController::class, 'index3'])->name('index3');
Route::get('/index4', [WebsiteController::class, 'index4'])->name('index4');
Route::get('/index5', [WebsiteController::class, 'index5'])->name('index5');



Route::prefix('contact')->controller(ContactController::class)->name('contact.')->group(function ()
{
    
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/update/{id}','update')->name('update');
    Route::get('/cancel/{id}','canceled')->name('cancel');
    Route::get('/delete/{id}','destroy')->name('delete');
});


Route::prefix('blog')->controller(BlogController::class)->name('blog.')->group(function ()
{
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/delete/{id}','destroy')->name('delete');
});



Route::prefix('category')->name('category.')->group(function () {
    Route::get('/add', [CategoryController::class, 'index'])->name('add');
    Route::post('/add', [CategoryController::class, 'store']);
    Route::get('/show', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
});

Route::prefix('product/category')->name('product.category.')->group(function () {
    Route::get('/add', [ProductCategoryController::class, 'index'])->name('add');
    Route::post('/add', [ProductCategoryController::class, 'store']);
    Route::get('/show', [ProductCategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [ProductCategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ProductCategoryController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [ProductCategoryController::class, 'destroy'])->name('delete');
});

Route::prefix('product')->controller(ProductController::class)->name('product.')->group(function () {
    Route::get('/add','index')->name('add');
    Route::post('/add','store');
    Route::get('/show','show')->name('show');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');
    Route::get('/delete/{id}','destroy')->name('delete');
    Route::get('/permdeleted/{id}','permdeleted')->name('permdeleted');
    Route::get('/restore/{id}','restore')->name('restore');
    Route::get('/trashshow','trashshow')->name('trashshow');
    
    
});







// Route::get('/', [HomeController::class, 'index'])->name('home');



// // Login routes
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('login', [LoginController::class, 'login']);
// Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// // Register routes
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);

// // Email Verification routes
// Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
// Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// // Password Reset routes
// Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
// Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// // Password Confirmation route
// Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
// Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

// Auth::routes();
