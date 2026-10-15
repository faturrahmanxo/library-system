@extends('layouts.app')

@section('title', $title)

@section('content')
    <h2>{{ $title }}</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th align="left">Judul Buku</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th align="left">Penulis</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th align="left">Tahun Terbit</th>
            <td>{{ $book->year }}</td>
        </tr>
        <tr>
            <th align="left">Stok</th>
            <td>{{ $book->stock }}</td>
        </tr>
    </table>

    <p>
        <a href="{{ route('books.edit', $book) }}">Edit Buku</a> | 
        <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
    </p>
@endsection