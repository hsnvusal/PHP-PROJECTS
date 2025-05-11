<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = array(
            array("name"=>"admin"),
            array("name"=>"author"),
            array("name"=>"standart"),
        );

        foreach ($roles as $role)
        {
            Role::create($role);
        }

    }
}
