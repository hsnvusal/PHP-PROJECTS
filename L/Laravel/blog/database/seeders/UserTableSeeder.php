<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Vusal Hesenov",
            "email" => "vusalhesenov361@gmail.com",
            "password" => bcrypt("vusal361")
        ]);

        DB::table("role_user")->insert(["role_id"=>1,"user_id"=>1]);
        DB::table("role_user")->insert(["role_id"=>2,"user_id"=>2]);
        DB::table("role_user")->insert(["role_id"=>3,"user_id"=>3]);
    }
}
