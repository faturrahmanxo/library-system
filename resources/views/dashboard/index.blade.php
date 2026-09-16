@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <p>{{ $books }}</p>
    <p>{{ $members }}</p>
    <p>{{ $categories }}</p>
@endsection