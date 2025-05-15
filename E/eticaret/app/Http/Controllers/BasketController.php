<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $basket = session()->get('basket',[]);
        return view('basket.index',compact('basket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add(Request $request)
    {
        $basket = session()->get('basket',[]);

        $id = $request->id;

        if (isset($basket[$id])){
            $basket[$id]['adet']+=1;
        }
        else {
            $basket[$id] = [
                "urun_adi" => $request->urun_adi,
                "fiyati" => $request->fiyati,
                "adet" => 1,
            ];
        }
        session()->put('basket',$basket);
        return redirect()->back()->with('success', 'Məhsul səbətə əlavə edildi!');
    }

    public function increase(Request $request)
    {
        $basket = session()->get('basket', []);
        $id = $request->id;

        if (isset($basket[$id])) {
            $basket[$id]['adet'] += 1;
            session()->put('basket', $basket);
        }

        return redirect()->route('basket');
    }

    public function decrease(Request $request)
    {
        $basket = session()->get('basket', []);
        $id = $request->id;

        if (isset($basket[$id])) {
            if ($basket[$id]['adet'] > 1) {
                $basket[$id]['adet'] -= 1;
            } else {
                unset($basket[$id]); // 1-dən azsa səbətdən sil
            }
            session()->put('basket', $basket);
        }

        return redirect()->route('basket');
    }



    public function remove(Request $request)
    {
        $basket = session()->get('basket', []);
        unset($basket[$request->id]);
        session()->put('basket', $basket);

        return redirect()->route('basket');
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


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
