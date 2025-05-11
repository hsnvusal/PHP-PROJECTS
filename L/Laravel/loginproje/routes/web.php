<?php

use Illuminate\Support\Facades\Route;


//Route::get('/login',function () {
//    Auth::attempt(['email'=>'vusalhesenov361@gmail.com','password'=>'vusal361'],true);
//});
//
//Route::get('/login2',function () {
//    $user = \App\Models\User::find(1);
//    Auth::login($user,1);
//});
//
//
//Route::get('/login_bilgiler',function () {
//    if (Auth::check()) {
//        if (Auth::viaRemember())
//        {
//            return "Merhaba ".Auth::user()->name . "Beni hatirlayi kullanmissin";
//        }
//        else {
//            return "Merhaba ".Auth::user()->name;
//
//        }
//    }
//    else {
//        return "Sen bir Ziyaretcisin";
//
//    }
//});
//
//Route::get('/logout',function () {
//    Auth::logout();
//});
//
//Route::get('/session',function () {
//    Session::reflash('isim');
//    return Session::all();
//});
//
//Route::get('/session_bilgi_ekle',function () {
//    Session::push('kategoriler','bilgisayar');
//});
//
//Route::get('/session_bilgi_sil',function () {
//    Session::forget('isim');
//});
//
//Route::get('/session_getir',function () {
//    return Session::get('isim');
//});
//
//Route::get('/session_komple_sil',function () {
//    Session::flush();
//});
//
//Route::get('/session_flush_bilgi_ekle',function () {
//    Session::flash('isim','vusal');
//});
//
//
//Route::get('/session_getir',function () {
//   $data = DB::table('sessions')->get();
//
//
//   return \Carbon\Carbon::createFromTimestamp($data[0]->last_activity);
//});
//
//



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=>'auth'],function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin',[App\Http\Controllers\AdminController::class, 'index']);

});

//Route::get('/',function () {
//    return \Illuminate\Support\Facades\Session::all();
//});
