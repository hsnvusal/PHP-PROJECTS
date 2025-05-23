<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Http\Request;

class AnasayfaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriler = Kategori::whereRaw('ust_id is null')->take(8)->get();

        $urunler_slider = UrunDetay::with('urun')->where('goster_slider',1)->take(5)->get();

        $urunler_gunun_firsati = Urun::select('urun.*')
            ->join('urun_detay','urun_detay.urun_id','urun.id')
            ->where('urun_detay.goster_gunun_firsati',1)
            ->first();

        $urunler_one_cikan = UrunDetay::with('urun')->where('goster_one_cikan',1)->take(4)->get();
        $urunler_cok_satan = UrunDetay::with('urun')->where('goster_cok_satan',1)->take(4)->get();
        $urunler_indirimli = UrunDetay::with('urun')->where('goster_indirimli',1)->take(4)->get();

        return view('anasayfa',compact('kategoriler','urunler_slider','urunler_gunun_firsati','urunler_cok_satan','urunler_indirimli','urunler_one_cikan'));
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
