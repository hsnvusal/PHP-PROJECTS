<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class KullaniciController extends Controller
{
    public function oturumac(Request $request)
    {
        if ($request->isMethod('POST')) {
            $request->validate([
                'email' => 'required|email',
                'sifre'=>'required'
            ]);
            $data = [
                'email'=>$request->email,
                'password'=>$request->sifre,
                'yonetici_mi'=>1,
                'aktif_mi'=>1,

            ];
            if (Auth::guard('yonetim')->attempt($data,$request->has('benihatirla'))) {
                return  redirect()->route('yonetim.anasayfa');
            }
            else {
                return back()->withInput()->withErrors(['email'=>'Giris Hatali!']);
            }
        }
        return view('yonetim.oturumac');
    }
    public function oturumukapat(Request $request)
    {
        Auth::guard('yonetim')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('yonetim.oturumac');
    }



    public function index(Request $request)
    {
        $request->flash();
        if ($request->filled('aranan')){
            $aranan = $request->aranan;
            $list = Kullanici::where('adsoyad','like',"%$aranan%")->orWhere('email','like',"%$aranan%")->orderByDesc('created_at')->paginate(8);
        }
        else {
            $list = Kullanici::orderBy('created_at')->paginate(8);

        }
        return view('yonetim.kullanici.index',compact('list'));
    }

    public function form($id = 0)
    {
        $entry = new Kullanici;
          if ($id>0) {
              $entry = Kullanici::find($id);
          }

          return view('yonetim.kullanici.form',compact('entry'));
    }


    public function kaydet(Request $request, $id =0)
    {
        $request->validate([
            'adsoyad'=>'required',
            'email'=>'required|email'
        ]);
        $data = $request->only('adsoyad','email');
        if ($request->filled('sifre'))
        {
            $data['sifre'] = Hash::make($request->sifre);
        }
        $data['aktif_mi'] = $request->has('aktif_mi') ?1 :0;
        $data['yonetici_mi'] = $request->has('yonetici_mi') ?1 :0;

        if ($id>0) {
            $entry  = Kullanici::where('id',$id)->firstOrFail();
            $entry->update($data);

        }else {
            $entry = Kullanici::create($data);
        }

        KullaniciDetay::updateOrCreate(
            ['kullanici_id'=>$entry->id],
            [
                'adres'=>$request->adres,
                'telefon'=>$request->telefon
            ]
        );

        return redirect()->route('yonetim.kullanici.duzenle',$entry->id)->with('mesaj',($id>0?'Guncellendi':'Kaydedildi'))->with('mesaj_tur','success');
    }


    public function sil($id)
    {
        Kullanici::destroy($id);
        return redirect()->route('yonetim.kullanici');
    }

}
