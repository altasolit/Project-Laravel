<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\StatusReservasiController;
use App\Http\Controllers\HistoriReservasiController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\CustomerMiddleware;
use App\Models\Fasilitas;
use App\Models\Pembayaran;
use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// 🌐 Halaman Umum (Tanpa Login)
Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::view('/orders', 'orders');
Route::view('/reservasi', 'reservasi');
// Route::view('/kamar', 'kamar');
Route::view('/fasilitas', 'fasilitas');
Route::view('/detailreservasi', 'detailreservasi');
Route::get('/reservasi', [ReservationController::class, 'index']);

// 📦 Resource Routes (Jika ingin gunakan controller penuh)
Route::resource('rooms', RoomController::class);
Route::resource('Fasilitas', FasilitasController::class);

// 🔐 Rute Admin (Autentikasi & Middleware Admin)
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/kamar', [RoomController::class, 'index'])->name('admin.kamar');
    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('admin.fasilitas');

    // Manajemen Kamar
    Route::get('/kamar/create/{id?}', [RoomController::class, 'create'])->name('kamar.create');
    Route::post('/kamar', [RoomController::class, 'store'])->name('kamar.store');
    Route::get('/kamar/edit/{id}', [RoomController::class, 'edit'])->name('kamar.edit');
    Route::put('/kamar/{id}', [RoomController::class, 'update'])->name('kamar.update');
    Route::delete('/kamar/{id}', [RoomController::class, 'destroy'])->name('kamar.destroy');

    // Manajemen Fasilitas
    Route::get('/fasilitas/create/{id?}', [FasilitasController::class, 'create'])->name('fasilitas.create');
    Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
    Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit'])->name('fasilitas.edit');
    Route::put('/fasilitas/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
    Route::delete('/fasilitas/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');

    // Manajemen profile
    Route::get('/profile/create/{id?}', [DashboardController::class, 'create'])->name('profile.create');
    Route::post('/profile', [DashboardController::class, 'store'])->name('profile.store');
    Route::put('/profile/', [DashboardController::class, 'update'])->name('profile.edit');
    Route::delete('/profile/{id}', [DashboardController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/reservasi', ReservationController::class);
});

// 👤 Rute Customer (Autentikasi & Middleware Customer)
Route::middleware(['auth', CustomerMiddleware::class])->prefix('customer')->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware(['auth'])->name('customer.profile');
    Route::get('/dashboard', [DashboardController::class, 'customerDashboard'])->name('customer.dashboard');
    
    Route::get('/detailreservasi', [ReservationController::class, 'detailReservasi'])->name('detailreservasi');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('customer.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('customer.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('/status-reservasi', StatusReservasiController::class);
    Route::resource('/histori-reservasi', HistoriReservasiController::class);
    Route::get('/status-reservasi', [StatusReservasiController::class, 'index'])->name('customer.status-reservasi.index');
    Route::put('/status-reservasi/{id}/batalkan', [StatusReservasiController::class, 'batalkan'])->name('customer.status-reservasi.cancel');
    Route::post('/status-reservasi/{id}/bayar', [StatusReservasiController::class, 'bayar'])->name('customer.status-reservasi.pay');

    //Pembayaran
    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::get('/pembayaran/{reservation}', [PembayaranController::class, 'showPayment'])->name('pembayaran.show');
    Route::post('/pembayaran/{reservation}', [PembayaranController::class, 'processPayment'])->name('pembayaran.process');

    // Tambahan fitur customer
    Route::get('/bookings', [HomeController::class, 'customer'])->name('customer.customer-booking');
});

// 👥 Rute Umum untuk Pengguna yang Sudah Login
Route::middleware(['auth'])->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    // // Edit profil (umum)
    // Route::get('/edit', [AuthController::class, 'edit'])->name('customer.edit');
    // Route::put('/update/{id}', [AuthController::class, 'update'])->name('customer.update');
});

// ✅ Test Middleware Customer
Route::get('/test-customer', fn() => 'Halo customer!')->middleware(['auth', CustomerMiddleware::class]);

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// 🔐 Laravel Breeze Auth
require __DIR__ . '/auth.php';
