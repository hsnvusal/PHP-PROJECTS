<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Middleware\EnsureUserIsActive;

Route::get('/', function () {
    return view('welcome');
    })->middleware(\App\Http\Middleware\YasKontrol::class);

Route::get('/yas-kontrol',function () {
    echo '18 YASINDAN KUCUKSUN';
});

Route::get('/mailgonder',[\App\Http\Controllers\mailController::class,'send']);


