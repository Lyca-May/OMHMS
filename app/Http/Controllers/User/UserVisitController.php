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
use App\Models\Function_Hall;
use App\Models\Reserved_Souvenir;
use Intervention\Image\Facades\Image;



class UserVisitController extends Controller
{
    public function visit_form()
    {
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $minDate = date('Y-m-d', strtotime('+3 days'));
        return view('user.pages.landingpage1.booking.bookvisit', compact('users', 'minDate'));
    }

    public function displayUserProfile()
    {
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('user.pages.profile.userprofile', compact('users'));
    }

    public function displayVisit()
    {
        $currentDate = date('Y-m-d');
        $user_id = session('User')['user_id'];
        $visit = DB::table('visits')->where('userid', $user_id)
            ->where('visits_status', "PENDING")
            ->get();
        $rent = Function_Hall::with('user')->where('userid', $user_id)->whereRaw('DATE(date_requested) >= ?', [$currentDate])->get();
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $reservedSouvenir = Reserved_Souvenir::with('souvenir')->with('user')->where('userid', $user_id)->where('is_archived', 0)->get();
        $currentDateTime = Carbon::now()->tz('UTC');
        return view('user.pages.profile.mybookings', ['visit' => $visit, 'users' => $users, 'currentDateTime' => $currentDateTime, 'rent' => $rent, 'reservedSouvenir' => $reservedSouvenir]);
    }

    public function displayVisitHistory()
    {
        $currentDate = date('Y-m-d');
        $user_id = session('User')['user_id'];
        $history = DB::table('visits')
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
        $userid = $user['user_id'];
        if (!$user) {
            return redirect()->back()->with('error', "User not found");
        }

        // Check if user's bookings is not expired
        $uncompleteVisit = Visit_Model::where('userid', $user['user_id'])
            ->where('visits_intended_date', '>=', date('Y-m-d'))
            ->first();
        if (!$uncompleteVisit) {
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
                    // 'equal:' . date('Y-m-d', strtotime('+3 days')),
                ],
                'visits_time' => 'required',
                'visits_no_of_visitors' => [
                    'between:0,1000'
                ],
                'file_of_visitors' => 'nullable|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:2048',
                'visits_name_of_institution'=>'required'
            ];

            $messages = [
                'visits_intended_date.required' => 'Please input the intended date for reservation',
                'visits_intended_date.date' => 'Please input a valid date',
                'visits_intended_date.after_or_equal' => 'The intended date must be on or after today',
                'visits_time.required' => 'Please select the intended time for reservation',
                'visits_no_of_visitors.between' => 'The number of visitors must not be greater than 100',
                'file_of_visitors.mimetypes' => 'The file must be a excel file',
                'file_of_visitors.max' => 'The file size must not exceed 2048 KB',
                'visits_name_of_institution'=>'Please input name of your institution'
            ];

            $validator = Validator::make($request->all(), $rules, $messages);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            // get the current year
            $currentYear = date('Y');
            // extract the year from the intended date input
            $selectedYear = date('Y', strtotime($request->visits_intended_date));

            // check if the selected year is less than the current year
            if ($selectedYear < $currentYear) {
                return redirect()->back()->with('error', 'The intended date must be in the current year or later.');
            }

            $visits_fname = $request->visits_fname;
            $visits_mname = $request->visits_mname;
            $visits_lname = $request->visits_lname;
            $gender = $request->gender;
            $visits_email = $request->visits_email;
            $visits_country = $request->visits_country;
            $visits_province = $request->visits_province;
            $visits_municipality = $request->visits_municipality;
            $visits_brgy = $request->visits_brgy;
            $visits_street = $request->visits_street;
            $visits_zipcode = $request->visits_zipcode;
            $visits_intended_date = $request->visits_intended_date;
            $visits_no_of_visitors = $request->visits_no_of_visitors;
            $visits_name_of_institution = $request->visits_name_of_institution;
            $visits_time = $request->visits_time;
            $contact_no = $request->contact_no;
            $cancel_reason = $request->cancel_reason;
            $visits_status = 'PENDING';

            $existingBooking = Visit_Model::where('visits_intended_date', $visits_intended_date)
                ->where('visits_status', 'APPROVED')
                ->get();

