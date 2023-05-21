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

        // $visits = Visit_Model::with('user.avatar')->where('visits_status', 'PENDING')->get();
        // $visits = DB::table('visit')->where('visits_status', 'PENDING')->get();
        // $user_id = session('Admin')['user_id'];
        // $users = DB::table('users')->where('user_id', $user_id)->get();
        // return view('admin.pages.visit.visit', ['visit' => $visits, 'users'=>$users]);
        // return view('admin.pages.visit.visit', compact('visit', 'users' ));

        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $visit = DB::table('visit')
        ->join('users', 'visit.userid', '=', 'users.user_id')
        ->select('visit.*', 'users.avatar')
        ->where('visit.visits_status', 'PENDING')
        ->get();

    return view('admin.pages.visit.visit', ['visit' => $visit, 'users'=>$users]);
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
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('admin.pages.home', compact('visitCount', 'membersCount', 'users' ));


        ///
    }
    public function approve_status(){
        $user = DB::table('users')->first();
        $user_id = $user->user_id;
        $visit = DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->first();

        if($visit){
            $status=['visits_status' => 'APPROVED'];
            $success=DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->update($status);

            if($success){
                // Generate link and send to visitor's email
                $loggedUser = session()->get('User');
                if($loggedUser){ // if user is logged in
                    $link = 'http://127.0.0.1:8000/user/bookedvisit/';
                }else{ // if user is not logged in
                    $link = 'http://127.0.0.1:8000/';
                }

                if($user){
                    Mail::to($user->user_email)->send(new VisitApproved($link));
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
        $visit = DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->first();
        if($visit){
            $reason = $request->input('cancel_reason');
            $status=['visits_status' => 'CANCELLED', 'cancel_reason' => $reason];
            $success=DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->update($status);
            if($success){
                $loggedUser = session()->get('User');
                if($loggedUser){ // if user is logged in
                    $link = 'http://127.0.0.1:8000/user/bookedvisit/';
                }else{ // if user is not logged in
                    $link = 'http://127.0.0.1:8000/';
                }
                if(!empty($user->user_email)){
                    Mail::to($user->user_email)->send(new VisitCancelled($link));
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

