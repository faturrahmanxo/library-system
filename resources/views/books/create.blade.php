@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST" novalidate>
        @csrf

        <table border="0" cellpadding="6" cellspacing="0">
            <tr>
                <td><label for="title">Judul Buku</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="title" name="title" placeholder="Judul Buku" value="{{ old('title') }}" minlength="2" maxlength="255" required>
                    @error('title')
                        <div><small>{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="author">Penulis</label></td>
                <td>:</td>
                <td>
                    <input type="text" id="author" name="author" placeholder="Penulis" value="{{ old('author') }}" minlength="2" maxlength="255" required>
                    @error('author')
                        <div><small>{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="year">Tahun Terbit</label></td>
                <td>:</td>
                <td>
                    <input type="number" id="year" name="year" placeholder="Tahun Terbit" value="{{ old('year') }}" min="1900" max="{{ date('Y') }}" required>
                    @error('year')
                        <div><small>{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
            <tr>
                <td><label for="stock">Stok</label></td>
                <td>:</td>
                <td>
                    <input type="number" id="stock" name="stock" placeholder="Stok Buku" value="{{ old('stock') }}" min="0" max="1000" required>
                    @error('stock')
                        <div><small>{{ $message }}</small></div>
                    @enderror
                </td>
            </tr>
        </table>

        <p>
            <button type="submit">Simpan Buku</button> | 
            <a href="{{ route('books.index') }}">Kembali</a>
        </p>
    </form>
@endsection