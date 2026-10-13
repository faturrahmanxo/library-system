<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;

// Redirect halaman utama ke daftar buku
Route::get('/', function () {
     return to_route('books.index');
});

// Otomatis membuat seluruh rute CRUD buku
Route::resource('books', BookController::class);

// Rute Kategori
Route::get('/categories', [CategoryController::class, 'index'])->name('kategori');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('kategori.show');

// Rute Anggota
Route::get('/members', [MemberController::class, 'index'])->name('anggota');
Route::get('/members/{id}', [MemberController::class, 'show'])->name('anggota.show');

// Rute Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');
