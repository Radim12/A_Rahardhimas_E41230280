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
        Schema::create('pengalaman_kerja', function (Blueprint $table) {
            $table->id(); // Ini akan membuat kolom id sebagai primary key dan auto-increment
            $table->string('nama');
            $table->string('jabatan');
            $table->integer('tahun_masuk'); // Menggunakan integer untuk tahun
            $table->integer('tahun_keluar'); // Menggunakan integer untuk tahun
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalaman_kerja');
    }
};
