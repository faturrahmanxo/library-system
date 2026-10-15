@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Judul Buku</label>
            <input
                type="text"
                id="title"
                name="title"
                value="{{ old('title', $book->title) }}"
                minlength="3"
                maxlength="255"
                required
            >
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="author">Penulis</label>
            <input
                type="text"
                id="author"
                name="author"
                value="{{ old('author', $book->author) }}"
                minlength="3"
                maxlength="255"
                required
            >
            @error('author')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="year">Tahun Terbit</label>
            <input
                type="number"
                id="year"
                name="year"
                min="1450"
                max="{{ date('Y') }}"
                value="{{ old('year', $book->year) }}"
                required
            >
            @error('year')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="stock">Stok</label>
            <input
                type="number"
                id="stock"
                name="stock"
                min="0"
                max="1000"
                value="{{ old('stock', $book->stock) }}"
                required
            >
            @error('stock')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('books.index') }}">Batal</a>
    </form>
@endsection