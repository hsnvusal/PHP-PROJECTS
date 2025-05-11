<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected  $guard = 'admin';

    protected $fillable = ['name','email','password','role'];
    protected $hidden  = ['password','remember_token'];



    public function roles()
    {
        return $this->belongsToMany(Role::class,'admin_role');
    }
    public function hasPermission($permission)
    {
        return $this->roles()->whereHas('permissions',function ($e) use ($permission){
           $e->where('name',$permission);
        })->exists();
    }
}
