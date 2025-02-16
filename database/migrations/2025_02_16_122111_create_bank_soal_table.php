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
            $table->id('ID'); // ID sebagai primary key
            $table->string('nama_matkul'); // Nama mata kuliah
            $table->date('tanggal_ujian'); // Tanggal ujian
            $table->integer('semester'); // Semester
            $table->string('penerbit'); // Penerbit soal
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
