<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankSoal extends Model
{
    protected $table = 'bank_soal';
    protected $fillable = [
        'mata_kuliah',
        'tipe_soal',
        'tanggal_ujian',
        'semester',
        'penerbit',
        'file_path',
    ];
    public $timestamps = true; // (Opsional, karena ini default)

}
