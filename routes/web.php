<?php

use App\http\Controllers\ProductController;
use App\http\Controllers\AuthController;
use App\http\Controllers\AdminController;
use App\http\Middleware\AdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function(){
    return view('auth.authLogin');
});

Route::middleware([AdminMiddleware::class])->get('/admin', [AdminController::class, 'manageProducts'])->name('admin');

// Public access to index and show
Route::resource('/products', ProductController::class); 

// Authenticated routes
Route::middleware('auth')->group(function () {
    // This will enable `create`, `store`, `edit`, `update`, `destroy` for authenticated users
    
    Route::get('/products.search', [ProductController::class, 'search'])->name('searchProducts');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function (){
    Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('login/google/callback', [AuthController::class, 'handleGoogleCallback']);
    Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});






