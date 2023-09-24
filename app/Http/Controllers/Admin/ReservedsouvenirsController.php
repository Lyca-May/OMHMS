<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reserved_Souvenir;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Carbon\Carbon;

class ReservedsouvenirsController extends Controller
{
    public function admin_reservedsouvenirs()
    {
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $reservedSouvenirs = Reserved_Souvenir::with('user', 'souvenir')->where('status', 'PENDING')->get();


        return view('admin.pages.reservedsouvenirs.reserved_souvenirs', compact('currentDateTime', 'users', 'reservedSouvenirs'));
    }
    public function admin_souvenirspurchasedhistory()
    {
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();


        return view('admin.pages.reservedsouvenirs.souvenirpurchased', compact('currentDateTime', 'users'));
    }

    public function admin_souvenirsales()
    {
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();


        return view('admin.pages.reservedsouvenirs.souvenirsales', compact('currentDateTime', 'users'));
    }



    public function update_reservedSouvenir(Request $request, $souvenir_reservations_id)
{
    $souvenir_reservation = Reserved_Souvenir::where('souvenir_reservations_id', $souvenir_reservations_id)
        ->where('status', 'RESERVED')
        ->first();

    if ($souvenir_reservation) {
        $souvenir_reservation->update(['status' => 'PAID']);

        // Now, update the corresponding record in the sales table
<<<<<<< Updated upstream
        $sale = Sales::where('souvenirReservations_id', $souvenir_reservations_id)->first();

        if ($sale) {
            $sale->update(['status' => 'PAID']);
        }
=======
        // $sale = Sales::where('souvenirReservations_id', $souvenir_reservations_id)->first();

        // if ($sale) {
        //     $sale->update(['status' => 'PAID']);
        // }
>>>>>>> Stashed changes

        return redirect()->back()->with('success', 'Reserved souvenir item has been paid successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update souvenir item.');
    }
}

    public function cancel_reservedSouvenir(Request $request, $souvenir_reservations_id)
    {
        $souvenir_reservation = Reserved_Souvenir::where('souvenir_reservations_id', $souvenir_reservations_id)
            ->where('status', 'RESERVED')
            ->first();

        if ($souvenir_reservation) {
            $souvenir_reservation->update(['status' => 'CANCELLED']);

            return redirect()->back()->with('success', 'Reserved souvenir item has been paid successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update souvenir item.');
        }
    }


}
