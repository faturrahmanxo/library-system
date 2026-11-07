@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <p>Jumlah Buku: {{ $books }}</p>
    <p>Jumlah Member: {{ $members }}</p>
    <p>Jumlah Kategori: {{ $categories }}</p>
@endsection
