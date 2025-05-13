<?php

namespace Database\Seeders;

use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UrunTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('kategori_urun')->truncate();  // Əvvəl pivot cədvəl
        DB::table('urun_detay')->truncate();     // Əlaqəli cədvəl
        DB::table('urun')->truncate();           // Əsas cədvəl
        DB::table('kategori')->truncate();       // Əlaqəli digər cədvəl

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            $urun_adi = $faker->sentence(2);

            $urun = Urun::create([
                'urun_adi' => $urun_adi,
                'slug' => Str::slug($urun_adi),
                'aciklama' => implode(' ', $faker->sentences(5)),
                'fiyati' => $faker->randomFloat(2, 1, 20),
            ]);

            $urun->detay()->create([
                'goster_slider' => rand(0, 1),
                'goster_gunun_firsati' => rand(0, 1),
                'goster_one_cikan' => rand(0, 1),
                'goster_cok_satan' => rand(0, 1),
                'goster_indirimli' => rand(0, 1),
            ]);
        }
    }
}
