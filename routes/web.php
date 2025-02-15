<?php

use Illuminate\Support\Facades\Route;

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
