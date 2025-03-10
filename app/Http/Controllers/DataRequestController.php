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
    public function dataRequestProcess($ID){
            BankSoal::where('ID', $ID)->update(['status' => 'verified']);

        // $request = BankSoal::findOrFail(id: $ID);
        // dd($request);

        // $request->status = "verified";
        // $request->save();
        return redirect()->route('dataRequestview')->with('success','Data berhasil diverifikasi!');
    }
}
