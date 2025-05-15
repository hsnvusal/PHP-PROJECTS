<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sebet extends Model
{
    use SoftDeletes;
    protected  $table = 'sebet';

    protected $guarded = [];

    public function siparis()
    {
        return $this->hasOne('App\Models\Siparis');
    }

    public function urunler()
    {
        return $this->hasMany(\App\Models\SebetUrun::class, 'sebet_id');
    }

}
