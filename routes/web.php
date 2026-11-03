
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.submit');

});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');

    // Surat Masuk
    Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['create', 'store', 'edit', 'update', 'destroy'])
        ->middleware('can:manage-letters');

    Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['index', 'show']);

    // Surat Keluar
    Route::resource('surat-keluar', SuratKeluarController::class)
        ->only(['create', 'store', 'edit', 'update', 'destroy'])
        ->middleware('can:manage-letters');

    Route::resource('surat-keluar', SuratKeluarController::class)
        ->only(['index', 'show']);

});
