<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\HomeController;
// use App\Models\Facility;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
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

// untuk yg sudah login
Route::middleware(['auth'])->group(function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    // Rute untuk admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
        Route::get('/room/create/{id?}', [RoomController::class, 'create'])->name('room.create');
        Route::get('/rooms/create/{id?}', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
        Route::put('/room/{id}', [RoomController::class, 'update'])->name('room.update');
        Route::delete('/rooms/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
        // Route::put('/room/{id}', [RoomController::class, 'update'])->name('rooms.update');
        // Route::delete('/room/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
        Route::get('/fasilitas/create/{id?}', [FacilityController::class, 'create'])->name('fasilitas.create');
        Route::post('/fasilitas', [FacilityController::class, 'store'])->name('fasilitas.store');
        Route::put('/fasilitas/{id}', [FacilityController::class, 'update'])->name('fasilitas.update');
        Route::delete('/fasilitas/{id}', [FacilityController::class, 'destroy'])->name('fasilitas.destroy');
    });

    // Rute untuk customer
    Route::middleware(['customer'])->group(function () {
        Route::get('/customer/bookings', [HomeController::class, 'customer'])->name('customer.customer-booking');
        Route::get('/customer/profile', [HomeController::class, 'profil'])->name('customer.profile-customer');
    });

    Route::get('/edit', [AuthController::class, 'edit'])->name('customer.edit');
    Route::put('/update/{id}', [AuthController::class, 'update'])->name('customer.update');
});

// // Middleware untuk pengguna yang sudah login
// Route::middleware('auth')->group(function () {
//     Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

//     // 🔹 Rute untuk Admin
//     Route::middleware('admin')->group(function () {
//         Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
//         Route::get('/admin/kamar', [RoomController::class, 'index'])->name('admin.kamar');
//         Route::get('/admin/fasilitas', [FacilityController::class, 'index'])->name('admin.fasilitas');
//     });

//     // 🔹 Rute untuk Customer
//     Route::middleware('customer')->group(function () {
//         Route::get('/customer/dashboard', [DashboardController::class, 'customerDashboard'])->name('customer.profile-customer');
//         Route::get('/customer/bookings', [HomeController::class, 'customer'])->name('customer.customer-booking');
//     });
// });

// // Rute umum (bisa diakses tanpa login)
// Route::get('/orders', function () { return view('orders'); });
// Route::get('/reservasi', function () { return view('reservasi'); });
// Route::get('/kamar', function () { return view('kamar'); });
// Route::get('/fasilitas', function () { return view('fasilitas'); });


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
Route::get('/profile/detailreservasi', [ProfileController::class, 'detailReservasi'])
->name('profile.detailreservasi');

Route::middleware(['customer'])->group(function () {
    Route::get('/customer/dashboard', [DashboardController::class, 'customerDashboard'])
        ->name('customer.dashboard');
});

Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');

require __DIR__.'/auth.php';