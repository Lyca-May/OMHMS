<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reserved_Souvenir;
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
        $reservedSouvenirs = Reserved_Souvenir::with('user', 'souvenir')->where('status', 'RESERVED')->get();


        return view('admin.pages.reservedsouvenirs.reserved_souvenirs', compact('currentDateTime', 'users', 'reservedSouvenirs'));
    }

    public function update_reservedSouvenir(Request $request, $souvenir_reservations_id)
    {
        $souvenir_reservation = Reserved_Souvenir::where('souvenir_reservations_id', $souvenir_reservations_id)
            ->where('status', 'RESERVED')
            ->first();

        if ($souvenir_reservation) {
            $souvenir_reservation->update(['status' => 'PAID']);

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
