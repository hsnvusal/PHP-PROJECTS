<?php

namespace App\Http\Controllers\Home;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $products = Product::where('is_active',true)->get();
        return view('home.home',compact('products'));
    }
}
