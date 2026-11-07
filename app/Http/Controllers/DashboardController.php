<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System Dashboard';
        $description = 'Selamat datang di Sistem Informasi Perpustakaan.';

        $books = Book::count();
        $members = User::count();
        $categories = Category::count();

        return view('dashboard.index', compact('title', 'description', 'books', 'members', 'categories'));
    }
}
