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
        Schema::create('kategori_urun', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('urun_id');
            $table->unsignedBigInteger('kategori_id');

            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
            $table->foreign('urun_id')->references('id')->on('urun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_urun');
    }
};
