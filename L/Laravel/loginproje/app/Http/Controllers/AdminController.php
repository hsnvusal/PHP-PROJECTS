<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('admin_mi');
    }

    public function index()
    {
        echo "Burasi Admin Sayfasi";
    }
}
