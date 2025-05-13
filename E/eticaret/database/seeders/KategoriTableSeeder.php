<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('kategori_urun')->truncate();
        DB::table('kategori')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Elektronik','slug'=>'elektronik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar/Tablet','slug'=>'bilgisayar-tablet','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Telefon','slug'=>'telefon','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Tv ve Ses Sistemleri','slug'=>'tv-ses-sistemleri','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Kamera','slug'=>'kamera','ust_id'=>$id]);

        $id = DB::table('kategori')->insertGetId(['kategori_adi'=>'Kitab','slug'=>'kitab']);
        DB::table('kategori')->insert(['kategori_adi'=>'Edebiyyat','slug'=>'edebiyyat','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Cocuk','slug'=>'cocuk','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Bilgisayar','slug'=>'bilgisayar','ust_id'=>$id]);
        DB::table('kategori')->insert(['kategori_adi'=>'Sinavlara Hazirlik','slug'=>'sinavlara-hazirlik','ust_id'=>$id]);






        DB::table('kategori')->insert(['kategori_adi'=>'Kitab','slug'=>'kitab']);
        DB::table('kategori')->insert(['kategori_adi'=>'Dergi','slug'=>'dergi']);
        DB::table('kategori')->insert(['kategori_adi'=>'Mobilya','slug'=>'mobilya']);
        DB::table('kategori')->insert(['kategori_adi'=>'Dekorasyon','slug'=>'dekorasyon']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('kategori')->insert(['kategori_adi'=>'Kisisel Bakim','slug'=>'kisisel-bakim']);
        DB::table('kategori')->insert(['kategori_adi'=>'Anne ve Cocuk','slug'=>'anne-cocuk']);

    }
}
