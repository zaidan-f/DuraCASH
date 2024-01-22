<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '555-123-4567'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '555-123-4567'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '555-123-4567'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '555-123-4567'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '555-123-4567'],
            ['name' => 'John Doe', 'email' => 'john@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '555-123-4567'],
        ];


        if (request()->ajax()) {
            return response()->json(['data' => $data]);
        }
        
        return view('Customer', compact('data'));
    }
}
