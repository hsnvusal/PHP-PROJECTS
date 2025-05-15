<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SebetUrun extends Model
{
    use SoftDeletes;
    protected  $table = 'sebet_urun';

    protected  $guarded = [];

    public function urun()
    {
        return $this->belongsTo(\App\Models\Urun::class, 'urun_id');
    }

}
