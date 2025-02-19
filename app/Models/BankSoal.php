<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankSoal extends Model
{
    protected $table = 'bank_soal';
    protected $fillable = [
        'nama_file',
        'tanggal_ujian',
        'semester',
        'mata_kuliah',
        'file_path',
        'penerbit',
    ];
    public $timestamps = true; // (Opsional, karena ini default)

}
