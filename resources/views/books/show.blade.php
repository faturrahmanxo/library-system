@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>

    <div>
        <h3>{{ $book->title }}</h3>
        <p><strong>Penulis:</strong> {{ $book->author }}</p>
        <p><strong>Tahun Terbit:</strong> {{ $book->year }}</p>
        <p><strong>Stok:</strong> {{ $book->stock }}</p>
    </div>

    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a>
@endsection