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


class VisitController extends Controller
{
    //get
    public function index()
    {
        $visits = DB::table('visit')->get();
        return view('admin.pages.visit', ['visit' => $visits]);
    }

    public function approve_status(Request $request){
        $visits_email = session('User')['user_email'];
        $user_id = session('User')['user_id'];
        $visit = DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->first();

            // $sent = Mail::to($visits_email)->send(new VisitApproved($status));
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

}

