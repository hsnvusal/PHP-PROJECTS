<?php

namespace App\Http\Controllers;

use App\Models\Ayar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class AyarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ayarlar = Ayar::find(1);
        return view('admin.ayarlar.create',compact('ayarlar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'baslik' => 'required',
            'aciklama' => 'required',
            'email' => 'required|email',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $ayar = Ayar::findOrFail($id);
        $ayar->baslik = $request->baslik;
        $ayar->aciklama = $request->aciklama;
        $ayar->email = $request->email;

        if ($request->hasFile('logo')) {
            $resim = $request->file('logo');
            $dosya_adi = 'logo-' . time() . '.' . $resim->extension();
            $hedef_klasor = 'uploads/dosyalar';
            $dosya_yolu = $hedef_klasor . '/' . $dosya_adi;
            $resim->move(public_path($hedef_klasor), $dosya_adi);
            $ayar->logo = $dosya_yolu;
        }

        if ($ayar->save()) {
            Alert::success('Uğurlu', 'Ayarlar güncəlləndi!');
        } else {
            Alert::error('Xəta', 'Yadda saxlanmadı!');
        }

        return back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
