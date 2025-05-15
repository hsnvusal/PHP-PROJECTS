<?php

namespace App\Http\Controllers;

use App\Mail\KullaniciKayit;
use App\Models\Kullanici;
use App\Models\KullaniciDetay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use function PHPUnit\Framework\returnValue;

class KullaniciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
    public  function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public function giris(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'sifre' => 'required|string|min:6',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->sifre,
            'aktif_mi'=>1
        ];

        $remember = $request->has('benihatirla');

        if (auth()->attempt($credentials, $remember)) {
            $userId = auth()->id();

            $basket = session()->get('basket', []);
            if (!empty($basket)) {
                $sebet = \App\Models\Sebet::create([
                    'kullanici_id' => $userId
                ]);

                foreach ($basket as $urun_id => $item) {
                    \App\Models\SebetUrun::create([
                        'sebet_id' => $sebet->id,
                        'urun_id' => $urun_id,
                        'adet' => $item['adet'] ?? $item['quantity'] ?? 1,
                        'fiyati' => $item['fiyati'] ?? 0,
                        'durum' => 'sebetde',
                    ]);
                }

                session()->forget('basket');
            }

            $sebet = \App\Models\Sebet::with('urunler.urun')
                ->where('kullanici_id', $userId)
                ->latest()
                ->first();

            if ($sebet && $sebet->urunler->count() > 0) {
                $sessionBasket = [];

                foreach ($sebet->urunler as $item) {
                    $sessionBasket[$item->urun_id] = [
                        'urun_adi' => $item->urun->urun_adi ?? 'Silinmiş',
                        'fiyati' => $item->fiyati,
                        'adet' => $item->adet,
                    ];
                }

                session()->put('basket', $sessionBasket);
            }

            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->withErrors([
                'email' => 'E-poçt və ya şifrə yanlışdır.'
            ]);
        }
    }



    public  function kaydol_form()
    {
        return view('kullanici.kaydol');
    }

    public  function kaydol(Request $request)
    {
        $request->validate([
            'adsoyad' => 'required|string|max:255',
            'email' => 'required|email|unique:kullanici',
            'sifre' => 'required|string|min:6|confirmed',
        ]);

        $kullanici  = Kullanici::create([
            'adsoyad' => $request->adsoyad,
            'email' => $request->email,
            'sifre'=>Hash::make($request->sifre),
            'aktivasyon_anahtari' => Str::random(60),
            'aktif_mi' => 0
        ]);
        $kullanici->detay()->save(new KullaniciDetay());

        Mail::to($request->email)->send(new KullaniciKayit($kullanici));

        Auth::login($kullanici);
        return redirect()->route('anasayfa');
    }

    public function oturumukapat(Request $request)
    {
        \auth()->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('anasayfa');
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
