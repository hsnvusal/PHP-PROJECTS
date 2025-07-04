<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UrunController extends Controller
{

    public function index(Request $request)
    {
        $request->flash();
        if ($request->filled('aranan')){
            $aranan = $request->aranan;
            $list = Urun::where('urun_adi','like',"%$aranan%")
                ->orWhere('aciklama','like',"%$aranan%")
                ->orderByDesc('id')
                ->paginate(8);
        }
        else {
            $list = Urun::orderBy('id')->paginate(8);

        }
        return view('yonetim.urun.index',compact('list'));
    }

    public function form($id = 0)
    {
        $entry = new Urun;
        $urun_kategorileri =[];
        if ($id>0) {
            $entry = Urun::find($id);
            $urun_kategorileri = $entry->kategoriler()->pluck('kategori_id')->all();
        }
        $kategoriler = Kategori::all();

        return view('yonetim.urun.form',compact('entry','kategoriler','urun_kategorileri'));
    }


    public function kaydet(Request $request, $id =0)
    {
        $data = $request->only('urun_adi','slug','aciklama','fiyati');
        if ($request->filled('slug')){
            $data['slug'] = Str::slug($request->urun_adi);
            $request->merge(['slug'=>$data['slug']]);
        }

        $request->validate([
            'urun_adi'=>'required',
            'fiyati' => 'required',
            'slug' => ($request->original_slug)!=$request->slug ? 'unique:urun,slug':''
        ]);
        $data_detay = [
            'goster_slider' => $request->has('goster_slider'),
            'goster_gunun_firsati' => $request->has('goster_gunun_firsati'),
            'goster_one_cikan' => $request->has('goster_one_cikan'),
            'goster_cok_satan' => $request->has('goster_cok_satan'),
            'goster_indirimli' => $request->has('goster_indirimli'),
        ];
        $kategoriler = $request->kategoriler;
        if ($id>0) {
            $entry  = Urun::where('id',$id)->firstOrFail();
            $entry->update($data);
            $entry->kategoriler()->sync($kategoriler);
            if (!empty($data_detay)) {
                $entry->detay()->update($data_detay);
            }

        } else {
            $entry = Urun::create($data);
            $entry->detay()->create($data_detay);
            $entry->kategoriler()->attach($kategoriler);
        }

        if ($request->hasFile('urun_resmi'))
        {
            $request->validate([
                'urun_resmi'=>'image|mimes:jpg,png,jpeg,gif',
            ]);
            $urun_resmi = $request->file('urun_resmi');
            $urun_resmi = $request->urun_resmi;
            $dosyaadi = $entry->id . '-' . time().'.' .$urun_resmi->extension();
            if ($urun_resmi->isValid())
            {
                $urun_resmi->move('uploads/urunler',$dosyaadi);

                UrunDetay::updateOrCreate(
                    ['urun_id'=> $entry->id],
                    ['urun_resmi'=> $dosyaadi],

                );
            }
        }


        return redirect()->route('yonetim.urun.duzenle',$entry->id)->with('mesaj',($id>0?'Guncellendi':'Kaydedildi'))->with('mesaj_tur','success');
    }


    public function sil($id)
    {
        $urun = Urun::find($id);
        $urun->kategoriler()->detach();
        $urun->detay()->delete();
        $urun->delete();
        return redirect()->route('yonetim.urun');
    }
}
