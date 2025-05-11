<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user',[\App\Http\Controllers\UserConroller::class,'index']);
//
//Route::match(['get','post'],'/users',function () {
//   return "User Listesi";
//});

//Route::any('/user',function (Request $request) {
//    dd($request);
//});
//
//Route::middleware([\App\Http\Middleware\Welcome::class])->group(function () {
//    Route::get('/users',function () {
//        return 'Hello world';
//    });
//});

//Route::get('/',function () {
//    echo '<form method="post"><button>Ekle</button><form/> ';
//});
//
//Route::post('/',function () {
//    dd('post edildi');
//});


//Route::get('/{name}',[\App\Http\Controllers\UserConroller::class,'index']);


//Route::get('/laravel',[\App\Http\Controllers\AnasayfaController::class,'index']);
//
//Route::post('/post',[\App\Http\Controllers\IletisimController::class,'iletisim'])->name('iletisim.gonder');

//Route::get('/iletisim',[\App\Http\Controllers\IletisimController::class,'index']);


//Route::resource('/iletisim',\App\Http\Controllers\IletisimController::class);


Route::group(['prefix'=>'yonetim'],function (){
   Route::get('/',[\App\Http\Controllers\YonetimController::class,'index'])->name('yonetim.index');
    Route::resource('ayarlar',\App\Http\Controllers\AyarController::class);
    Route::resource('kategoriler',\App\Http\Controllers\KategoriController::class);
    Route::resource('yazilar',\App\Http\Controllers\YaziController::class);
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth:admin')->name('dashboard');

