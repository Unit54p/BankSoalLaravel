<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDataControllerController;
use App\Http\Controllers\BankSoalController;
use App\Http\Controllers\UploadSoalController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('Home');
})->name('home');

Route::get('/bankSoal', function () {
    return view('BankSoal');
})->name('bankSoal');

Route::get('/about', function () {
    return view('About');
})->name('about');

// Route::get('/downloadSoal/{id}', [BankSoalController::class, 'downloadSoalProcess'])->name('downloadSoal');

// Group Middleware Admin
// Route::get('/admin', [AdminController::class, 'adminLoginView'])->name('adminLoginView');
// Route::post('/adminLoginAutentication', [AdminController::class, 'adminLoginAutentication'])->name('adminLoginAutentication');
Route::get('/accountView', [UserController::class, 'accountView'])->name('accountView');
Route::get('/userRegistrationView', [UserController::class, 'registerView'])->name('userRegistrationView');
Route::post('/userRegistrationProcess', [UserController::class, 'registrationProcess'])->name('userRegistrationProcess');

Route::post('/userLogin', [UserController::class, 'userLoginProcess'])->name('userLogin');

Route::post('/cariSoalProcess', [BankSoalController::class, 'cariSoalProcess'])->name('cariSoalProcess');

Route::middleware('auth')->group(function () {
    Route::get('/uploadSoalView', [UploadSoalController::class, 'uploadSoalView'])->name('uploadSoalView');

    Route::post('/uploadSoalProcess', [UploadSoalController::class, 'uploadSoalProcess'])->name('uploadSoalProcess');
});

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.adminDashboard');
    })->name('adminDashboard');

    // Route::get('/adminDataController', function () {
    //     return view('admin.adminDataController');
    // })->name('adminDataController');

    Route::get('/adminDataRequest', function () {
        return view('admin.adminDataRequest');
    })->name('adminDataRequest');

    Route::get('/account', function () {
        return view('admin.adminAccount');
    })->name('adminAccount');

    Route::get('/getDataView', [AdminDataControllerController::class, 'dataView'])->name('getDataView');
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');
