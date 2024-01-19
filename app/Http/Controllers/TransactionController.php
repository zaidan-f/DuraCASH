<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => 'Tissue', 'qty' => '100', 'sell' => '8.000', 'total' => '10.000'],
            ['name' => 'Minyak', 'qty' => '200', 'sell' => '9.000', 'total' => '12.000'],
            ['name' => 'Sabun', 'qty' => '300', 'sell' => '5.000', 'total' => '15.000'],
            ['name' => 'Tissue', 'qty' => '100', 'sell' => '8.000', 'total' => '10.000'],
            ['name' => 'Minyak', 'qty' => '200', 'sell' => '9.000', 'total' => '12.000'],
            ['name' => 'Sabun', 'qty' => '300', 'sell' => '5.000', 'total' => '15.000'],
        ];

        return view('transaction', compact('data'));
    }
}
