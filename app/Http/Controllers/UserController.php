<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function accountView()
    {
        return view('account');
    }
    public function registerView()
    {
        return view('userRegistration');
    }
    public function registrationProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        Auth::login($user);
        return redirect()->route('accountView')->with('succes', 'berhasil registrasi!');
    }

    public function userLoginProcess(Request $request)
    {
        // dd('userLogin');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('accountView')->with('succes', 'Login berhasil');
        }
        return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
    }
    public function userLogout()
    {
        Auth::logout();
        return redirect()->route('account')->with('success', 'Anda telah logout.');
    }
}
