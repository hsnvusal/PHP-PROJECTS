<?php

namespace App\Http\Controllers\admin\kullanici;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function ekle()
    {
        echo '<a href="' . route('index') . '">AnaSayfa</a>';
    }
}
