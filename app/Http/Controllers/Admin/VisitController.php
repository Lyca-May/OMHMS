<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Mail\VisitApproved;
use App\Mail\VisitCancelled;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Http\Kernel;
use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Member;
use App\Models\users;

class VisitController extends Controller
{
    //get
    public function index()
    {
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $visit = Visit_Model::with('users')
            ->where('visits_status', 'PENDING')
            ->get();
        $approved = Visit_Model::with('users')
            ->where('visits_status', 'APPROVED')
            ->get();
        $cancelled = Visit_Model::with('users')
            ->where('visits_status', 'CANCELLED')
            ->get();
        $currentDate = date('Y-m-d');
        $history = DB::table('visits')
            ->where('visits_status', '!=', 'PENDING')
            ->whereRaw('DATE(visits_intended_date) < ?', [$currentDate])
            ->get();


        return view('admin.pages.visit.visit', compact('currentDateTime','visit', 'users', 'approved', 'cancelled', 'history'));
    }

    public function viewAllBookings()
    {
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $visit = Visit_Model::with('users')
            ->where('visits_status', 'PENDING')
            ->get();
        $approved = Visit_Model::with('users')
            ->where('visits_status', 'APPROVED')
            ->get();
        $cancelled = Visit_Model::with('users')
            ->where('visits_status', 'CANCELLED')
            ->get();
        $currentDate = date('Y-m-d');
        $history = DB::table('visit')
            ->where('visits_status', '!=', 'PENDING')
            ->whereRaw('DATE(visits_intended_date) < ?', [$currentDate])
            ->get();


        return view('admin.pages.visit.visit_history', compact('currentDateTime','visit', 'users', 'approved', 'cancelled', 'history'));
    }

    public function displayAttendance(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();

        $member = Member::with('user')
        ->get();

        return view('admin.pages.attendance.attendance-record', compact('users', 'member'));

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


    public function admin_home()
    {
        $visit = Visit_Model::with('users')
        ->where('visits_status', 'PENDING')
        ->get();
        $currentDateTime = Carbon::now()->tz('UTC');
        $souvenirsCount = DB::table('souvenirs')->sum('souvenir_qty');
        $artifactsCount = DB::table('inventory_artifacts')->sum('quantity');
        $rentCount = DB::table('rent_hall')->count();
        $visitCount = DB::table('visits')->where('visits_status', "APPROVED")
        ->whereDate('visits_intended_date', '=', $currentDateTime)
        ->sum('visits_no_of_visitors');

        $membersCount = DB::table('visit')->sum('visits_no_of_visitors');
        // $visit = DB::table('visit')->get();
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();


        return view('admin.pages.home', compact('visitCount', 'membersCount', 'users', 'currentDateTime', 'rentCount', 'visit', 'souvenirsCount', 'artifactsCount'));
    }

    // public function approve_status($user_id)
    // {
    //     $user = users::findorFail($user_id); // Assuming the model name is 'User' instead of 'users' and user_id is 1
    //     $user_id = $user->user_id;
    //     $visit = Visit_Model::where('userid', $user_id)
    //                         ->where('visits_status', 'PENDING')
    //                         ->first();

    //     if ($visit) {
    //         $status = ['visits_status' => 'APPROVED'];
    //         $success = Visit_Model::where('userid', $user_id)
    //                                 ->where('visits_status', 'PENDING')
    //                                 ->update($status);

    //         if ($success) {
    //             // Generate link and send to visitor's email
    //             $loggedUserId = session()->get('User');
    //             if ($loggedUserId && $loggedUserId == $user->user_id) {
    //                 $link = 'http://127.0.0.1:8000/user/profile/';
    //             } else {
    //                 $link = 'http://127.0.0.1:8000/';
    //             }

    //             $user_email = $user->user_email; // Retrieve the user's email

    //             if ($user_email) {
    //                 Mail::to($user_email)->send(new VisitApproved($link));
    //                 return redirect()->back()->with('success', "You have approved the reserved visit and sent an email to the user with a link");
    //             } else {
    //                 return redirect()->back()->with('failed', "Empty email");
    //             }
    //         } else {
    //             return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
    //         }
    //     } else {
    //         return redirect()->back()->with('failed', "Failed to send email to the user");
    //     }
    // }




//     public function approveStatus()
// {
//     $user = DB::table('users')->first();
//     $user_id = $user->user_id;
//     $visit = DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->first();


//     if ($visit) {
//         $status = ['visits_status' => 'APPROVED'];
//         $success = DB::table('visit')->where('userid', $user_id)->where('visits_status', 'PENDING')->update($status);

//         if ($success) {
//             // Generate link and send to visitor's email
//             $loggedUser = session()->get('User');
//             $link = $loggedUser ? 'http://127.0.0.1:8000/user/profile/' : 'http://127.0.0.1:8000/';

//             if ($visit->user_email) {
//                 Mail::to($visit->user_email)->send(new VisitApproved($link));
//                 return redirect()->back()->with('success', "You have approved the reserved visit and sent an email to the user with a link");
//             } else {
//                 return redirect()->back()->with('failed', "Empty email");
//             }
//         } else {
//             return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
//         }
//     } else {
//         return redirect()->back()->with('failed', "Failed to send email to the user");
//     }
// }



    public function cancel_status(Request $request, $user_id)
    {
        $user = users::findorFail($user_id);
        $user_id = $user->user_id;
        $visit = DB::table('visits')->where('userid', $user_id)->where('visits_status', 'PENDING')->first();
        if ($visit) {
            $reason = $request->input('cancel_reason');
            $status = ['visits_status' => 'CANCELLED', 'cancel_reason' => $reason];
            $success = DB::table('visits')->where('userid', $user_id)->where('visits_status', 'PENDING')->update($status);
            if ($success) {
                $loggedUserId = session()->get('User');
                if ($loggedUserId && $loggedUserId == $user->user_id) {
                    $link = 'http://127.0.0.1:8000/user/profile/';
                } else {
                    $link = 'http://127.0.0.1:8000/';
                }

                if (!empty($user->user_email)) {
                    Mail::to($user->user_email)->send(new VisitCancelled($link));
                }

                return redirect()->back()->with('success', "Reservation cancelled and email notification sent to user.");
            } else {
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
            }
        } else {
            return redirect()->back()->with('failed', "Failed to cancel reservation.");
        }
    }

    public function showScanQRPage()
    {
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();


        return view('admin.pages.visit.scanner', compact('currentDateTime', 'users'));

    }

    public function markVisitAsDone(Request $request)
    {
        $visitId = $request->input('visitId');

        $visit = Visit_Model::find($visitId);
        if (!$visit) {
            return response()->json(['success' => false]);
        }

        // Update the status to "done" and save
        $visit->visits_status = 'DONE';
        $visit->save();

        return response()->json(['success' => true]);
    }
}
