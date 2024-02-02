<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Get the current month and year
        $currentMonth = date('m');
        $currentYear = date('Y');

        // Create an array to store labels for each month
        $labels = [];

        // Generate labels for each month of the current year
        for ($month = 1; $month <= $currentMonth; $month++) {
            // Format the month as two digits
            $formattedMonth = sprintf('%02d', $month);

            // Create the label in the format 'Month Year'
            $label = date('F Y', strtotime("{$currentYear}-{$formattedMonth}-01"));

            // Add the label to the array
            $labels[] = $label;
        }

        $chartData = [
            'labels' => $labels,
            'data' => [],
        ];

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

        return view('report', compact('data', 'chartData'));
    }
}
