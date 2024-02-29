<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $itemData = [
            //transaction table
            ['name' => 'Tissue', 'qty' => '100', 'sell' => '8.000', 'total' => '10.000'],
            ['name' => 'Minyak', 'qty' => '200', 'sell' => '9.000', 'total' => '12.000'],
            ['name' => 'Sabun', 'qty' => '300', 'sell' => '5.000', 'total' => '15.000'],
            ['name' => 'Tissue', 'qty' => '100', 'sell' => '8.000', 'total' => '10.000'],
            ['name' => 'Minyak', 'qty' => '200', 'sell' => '9.000', 'total' => '12.000'],
            ['name' => 'Sabun', 'qty' => '300', 'sell' => '5.000', 'total' => '15.000'],
        ];

        $customerData = [
            //customer table
            ['namecust' => 'John Doe', 'email' => 'john@example.com', 'phone' => '0892635175262'],
            ['namecust' => 'Jane Smith', 'email' => 'jane@example.com', 'phone' => '0892635175262'],
            ['namecust' => 'Bob Johnson', 'email' => 'bob@example.com', 'phone' => '0892635175262'],
        ];

        $addItems = [
            ['nameitem' => 'Tissue', 'stok' => '100', 'buy' => '8.000', 'sell' => '10.000'],
            ['nameitem' => 'Minyak', 'stok' => '200', 'buy' => '9.000', 'sell' => '12.000'],
            ['nameitem' => 'Sabun', 'stok' => '300', 'buy' => '5.000', 'sell' => '15.000'],
        ];

        return view('transaction', compact('itemData', 'customerData', 'addItems'));
    }
}
