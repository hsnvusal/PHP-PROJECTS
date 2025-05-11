<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\front\indexController::class,'index'])->name('index');
Route::get('/kitab/detay/{selflink}',[\App\Http\Controllers\front\kitab\indexController::class,'index'])->name('kitab.detay');
Route::get('/basket/add/{id}',[\App\Http\Controllers\front\basket\indexController::class,'add'])->name('basket.add');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group(['namespace'=>'admin','prefix'=>'admin','as'=>'admin.'],function () {
    Route::get('/',[\App\Http\Controllers\admin\indexController::class,'index'])->name('index');

    Route::group(['namespace'=>'yayinevi','prefix'=>'yayinevi','as'=>'yayinevi.'],function () {
        Route::get('/',[\App\Http\Controllers\admin\yayinevi\indexController::class,'index'])->name('index');
        Route::get('/create',[\App\Http\Controllers\admin\yayinevi\indexController::class,'create'])->name('create');
        Route::post('/create',[\App\Http\Controllers\admin\yayinevi\indexController::class,'store'])->name('create.post');
        Route::get('/edit/{id}',[\App\Http\Controllers\admin\yayinevi\indexController::class,'edit'])->name('edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\admin\yayinevi\indexController::class,'update'])->name('edit.post');
        Route::get('/delete/{id}',[\App\Http\Controllers\admin\yayinevi\indexController::class,'delete'])->name('delete');
    });
    Route::group(['namespace'=>'yazar','prefix'=>'yazar','as'=>'yazar.'],function () {
        Route::get('/',[\App\Http\Controllers\admin\yazar\indexController::class,'index'])->name('index');
        Route::get('/create',[\App\Http\Controllers\admin\yazar\indexController::class,'create'])->name('create');
        Route::post('/create',[\App\Http\Controllers\admin\yazar\indexController::class,'store'])->name('create.post');
        Route::get('/edit/{id}',[\App\Http\Controllers\admin\yazar\indexController::class,'edit'])->name('edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\admin\yazar\indexController::class,'update'])->name('edit.post');
        Route::get('/delete/{id}',[\App\Http\Controllers\admin\yazar\indexController::class,'delete'])->name('delete');
    });
    Route::group(['namespace'=>'kitab','prefix'=>'kitab','as'=>'kitab.'],function () {
        Route::get('/',[\App\Http\Controllers\admin\kitab\indexController::class,'index'])->name('index');
        Route::get('/create',[\App\Http\Controllers\admin\kitab\indexController::class,'create'])->name('create');
        Route::post('/create',[\App\Http\Controllers\admin\kitab\indexController::class,'store'])->name('create.post');
        Route::get('/edit/{id}',[\App\Http\Controllers\admin\kitab\indexController::class,'edit'])->name('edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\admin\kitab\indexController::class,'update'])->name('edit.post');
        Route::get('/delete/{id}',[\App\Http\Controllers\admin\kitab\indexController::class,'delete'])->name('delete');
    });
    Route::group(['namespace'=>'kategori','prefix'=>'kategori','as'=>'kategori.'],function () {
        Route::get('/',[\App\Http\Controllers\admin\kategori\indexController::class,'index'])->name('index');
        Route::get('/create',[\App\Http\Controllers\admin\kategori\indexController::class,'create'])->name('create');
        Route::post('/create',[\App\Http\Controllers\admin\kategori\indexController::class,'store'])->name('create.post');
        Route::get('/edit/{id}',[\App\Http\Controllers\admin\kategori\indexController::class,'edit'])->name('edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\admin\kategori\indexController::class,'update'])->name('edit.post');
        Route::get('/delete/{id}',[\App\Http\Controllers\admin\kategori\indexController::class,'delete'])->name('delete');
    });
    Route::group(['namespace'=>'slider','prefix'=>'slider','as'=>'slider.'],function () {
        Route::get('/',[\App\Http\Controllers\admin\slider\indexController::class,'index'])->name('index');
        Route::get('/create',[\App\Http\Controllers\admin\slider\indexController::class,'create'])->name('create');
        Route::post('/create',[\App\Http\Controllers\admin\slider\indexController::class,'store'])->name('create.post');
        Route::get('/edit/{id}',[\App\Http\Controllers\admin\slider\indexController::class,'edit'])->name('edit');
        Route::post('/edit/{id}',[\App\Http\Controllers\admin\slider\indexController::class,'update'])->name('edit.post');
        Route::get('/delete/{id}',[\App\Http\Controllers\admin\slider\indexController::class,'delete'])->name('delete');
    });
});
