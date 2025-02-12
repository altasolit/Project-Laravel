<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/h', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('profile-customer');
});
=======
>>>>>>> 24da4ec8ccabd7ce3565769dbe99242a7cdfffc7
Route::get('/orders', function () {
    return view('orders');
});

Route::get('/reservasi', function () {
    return view('Reservasi');
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

Route::get('/detailreservasi', function () {
    return view('detailreservasi');
});
Route::get('/reservasi', function () {
    return view('reservasi');
});

require __DIR__.'/auth.php';