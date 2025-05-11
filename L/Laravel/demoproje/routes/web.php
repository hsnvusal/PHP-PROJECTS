<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});
////
////Route::get("/kategoriler/{id}",function ($id)
////{
////    return "Kategori id: " . $id;
////});
//
//Route::get("/kategoriler/{id?}",function ($id=null)
//{
//    return "Kategori id: " . $id;
//});
//
//Route::get("/urunler/{id?}/{isim?}",function ($id,$isim=null)
//{
//    return "Urun id: " . $id."Urun ismi: ".$isim;
//});
//
//Route::get("/kullanicilar/kara_liste",["as"=>"kullanicilar",function () {
//    return "kullanicilar";
//}]);

//Route::get("/bengeldim",function () {
//    return "iste ben geldim";
//});
//
//Route::get("/kategoriler/{id}",function ($id) {
//   return "Kategori id: ". $id;
//});

//Route::get("/kategoriler/{id?}",function ($id=null) {
//    return "Kategori id: ". $id;
//});

use App\Http\Controllers\Tablolar;

//Route::get('/tablolar', [Tablolar::class, 'index'])->name('tablolar');


use App\Http\Controllers\Admin\Kategoriler as AdminKategoriler;
use App\Http\Controllers\Front\Kategoriler as FrontKategoriler;
//
//Route::get('/tablolar', [Tablolar::class, 'index']);
//
//Route::group(['namespace'=>"Admin"],function () {
//    Route::get('/admin/kategoriler', [AdminKategoriler::class, 'index']);
//});
////
//Route::group(['namespace'=>"Front"],function () {
//    Route::get('/front/kategoriler', [FrontKategoriler::class, 'index']);
//});
use App\Http\Controllers\Urunler as Urunler;

//Route::get("/urunler/{id}",[Urunler::class,'index']);

//Route::post('/urunler',[Urunler::class,'store']);
//
//Route::resource('/urunler',Urunler::class);
//
//Route::get('/admin/urunler/ozel',[Urunler::class,'ozel']);
////
//Route::get("/admin/kategoriler",function (){
//    return view('admin.kategoriler');
//});

//Route::get("/urunler/ekle/{urun_isim}",function ($urun_isim) {
//   return dd(DB::insert('insert into urunler(urun_adi,seri_no) values (?,?)',[$urun_isim,123124]));
//});
//
//Route::get("/urunler/listele/{id}",function ($id) {
//   $result = DB::select('select * from urunler where id = ?',[$id]);
//   return dd($result);
//});
//
//Route::get('/urunler/guncelle/{id}/{isim}',function ($id,$isim) {
//    DB::update('update urunler set urun_adi = ? where id = ?',[$isim,$id]);
//});
//
//Route::get('/urunler/sil/{id}',function ($id) {
//   DB::delete('delete from urunler where id = ?',[$id]);
//});
//
//Route::get('/urunler/ekle',function () {
//   DB::table('urunler')->insert([
//       ["urun_adi"=>"tea","seri_no"=>1],
//       ["urun_adi"=>"cofee","seri_no"=>12],
//       ["urun_adi"=>"water","seri_no"=>123],
//   ]);
//});
//
//Route::get('/urunler/listele',function () {
//    return dd(DB::table('urunler')->get());
//});
//
//
//Route::get('/urunler/guncelle/{id}/{text}',function ($id,$text) {
//    DB::table('urunler')->where('id',$id)->update(["urun_adi" => $text]);;
//});
//
//Route::get("/urunler/sil",function () {
//    DB::table('urunler')->where('id',7)->delete();
//});


//Route::get('/urunler',function () {
//    return dd(DB::table('urunler')->where([
//        ['urun_adi',"vusal"] ,
//        ['seri_no',"1"]
//    ])->get());
//});

//
//Route::get('/urunler',function () {
//
////    $urunler = collect([1,2,3,4,5,6]);
////    return view('admin.urunler',compact('urunler'));
//
//    $collection = collect([[1,2,3],[4,5,6],[7,8,9]]);
//    $collapsed = $collection->collapse();
//    return  dd($collapsed->toJson());
//});
use App\Models\User;

//Route::get('/urunler/ekle',function () {

//    return dd(Urun::find(1)) ;
//    return Urun::where('id',1)->first();
//    return Urun::get();

//    $urun = new Urun;
//    $urun->isim = "Labtop";
//    $urun->seri_no = "222";

//    Urun::create(['isim'=>"Labtop",'seri_no'=>222]);


//});

//Route::get('/urunler/guncelle',function () {
//
//    Urun::find(1)->update(['isim'=>"Iphone 12 updated"]);
//
//});
//
//Route::get('/urunler/sil',function () {
//    Urun::find(1)->delete();
//});
use App\Models\Ozgecmis;
//
//use App\Models\Resim;
//Route::get('/user/ozgecmis',function () {
//    return User::find(1)->ozgecmis;
//});
//
//Route::get('ozgecmis/user',function () {
//    return Ozgecmis::find(1)->user;
//});
//
//
//Route::get('/user/makaleler',function () {
//   $makaleler = User::find(1)->makaleler;
//
//   foreach ($makaleler as $makale)
//   {
//       echo $makale->baslik;
//   }
//});
//
//Route::get('/makale/user',function () {
//    return \App\Models\Makale::find(1)->user;
//});
//
//Route::get('/user/urunler',function () {
//    return User::find(2)->urunler;
//});
//
//Route::get('/urun/users',function () {
//    return \App\Models\Urun::find(3)->users;
//});
//
//Route::get('/sehir/makaleler',function () {
//    return \App\Models\Sehir::find(1)->makaleler;
//});
//
//Route::get('/user/resimler',function () {
//   $resimler = User::find(1)->resimler;
//
//   foreach ($resimler as $resim)
//   {
//       echo $resim->link.'<br>';
//   }
//});
//
//Route::get('/urun/resimler',function () {
//    $resimler = \App\Models\Urun::find(2)->resimler;
//
//    foreach ($resimler as $resim)
//    {
//        echo $resim->link.'<br>';
//    }
//});
//
//Route::get('/makale/resimler',function () {
//    $resimler = \App\Models\Makale::find(1)->resimler;
//
//    foreach ($resimler as $resim)
//    {
//        echo $resim->link.'<br>';
//    }
//});
//
//Route::get('/resim',function () {
//    return \App\Models\Resim::find(1)->urunler;
//});
//

//Route::get('/user',function () {
//    $user  = User::find(1);
//
//    $makaleler = $user->makaleler()->where('baslik','like','Maka%')->get();
//
//    foreach ($makaleler as $makale) {
//        echo $makale->baslik.'<br>';
//    }
//});

//Route::get('/user',function () {
//  return User::withCount(['makaleler','urunler','resimler'])->get();
//});

//Route::resource('urunler',\App\Http\Controllers\Urunler::class);


//Route::get("/urunler",function () {
//  return \App\Models\Urun::all();
//});

Route::resource('urunler',\App\Http\Controllers\Urunler::class);

