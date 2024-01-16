<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'Vaganza', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Mega', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Kuasa', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Super', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Kilo', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Rakyat', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Vaganza', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Mega', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Kuasa', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Super', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Kilo', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
            ['name' => 'Rakyat', 'alamat' => 'Malang', 'deskripsi' => 'Toko Kecil', 'telephone' => '08412847912854'],
        ];

        return view('Store', compact('data'));
    }
}
