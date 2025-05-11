<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenemeController extends Controller
{
    public  function index($name=null)
    {
        echo $name;
//        echo 'Burasi deneme sayfasinin index bolumu';
    }

    public function create()
    {
        echo 'Burasi Create Bolumu';
    }
}
