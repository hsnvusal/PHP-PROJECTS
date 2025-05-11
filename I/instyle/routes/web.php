<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Middleware\AdminRedirectIfNotAuthenticated;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register',[RegisterController::class,'showRegisterForm'])->name('register');
Route::post('register',[RegisterController::class,'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::prefix('admin_vh')->name('admin.')->group(function () {
    Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminLoginController::class, 'login']);
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    Route::middleware([AdminRedirectIfNotAuthenticated::class])->group(function () {
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::resource('roles',RoleController::class);
        Route::resource('permissions',PermissionController::class);
        Route::resource('admins',AdminController::class);
        Route::resource('products',ProductController::class);

    });

});


Route::middleware('auth')->group(function () {
    Route::get('/cart',[CartController::class,'index'])->name('cart.index');
    Route::get('/cart/add/{product}',[CartController::class,'add'])->name('cart.add');
    Route::get('/cart/remove/{cart}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('/cart/increase/{id}',[CartController::class,'increase'])->name('cart.increase');
    Route::get('/cart/decrease/{id}',[CartController::class,'decrease'])->name('cart.decrease');

});
