<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    //

   protected $table = "urunler";

//   protected $fillable = [
//     'isim',
//     'seri_no'
//   ];

    protected $visible = ['seri_no'];

    protected $fillable = [
     'isim',
     'seri_no'
   ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function resimler()
    {
        return $this->morphToMany('App\Models\Resim','imageable');
    }

//    public function getIsimAttribute($value)
//    {
//        return strtoupper($value);
//    }
//
//    public function setIsimAttribute($value)
//    {
//        $this->attributes['isim'] = strtolower($value);
//    }
//
//    public function getUrunSeriNoAttribute()
//    {
//        return $this->isim." - ".$this->seri_no;
//
//    }
//
//    protected $appends = ['urun_seri_no'];
}
