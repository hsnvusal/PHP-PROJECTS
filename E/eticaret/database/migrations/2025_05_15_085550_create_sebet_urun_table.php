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
        Schema::create('sebet_urun', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sebet_id');
            $table->unsignedBigInteger('urun_id');
            $table->integer('adet');
            $table->decimal('fiyati',8,2);
            $table->string('durum')->default('sebetde');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('sebet_id')->references('id')->on('sebet')->onDelete('cascade');
            $table->foreign('urun_id')->references('id')->on('urun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sebet_urun');
    }
};
