<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KategoriController extends Controller
{

    public function index(Request $request)
    {
        $request->flash();
        if ($request->filled('aranan')){
            $aranan = $request->aranan;
            $list = Kategori::where('kategori_adi','like',"%$aranan%")->orderByDesc('created_at')->paginate(8);
        }
        else {
            $list = Kategori::orderBy('created_at')->paginate(8);

        }
        return view('yonetim.kategori.index',compact('list'));
    }

    public function form($id = 0)
    {
        $entry = new Kategori;
        if ($id>0) {
            $entry = Kategori::find($id);
        }
        $kategoriler = Kategori::all();

        return view('yonetim.kategori.form',compact('entry','kategoriler'));
    }


    public function kaydet(Request $request, $id =0)
    {

        $data = $request->only('kategori_adi','slug','ust_id');
        if ($request->filled('slug')){
            $data['slug'] = Str::slug($request->kategori_adi);
            $request->merge(['slug'=>$data['slug']]);
        }

        $request->validate([
            'kategori_adi'=>'required',
            'slug' => ($request->original_slug)!=$request->slug ? 'unique:kategori,slug':''
        ]);


        if ($id>0) {
            $entry  = Kategori::where('id',$id)->firstOrFail();
            $entry->update($data);

        }else {
            $entry = Kategori::create($data);
        }

        return redirect()->route('yonetim.kategori.duzenle',$entry->id)->with('mesaj',($id>0?'Guncellendi':'Kaydedildi'))->with('mesaj_tur','success');
    }


    public function sil($id)
    {

        $kategori = Kategori::find($id);
        $kategori->urunler()->detach();
        $kategori->delete();
        return redirect()->route('yonetim.kategori');
    }
}
