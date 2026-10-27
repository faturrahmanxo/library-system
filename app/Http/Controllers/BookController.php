<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Daftar Buku'; // Aktifkan agar variabel $title di index.blade.php tidak error
        $books = Book::with('category')->get();

        return view('books.index', compact('title', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:2|max:255',
            'author' => 'required|string|min:2|max:255|regex:/^[a-zA-Z\s]+$/',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $title = 'Detail Buku';
        return view('books.show', compact('title', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        // 1. Tambahkan validasi lengkap termasuk category_id
        $validated = $request->validate([
            'title' => 'required|string|min:2|max:255',
            'author' => 'required|string|min:2|max:255|regex:/^[a-zA-Z\s]+$/',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'stock' => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        // 2. Simpan menggunakan data terpopulasi $validated
        $book->update($validated);

        // 3. Sertakan pesan sukses saat redirect
        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}