            if ($existingBooking) {
                $inputtedVisitors = $visits_no_of_visitors; // inputted number of visitors
                $visits_intended_date = $request->visits_intended_date; // date selected by the user
                $visits_time = $request->visits_time; // time selected by the user

                // Calculate the total visitors for the given day and time
                $totalVisitorsForDateTime = Visit_Model::whereDate('visits_intended_date', $visits_intended_date)
                    ->where('visits_time', $visits_time)
                    ->sum('visits_no_of_visitors');

                $slotsPerDay = 800; // maximum number of slots available per day is 1000
                $remainingSlots = $slotsPerDay - $totalVisitorsForDateTime;

                if ($inputtedVisitors <= $remainingSlots) {
                    $visit = new Visit_Model();
                    $visit->userid = $userid;
                    $visit->visits_fname = $visits_fname;
                    $visit->visits_mname = $visits_mname;
                    $visit->visits_lname = $visits_lname;
                    $visit->gender = $gender;
                    $visit->visits_email = $visits_email;
                    $visit->visits_country = $visits_country;
                    $visit->visits_province = $visits_province;
                    $visit->visits_municipality = $visits_municipality;
                    $visit->visits_brgy = $visits_brgy;
                    $visit->visits_street = $visits_street;
                    $visit->visits_zipcode = $visits_zipcode;
                    $visit->visits_intended_date = $visits_intended_date;
                    $visit->visits_no_of_visitors = $visits_no_of_visitors;
                    $visit->visits_name_of_institution = $visits_name_of_institution;
                    $visit->visits_time = $visits_time;
                    $visit->contact_no = $contact_no;
                    $visit->cancel_reason = $cancel_reason;
                    $visit->visits_status = $visits_status;

                    if ($request->hasFile('file_of_visitors')) {
                        // Get the file from the request
                        $file = $request->file('file_of_visitors');

                        // Generate a unique name for the file
                        $fileName = time() . '_' . $file->getClientOriginalName();

                        // Move the uploaded file to a directory
                        $file->move(public_path('uploads'), $fileName);

                        // Save the file name to the database
                        $visit->file_of_visitors = $fileName;
                    }

                    $visit->save();


                    // Generate QR Code
                    $qrData = [
                        'visits_id' => $visit->visits_id,
                        'userid' => $visit->userid,
                        'visits_fname' => $visit->visits_fname,
                        'visits_lname' => $visit->visits_lname,
                        // 'visits_gender' => $visit->gender,
                        // 'visits_email' => $visit->visits_email,
                        // 'visits_country' => $visit->visits_country,
                        // 'visits_province' => $visit->visits_province,
                        // 'visits_municipality' => $visit->visits_municipality,
                        // 'visits_brgy' => $visit->visits_brgy,
                        // 'visits_street' => $visit->visits_street,
                        // 'visits_zipcode' => $visit->visits_zipcode,
                        'visits_intended_date' => $visit->visits_intended_date,
                        // 'visits_no_of_visitors' => $visit->visits_no_of_visitors,
                        'visits_name_of_institution' => $visit->visits_name_of_institution,
                        // 'visits_time' => $visit->visits_time,
                        // 'visits_contact_no' => $visit->visits_contact_no,
                        // 'visits_cancel_reason' => $visit->visits_cancel_reason,
                        'visits_status' => $visit->visits_status,

                    ];

                    $qrCode = QrCode::format('png')
                    ->size(200) // Start with a reasonable size
                    ->margin(10)
                    ->color(0, 0, 0)
                    ->backgroundColor(255, 255, 255)
                    ->errorCorrection('H')
                    ->generate(json_encode($qrData));

                    // You can check if the generated QR code is too small for the data
                    // If it's too small, you can regenerate with a larger size
                    if (strlen($qrCode) < 300) {
                        $qrCode = QrCode::format('png')
                            ->size(300) // Increase the size
                            ->margin(10)
                            ->color(0, 0, 0)
                            ->backgroundColor(255, 255, 255)
                            ->errorCorrection('L')
                            ->generate(json_encode($qrData));
                    }

                    // Save the QR code image to the public folder
                    $qrCodePath = public_path('qrcodes/') . $visit->visits_id . '.png';
                    file_put_contents($qrCodePath, $qrCode);

                    // Store the QR code path and related data in the session
                    session(['qrCodePath' => $qrCodePath, 'visitData' => $visit]);

                    // Redirect to the route for displaying the QR code
                    return redirect()->route('show.qr');
                } else {
                    return redirect()->back()->with('error', 'Sorry, only ' . $remainingSlots . ' slot(s) are available.');
                }
            } else {
                return redirect()->back()->with('error', 'You are not yet complete with your visitation. Please complete your previous reservation before booking another one.');
            }
        }
    }


    public function showQRCode()
    {
        // Retrieve the stored QR code path and related data from the session
        $qrCodePath = session('qrCodePath'); // Change this to match the key used to store the QR code path
        $user_id = session('User')['user_id'];

        if (!$qrCodePath || !$user_id) {
            abort(404); // Handle missing data
        }

        // Fetch visit details for the logged-in user using $user_id
        $visit = Visit_Model::where('userid', $user_id)->first();

        // Check if a visit record exists for the user
        if (!$visit) {
            abort(404); // Handle the case where no visit record is found
        }

        // Generate QR code based on visit data (your existing code)
        // ...

        // Fetch other related data (users, reservedSouvenir, rent)
        $currentDate = date('Y-m-d');
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $reservedSouvenir = Reserved_Souvenir::with('souvenir')->with('user')->where('userid', $user_id)->where('is_archived', 0)->get();
        $rent = Function_Hall::with('user')->where('userid', $user_id)->whereRaw('DATE(date_requested) >= ?', [$currentDate])->get();

        return view('user.pages.profile.mybookings', compact('qrCodePath', 'visit', 'users', 'reservedSouvenir', 'rent'));
    }



    public function showActiveQRCode($visitId)
    {
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $visit = Visit_Model::find($visitId);

        if (!$visit) {
            return redirect()->back()->with('error', 'Visit not found.');
        }

        // Check if the visit is active based on intended_date and intended_time
        $currentDateTime = now();
        $intendedDateTime = "{$visit->visits_intended_date} {$visit->visits_time}";

        if ($currentDateTime < $intendedDateTime) {
            // The visit is active, generate the QR code

            // Generate the QR code data
            $qrData = [
                'visits_id' => $visit->visits_id,
                'userid' => $visit->userid,
                'visits_fname' => $visit->visits_fname,
                'Number of Visitors' => $visit->visits_no_of_visitors,
                'Intended Date' => date('F d, Y', strtotime($visit->visits_intended_date)),
                'visits_status' => $visit->visits_status,
                // Add other visit data as needed
            ];

            // Generate the QR code image
            $qrCode = QrCode::format('png')
                ->size(200)
                ->generate(json_encode($qrData));

            // Pass the data to the view
            return view('user.pages.profile.generatedActiveQR', [
                'visit' => $visit,
                'qrCode' => $qrCode,
                'users' => $users,
            ]);
        } else {
            // The visit is not active, you can handle this case as needed
            return redirect()->back()->with('error', 'This visit has already passed.');
        }
    }


    public function scanQRCode(Request $request)
    {
        $scannedContent = $request->input('scanned_content');

        // You can update the visit status based on the scanned content here.
        // For example, if the content matches a specific visit ID, update its status.

        // Sample code (update with your logic):
        $visit = Visit_Model::where('visits_id', $scannedContent)->first();

        if ($visit) {
            $visit->update(['visits_status' => 'DONE']);
            // Add any additional processing logic here.
        }

        return response()->json(['message' => 'Visit status updated successfully']);
    }


    // public function add_members(Request $request)
    // {

    //     // Get the visit ID from the session
    //     $visits_id = session()->get('visits_id');

    //     // Check that the visit ID was retrieved successfully
    //     if (!$visits_id) {
    //         return redirect()->back()->with('error', 'Visit not found.');
    //     }

    //     // Get the number of visitors from the session
    //     $visits_no_of_visitors = session()->get('visits_no_of_visitors');

    //     // Check that the number of visitors is not empty
    //     if (!$visits_no_of_visitors) {
    //         return redirect()->back()->with('error', 'Number of visitors not found.');
    //     }

    //     // Validate the input
    //     $rules = [
    //         'members.*.members_fname' => 'required',
    //         'members.*.members_lname' => 'required',
    //         'members.*.members_gender' => 'required',
    //         'members.*.members_age' => 'required',
    //     ];
    //     $message = [
    //         'members.*.members_fname.required' => 'First name is required',
    //         'members.*.members_lname.required' => 'Last name is required',
    //         'members.*.members_gender.required' => 'Gender is required',
    //         'members.*.members_age.required' => 'Age is required',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $message);
    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $members_fname = $request->members_fname;
    //     $members_mname = $request->members_mname;
    //     $members_lname = $request->members_lname;
    //     $members_gender = $request->members_gender;
    //     $members_age = $request->members_age;

    //     $member = new MembersModel();
    //     $member->visit_id = $visits_id;
    //     $member->members_fname = $members_fname;
    //     $member->members_mname = $members_mname;
    //     $member->members_lname = $members_lname;
    //     $member->members_gender = $members_gender;
    //     $member->members_age = $members_age;

    //     if ($member) {
    //         return redirect('user/book')->with('success', 'Visit added successfully');
    //     } else {
    //         return redirect()->back()->with('failed', 'There is an error in processing your reservation. Please try again later.');
    //     }
    // }

    public function user_visit()
    {
        $user_id = session('User')['user_id'];
        $visithist = DB::table('visit')->where('userid', $user_id)->get();
        return view('user.pages.book-visitation.book', ['visit' => $visithist]);
    }

    public function cancel_visit(Request $request)
    {
        $admin = DB::table('users')->first();
        $admin_id = $admin->user_id;
        $visit = DB::table('visit')->where('user_id', $admin_id)->where('visits_status', 'PENDING')->first();
        if ($visit) {
            $reason = $request->input('cancel_reason');
            $status = ['visits_status' => 'CANCELLED', 'cancel_reason' => $reason];
            $success = DB::table('visit')->where('user_id', $admin_id)->where('visits_status', 'PENDING')->update($status);
            if ($success) {
                $admin_email = 'noblezalycamay18@gmail.com'; // replace with the email address of the admin
                $visit_id = $visit->visit_id;
                $visit_link = url("http://127.0.0.1:8000/admin/visit/$visit_id"); // replace with the URL of the admin page to approve/cancel visits
                if (!empty($admin_email)) {
                    Mail::to($admin_email)->send(new UserVisitCancelled($visit_link));
                }
                return redirect()->back()->with('success', "Reservation cancelled and email notification sent to admin.");
            } else {
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
            }
        } else {
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
