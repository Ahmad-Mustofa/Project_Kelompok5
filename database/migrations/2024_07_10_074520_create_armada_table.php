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
        Schema::create('armada', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 30);
            $table->string('nopol', 20);
            $table->integer('thn_beli');
            $table->string('deskripsi', 200);
            $table->unsignedBigInteger('jenis_kendaraan_id');
            $table->foreign('jenis_kendaraan_id')->references('id')->on('jenis_kendaraan');
            $table->integer('kapasitas_kursi');
            $table->integer('rating');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armada');
    }
};
