<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System Dashboard';
        $description = 'Selamat datang di Sistem Informasi Perpustakaan.';
        $books = 'Jumlah Buku: 5';
        $members = 'Jumlah Members: 10';
        $categories = 'Jumlah Kategori: 3';
        return view('dashboard.index', compact('title', 'description', 'books', 'members', 'categories'));
    }
}
