@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    <ul>
        @foreach ($books as $book)
            <li>
                <h3 style="color: blueviolet">{{ $book->title }}</h3>
                <p>Author: {{ $book->author }}</p>
                <p>Year Published: {{ $book->year }}</p>

                @if($book->stock > 0)
                    <p style="color: green;">Stock available: {{ $book->stock }}</p>
                @else
                    <p style="color: red;">Book is currently out of stock.</p>
                @endif

                {{-- Form Hapus dengan Konfirmasi --}}
                <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku {{ $book->title }}?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
            <hr>
        @endforeach
    </ul>
@endsection