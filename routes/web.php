<?php

use App\Http\Controllers\armadaController;
use App\Http\Controllers\jenisKendaraanController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/dashboard/jenis_kendaraan', [jenisKendaraanController::class, 'index'])->name('jenis_kendaraan.index');
        Route::get('/dashboard/jenis_kendaraan/create', [jenisKendaraanController::class, "create"])->name('jenis_kendaraan.create');
        Route::post('/dashboard/jenis_kendaraan/store', [jenisKendaraanController::class, "store"])->name('jenis_kendaraan.store');
        Route::delete('/dashboard/jenis_kendaraan/delete/{id}', [jenisKendaraanController::class, "destroy"])->name('jenis_kendaraan.delete');
        Route::put('/dashboard/jenis_kendaraan/{id}', [jenisKendaraanController::class, "update"])->name('jenis_kendaraan.update');
        Route::get('/dashboard/jenis_kendaraan/edit/{id}', [jenisKendaraanController::class, "edit"])->name('jenis_kendaraan.edit');

Route::get('/dashboard/armada', [armadaController::class, 'index'])->name('armada.index');
        Route::get('/dashboard/armada/create', [armadaController::class, "create"])->name('armada.create');
        Route::post('/dashboard/armada/store', [armadaController::class, "store"])->name('armada.store');
        Route::delete('/dashboard/armada/delete/{id}', [armadaController::class, "destroy"])->name('armada.delete');
        Route::put('/dashboard/armada/{id}', [armadaController::class, "update"])->name('armada.update');
        Route::get('/dashboard/armada/edit/{id}', [armadaController::class, "edit"])->name('armada.edit');

Route::get('/dashboard/peminjaman', [peminjamanController::class, 'index'])->name('peminjaman.index');
        Route::get('/dashboard/peminjaman/create', [peminjamanController::class, "create"])->name('peminjaman.create');
        Route::post('/dashboard/peminjaman/store', [peminjamanController::class, "store"])->name('peminjaman.store');
        Route::delete('/dashboard/peminjaman/delete/{id}', [peminjamanController::class, "destroy"])->name('peminjaman.delete');
        Route::put('/dashboard/peminjaman/{id}', [peminjamanController::class, "update"])->name('peminjaman.update');
        Route::get('/dashboard/peminjaman/edit/{id}', [peminjamanController::class, "edit"])->name('peminjaman.edit');

Route::get('/dashboard/pembayaran', [pembayaranController::class, 'index'])->name('pembayaran.index');
        Route::get('/dashboard/pembayaran/create', [pembayaranController::class, "create"])->name('pembayaran.create');
        Route::post('/dashboard/pembayaran/store', [pembayaranController::class, "store"])->name('pembayaran.store');
        Route::delete('/dashboard/pembayaran/delete/{id}', [pembayaranController::class, "destroy"])->name('pembayaran.delete');
        Route::put('/dashboard/pembayaran/{id}', [pembayaranController::class, "update"])->name('pembayaran.update');
        Route::get('/dashboard/pembayaran/edit/{id}', [pembayaranController::class, "edit"])->name('pembayaran.edit');



        


        // ===== landingPage routes =====
Route::get('rentalmobil-app', [PageController::class, 'index']);

// about page
Route::get('rentalmobil-app/index',[PageController::class, 'index']);

// produck page
Route::get('rentalmobil-app/index',[PageController::class, 'index']);

// pemesanan page
Route::get('rentalmobil-app/index',[PageController::class, 'index']);