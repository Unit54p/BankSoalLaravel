<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadSoalController extends Controller
{
    public function uploadSoalView()
    {
        return view('UploadSoal');
    }

    public function uploadSoalProcess(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'namaFile'    => 'required|string|max:255',
            'tanggalUjian' => 'required|date',
            'semester'    => 'required|integer|min:1|max:14',
            'mataKuliah'  => 'required|string',
            'fileSoal'    => 'required|mimes:pdf|max:2048', // Maksimum 2MB
        ]);
        // dd($validatedData);

        // Simpan file ke dalam storage
        $filePath = $request->file('fileSoal')->store('BankSoalFile', 'public');

        // Simpan data ke database
        BankSoal::create([
            'nama_file'   => $validatedData['namaFile'],
            'tanggal_ujian' => $validatedData['tanggalUjian'],
            'semester'    => $validatedData['semester'],
            'mata_kuliah' => $validatedData['mataKuliah'],
            'file_path'   => $filePath,
            'penerbit'    => Auth::user()->name, // Mengambil nama user yang login
        ]);

        return redirect()->route('accountView')->with('success', 'Soal berhasil diunggah!');
    }
}
