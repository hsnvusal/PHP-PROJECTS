<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    protected  $table = 'kategori';
    protected  $guarded = [];

    public function urunler()
    {
        return $this->belongsToMany('App\Models\Urun','kategori_urun');
    }
}
