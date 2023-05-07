<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentApproved;
use App\Mail\RentCancelled;


class FunctionalHallController extends Controller
{
    //get
    public function index()
    {
        $rent = DB::table('functional_hall')->where('functional_status', 'PENDING')->get();
        return view('admin.pages.functional.functional-table', ['functional' => $rent]);
    }
    public function approved_visit()
    {
        $rent = DB::table('functional_hall')->where('functional_status', 'APPROVED')->get();
        return view('admin.pages.functional.rent-approved', ['rent' => $rent]);
    }
    public function cancelled_visit()
    {
        $visits = DB::table('visit')->where('visits_status', 'CANCELLED')->get();
        return view('admin.pages.visit.cancelled', ['visit' => $visits]);
    }
    public function rent_history()
    {
        $currentDate = date('Y-m-d');
        $visits = DB::table('visit')
                    ->where('visits_status', 'CANCELLED')
                    ->orWhere('visits_status', 'APPROVED')
                    ->whereDate('visits_intended_date', '<  ', $currentDate)
                    ->get();
        return view('admin.pages.visit.history', ['visit' => $visits]);
    }



    public function approve_status(){
        $user = DB::table('users')->first();
        $user_id = $user->user_id;
        $rent = DB::table('functional_hall')->where('userid', $user_id)->where('functional_status', 'PENDING')->first();

        if($rent){
            $status=['functional_status' => 'APPROVED'];
            $success=DB::table('functional_hall')->where('userid', $user_id)->where('functional_status', 'PENDING')->update($status);

            if($success){
                // Generate link and send to visitor's email
                $loggedUser = session()->get('User');
                if($loggedUser){ // if user is logged in
                    $link = 'http://127.0.0.1:8000/user/rentedhall/';
                }else{ // if user is not logged in
                    $link = 'http://127.0.0.1:8000/';
                }

                if($user){
                    Mail::to($user->user_email)->send(new RentApproved($link));
                    return redirect()->back()->with('success', "You have approved the reserved visit and sent an email to the user with a link");
                }else{
                    return redirect()->back()->with('failed', "Empty email");
                }
            }else{
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
            }
        }else{
            return redirect()->back()->with('failed', "Failed to send email to the user");
        }
    }

    public function cancel_status(Request $request)
    {

        $user = DB::table('users')->first();
        $user_id = $user->user_id;
        $functional = DB::table('functional_hall')->where('userid', $user_id)->where('functional_status', 'PENDING')->first();
        if($functional){
            $reason = $request->input('functional_cancel_reason');
            $status=['visits_status' => 'CANCELLED', 'functional_cancel_reason' => $reason];
            $success=DB::table('functional_hall')->where('userid', $user_id)->where('functional_status', 'PENDING')->update($status);
            if($success){
                $loggedUser = session()->get('User');
                if($loggedUser){ // if user is logged in
                    $link = 'http://127.0.0.1:8000/user/rentedhall/';
                }else{ // if user is not logged in
                    $link = 'http://127.0.0.1:8000/';
                }
                if(!empty($user->functional_email)){
                    Mail::to($user->functional_email)->send(new RentCancelled($link));
                }
                return redirect()->back()->with('success', "Reservation cancelled and email notification sent to user.");
            }else{
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
            }
        }
        else{
            return redirect()->back()->with('failed', "Failed to cancel reservation.");
        }
    }



}

