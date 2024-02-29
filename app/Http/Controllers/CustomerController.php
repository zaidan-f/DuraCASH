<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'John Doe', 'alamat' => 'Malang', 'phone' => '0892635175262'],
            ['name' => 'Jane Smith', 'alamat' => 'Malang', 'phone' => '0892635175262'],
            ['name' => 'Bob Johnson', 'alamat' => 'Malang', 'phone' => '0892635175262'],
        ];
        
        return view('Customer', compact('data'));
    }
}
