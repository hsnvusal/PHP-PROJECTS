<?php

namespace App\Http\Controllers\front\basket;

use App\Helper\sepetHelper;
use App\Http\Controllers\Controller;
use App\Models\Kitablar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class indexController extends Controller
{
    public function add($id)
    {
        $c = Kitablar::where('id','=',$id)->count();
        if ($c!=0)
        {
            $w = Kitablar::where('id','=',$id)->get();
            sepetHelper::add($id,$w[0]['fiyat']);
            return redirect()->back()->with('status','Baskete Elave Oldu');
        }
        else
        {
            return redirect()->route('index');
        }
    }
}
