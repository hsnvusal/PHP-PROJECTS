<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'yonetim','namespace'=>'Yonetim'],function (){
   Route::redirect('/','yonetim/oturumac');
    Route::match(['get','post'],'/oturumac',[\App\Http\Controllers\Yonetim\KullaniciController::class,'oturumac'])->name('yonetim.oturumac');
    Route::get('/oturumukapat',[\App\Http\Controllers\Yonetim\KullaniciController::class,'oturumukapat'])->name('yonetim.oturumukapat');



    Route::group(['middleware' => \App\Http\Middleware\Yonetim::class], function () {
        Route::get('/anasayfa', [\App\Http\Controllers\Yonetim\AnasayfaController::class, 'index'])
            ->name('yonetim.anasayfa');

        Route::group(['prefix'=>'kullanici'],function () {
            Route::match(['get','post'],'/',[\App\Http\Controllers\Yonetim\KullaniciController::class,'index'])->name('yonetim.kullanici');
            Route::get('/yeni',[\App\Http\Controllers\Yonetim\KullaniciController::class,'form'])->name('yonetim.kullanici.yeni');
            Route::get('/duzenle/{id}',[\App\Http\Controllers\Yonetim\KullaniciController::class,'form'])->name('yonetim.kullanici.duzenle');
            Route::post('/kaydet/{id?}',[\App\Http\Controllers\Yonetim\KullaniciController::class,'kaydet'])->name('yonetim.kullanici.kaydet');
            Route::get('/sil/{id}',[\App\Http\Controllers\Yonetim\KullaniciController::class,'sil'])->name('yonetim.kullanici.sil');
        });

        Route::group(['prefix'=>'kategori'],function () {
            Route::match(['get','post'],'/',[\App\Http\Controllers\Yonetim\KategoriController::class,'index'])->name('yonetim.kategori');
            Route::get('/yeni',[\App\Http\Controllers\Yonetim\KategoriController::class,'form'])->name('yonetim.kategori.yeni');
            Route::get('/duzenle/{id}',[\App\Http\Controllers\Yonetim\KategoriController::class,'form'])->name('yonetim.kategori.duzenle');
            Route::post('/kaydet/{id?}',[\App\Http\Controllers\Yonetim\KategoriController::class,'kaydet'])->name('yonetim.kategori.kaydet');
            Route::get('/sil/{id}',[\App\Http\Controllers\Yonetim\KategoriController::class,'sil'])->name('yonetim.kategori.sil');
        });

        Route::group(['prefix'=>'urun'],function () {
            Route::match(['get','post'],'/',[\App\Http\Controllers\Yonetim\UrunController::class,'index'])->name('yonetim.urun');
            Route::get('/yeni',[\App\Http\Controllers\Yonetim\UrunController::class,'form'])->name('yonetim.urun.yeni');
            Route::get('/duzenle/{id}',[\App\Http\Controllers\Yonetim\UrunController::class,'form'])->name('yonetim.urun.duzenle');
            Route::post('/kaydet/{id?}',[\App\Http\Controllers\Yonetim\UrunController::class,'kaydet'])->name('yonetim.urun.kaydet');
            Route::get('/sil/{id}',[\App\Http\Controllers\Yonetim\UrunController::class,'sil'])->name('yonetim.urun.sil');
        });


    });

});

Route::get('/', [\App\Http\Controllers\AnasayfaController::class,'index'])->name('anasayfa');

Route::get('/kategori/{slug_kategoriadi}',[\App\Http\Controllers\KategoriController::class,'index'])->name('kategori');
Route::get('/urun/{slug_urunadi}',[\App\Http\Controllers\UrunController::class,'index'])->name('urun');
Route::get('/ara',[\App\Http\Controllers\UrunController::class,'ara'])->name('urun_ara');
Route::post('/ara',[\App\Http\Controllers\UrunController::class,'ara'])->name('urun_ara');
Route::group(['prefix'=>'sebet'],function (){
    Route::get('/',[\App\Http\Controllers\SebetController::class,'index'])->name('sebet');
    Route::post('/ekle',[\App\Http\Controllers\SebetController::class,'ekle'])->name('sebet.ekle');
    Route::delete('/kaldir/{id}', [\App\Http\Controllers\SebetController::class, 'kaldir'])->name('sebet.kaldir');
    Route::get('/bosalt', [\App\Http\Controllers\SebetController::class, 'bosalt'])->name('sebet.bosalt');

});

Route::get('/odeme',[\App\Http\Controllers\OdemeController::class,'index'])->name('odeme');
Route::post('/odemeyap',[\App\Http\Controllers\OdemeController::class,'odemeyap'])->name('odemeyap');


Route::group(['middleware'=>'auth'],function () {
    Route::get('/siparisler',[\App\Http\Controllers\SiparisController::class,'index'])->name('siparisler');
    Route::get('/siparisler/{id}',[\App\Http\Controllers\SiparisController::class,'detay'])->name('siparis');
});


Route::group(['prefix'=>'kullanici'],function () {
    Route::get('/oturumac',[\App\Http\Controllers\KullaniciController::class,'giris_form'])->name('kullanici.oturumac');
    Route::post('/oturumac',[\App\Http\Controllers\KullaniciController::class,'giris']);
    Route::get('/kaydol',[\App\Http\Controllers\KullaniciController::class,'kaydol_form'])->name('kullanici.kaydol');
    Route::post('/kaydol',[\App\Http\Controllers\KullaniciController::class,'kaydol']);
    Route::post('/oturumukapat',[\App\Http\Controllers\KullaniciController::class,'oturumukapat'])->name('kullanici.oturumukapat');
});

Route::get('/test/mail',function () {
    $kullanici = App\Models\Kullanici::find(1);
    return new App\Mail\KullaniciKayit($kullanici);
});


use App\Http\Controllers\BasketController;







