<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class SalesReportController extends Controller
{
    public function index()
    {
        return view('admin.sales_report.index');
    }

    public function generateReport(Request $request)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $totalSales = Order::totalSales($validated['start_date'], $validated['end_date']);
        return view('admin.sales_report.result', compact('totalSales'));
    }
}

