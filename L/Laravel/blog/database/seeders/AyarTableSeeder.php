<?php

namespace Database\Seeders;

use App\Models\Ayar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AyarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Ayar::create(["name"=>"baslik","value"=>"Yazilim Dunyasi"]);
        Ayar::create(["name"=>"author","value"=>"Vusal Hesenov"]);
        Ayar::create(["name"=>"aciklama","value"=>"az kod cok is...."]);
        Ayar::create(["name"=>"keywords","value"=>"Yazilim,php,java"]);
        Ayar::create(["name"=>"facebook","value"=>"http://www.facebook.com"]);
        Ayar::create(["name"=>"twiiter","value"=>"http://www.x.com"]);
        Ayar::create(["name"=>"github","value"=>"http://www.github.com"]);

    }
}
