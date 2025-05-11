<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ozgecmis extends Model
{
    //

    protected $table = "ozgecmisler";

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
