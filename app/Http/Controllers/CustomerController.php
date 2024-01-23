<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '0892635175262'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0892635175262'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '0892635175262'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '0892635175262'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0892635175262'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '0892635175262'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '0892635175262'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0892635175262'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '0892635175262'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '0892635175262'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0892635175262'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '0892635175262'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '0892635175262'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0892635175262'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '0892635175262'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '0892635175262'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0892635175262'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '0892635175262'],
        ];
        
        return view('Customer', compact('data'));
    }
}
