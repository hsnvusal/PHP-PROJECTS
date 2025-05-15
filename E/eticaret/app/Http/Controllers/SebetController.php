<?php

namespace App\Http\Controllers;

use App\Models\Sebet;
use App\Models\SebetUrun;
use App\Models\Urun;
use Illuminate\Http\Request;

class SebetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sebet');
    }

    public function ekle(Request $request)
    {
        $urun = Urun::findOrFail($request->id);

        $sebet = session()->get('sebet',[]);

        if (isset($sebet[$urun->id])) {
            $sebet[$urun->id]['adet']++;
        } else {
            $sebet[$urun->id] = [
                'urun_adi' => $urun->urun_adi,
                'fiyati' => $urun->fiyati,
                'adet' => 1,
                'slug'=>$urun->slug??null,
            ];
        }

        session()->put('sebet', $sebet);


        if (auth()->check()) {
            $aktif_sebet_id = session('aktif_sebet_id');

            if (!isset($aktif_sebet_id)) {
                $aktif_sebet = Sebet::create([
                    'kullanici_id' => auth()->id(),
                ]);
                $aktif_sebet_id = $aktif_sebet->id;
                session()->put('aktif_sebet_id', $aktif_sebet_id);
                session()->save();
            }

            // update or create sepet_urun
            SebetUrun::updateOrCreate(
                [
                    'sebet_id' => $aktif_sebet_id,
                    'urun_id' => $urun->id,
                ],
                [
                    'adet' => $sebet[$urun->id]['adet'],
                    'fiyati' => $urun->fiyati,
                    'durum' => 'Beklemede',
                ]
            );
        }



        return redirect()->route('sebet')
            ->with('mesaj_tur', 'success')
            ->with('mesaj', 'Ürün sebete eklendi.');
    }

    public function kaldir($id)
    {
        $sebet = session()->get('sebet', []);
        if (isset($sebet[$id])) {
            unset($sebet[$id]);
            session()->put('sebet', $sebet);
        }

        if (auth()->check()) {
            $aktif_sebet_id = session('aktif_sebet_id');
            if ($aktif_sebet_id) {
                SebetUrun::where('sebet_id', $aktif_sebet_id)
                    ->where('urun_id', $id)
                    ->delete();
            }
        }

        return redirect()->route('sebet')->with('mesaj', 'Ürün sebetten kaldırıldı.');
    }

    public function bosalt()
    {
        if (auth()->check()) {
            $aktif_sebet_id = session('aktif_sebet_id');
            SebetUrun::where('sebet_id',$aktif_sebet_id)->delete();
        }
        session()->forget('sebet');

        return redirect()->route('sebet')->with('mesaj', 'Sepet boşaltıldı.');
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
