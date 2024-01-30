<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'Tissue', 'stok' => '100','kategori' => 'Lainnya', 'buy' => '8.000', 'sell' => '10.000'],
            ['name' => 'Minyak', 'stok' => '200','kategori' => 'Dapur', 'buy' => '9.000', 'sell' => '12.000'],
            ['name' => 'Sabun', 'stok' => '300','kategori' => 'Toilet', 'buy' => '5.000', 'sell' => '15.000'],
            ['name' => 'Tissue', 'stok' => '100','kategori' => 'Lainnya', 'buy' => '8.000', 'sell' => '10.000'],
            ['name' => 'Minyak', 'stok' => '200','kategori' => 'Dapur', 'buy' => '9.000', 'sell' => '12.000'],
            ['name' => 'Sabun', 'stok' => '300','kategori' => 'Toilet', 'buy' => '5.000', 'sell' => '15.000'],
            ['name' => 'Tissue', 'stok' => '100','kategori' => 'Lainnya', 'buy' => '8.000', 'sell' => '10.000'],
            ['name' => 'Minyak', 'stok' => '200','kategori' => 'Dapur', 'buy' => '9.000', 'sell' => '12.000'],
            ['name' => 'Sabun', 'stok' => '300','kategori' => 'Toilet', 'buy' => '5.000', 'sell' => '15.000'],
            ['name' => 'Tissue', 'stok' => '100','kategori' => 'Lainnya', 'buy' => '8.000', 'sell' => '10.000'],
            ['name' => 'Minyak', 'stok' => '200','kategori' => 'Dapur', 'buy' => '9.000', 'sell' => '12.000'],
            ['name' => 'Sabun', 'stok' => '300','kategori' => 'Toilet', 'buy' => '5.000', 'sell' => '15.000'],
        ];

        return view('Items', compact('data'));
    }
}
