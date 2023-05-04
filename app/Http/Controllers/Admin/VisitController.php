<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\VisitApproved;
use App\Mail\VisitCancelled;


class VisitController extends Controller
{
    //get
    public function index()
    {
        $visits = DB::table('visit')->where('visits_status', 'PENDING')->get();
        return view('admin.pages.visit.visit', ['visit' => $visits]);
    }
    public function approved_visit()
    {
        $visits = DB::table('visit')->where('visits_status', 'APPROVED')->get();
        return view('admin.pages.visit.approved', ['visit' => $visits]);
    }
    public function cancelled_visit()
    {
        $visits = DB::table('visit')->where('visits_status', 'CANCELLED')->get();
        return view('admin.pages.visit.cancelled', ['visit' => $visits]);
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


    public function admin_home(){
        $visitCount = DB::table('visit')->where('visits_intended_date', '<', now())->count();
        $membersCount = DB::table('visit')->sum('visits_no_of_visitors');
        return view('admin.pages.home', compact('visitCount', 'membersCount'));


        ///
    }
    public function approve_status(){
        $visits_email = session('User')['user_email'];
        $user_id = session('User')['user_id'];
        $visit = DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->first();


            if($visit){
            $status=['visits_status' => 'APPROVED'];
                $success=DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->update($status);
                if($success){
                    // Generate link and send to visitor's email
                    $link = 'http://127.0.0.1:8000/user/bookedvisit/';
                    if(!empty($visits_email)){
                        Mail::to($visits_email)->send(new VisitApproved($link));
                        return redirect()->back()->with('success', "You have approved the reserved visit and sent an email to the user with a link");
                    }else{
                        return redirect()->back()->with('failed', "Empty email");
                    }
                }else{
                    return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
                }
            }
            else{
                return redirect()->back()->with('failed', "Failed to send email to the user");
            }
    }

    public function cancel_status(Request $request)
    {
        
        $user_id = session('User')['user_id'];
        $visits_email = session('User')['user_email'];
        $visit = DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->first();
        if($visit){
            $reason = $request->input('cancel_reason');
            $status=['visits_status' => 'CANCELLED', 'cancel_reason' => $reason];
            $success=DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->update($status);
            if($success){
                $link = 'http://127.0.0.1:8000/user/bookedvisit/';
                if(!empty($visits_email)){
                    Mail::to($visits_email)->send(new VisitCancelled($link));
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

