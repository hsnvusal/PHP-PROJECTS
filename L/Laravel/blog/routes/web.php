<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\HomeController;
Route::group(['middleware' => ['auth']], function () {

    // Admin ile ilgili route’lar
    Route::get('/site-ayarlari', [HomeController::class, 'index']);
    Route::resource('user', UserController::class);

});

