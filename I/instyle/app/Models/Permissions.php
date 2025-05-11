<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{

    protected  $fillable = [
        'name'
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role');
    }
}
