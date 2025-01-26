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

Route::resource('/products', ProductController::class)->except(['create','store','edit','update','destroy','search']);

Route::middleware([AdminMiddleware::class])->get('/admin', [AdminController::class, 'manageProducts'])->name('admin');

Route::middleware('auth')->group(function (){
    Route::resource('/products', ProductController::class)->except(['index', 'show']);
    Route::get('/products.search', [ProductController::class, 'search'])->name('searchProducts');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function (){
    Route::get('/signup', [AuthController::class, 'signupForm'])->name('signup');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});






