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
use App\Models\Function_Hall;

class FunctionalHallController extends Controller
{
    //get
    public function index()
    {
        $rent = DB::table('functional_hall')->where('functional_status', 'PENDING')->get();
        return view('admin.pages.functional.functional-table', ['functional' => $rent]);
    }
    public function approved_rent()
    {
        $rent = DB::table('functional_hall')->where('functional_status', 'APPROVED')->get();
        return view('admin.pages.functional.rent-approved', ['rent' => $rent]);
    }
    public function cancelled_rent()
    {
        $rent = DB::table('functional_hall')->where('functional_status', 'CANCELLED')->get();
        return view('admin.pages.functional.rent-cancelled', ['rent' => $rent]);
    }
    public function rent_history()
    {
        $currentDate = date('Y-m-d');
        $rent = DB::table('functional_hall')
                    ->where('functional_status', 'CANCELLED')
                    ->orWhere('functional_status', 'APPROVED')
                    ->whereDate('functional_intended_date', '<  ', $currentDate)
                    ->get();
        return view('admin.pages.functional.rent-history', ['rent' => $rent]);
    }

    public function displayRent(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $rent = Function_Hall::with('user')
            ->where('status', 'pending')
            ->get();
        $approved = Function_Hall::with('user')
            ->where('status', 'approved')
            ->get();
        $cancelled = Function_Hall::with('user')
            ->where('status', 'cancelled')
            ->get();
        $currentDate = date('Y-m-d');
        $history = DB::table('rent_hall')
            ->where('status', '!=', 'pending')
            ->whereRaw('DATE(date_requested) < ?', [$currentDate])
            ->get();
        return view('admin.pages.function_hall.function_hall', compact('rent', 'users', 'approved', 'cancelled', 'history'));
    }

    public function approve_rent(Request $request, $rent_id)
    {
        $rent = Function_Hall::findOrFail($rent_id);
        $user = users::find($rent->userid);
        $visit = Function_Hall::where('userid', $user->user_id)->where('status', 'pending')->first();

        if ($visit) {
            $recorded_date = $request->input('recorded_date');
            $recorded_by = $request->input('recorded_by');
            $approved_by = $request->input('approved_by');
            $status = [
                'status' => 'approved',
                'recorded_date' => $recorded_date,
                'recorded_by' => $recorded_by,
                'approved_by' => $approved_by
            ];

            $success = Function_Hall::where('userid', $user->user_id)
                ->where('status', 'pending')
                ->update($status);

            if ($success) {
                $loggedUserId = session()->get('User');
                $link = $loggedUserId && $loggedUserId == $user->user_id ? 'http://127.0.0.1:8000/user/profile/' : 'http://127.0.0.1:8000/';

                if (!empty($user->user_email)) {
                    Mail::to($user->user_email)->send(new RentApproved($link));
                }

                return redirect()->back()->with('success', "Reservation successfully approved and email notification sent to the user.");
            } else {
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection.");
            }
        } else {
            return redirect()->back()->with('failed', "Failed to cancel the reservation.");
        }
    }
    public function cancel_rent(Request $request, $rent_id)
    {
        $rent = Function_Hall::findOrFail($rent_id);
        $user = users::find($rent->userid);
        $visit = Function_Hall::where('userid', $user->user_id)->where('status', 'pending')->first();

        if ($visit) {
            $reason = $request->input('cancel_reason');
            $status = [
                'status' => 'cancelled',
                'cancel_reason' => $reason
            ];

            $success = Function_Hall::where('userid', $user->user_id)
                ->where('status', 'pending')
                ->update($status);

            if ($success) {
                $loggedUserId = session()->get('User');
                $link = $loggedUserId && $loggedUserId == $user->user_id ? 'http://127.0.0.1:8000/user/profile/' : 'http://127.0.0.1:8000/';

                if (!empty($user->user_email)) {
                    Mail::to($user->user_email)->send(new RentCancelled($link));
                }

                return redirect()->back()->with('success', "Reservation successfully cancelled and email notification sent to the user.");
            } else {
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection.");
            }
        } else {
            return redirect()->back()->with('failed', "Failed to cancel the reservation.");
        }
    }

}

