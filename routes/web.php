<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
     return to_route('buku');
});

// Route::get('/books', function () {
//     return view('books.index');
// });

Route::get('/books', [BookController::class, 'index'])->name('buku') ;
Route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index'])->name('kategori');
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/members', [MemberController::class, 'index'])->name('anggota');
Route::get('/members/{id}', [MemberController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/{id}', [DashboardController::class, 'show']);