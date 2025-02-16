<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/bankSoal', function () {
    return view('BankSoal');
})->name('bankSoal');

Route::get('/about', function () {
    return view('About');
})->name('about');

Route::get('/account', function () {
    return view('Account');
})->name('account');

// Group Middleware Admin
Route::get('/admin', [AdminController::class, 'adminLoginView'])->name('adminLoginView');

Route::post('/adminLoginAutentication', [AdminController::class, 'adminLoginAutentication'])->name('adminLoginAutentication');

Route::middleware([ 'admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.adminDashboard');
    })->name('adminDashboard');

    Route::get('/adminDataController', function () {
        return view('admin.adminDataController');
    })->name('adminDataController');

    Route::get('/adminDataRequest', function () {
        return view('admin.adminDataRequest');
    })->name('adminDataRequest');

    Route::get('/account', function () {
        return view('admin.adminAccount');
    })->name('adminAccount');
});

// Route::get('/adminDashboard', function () {
//     return view('admin.adminDashboard');
// })->name('adminDashboard');

// Route::get('/adminDataController', function () {
//     return view('admin.adminDataController');
// })->name('adminDataController');


// Route::get('/adminDataRequest', function () {
//     return view('admin.adminDataRequest');
// })->name('adminDataRequest');
// Route::get('/adminAccount', function () {
//     return view('admin.adminAccount');
// })->name('adminAccount');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');
