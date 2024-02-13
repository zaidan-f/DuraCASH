<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
        public function index()
        {
            $data = [
                ['kategori' => 'Lainnya','deskripsi' => 'Kategori lain'],
                ['kategori' => 'Dapur','deskripsi' => 'Barang untuk kebutuhan dapur'],
                ['kategori' => 'Toilet','deskripsi' => 'Barang untuk kebutuhan toilet/kamar mandi'],
            ];
    
            return view('category', compact('data'));
        }
    
}
