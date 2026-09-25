@extends('layouts.app')

@section('title', $title)

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $description }}</p>

    {{-- {{ route('buku') }} --}}
 
@foreach ( $books as $book )
<ul>
    <li>
        <h3 style="color: blueviolet">{{ $book['title'] }}</h3>
        <p>Author: {{ $book['author'] }}</p>
        <p>Year Published: {{ $book['year'] }}</p>
        @if($book['stock'] > 0)
        <p style="color: green;">Stock available: {{ $book['stock'] }}</p>
    @else
        <p style="color: red;">Book is currently out of stock.</p>
    @endif
    </li> 
</ul>
 <hr>
    
@endforeach

@endsection