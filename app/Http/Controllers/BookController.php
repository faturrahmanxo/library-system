<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = "Daftar Buku";
        $description = "Berisi daftar buku yang tersedia di perpustakaan";

        // $books = [
        //     [
        //         'title' => 'Pemrograman PHP',
        //         'author' => 'Budi',
        //         'year' => 2024
        //     ],
        //     [
        //         'title' => 'Laravel untuk Pemula',
        //         'author' => 'Michael',
        //         'year' => 2025
        //     ],
        //     [
        //         'title' => 'Basis Data',
        //         'author' => 'Nana',
        //         'year' => 2025
        //     ],
        //     [
        //         'title' => 'Algoritma dan Pemrograman',
        //         'author' => 'James',
        //         'year' => 2023
        //     ],
        //     [
        //         'title' => 'Pemrograman Berorientasi Objek',
        //         'author' => 'Rangga',
        //         'year' => 2022
        //     ]
        // ];
        $books = Book::all();

        $stock = 7;
        return view('books.index', compact('title', 'description', 'books', 'stock'));
    }

    public function show(int $id)
    {
        $title = 'Detail Buku';
        return "{$title} <br> ID: {$id}";
    }
}
