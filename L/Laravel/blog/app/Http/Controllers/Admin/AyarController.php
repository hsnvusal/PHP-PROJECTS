<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ayar;

class AyarController extends Controller
{
    //

    public function index()
    {
        $ayarlar = Ayar::all();
        return view("admin.site_ayarlari",compact("ayarlar"));
    }
}
