<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Yazi extends Model
{
    protected $table = 'Yazilar';

    protected $guarded = [];

    public function kullanici()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function kategorisi()
    {
        return $this->belongsTo('App\Models\Kategori','kategori');
    }
}
