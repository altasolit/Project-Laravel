<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/reservasi', function () {
    return view('Reservasi');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
