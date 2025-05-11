<?php

namespace App\Http\Controllers;

use App\Models\Urun;
use Illuminate\Http\Request;

class Urunler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
//        $urunler =  Urun::all();
//
//        foreach ($urunler as $urun)
//        {
//            echo  $urun->urun_seri_no."<br>";
//        }
//        $urun  = [
//          "isim"=>"SABIT DISK",
//            "seri_no"=>321
//        ];
//        Urun::create($urun);

        $urunler = Urun::all();

        return view('urunler.index',compact('urunler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('urunler.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Urun::create($request->all());

        return redirect('/urunler');
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

        $urun = Urun::find($id);

        return view('urunler.edit',compact('urun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        Urun::find($id)->update($request->all());

        return redirect('/urunler');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Urun::find($id)->delete();
        return redirect()->back();
    }

    public function ozel()
    {
        $urunler = ['Iphone','Samsung','HTC','Xiaomi'];
        return view("admin/urunler",compact('urunler'));
//        return view("admin/urunler",compact('id','isim','soyisim'));
    }
}
