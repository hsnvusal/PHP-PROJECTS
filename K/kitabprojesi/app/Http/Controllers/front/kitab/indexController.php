<?php

namespace App\Http\Controllers\front\kitab;

use App\Http\Controllers\Controller;
use App\Models\Kitablar;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($selflink)
    {
        $c = Kitablar::where('selflink','=',$selflink)->count();
        if ($c!=0)
        {
            $w = Kitablar::where('selflink','=',$selflink)->get();
            return view('front.kitab.index',['data'=>$w]);

        }
        else
        {
            return redirect('/');
        }
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
