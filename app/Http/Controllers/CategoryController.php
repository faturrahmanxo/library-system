<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Action',
            'Basis Data',
            'Jaringan',
            'Pemrograman',
        ];

        return view('categories.index', compact('categories'));
    }
}
