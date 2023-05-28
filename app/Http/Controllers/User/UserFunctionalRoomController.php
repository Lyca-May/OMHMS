<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Function_Hall;
use App\Models\Rent_Payment_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\support\facades\DB;


class UserFunctionalRoomController extends Controller
{
    public function displayRent()
    {
        $user_id = session('User')['user_id'];
        $rent = DB::table('rent_hall')->where('userid', $user_id)->get();
        return view('user.pages.booked.rentedhall', ['rent' => $rent]);
    }
    public function display_form()
    {
        // $rent = Function_Hall::all()->get();

        $rent = DB::table('rent_hall')->get();
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('user.pages.landingpage1.booking.rentconhall', ['users' => $users], ['rent' => $rent],);
    }
    public function display_payment_form()
    {
            $rent_id = DB::table('rent_function_hall')->first();
            $user_id = session('User')['user_id'];
            $users = DB::table('users')->where('user_id', $user_id)->get();
            $payment = DB::table('rent_payment')->where('userid', $user_id)->where('rentid', $rent_id->rent_id)->first();
            return view('user.pages.landingpage1.booking.rent_payment', compact('users', 'payment'));
    }
    public function rent_room(Request $request){
        $user = session()->get('User');
    $userid = $user['user_id'];
    if (!$user) {
        return redirect()->back()->with('failed', "User not found");
    }

    $rules = [
        'facility' => 'required|string',
        'agency' => 'required|string',
        'contact_person' => 'required|string',
        'contact_number' => 'required',
        'date_requested' => 'required|date',
        'event_start' => 'required|date_format:H:i',
        'event_type' => 'required|string',
        'prep_setup_time' => 'required|date_format:H:i',
        'date_of_setup' => 'required|date',
        'others' => 'nullable|string',
        'number_of_microphones' => 'nullable|integer',
        'number_of_tables' => 'nullable|integer',
        'number_of_chairs' => 'nullable|integer',
    ];

    $messages = [
        'facility.required' => 'The facility field is required.',
        'facility.string' => 'The facility field must be a string.',
        'agency.required' => 'The agency field is required.',
        'agency.string' => 'The agency field must be a string.',
        'contact_person.required' => 'The contact person field is required.',
        'contact_person.string' => 'The contact person field must be a string.',
        'contact_number.required' => 'The contact number field is required.',
        'date_requested.required' => 'The date requested field is required.',
        'date_requested.date' => 'The date requested field must be a valid date.',
        'event_start.required' => 'The event start field is required.',
        'event_start.date_format' => 'The event start field must be a valid time format.',
        'event_type.required' => 'The event type field is required.',
        'event_type.string' => 'The event type field must be a string.',
        'prep_setup_time.required' => 'The preparation setup time field is required.',
        'prep_setup_time.date_format' => 'The preparation setup time field must be a valid time format.',
        'date_of_setup.required' => 'The date of setup field is required.',
        'date_of_setup.date' => 'The date of setup field must be a valid date.',
        'number_of_microphones.integer' => 'The number of microphones field must be an integer.',
        'number_of_tables.integer' => 'The number of tables field must be an integer.',
        'number_of_chairs.integer' => 'The number of chairs field must be an integer.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $function_hall = new Function_Hall();
    $function_hall->userid = $userid;
    $function_hall->facility = $request->facility;
    $function_hall->agency = $request->agency;
    $function_hall->contact_person = $request->contact_person;
    $function_hall->contact_number = $request->contact_number;
    $function_hall->date_requested = $request->date_requested;
    $function_hall->event_start = $request->event_start;
    $function_hall->event_type = $request->event_type;
    $function_hall->prep_setup_time = $request->prep_setup_time;
    $function_hall->date_of_setup = $request->date_of_setup;
    $function_hall->others = $request->others;
    $function_hall->sound_system = $request->has('sound_system'); // Set to true if checked, false otherwise
    $function_hall->led_tv = $request->has('led_tv'); // Set to true if checked, false otherwise
    $function_hall->microphones = $request->has('microphones'); // Set to true if checked, false otherwise
    $function_hall->number_of_microphones = $request->number_of_microphones;
    $function_hall->tables = $request->has('tables'); // Set to true if checked, false otherwise
    $function_hall->number_of_tables = $request->number_of_tables;
    $function_hall->chairs = $request->has('chairs'); // Set to true if checked, false otherwise
    $function_hall->number_of_chairs = $request->number_of_chairs;
    $function_hall->status = 'pending'; // Set the initial status
    $function_hall->recorded_by = null;
    $function_hall->approved_by = null;
    $function_hall->payment_rent = 10000.00;
    $function_hall->total_payment = $function_hall->payment_rent + $function_hall->add_service_payment;
    $function_hall->downpayment = null;
    $function_hall->add_service_payment = (
        $function_hall->microphones ||
        $function_hall->stands ||
        $function_hall->tables ||
        $function_hall->chairs ||
        $function_hall->sound_system ||
        $function_hall->led_tv
    ) ? 3000.00 : 0.00;
    $function_hall->others_payment = $request->has('others') ? 0.00 : null;
    $function_hall->full_payment = null;
    $function_hall->proof_of_payment = null;
    $function_hall->save();

        if($function_hall){
            return redirect('user/rent-payment-form')->with('success', 'Success');
        }
        return redirect()->with('ops', 'Failed');
    }

}
