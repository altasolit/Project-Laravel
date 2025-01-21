<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/reservasi', function () {
    return view('Reservasi');
=======
Route::get('/dashboard', function () {
    return view('dashboard');
>>>>>>> 1303cfa96ae26d5303c79d1b96ffc2d43c7b359d
});
