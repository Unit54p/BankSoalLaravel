<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;

class BankSoalController extends Controller
{
    public function cariSoalProcess(Request $request)
    {
        $request->validate([
            'input_cariSoal' => 'required|string|max:255'
        ]);
        // dd($request->all());
        // Ambil data berdasarkan mata kuliah yang dicari
        $soal = BankSoal::where('mata_kuliah', 'LIKE', '%' . $request->input_cariSoal . '%')->get();

        // Jika tidak ada data ditemukan, kembalikan dengan pesan
        if ($soal->isEmpty()) {
            return redirect()->route('bankSoal')->with('errorSoalTidakDiTemukan', 'Soal tidak ditemukan.');
        }

        // Kirim data ke tampilan
        return view('BankSoal', compact('soal'));
    }
}
