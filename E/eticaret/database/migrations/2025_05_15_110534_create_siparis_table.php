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
        Schema::create('siparis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sebet_id');
            $table->decimal('siparis_tutari',10,4);
            $table->string('durum')->nullable();
            $table->string('adsoyad')->nullable();
            $table->string('adres')->nullable();
            $table->string('telefon')->nullable();

            $table->string('banka')->nullable();
            $table->integer('taksit_sayisi')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique('sebet_id');
            $table->foreign('sebet_id')->references('id')->on('sebet')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparis');
    }
};
