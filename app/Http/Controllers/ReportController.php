<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $data = [
            ['tanggal' => '1 Jan 2024', 'produk' => 'Minyak', 'harga_jual' => '8.000', 'qty_jual' => '100',  'total' => '800.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Air Mineral', 'harga_jual' => '10.000', 'qty_jual' => '100',  'total' => '1.000.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Sabun', 'harga_jual' => '5.000', 'qty_jual' => '100',  'total' => '500.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Minyak', 'harga_jual' => '8.000', 'qty_jual' => '100',  'total' => '800.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Air Mineral', 'harga_jual' => '10.000', 'qty_jual' => '100',  'total' => '1.000.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Sabun', 'harga_jual' => '5.000', 'qty_jual' => '100',  'total' => '500.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Minyak', 'harga_jual' => '8.000', 'qty_jual' => '100',  'total' => '800.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Air Mineral', 'harga_jual' => '10.000', 'qty_jual' => '100',  'total' => '1.000.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Sabun', 'harga_jual' => '5.000', 'qty_jual' => '100',  'total' => '500.000'],            ['tanggal' => '1 Jan 2024', 'produk' => 'Minyak', 'harga_jual' => '8.000', 'qty_jual' => '100',  'total' => '800.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Air Mineral', 'harga_jual' => '10.000', 'qty_jual' => '100',  'total' => '1.000.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Sabun', 'harga_jual' => '5.000', 'qty_jual' => '100',  'total' => '500.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Minyak', 'harga_jual' => '8.000', 'qty_jual' => '100',  'total' => '800.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Air Mineral', 'harga_jual' => '10.000', 'qty_jual' => '100',  'total' => '1.000.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Sabun', 'harga_jual' => '5.000', 'qty_jual' => '100',  'total' => '500.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Minyak', 'harga_jual' => '8.000', 'qty_jual' => '100',  'total' => '800.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Air Mineral', 'harga_jual' => '10.000', 'qty_jual' => '100',  'total' => '1.000.000'],
            ['tanggal' => '1 Jan 2024', 'produk' => 'Sabun', 'harga_jual' => '5.000', 'qty_jual' => '100',  'total' => '500.000'],
        ];



        $chartData = [
            'labels' => [' Minyak', 'Sabun', 'Air Mineral', 'Tissue', 'Beras'],
            'data' => [],
        ];

    return view('report', compact('data', 'chartData'));
    }
}
