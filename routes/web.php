<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

// Rute Halaman Utama / Dashboard
Route::get('/', function () {
    return view('dashboard'); // atau view layout yang kamu gunakan untuk dashboard
});

// Rute Surat Masuk (Tahap 7 - 10)
Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');

// Rute Surat Keluar (Tahap 11 - Latihan Mandiri)
Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show');