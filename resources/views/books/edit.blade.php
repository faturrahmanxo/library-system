@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        <table border="0" cellpadding="6" cellspacing="0">
            <tr>
                <td><label for="title">Judul Buku</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="title" name="title" placeholder="Judul Buku" value="{{ old('title', $book->title) }}" minlength="2" maxlength="255" required>
                    @error('title')
                        <div><small style="color: red;">{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="author">Penulis</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="author" name="author" placeholder="Penulis" value="{{ old('author', $book->author) }}" minlength="2" maxlength="255" required>
                    @error('author')
                        <div><small style="color: red;">{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="category_id">Kategori</label></td>
                <td>:</td>
                <td>
                    <select name="category_id" id="category_id" required>
                        <option value="">Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option
                                value="{{ $category->id }}"
                                @selected(old('category_id', $book->category_id) == $category->id)
                            >
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div><small style="color: red;">{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="year">Tahun Terbit</label></td>
                <td>:</td>
                <td>
                    <input type="number" id="year" name="year" placeholder="Tahun Terbit" value="{{ old('year', $book->year) }}" min="1900" max="{{ date('Y') }}" required>
                    @error('year')
                        <div><small style="color: red;">{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="stock">Stok</label></td>
                <td>:</td>
                <td>
                    <input type="number" id="stock" name="stock" placeholder="Stok Buku" value="{{ old('stock', $book->stock) }}" min="0" max="1000" required>
                    @error('stock')
                        <div><small style="color: red;">{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
        </table>

        <p>
            <button type="submit">Simpan Perubahan</button> | 
            <a href="{{ route('books.index') }}">Batal</a>
        </p>
    </form>
@endsection