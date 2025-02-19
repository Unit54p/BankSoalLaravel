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
                'mata_kuliah' => 'Jaringan Komputer',
                'tanggal_ujian' => '2024-07-10',
                'tipe_soal' => 'UTS',
                'semester' => 3,
                'penerbit' => 'Dr. Andi Wijaya',
                'file_path' => 'BankSoalFile/jaringan_komputer.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mata_kuliah' => 'Kecerdasan Buatan',
                'tanggal_ujian' => '2024-05-25',
                'tipe_soal' => 'Quiz',
                'semester' => 5,
                'penerbit' => 'Prof. Indra Saputra',
                'file_path' => 'BankSoalFile/kecerdasan_buatan.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mata_kuliah' => 'Struktur Data',
                'tanggal_ujian' => '2024-04-15',
                'tipe_soal' => 'UAS',
                'semester' => 2,
                'penerbit' => 'Dr. Siti Aisyah',
                'file_path' => 'BankSoalFile/struktur_data.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mata_kuliah' => 'Struktur Data',
                'tanggal_ujian' => '2024-04-15',
                'tipe_soal' => 'UTS',
                'semester' => 2,
                'penerbit' => 'Dr. Siti Aisyah',
                'file_path' => 'BankSoalFile/struktur_data.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mata_kuliah' => 'Struktur Data',
                'tanggal_ujian' => '2024-04-15',
                'tipe_soal' => 'QUIZ',
                'semester' => 2,
                'penerbit' => 'Dr. Siti Aisyah',
                'file_path' => 'BankSoalFile/struktur_data.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'mata_kuliah' => 'Sistem Operasi',
                'tanggal_ujian' => '2024-08-10',
                'tipe_soal' => 'UTS',
                'semester' => 3,
                'penerbit' => 'Dr. Budi Rahmat',
                'file_path' => 'BankSoalFile/sistem_operasi.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
