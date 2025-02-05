<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/reservasi', function () {
    return view('Reservasi');
});

Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/kamar', function () {
    return view('Kamar');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/customers', function () {
    return view('customers');
});
