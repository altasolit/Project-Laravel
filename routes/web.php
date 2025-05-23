<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// 🌐 Halaman Umum (Tanpa Login)
Route::view('/', 'home');
Route::view('/orders', 'orders');
Route::view('/reservasi', 'reservasi');
Route::view('/kamar', 'kamar');
Route::view('/fasilitas', 'fasilitas');
Route::view('/detailreservasi', 'detailreservasi');


// 📦 Resource Routes (Jika ingin gunakan controller penuh)
Route::resource('rooms', RoomController::class);

// 🔐 Rute Admin (Autentikasi & Middleware Admin)
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');

    // Manajemen Kamar
    Route::get('/room/create/{id?}', [RoomController::class, 'create'])->name('room.create');
    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::put('/room/{id}', [RoomController::class, 'update'])->name('room.update');
    Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');

    // Manajemen Fasilitas
    Route::get('/fasilitas/create/{id?}', [FacilityController::class, 'create'])->name('fasilitas.create');
    Route::post('/fasilitas', [FacilityController::class, 'store'])->name('fasilitas.store');
    Route::put('/fasilitas/{id}', [FacilityController::class, 'update'])->name('fasilitas.update');
    Route::delete('/fasilitas/{id}', [FacilityController::class, 'destroy'])->name('fasilitas.destroy');

    // // Manajemen profile
    // Route::get('/profile/create/{id?}', [DashboardController::class, 'create'])->name('profile.create');
    // Route::post('/profile', [DashboardController::class, 'store'])->name('profile.store');
    // Route::put('/profile/', [DashboardController::class, 'update'])->name('profile.edit');
    // Route::delete('/profile/{id}', [DashboardController::class, 'destroy'])->name('profile.destroy');
});

// 👤 Rute Customer (Autentikasi & Middleware Customer)
Route::middleware(['auth', CustomerMiddleware::class])->prefix('customer')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'customerDashboard'])->name('customer.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('customer.profile-customer');
    Route::get('/detailreservasi', [ProfileController::class, 'detailReservasi'])->name('profile.detailreservasi');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Tambahan fitur customer
    Route::get('/bookings', [HomeController::class, 'customer'])->name('customer.customer-booking');
});

// 👥 Rute Umum untuk Pengguna yang Sudah Login
Route::middleware(['auth'])->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    // Edit profil (umum)
    Route::get('/edit', [AuthController::class, 'edit'])->name('customer.edit');
    Route::put('/update/{id}', [AuthController::class, 'update'])->name('customer.update');
});

// ✅ Test Middleware Customer
Route::get('/test-customer', fn() => 'Halo customer!')->middleware(['auth', CustomerMiddleware::class]);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



// 🔐 Laravel Breeze Auth
require __DIR__ . '/auth.php';
