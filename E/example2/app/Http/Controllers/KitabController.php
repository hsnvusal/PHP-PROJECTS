<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kitab.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $isim = $request->isim;
//        dd($isim);

////        dd($request->except('_token'));
//            $request->validate([
//                'isim'=>'required'
//            ]);

//        $uri = $request->path();
//        echo $uri;

//        if ($request->has('yazarid'))
//        {
//            echo "var";
//        }
//        else {
//            echo "Yok";
//        }


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
