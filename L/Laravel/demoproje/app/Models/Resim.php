<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resim extends Model
{
    //

    protected $table = "resimler";

    public function users()
    {
        return $this->morphedByMany('App\Models\User','imageable');
    }

    public function urunler()
    {
        return $this->morphedByMany('App\Models\Urun','imageable');
    }
}
