<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FacilityController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use Illuminate\Support\Facades\Route;

// 🌐 Halaman Umum (tanpa login)
Route::get('/', fn() => view('home'));
Route::view('/orders', 'orders');
Route::view('/reservasi', 'reservasi');
Route::view('/kamar', 'kamar');
Route::view('/fasilitas', 'fasilitas');
Route::view('/detailreservasi', 'detailreservasi');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// 📦 Resource Routes
Route::resource('rooms', RoomController::class);

// 🔐 Autentikasi & Verifikasi
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {

    // 🔧 ADMIN
    Route::get('/dashboard/admin', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');

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
});

// 👤 CUSTOMER
Route::middleware(['auth', CustomerMiddleware::class])->prefix('customer')->group(function () {
    Route::get('/dashboard/customer', [DashboardController::class, 'customerDashboard'])->name('customer.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('customer.profile-customer');      
    Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/detailreservasi', [ProfileController::class, 'detailReservasi'])->name('profile.detailreservasi');
});

// // 👥 PROFIL Umum (untuk semua user yang login)
// Route::prefix('profile')->group(function () {

// });

// 🔓 LOGOUT
Route::post('/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

// ✅ Cek Middleware Customer
Route::get('/test-customer', fn() => 'Halo customer!')->middleware(['auth', 'customer']);

// 🔐 Auth Routes (Laravel Breeze)
require __DIR__ . '/auth.php';
