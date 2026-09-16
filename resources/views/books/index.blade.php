@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    {{-- {{ route('buku') }} --}}

    <ul>
        @foreach ( $books as $book )
        <li>
            Judul: <strong>{{ $book['title'] }}</strong> <br>
            Penulis: {{ $book['author'] }} <br> 
            Tahun Terbit: {{ $book['year'] }}
        </li>
        @endforeach
    </ul>

    @if($stock > 0)
    <p>Stok tersedia</p>
    @else
    <p>Buku sedang habis.</p>
    @endif
@endsection