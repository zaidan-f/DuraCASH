<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $chartData = [
            'labels' => [' Minyak', 'Sabun', 'Air Mineral', 'Tissue', 'Beras'],
            'data' => [],
        ];

        return view('dashboard', compact('chartData'));
    }
}
