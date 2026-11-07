@extends('layouts.app')

{{-- @section('title', $title) --}}

@section('content')
    <p>
        <a href="{{ route('books.create') }}">+ Tambah Buku</a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Kategori</th> {{-- 1. Tambahkan header Kategori di sini --}}
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->category?->name ?? 'Belum ada kategori' }}</td> {{-- 2. Tambahkan isi Kategori di sini --}}
                    <td>{{ $book->year }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}">Lihat Detail</a> |
                        <a href="{{ route('books.edit', $book) }}">Edit</a> |
                    @can('delete', $book)
                    <form action="{{ route('books.destroy', $book->id) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus buku ini?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit">Delete</button>
                    </form>
                    @endcan
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" align="center">Belum ada data buku.</td> {{-- 3. Ubah colspan menjadi 7 --}}
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection