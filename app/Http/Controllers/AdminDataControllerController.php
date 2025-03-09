<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;
class AdminDataControllerController extends Controller
{
    public function dataView(){
        $dataSoal = BankSoal::orderBy('tanggal_ujian', 'desc')->get();
        // dd($dataSoal);
        return view('admin.adminDataController', compact('dataSoal'));
    }
}
