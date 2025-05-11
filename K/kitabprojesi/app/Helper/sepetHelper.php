<?php

namespace App\Helper;

use Illuminate\Support\Facades\Session;

class sepetHelper
{
    static function  add($id,$fiyat)
    {
        $sepet = Session::get('basket');
        $array = [
            'id'=>$id,
            'fiyat'=>$fiyat
        ];
        Session::put('basket'.rand(1,900),$array);
    }
    static function allList()
    {
        $x = Session::get('basket');
        return $x;
    }
    static function totalPrice()
    {
        $data = self::allList();
        return collect($data)->sum('fiyat');
     }
}
