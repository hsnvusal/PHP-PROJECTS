<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriler = Kategori::all();
        return view("admin.kategoriler.index",compact('kategoriler'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriler = Kategori::whereNull('ust_id')->get();
        return view('admin.kategoriler.create', compact('kategoriler'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'baslik' => 'required',
            'aciklama' => 'required',
        ]);

        $kategori = new Kategori();

        $kategori->baslik = $request->baslik;
        $kategori->aciklama = $request->aciklama;
        $kategori->slug = \Illuminate\Support\Str::slug($request->slug);
        $kategori->ust_id = $request->ust_id;
        $kategori->save();

        if ($kategori->save()) {
            Alert::success('Uğurlu', 'Kategori güncəlləndi!');
        } else {
            Alert::error('Xəta', 'Yadda saxlanmadı!');
        }

        return back();
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
        $kategori = Kategori::find($id);
        $allkategori = Kategori::all();
        return view('admin.kategoriler.edit',compact('kategori','allkategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'baslik' => 'required',
            'aciklama' => 'required',
        ]);

        $kategori = Kategori::find($id);
        $kategori->baslik = $request->baslik;
        $kategori->aciklama = $request->aciklama;
        $kategori->slug = \Illuminate\Support\Str::slug($request->slug);
        $kategori->ust_id = $request->ust_id;
        $kategori->save();

        if ($kategori->save()) {
            Alert::success('Uğurlu', 'Kategori güncəlləndi!');
        } else {
            Alert::error('Xəta', 'Yadda saxlanmadı!');
        }

        return redirect()->route('kategoriler.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);

        if ($kategori->delete()) {
            Alert::success('Uğurlu', 'Kategori Silindi!');
        } else {
            Alert::error('Xəta', 'Silinmə zamanı xəta baş verdi!');
        }

        return redirect()->route('kategoriler.index');
    }

}
