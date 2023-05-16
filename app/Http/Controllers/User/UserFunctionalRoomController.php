<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FunctionalHall;
use Illuminate\Support\Facades\Validator;
use Illuminate\support\facades\DB;




class UserFunctionalRoomController extends Controller
{
     public function displayRent(){
        $user_id = session('User')['user_id'];
        $rent = DB::table('functional_hall')->where('userid', $user_id)->get();
        return view('user.pages.booked.rentedhall', ['rent' => $rent]);
    }
    public function rent_room(Request $request)
    {
        $user = session()->get('User');
        $userid = $user['user_id']; // add a check to ensure that $user is not null before accessing its values
        // $user = auth()->user();
        if (!$user) {
            return redirect()->back()->with('failed', "User not found");
        }

        // Check if user's bookings is not expired
        $uncompleteEvent = FunctionalHall::where('userid', $user['user_id'])
                                        ->where('functional_intended_date', '>=', date('Y-m-d'))
                                        ->first();
        if ($uncompleteEvent) {
            return redirect()->back()->with('failed', 'You are not yet complete with your rent. Please complete your previous reservation before booking another one.');
        }

        // Check if user already has a pending reservation
        $pendingRent = FunctionalHall::where('userid', $user['user_id'])
                                    ->where('functional_status', '=', 'PENDING')
                                    ->first();
        if ($pendingRent) {
        return redirect()->back()->with('failed', 'You already have a pending rent. Please complete your previous reservation before booking another one.');
        }

        $rules = [
            'functional_intended_date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'after_or_equal:today',
                'before_or_equal:' . date('Y-m-d', strtotime('+3 days')),
            ],

            'functional_time' => 'required',
            'functional_event_name' => 'required',
            'functional_name_of_institution' => 'required',
            'reference' => [
                'integer',
                'required'
            ],
            'functional_no_of_participants' => [
                'integer',
                'between:1,100'
            ],

        ];

        $message = [
            'reference.required' => 'Please input the reference number of the payment',
            'reference.integer' => 'The reference must be integer only',
            'functional_event_name.required' => 'Please input the Name of the Event',
            'functional_name_of_institution.required' => 'Please input the Name of your Institution',
            'functional_intended_date.required' => 'Please input the intended date for reservation',
            'functional_intended_date.date' => 'Please input a valid date',
            'functional_intended_date.after_or_equal' => 'The intended date must be on or after today',
            'functional_intended_date.before_or_equal' => 'The intended date must be before or equal to 3 days after today',
            'functional_time.required' => 'Please select the intended time for reservation',
            'functional_no_of_participants.integer' => 'The number of visitors must be an integer',
            'functional_no_of_participants.between' => 'The number of visitors must be between 1 and 100',
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // get the current year
        $currentYear = date('Y');
        // extract the year from the intended date input
        $selectedYear = date('Y', strtotime($request->functional_intended_date));

        // check if the selected year is less than the current year
        if ($selectedYear < $currentYear) {
            return redirect()->back()->with('failed', 'The intended date must be in the current year or later.');
        }


        $functional_fname=$request->functional_fname;
        $functional_mname=$request->functional_mname;
        $functional_lname=$request->functional_lname;
        $functional_gender=$request->functional_gender;
        $functional_email=$request->functional_email;
        $functional_country=$request->functional_country;
        $functional_province=$request->functional_province;
        $functional_municipality=$request->functional_municipality;
        $functional_brgy=$request->functional_brgy;
        $functional_street=$request->functional_street;
        $functional_zipcode=$request->functional_zipcode;
        $functional_intended_date=$request->functional_intended_date;
        $functional_no_of_participants=$request->functional_no_of_participants;
        $functional_event_name=$request->functional_event_name;
        $functional_name_of_institution=$request->functional_name_of_institution;
        $functional_time=$request->functional_time;
        $functional_contactno=$request->functional_contactno;
        $reference=$request->reference;
        $functional_cancel_reason=$request->functional_cancel_reason;
        $functional_status='PENDING';
        // $functional_members=$request->functional_members;


        //limit the number of visitors
        $exceedNumberOfVisitors = FunctionalHall::sum('functional_no_of_participants');

        if ($exceedNumberOfVisitors > 100) {
        return redirect()->back()->with('failed', 'Sorry, We only accept 100 participants a day');
        }

        $existing_booking2 = FunctionalHall::where('functional_time', $functional_time)
        // ->where('functional_time', $functional_time)
        ->first();
        if($existing_booking2){
            return redirect()->back()->with('failed', ' Sorry, that booking slot is already taken. Please choose a different date/time.');
        }

        $functional = new FunctionalHall();
        $functional->userid = $userid;
        $functional->functional_fname=$functional_fname;
        $functional->functional_mname=$functional_mname;
        $functional->functional_lname=$functional_lname;
        $functional->functional_gender=$functional_gender;
        $functional->functional_email=$functional_email;
        $functional->functional_country=$functional_country;
        $functional->functional_province=$functional_province;
        $functional->functional_municipality=$functional_municipality;
        $functional->functional_brgy=$functional_brgy;
        $functional->functional_street=$functional_street;
        $functional->functional_zipcode=$functional_zipcode;
        $functional->functional_intended_date=$functional_intended_date;
        $functional->functional_no_of_participants=$functional_no_of_participants;
        $functional->functional_event_name=$functional_event_name;
        $functional->functional_name_of_institution=$functional_name_of_institution;
        $functional->functional_time=$functional_time;
        $functional->functional_contactno=$functional_contactno;
        $functional->functional_status=$functional_status;
        $functional->reference=$reference;
        $functional->functional_cancel_reason=$functional_cancel_reason;
        $functional->save(); // save the visit record to the database


        $sesRent =[
            'functional_id' => $functional ->functional_id,
            'functional_no_of_participants'=>$functional->functional_no_of_participants,
        ];
        session()->put('functional', $sesRent);

        if($functional){
            return redirect()->back()->with('success', 'Functional Hall has been rent successfully');
        }else{
            return redirect()->back()->with('failed', 'There is an error in processing your request. Please try again later.');
        }
}
}
