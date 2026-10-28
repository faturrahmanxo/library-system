<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

// Redirect halaman utama ke daftar buku
Route::get('/', function () {
    return to_route('books.index');
});

// Route Login dan Logout
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::middleware('auth')->group(function () {
    // Route buku yang hanya boleh diakses setelah login.
    Route::resource('books', BookController::class);
});

// Rute Kategori
Route::get('/categories', [CategoryController::class, 'index'])->name('kategori');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('kategori.show');

// Rute Anggota
Route::get('/members', [MemberController::class, 'index'])->name('anggota');
Route::get('/members/{id}', [MemberController::class, 'show'])->name('anggota.show');

// Rute Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
