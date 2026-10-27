<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Andi',
            'year' => 2024,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Budi Raharjo',
            'year' => 2023,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Abdul Kadir',
            'year' => 2022,
            'stock' => 4,
        ]);

        Book::create([
            'title' => 'Algoritma dan Pemrograman',
            'author' => 'Rosa A.S.',
            'year' => 2023,
            'stock' => 6,
        ]);

        Book::create([
            'title' => 'Pemrograman Berbasis Web',
            'author' => 'Bambang Hariyanto',
            'year' => 2024,
            'stock' => 10,
        ]);
    }
}
