<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\SalesRent;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\RentApproved;
use App\Mail\RentCancelled;
use App\Models\Function_Hall;
use Carbon\Carbon;
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
    public function displayRent()
    {
=======
    public function displayRent(){
        $currentDateTime = Carbon::now()->tz('UTC');
>>>>>>> Stashed changes
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $rent = Function_Hall::with('user')
            ->where('status', 'PENDING')
            ->get();
        $currentDate = date('Y-m-d');
        return view('admin.pages.function_hall.function_hall', compact('currentDateTime', 'rent', 'users',));
    }

    public function viewRentHistory(){
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $approved = Function_Hall::with('user')
            ->where('status', 'APPROVED')
<<<<<<< Updated upstream
            ->get();
        $paid = Function_Hall::with('user')
            ->where('status', 'PAID')
=======
>>>>>>> Stashed changes
            ->get();
        $cancelled = Function_Hall::with('user')
            ->where('status', 'CANCELLED')
            ->get();
        $currentDate = date('Y-m-d');
        $history = DB::table('rent_hall')
            ->where('status', '!=', 'PENDING')
            ->whereRaw('DATE(date_requested) < ?', [$currentDate])
            ->get();
<<<<<<< Updated upstream
        return view('admin.pages.function_hall.function_hall', compact('rent', 'users', 'approved', 'paid', 'cancelled', 'history'));
=======
        return view('admin.pages.function_hall.function_hall_history', compact('currentDateTime', 'users', 'approved', 'cancelled', 'history'));
>>>>>>> Stashed changes
    }

    public function approve_rent(Request $request, $rent_id)
    {
        $rent = Function_Hall::findOrFail($rent_id);
        $user = users::find($rent->userid);
        $hasPendingRent = Function_Hall::where('userid', $user->user_id)->where('status', 'PENDING')->first();

        if ($hasPendingRent) {


            $rules = [
                'approvedby_esign' => 'nullable|image|mimes:png',
                'recordedby_esign' => 'nullable|image|mimes:png'
            ];
            $messages = [
                'approvedby_esign.mimes' => 'E-signature is required',
                'recordedby_esign.mimes' => 'E-signature is required'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            if ($request->hasFile('approvedby_esign')) {
                $approvedby_esignFile = $request->file('approvedby_esign');
                $approvedby_esignFilename = time() . '_' . $approvedby_esignFile->getClientOriginalName();
                $approvedby_esignFile->move(public_path('approvedby_esign'), $approvedby_esignFilename);
            }

            if ($request->hasFile('recordedby_esign')) {
                $recordedby_esignFile = $request->file('recordedby_esign');
                $recordedby_esignFilename = time() . '_' . $recordedby_esignFile->getClientOriginalName();
                $recordedby_esignFile->move(public_path('recordedby_esign'), $recordedby_esignFilename);
            }

            $currentDate = Carbon::now()->format('Y-m-d');
            $recorded_by = $request->input('recorded_by');
            $approved_by = $request->input('approved_by');
            $others_payment = $request->input('others_payment');

            $status = [
                'status' => 'APPROVED',
                'recorded_date' => $currentDate,
                'recorded_by' => $recorded_by,
                'approved_by' => $approved_by,
                'recordedby_esign' => isset($recordedby_esignFilename) ? $recordedby_esignFilename : null,
                'approvedby_esign' => isset($approvedby_esignFilename) ? $approvedby_esignFilename : null,
                'others_payment' => $others_payment
            ];

            $success = Function_Hall::where('userid', $user->user_id)
                ->where('status', 'PENDING')
                ->update($status);

            $saleRent = SalesRent::where('rent_id', $rent_id)->first();

            if ($saleRent) {
                $saleRent->update(['status' => 'APPROVED', 'sale_date' => $rent->updated_at]);
            }

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

    public function paidRent(Request $request, $rent_id)
    {
        $rent = Function_Hall::findOrFail($rent_id);
        $user = users::find($rent->userid);

        $hasNotPaidFully = Function_Hall::where('userid', $user->user_id)
        ->whereNull('full_payment')
            ->where('status', 'APPROVED')
            ->first();

        if ($hasNotPaidFully) {
            $rules = [  
                'full_payment' => 'required|numeric'
            ];

            $messages = [
                'full_payment.required' => 'Pending payment is required',
                'full_payment.numeric' => 'Pending payment should be numbers',
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $full_payment = $request->input('full_payment');

            $status = [
                'status' => 'PAID',
                'full_payment' => $full_payment
            ];

            $success = Function_Hall::where('userid', $user->user_id)
                ->where('status', 'APPROVED')
                ->update($status);

            if ($success) {
                $saleRent = SalesRent::where('rent_id', $rent_id)->first();

                if ($saleRent) {
                    $saleRent->update(['status' => 'PAID', 'sale_date' => $rent->updated_at]);
                }

                return redirect()->back()->with('success', "Payment marked as PAID.");
            }
        }

        return redirect()->back()->with('failed', "Failed to mark payment as PAID.");
    }


    public function cancel_rent(Request $request, $rent_id)
    {
        $rent = Function_Hall::findOrFail($rent_id);
        $user = users::find($rent->userid);
        $visit = Function_Hall::where('userid', $user->user_id)->where('status', 'PENDING')->first();

        if ($visit) {
            $reason = $request->input('cancel_reason');
            $status = [
                'status' => 'CANCELLED',
                'cancel_reason' => $reason
            ];

            $success = Function_Hall::where('userid', $user->user_id)
                ->where('status', 'PENDING')
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
