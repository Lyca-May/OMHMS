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

        // Check if user's bookings is not expired
        $uncompleteVisit = Visit_Model::where('userid', $user['user_id'])
                                          ->where('visits_intended_date', '>=', date('Y-m-d'))
                                          ->first();
        if ($uncompleteVisit) {
            return redirect()->back()->with('failed', 'You are not yet complete with your visitation. Please complete your previous reservation before booking another one.');
        }

        // Check if user already has a pending reservation
        $pendingVisit = Visit_Model::where('userid', $user['user_id'])
                                    ->where('visits_status', '=', 'PENDING')
                                     ->first();
        if ($pendingVisit) {
        return redirect()->back()->with('failed', 'You already have a pending reservation. Please complete your previous reservation before booking another one.');
        }



        $rules = [
            'visits_intended_date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'after_or_equal:today',
                'before_or_equal:' . date('Y-m-d', strtotime('+3 days')),
            ],

            'visits_time' => 'required',

        ];

        $message = [
            'visits_intended_date.required' => 'Please input the intended date for reservation',
            'visits_intended_date.date' => 'Please input a valid date',
            'visits_intended_date.after_or_equal' => 'The intended date must be on or after today',
            'visits_intended_date.before_or_equal' => 'The intended date must be before or equal to 3 days after today',
            'visits_time.required' => 'Please select the intended time for reservation',

        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            // get the current year
        $currentYear = date('Y');
        // extract the year from the intended date input
        $selectedYear = date('Y', strtotime($request->visits_intended_date));

        // check if the selected year is less than the current year
        if ($selectedYear < $currentYear) {
            return redirect()->back()->with('failed', 'The intended date must be in the current year or later.');
        }

        $visits_fname=$request->visits_fname;
        $visits_mname=$request->visits_mname;
        $visits_lname=$request->visits_lname;
        $gender=$request->gender;
        $visits_email=$request->visits_email;
        $visits_country=$request->visits_country;
        $visits_province=$request->visits_province;
        $visits_municipality=$request->visits_municipality;
        $visits_brgy=$request->visits_brgy;
        $visits_street=$request->visits_street;
        $visits_zipcode=$request->visits_zipcode;
        $visits_intended_date=$request->visits_intended_date;
        $visits_no_of_visitors=$request->visits_no_of_visitors;
        $visits_name_of_institution=$request->visits_name_of_institution;
        $visits_time=$request->visits_time;
        // $visits_birthdate=$request->visits_birthdate;
        $visits_status='PENDING';
        // $visits_members=$request->visits_members;

        //Check if the selected date and time is already taken by other user
        $existing_booking = Visit_Model::where('visits_intended_date', $visits_intended_date)
        ->where('visits_time', $visits_time)
        ->first();

        if($existing_booking){
            return redirect()->back()->with('failed', ' Sorry, that booking slot is already taken. Please choose a different date/time.');
        }

        $visit = new Visit_Model();
        $visit->userid = $userid;
        $visit->visits_fname=$visits_fname;
        $visit->visits_mname=$visits_mname;
        $visit->visits_lname=$visits_lname;
        $visit->gender=$gender;
        $visit->visits_email=$visits_email;
        $visit->visits_country=$visits_country;
        $visit->visits_province=$visits_province;
        $visit->visits_municipality=$visits_municipality;
        $visit->visits_brgy=$visits_brgy;
        $visit->visits_street=$visits_street;
        $visit->visits_zipcode=$visits_zipcode;
        $visit->visits_intended_date=$visits_intended_date;
        $visit->visits_no_of_visitors=$visits_no_of_visitors;
        $visit->visits_name_of_institution=$visits_name_of_institution;
        $visit->visits_time=$visits_time;
        // $visit->visits_birthdate=$visits_birthdate;
        $visit->visits_status=$visits_status;
        $visit->save(); // save the visit record to the database

        if($visit){
            return redirect('user/home')->with('success', 'Visit added successfully');
        }else{
            return redirect('user/book')->with('failed', 'There is an error in processing your reservation. Please try again later.');
        }
        // $visit->visits_members=$visits_members;



        // $visit->visits_contactno = $request->visits_contactno;
        // $visit->visits_no_of_visitors = $request->visits_no_of_visitors;
        // $visit->visits_members = $request->visits_members;
        // $visit->visits_birthdate = $request->visits_birthdate;
        // $visit->visits_name_of_institution = $request->visits_name_of_institution;
        // $visit->visits_time = $request->visits_time;

    }
    public function user_visit(){
        $user_id = session('User')['user_id'];
        $visithist = DB::table('visit')->where('userid', $user_id)->get();
        return view('user.pages.book-visitation.book', ['visit' => $visithist]);
    }
}
