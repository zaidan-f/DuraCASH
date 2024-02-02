<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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

        return view('dashboard', compact('chartData'));
    }
}
