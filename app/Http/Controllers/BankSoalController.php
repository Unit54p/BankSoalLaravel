<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

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

    // public function downloadSoalProcess($id)
    // {
    //     // $filePath = "BankSoalFile/" . $fileName;
    //     // dd($id);

    //     $soal = BankSoal::find($id);
    //     if (!$soal) {
    //         return redirect()->back()->with('eror', 'soal tidak ditemukan');
    //     }
    //     // $filePath = $soal->file_path;
    //     $filePath =  $soal->file_path; // Tambahkan public/
    //     if (!Storage::disk('public')->exists($filePath)) {
    //         return redirect()->back()->with('eror', 'file tidak ditemukan');
    //     }
    //     return Storage::download($filePath);

    // }
}
