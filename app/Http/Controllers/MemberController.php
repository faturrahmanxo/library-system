<?php
// tempat menyimpan data data member
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Andi',
            'Budi',
            'Citra',
            'Dewi',
            'Eko'
        ];
        
        return view('members.index', compact('members'));
    }

    public function show(int $id)
    {
        return 'ID members : ' . $id;
    }
}
