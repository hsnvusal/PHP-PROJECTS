<?php

namespace App\Http\Controllers;

use App\Models\Siparis;
use Illuminate\Http\Request;

class OdemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->check()) {
            return redirect()->route('kullanici.oturumac')
                ->with('mesaj_tur', 'info')
                ->with('mesaj', 'Ödeme işlemi için giriş yapmalısınız.');
        }
        else if (count(session('sebet', [])) == 0) {
            return redirect()->route('anasayfa')
                ->with('mesaj_tur', 'info')
                ->with('mesaj', 'Sepetiniz boş, ödeme işlemi yapılamaz.');
        }

        $kullanici_detay = auth()->user()->detay;

        return view('odeme',compact('kullanici_detay'));

    }


    public function odemeyap(Request $request)
    {
        $sebet = session('sebet', []);
        $toplamTutar = 0;
        $aktif_sebet_id = session('aktif_sebet_id');
        foreach ($sebet as $urun) {
            $toplamTutar += $urun['adet'] * $urun['fiyati'];
        }
        $siparis = $request->all();
        $siparis['sebet_id'] = $aktif_sebet_id;
        $siparis['banka'] = 'Kapital Bank';
        $siparis['taksit_sayisi']= 1;
        $siparis['durum'] = 'Siparisiniz Alindi';
        $siparis['siparis_tutari'] = $toplamTutar;

        Siparis::create($siparis);
        session()->forget('sebet');
        session()->forget('aktif_sebet_id');

        return redirect()->route('siparisler')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ödemeniz başarılı bir şekilde gerçekleştirildi.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
