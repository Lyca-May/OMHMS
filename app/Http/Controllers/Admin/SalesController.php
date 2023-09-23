<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use App\Models\SalesRent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function displaySouvenirSales(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();

        $souvenirSales = Sales::with('user', 'souvenirReservation')
        ->get();
        return view('admin.pages.sales.sales', ['users' => $users, 'souvenirSales' => $souvenirSales]);
    }
    public function displayGenerateForm(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();

        return view('admin.pages.sales.generate-report', ['users' => $users]);
    }

    public function generateReport(Request $request)
    {
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();

        $report_type = $request->input('report_type');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $souvenirSales = null;
        $grandTotal = null;
        $rentGrandTotal = null;
        $totalCost = null;
        $profit = null;
        $rentSales = null; // Define all variables initially

        if ($report_type == "rent_sales") {
            // Query the database for sales data within the selected date range
            $rentSales = SalesRent::with('user', 'rent_hall')->where('status', "PAID")
                ->whereBetween('sale_date', [$startDate, $endDate])
                ->get();

            // Calculate the grand total for rent sales
            $rentGrandTotal = $rentSales->sum('total_amount');
        } elseif ($report_type == "souvenir_sales") {
            // Query the database for sales data within the selected date range
            $souvenirSales = Sales::with('user', 'souvenirReservation')->where('status', "PAID")
                ->whereBetween('sale_date', [$startDate, $endDate])
                ->get();

            // Calculate the grand total, total cost, and profit for souvenir sales
            $grandTotal = $souvenirSales->sum('total_price');
            $totalCost = $souvenirSales->sum('price');
            $profit = $grandTotal - $totalCost;
        }

        // Pass the sales data and calculated values to a view for rendering
        return view('admin.pages.sales.report', compact('souvenirSales', 'grandTotal',  'rentGrandTotal',  'totalCost', 'profit', 'users', 'startDate', 'endDate', 'report_type', 'rentSales'));
    }


    public function displayRentSales(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();

        $rentSales = SalesRent::with('user', 'rent_hall')->where('status', "PAID")
        ->get();
        return view('admin.pages.sales.rent-sales', ['users' => $users, 'rentSales' => $rentSales]);
    }

}
