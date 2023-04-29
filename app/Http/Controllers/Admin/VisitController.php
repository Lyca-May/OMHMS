<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;


class VisitController extends Controller
{
    //get
    public function index()
    {
        $visits = DB::table('visits')->get();
        return view('admin.pages.visit', ['visit' => $visits]);
    }
    public function reserve_visit(Request $request, $user_id)
    {
        $user = users::where('user_id', $user_id)
        ->where('account_status', 'VERIFIED')
        ->first();

        if($user){
            $validatedData = $request->validate([
                'visits_fname' => 'required',
                'visits_mname' => 'required',
                'visits_lname' => 'required',
                'visits_country' => 'required',
                'visits_province' => 'required',
                'visits_municipality' => 'required',
                'visits_brgy' => 'required',
                'visits_street' => 'required',
                'visits_zipcode' => 'required',
                'visits_intended_date' => 'required',
                'visits_time' => 'required',
                'visits_birthdate' => 'required',
                'visits_contactno' => 'required',
                'visits_no_of_visitors' => 'required',
                // 'visits_name_of_institution' => 'required',
            ]);

            $visit = new Visit_Model([
                'visits_fname' => $validatedData['visits_fname'],
                'visits_mname' => $validatedData['visits_mname'],
                'visits_lname' => $validatedData['visits_lname'],
                'visits_country' => $validatedData['visits_country'],
                'visits_province' => $validatedData['visits_province'],
                'visits_municipality' => $validatedData['visits_municipality'],
                'visits_brgy' => $validatedData['visits_brgy'],
                'visits_street' => $validatedData['visits_street'],
                'visits_zipcode' => $validatedData['visits_zipcode'],
                'visits_intended_date' => $validatedData['visits_intended_date'],
                'visits_time' => $validatedData['visits_time'],
                'visits_birthdate' => $validatedData['visits_birthdate'],
                'visits_contactno' => $validatedData['visits_contactno'],
                // 'visits_no_of_visitors' => $validatedData['vis'],
                'visits_name_of_institution' => $validatedData[''],
                'user_id' => $user->user_id
            ]);
            $visit->visits_status = 'pending'; // set status as pending by default
            $visit->save();

            return redirect()->back()->with('success', 'Visit reserved successfully.');
        }else{
            return redirect()->back()->with('failed', 'Something went wrong.');

        }
    }
}
