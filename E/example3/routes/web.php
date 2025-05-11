<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/user/{username}/{id?}',function ($username,$id = null) {
//    echo "Merhaba " . $username. " | idsi ".$id;
//})->where('id','[0-9]+');

Route::get('/users/{user}',function (\App\Models\User $user)
{
   return $user->email;
});
