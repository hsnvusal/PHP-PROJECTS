<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Makale extends Model
{
    //
    protected $table = "makaleler";
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function resimler()
    {
        return $this->morphMany('App\Models\Resim','imageable');
    }
}
