<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kitablars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('selflink');
            $table->integer('yazarid');
            $table->integer('yayineviid');
            $table->integer('kategoriid');
            $table->string('image');
            $table->double('fiyat');
            $table->text('aciklama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kitablars');
    }
};
