<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = ['name'=>'vusal','surname'=>'hasanov','info'=>['age'=>'20','job'=>'PHP DEVELOPER']];
        return view('index',['name'=>'vusal','surname'=>'hasanov'],$data);

    }
}
