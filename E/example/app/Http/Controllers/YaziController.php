<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Yazi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class YaziController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yazilar = Yazi::all();
        return view('admin.yazilar.index',compact('yazilar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriler = Kategori::all();
        return view('admin.yazilar.create',compact('kategoriler'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'baslik' => 'required',
            'icerik' => 'required',
            'kategori'=>'required'
        ]);

        $yazi = new Yazi();

        $yazi->baslik = $request->baslik;
        $yazi->icerik = $request->icerik;
        $yazi->user_id = 1;
        $yazi->kategori = $request->kategori;

        if ($request->hasFile('resim')) {
            $resim = $request->file('resim');
            $dosya_adi =  time() . '.' . $resim->extension();
            $hedef_klasor = 'uploads/dosyalar';
            $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
            $resim->move(public_path($hedef_klasor), $dosya_adi);
            $yazi->resim = $dosya_yolu;
        }

        if ($yazi->save()) {
            Alert::success('Uğurlu', 'Yazi oldu!');
        } else {
            Alert::error('Xəta', 'Yadda saxlanmadı!');
        }

        return back();


    }

    /**
     * Display the specified resource.
     */
    public function show(Yazi $yazi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $yazi = Yazi::findOrFail($id);
        $kategoriler = Kategori::all();

        return view('admin.yazilar.edit',compact('yazi','kategoriler'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'baslik' => 'required',
            'icerik' => 'required',
            'kategori'=>'required'
        ]);

        $yazi = Yazi::find($id);

        $yazi->baslik = $request->baslik;
        $yazi->icerik = $request->icerik;
        $yazi->user_id = 1;
        $yazi->kategori = $request->kategori;

        if ($request->hasFile('resim')) {
            $resim = $request->file('resim');
            $dosya_adi =  time() . '.' . $resim->extension();
            $hedef_klasor = 'uploads/dosyalar';
            $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
            $resim->move(public_path($hedef_klasor), $dosya_adi);
            $yazi->resim = $dosya_yolu;
        }

        if ($yazi->save()) {
            Alert::success('Uğurlu', 'Yazi guncellendi!');
        } else {
            Alert::error('Xəta', 'Yadda saxlanmadı!');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $yazi = Yazi::findOrFail($id);

        if ($yazi->delete()) {
            Alert::success('Uğurlu', 'Yazi Silindi!');
        } else {
            Alert::error('Xəta', 'Silinmə zamanı xəta baş verdi!');
        }

        return redirect()->route('yazilar.index');
    }
}
