<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use Illuminate\Http\Request;

class DataRequestController extends Controller
{
    public function dataRequestView(){
        $requests = BankSoal::where('status', 'unverified')->get();
        return view('admin.adminDataRequest', compact('requests'));
    }
}
