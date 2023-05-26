<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\users;
use App\Models\MembersModel;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Mail\UserVisitCancelled;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;



class UserVisitController extends Controller
{
    public function visit_form(){
        $userid = session('userid');
        return view('user.pages.book-visit.book', compact('userid'));
    }

    public function displayVisit(){
        $currentDate = date('Y-m-d');
        $user_id = session('User')['user_id'];
        $visit = DB::table('visits')->where('userid', $user_id)
        ->whereRaw('DATE(visits_intended_date) >= ?', [$currentDate])
        ->get();
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $currentDateTime = Carbon::now()->tz('UTC');
        return view('user.pages.profile.mybookings', ['visit' => $visit, 'users' => $users, 'currentDateTime' => $currentDateTime]);
    }

    public function displayVisitHistory(){
        $currentDate = date('Y-m-d');
        $user_id = session('User')['user_id'];
        $history = DB::table('visit')
        ->where('userid', $user_id)
        ->where('visits_status', '!=', 'PENDING')
        ->whereRaw('DATE(visits_intended_date) <= ?', [$currentDate])
        ->get();
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $currentDateTime = Carbon::now()->tz('UTC');
        return view('user.pages.profile.visithistory', ['users' => $users, 'history' => $history]);
    }


    public function reserve_visit(Request $request)
        {
            $user = session()->get('User');
            $userid = $user['user_id']; // add a check to ensure that $user is not null before accessing its values
            // $user = auth()->user();
            if (!$user) {
                return redirect()->back()->with('error', "User not found");
            }

            // Check if user's bookings is not expired
            $uncompleteVisit = Visit_Model::where('userid', $user['user_id'])
                                            ->where('visits_intended_date', '>=', date('Y-m-d'))
                                            ->first();
            if ($uncompleteVisit) {
                return redirect()->back()->with('error', 'You are not yet complete with your visitation. Please complete your previous reservation before booking another one.');
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
                'visits_no_of_visitors' => [
                    // 'integer',
                    'between:0,100'
                ],

            ];

            $message = [
                'visits_intended_date.required' => 'Please input the intended date for reservation',
                'visits_intended_date.date' => 'Please input a valid date',
                'visits_intended_date.after_or_equal' => 'The intended date must be on or after today',
                'visits_intended_date.before_or_equal' => 'The intended date must be before or equal to 3 days after today',
                'visits_time.required' => 'Please select the intended time for reservation',
                // 'visits_no_of_visitors.integer' => 'The number of visitors must be an integer',
                'visits_no_of_visitors.between' => 'The number of visitors must not be greater than 100',
            ];

            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                return redirect()->back()->with('validationMessages', $message);
            }

            // get the current year
            $currentYear = date('Y');
            // extract the year from the intended date input
            $selectedYear = date('Y', strtotime($request->visits_intended_date));

            // check if the selected year is less than the current year
            if ($selectedYear < $currentYear) {
                return redirect()->back()->with('error', 'The intended date must be in the current year or later.');
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
            $contact_no=$request->contact_no;
            $cancel_reason=$request->cancel_reason;
            $visits_status='PENDING';

            //limit the number of visitors
            $exceedNumberOfVisitors = Visit_Model::sum('visits_no_of_visitors');

            if ($exceedNumberOfVisitors > 100) {
            return redirect()->back()->with('error', 'Sorry, We only accept 100 visitors a day');
            }

            $existing_booking2 = Visit_Model::where('visits_time', $visits_time)
            ->first();
            if($existing_booking2){
                return redirect()->back()->with('error', ' Sorry, that booking slot is already taken. Please choose a different date/time.');
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
            $visit->contact_no=$contact_no;
            $visit->cancel_reason=$cancel_reason;
            $visit->visits_status=$visits_status;

            $visit->save();


            // $sesVisit =[
            //     'visits_id' => $visit ->visits_id,
            //     'visits_no_of_visitors'=>$visit->visits_no_of_visitors,
            // ];
            // session()->put('visit', $sesVisit);

            if ($visit) {
                return redirect()->back()->with('success', 'Book successfully. Wait for the email for your status');
            }else{
                return redirect()->back()->with('error', 'There is an error in processing your reservation. Please try again later.');
            }
    }


    public function add_members(Request $request)
    {
        // Get the visit ID from the session
        $visits_id = session()->get('visits_id');

        // Check that the visit ID was retrieved successfully
        if (!$visits_id) {
            return redirect()->back()->with('error', 'Visit not found.');
        }

        // Get the number of visitors from the session
        $visits_no_of_visitors = session()->get('visits_no_of_visitors');

        // Check that the number of visitors is not empty
        if (!$visits_no_of_visitors) {
            return redirect()->back()->with('error', 'Number of visitors not found.');
        }

        // Validate the input
        $rules=[
            'members.*.members_fname' => 'required',
            'members.*.members_lname' => 'required',
            'members.*.members_gender' => 'required',
            'members.*.members_age' => 'required',
        ];
        $message=[
            'members.*.members_fname.required' => 'First name is required',
            'members.*.members_lname.required' => 'Last name is required',
            'members.*.members_gender.required' => 'Gender is required',
            'members.*.members_age.required' => 'Age is required',
        ];

        $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $members_fname=$request->members_fname;
            $members_mname=$request->members_mname;
            $members_lname=$request->members_lname;
            $members_gender=$request->members_gender;
            $members_age=$request->members_age;

            $member = new MembersModel();
            $member->visit_id=$visits_id;
            $member->members_fname=$members_fname;
            $member->members_mname=$members_mname;
            $member->members_lname=$members_lname;
            $member->members_gender=$members_gender;
            $member->members_age=$members_age;

            if($member){
                return redirect('user/book')->with('success', 'Visit added successfully');
            }else{
                return redirect()->back()->with('failed', 'There is an error in processing your reservation. Please try again later.');
            }
    }

    public function user_visit(){
        $user_id = session('User')['user_id'];
        $visithist = DB::table('visit')->where('userid', $user_id)->get();
        return view('user.pages.book-visitation.book', ['visit' => $visithist]);
    }

    public function cancel_visit(Request $request)
    {
        $admin = DB::table('users')->first();
        $admin_id = $admin->user_id;
        $visit = DB::table('visit')->where('user_id', $admin_id)->where('visits_status', 'PENDING')->first();
        if($visit){
            $reason = $request->input('cancel_reason');
            $status=['visits_status' => 'CANCELLED', 'cancel_reason' => $reason];
            $success=DB::table('visit')->where('user_id', $admin_id)->where('visits_status', 'PENDING')->update($status);
            if($success){
                $admin_email = 'noblezalycamay18@gmail.com'; // replace with the email address of the admin
                $visit_id = $visit->visit_id;
                $visit_link = url("http://127.0.0.1:8000/admin/visit/$visit_id"); // replace with the URL of the admin page to approve/cancel visits
                if(!empty($admin_email)){
                    Mail::to($admin_email)->send(new UserVisitCancelled($visit_link));
                }
                return redirect()->back()->with('success', "Reservation cancelled and email notification sent to admin.");
            }else{
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
            }
        }
        else{
            return redirect()->back()->with('failed', "Failed to cancel reservation.");
        }
    }

    public function booking_history()
    {
        $currentDate = date('Y-m-d');
        $visits = DB::table('visit')
                    ->where('visits_status', 'CANCELLED')
                    ->orWhere('visits_status', 'APPROVED')
                    ->whereDate('visits_intended_date', '<  ', $currentDate)
                    ->get();
        return view('admin.pages.visit.history', ['visit' => $visits]);
    }
}
