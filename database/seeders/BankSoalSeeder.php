<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BankSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bank_soal')->insert([
            [
                'nama_matkul' => 'Matematika Diskrit',
                'tanggal_ujian' => '2024-06-15',
                'semester' => 2,
                'penerbit' => 'Prof. Budi Santoso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_matkul' => 'Pemrograman Web',
                'tanggal_ujian' => '2024-06-20',
                'semester' => 4,
                'penerbit' => 'Dr. Siti Aisyah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
