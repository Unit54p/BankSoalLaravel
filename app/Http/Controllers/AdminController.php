<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLoginView()
    {
        return view('admin.loginAdmin');
    }
    public function adminLoginAutentication(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->role === 'admin') {
                return redirect()->route('adminDashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['email' => 'anda bukan admin']);
            }
        }
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
}
