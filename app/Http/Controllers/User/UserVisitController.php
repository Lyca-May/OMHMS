<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserVisitController extends Controller
{
    public function visit_form(){
        $userid = session('userid');
        return view('user.pages.book-visit.book', compact('userid'));
    }

    public function displayVisit(){
        $user_id = session('User')['user_id'];
        $visit = DB::table('visit')->where('userid', $user_id)->get();
        return view('user.pages.booked.bookedvisit', ['visit' => $visit]);
    }

    public function reserve_visit(Request $request)
    {
        $user = session()->get('User');
        $userid = $user['user_id']; // add a check to ensure that $user is not null before accessing its values
        if (!$user) {
            return redirect()->back()->with('failed', "User not found");
        }

        $rules = [
            // 'visits_fname' => 'required',
            // 'visits_mname' => 'required',
            // 'visits_lname' => 'required',
            'visits_country' => 'required',
            'visits_province' => 'required',
            'visits_municipality' => 'required',
            'visits_brgy' => 'required',
            'visits_street' => 'required',
            'visits_zipcode' => 'required|numeric',
            'visits_intended_date' => 'required',
            'visits_time' => 'required',
            // 'visits_birthdate' => 'required',
            'visits_no_of_visitors' => 'required',
            'visits_contactno' => 'required',
        ];
        $message = [
            // 'visits_fname.required' => 'Please input your First Name',
            // 'visits_mname.required' => 'Please input your Middle Name',
            // 'visits_lname.required' => 'Please input your Last Name',
            'visits_country.required' => 'Please input your Country',
            'visits_province.required' => 'Please input your Province',
            'visits_municipality.required' => 'Please input your Municipality',
            'visits_brgy.required' => 'Please input your Barangay',
            'visits_street.required' => 'Please input your Street',
            'visits_zipcode.required' => 'Please input the Zipcode of your municipality',
            'visits_intended_date.required' => 'Please input the intended date for reservation',
            'visits_time.required' => 'Please select the intended time for reservation',
            // 'visits_birthdate.required' => 'Please input your birth date',
            'visits_no_of_visitors.required' => 'Input the member of your team',
            'visits_contactno.required' => 'We need your contact Number. Please fill this field',
            // 'visits_contactno.numeric' => 'It must be numbers. Please fill this field',
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $user_id = $request->user_id;
        // $user = users::find($user_id);
        // if (!$user) {
        //     return redirect()->back()->with('error', 'User not found!');
        // }

        $visit = new Visit_Model();
        $visit->userid = $userid;
        // $visit->userid = auth()->id();
        $visit->visits_fname = strtoupper($request->visits_fname);
        $visit->visits_mname = strtoupper($request->visits_mname);
        $visit->visits_lname = strtoupper($request->visits_lname);
        $visit->visits_country = strtoupper($request->visits_country);
        $visit->visits_province = strtoupper($request->visits_province);
        $visit->visits_municipality = strtoupper($request->visits_municipality);
        $visit->visits_brgy = strtoupper($request->visits_brgy);
        $visit->visits_street = strtoupper($request->visits_street);
        $visit->visits_zipcode = $request->visits_zipcode;
        $visit->visits_intended_date = $request->visits_intended_date;
        $visit->visits_contactno = $request->visits_contactno;
        $visit->visits_no_of_visitors = $request->visits_no_of_visitors;
        $visit->visits_birthdate = $request->visits_birthdate;
        $visit->visits_name_of_institution = $request->visits_name_of_institution;
        $visit->visits_time = $request->visits_time;
        $visit->visits_status = 'PENDING';
        // $visit->visits_time = $request->visits_time;
        $visit->save(); // save the visit record to the database

        if($visit){
            return redirect('user/home')->with('success', 'Visit added successfully');
        }else{
            return redirect('user/book')->with('failed', 'There is an error in processing your reservation. Please try again later.');
        }
    }
}
