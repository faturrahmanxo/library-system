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

// Login hanya untuk pengguna yang belum login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.submit');
});

// Logout hanya untuk pengguna yang sudah login
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Semua halaman internal harus login
Route::middleware('auth')->group(function () {

    // Admin dan petugas dapat mengakses fitur ini
    Route::resource('books', BookController::class);

    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/members', [MemberController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Khusus admin: pengelolaan pengguna
    Route::middleware('can:manage-users')->group(function () {
        Route::get('/users', function () {
            return view('users.index');
        })->name('users.index');
    });
});


// Route::middleware(['auth', 'role:admin'])->group(function () {

//     // Hanya admin yang boleh mengelola akun pengguna.
//     Route::resource('users', UserController::class);
// });

// Rute Kategori
// Route::get('/categories', [CategoryController::class, 'index'])->name('kategori');
// Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('kategori.show');

// Rute Anggota
// Route::get('/members', [MemberController::class, 'index'])->name('anggota');
// Route::get('/members/{id}', [MemberController::class, 'show'])->name('anggota.show');

// // Rute Dashboard
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route::get('/dashboard/{id}', [DashboardController::class, 'show'])->name('dashboard.show');