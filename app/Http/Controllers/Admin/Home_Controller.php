<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Home_Controller extends Controller
{
    // Controller method to retrieve booking data based on selected date and place
public function visualizeBookings(Request $request)
{
    $municipalities = DB::table('visit')
            ->select('visits_municipality')
            ->distinct()
            ->orderBy('visits_municipality', 'asc')
            ->get();

        $query = DB::table('visit');
        $municipalityFilter = $request->input('visits_municipality');
        if ($municipalityFilter) {
            $query->where('visits_municipality', '=', $municipalityFilter);
        }

        $visits = $query->select(
                'visits_municipality',
                DB::raw('COUNT(*) as total_visits')
            )
            ->groupBy('visits_municipality')
            ->orderBy('total_visits', 'desc')
            ->get();

        $totalVisits = $visits->sum('total_visits');

        $chartData = $visits->map(function ($visit) use ($totalVisits) {
            return [
                'visits_municipality' => $visit->visits_municipality,
                'total_visits' => $visit->total_visits,
                'percentage' => round($visit->total_visits / $totalVisits * 100, 2)
            ];
        });

        return view('admin.pages.charts.visit-charts', compact('municipalities', 'visits', 'chartData'));
    }

}
