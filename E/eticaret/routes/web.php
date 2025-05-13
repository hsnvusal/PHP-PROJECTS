<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\AnasayfaController::class,'index'])->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}',[\App\Http\Controllers\KategoriController::class,'index'])->name('kategori');
Route::get('/urun/{slug_urunadi}',[\App\Http\Controllers\UrunController::class,'index'])->name('urun');
Route::get('/sebet',[\App\Http\Controllers\SebetController::class,'index'])->name('sebet');
Route::get('/odeme',[\App\Http\Controllers\OdemeController::class,'index'])->name('odeme');
Route::get('/siparisler',[\App\Http\Controllers\SiparisController::class,'index'])->name('siparisler');
Route::get('/siparisler/{id}',[\App\Http\Controllers\SiparisController::class,'detay'])->name('siparis');

Route::group(['prefix'=>'kullanici'],function () {
    Route::get('/oturumac',[\App\Http\Controllers\KullaniciController::class,'giris_form'])->name('kullanici.oturumac');
    Route::get('/kaydol',[\App\Http\Controllers\KullaniciController::class,'kaydol_form'])->name('kullanici.kaydol');
});





