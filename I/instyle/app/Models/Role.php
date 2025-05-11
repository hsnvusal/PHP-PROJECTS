<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permissions;

class Role extends Model
{

    protected  $fillable = [
        'name'
    ];
    public function permissions()
    {
        return $this->belongsToMany(Permissions::class, 'permission_role', 'role_id', 'permission_id');
    }

    public  function admins()
    {
        return $this->belongsToMany(Admin::class,'admin_role');
    }
}
