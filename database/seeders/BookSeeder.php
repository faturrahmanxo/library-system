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
        $books = [
            [
                "title" => "Pemrograman PHP",
                "author" => "Budi",
                "year" => 2024,
                "stock" => 5,
            ],
            [
                "title" => "Laravel untuk Pemula",
                "author" => "Michael",
                "year" => 2025,
                "stock" => 3,
            ],
            [
                "title" => "Basis Data",
                "author" => "Nana",
                "year" => 2025,
                "stock" => 2,
            ],
            [
                "title" => "Algoritma dan Pemrograman",
                "author" => "James",
                "year" => 2023,
                "stock" => 4,
            ],
            [
                "title" => "Pemrograman Berorientasi Objek",
                "author" => "Rangga",
                "year" => 2022,
                "stock" => 6,
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
