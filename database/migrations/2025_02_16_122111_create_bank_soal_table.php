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
        Schema::create('bank_soal', function (Blueprint $table) {
            $table->id('ID'); // Primary key sesuai preferensi kamu
            $table->string('mata_kuliah');
            $table->string('tipe_soal');
            $table->integer('semester');
            $table->date('tanggal_ujian');
            $table->string('penerbit'); // Nama penerbit dari user yang login
            $table->string('file_path'); // Lokasi file di storage
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_soal');
    }
};
