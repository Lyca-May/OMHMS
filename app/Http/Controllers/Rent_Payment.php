<?php

namespace App\Http\Controllers;

use App\Models\Function_Hall;
use App\Models\Rent_Payment_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Rent_Payment extends Controller
{

    public function edit($rentid)
    {
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $payment = DB::table('rent_payment')->where('rentid', $rentid)->first();
        return view('user.pages.landingpage1.booking.rent_payment', compact('payment', 'users'));
    }
    public function update(Request $request, $rentid)
    {
        $request->validate([
            'userid' => 'required',
            'downpayment' => 'required',
            'add_service_payment' => 'required',
            'others_payment' => 'required',
            'total_payment' => 'required',
            'full_payment' => 'required',
            'proof_of_payment' => 'required',
            'gcash_reference' => 'required',
        ]);

        DB::table('rent_payment')->where('rentid', $rentid)->update([
            'userid' => $request->userid,
            'downpayment' => $request->downpayment,
            'add_service_payment' => $request->add_service_payment,
            'others_payment' => $request->others_payment,
            'total_payment' => $request->total_payment,
            'full_payment' => $request->full_payment,
            'proof_of_payment' => $request->proof_of_payment,
            'gcash_reference' => $request->gcash_reference,
        ]);

        return redirect('')->route('rent_payment.show', ['rentid' => $rentid])->with('success', 'Rent payment updated successfully.');
    }

}
