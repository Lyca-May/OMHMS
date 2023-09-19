<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\users;
use App\Models\MembersModel;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Mail\UserVisitCancelled;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
use App\Models\Function_Hall;
use App\Models\Reserved_Souvenir;
use Intervention\Image\Facades\Image;
use App\Mail\VisitApproved;
use App\Mail\VisitCancelled;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MemberImport;
use App\Models\Member;

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
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('user.pages.profile.userprofile', compact('users', 'currentDateTime'));
    }

    public function displayVisit()
    {
        $currentDate = date('Y-m-d');
        $user_id = session('User')['user_id'];
        // $rent = Function_Hall::with('user')->where('userid', $user_id)->where('status', 'PENDING')->whereRaw('DATE(date_requested) >= ?', [$currentDate])->get();
        $rent = Function_Hall::with('user')
            ->where('status', 'PENDING')
            ->get();
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $reservedSouvenir = Reserved_Souvenir::with('souvenir')->with('user')->where('userid', $user_id)->where('is_archived', 0)->get();
        $currentDateTime = Carbon::now()->tz('UTC');
        return view('user.pages.profile.functionhallBooking', ['users' => $users, 'currentDateTime' => $currentDateTime, 'rent' => $rent, 'reservedSouvenir' => $reservedSouvenir]);
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


    public function chartForVisitors(Request $request)
    {
        // Retrieve yearly data
        $yearlyData = Visit_Model::select(
            DB::raw('YEAR(updated_at) as year'),
            DB::raw('SUM(visits_no_of_visitors) as visitors')
        )
            ->where('visits_status', 'APPROVED')
            ->groupBy('year')
            ->orderBy('year')
            ->get();

        $years = [];
        $yearlyCount = [];

        foreach ($yearlyData as $item) {
            $years[] = $item->year;
            $yearlyCount[] = $item->visitors;
        }

        // Retrieve monthly data
        $monthlyData = Visit_Model::select(
            DB::raw('YEAR(updated_at) as year'),
            DB::raw('MONTH(updated_at) as month'),
            DB::raw('SUM(visits_no_of_visitors) as visitors')
        )
            ->where('visits_status', 'APPROVED')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        // Define an array with all month names from January to December
        $allMonths = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];

        // Create an associative array to store the data for each month
        $monthlyDataMap = [];

        // Fill in the data from your $monthlyData query
        foreach ($monthlyData as $item) {
            $year = $item->year;
            $month = $item->month;
            $visitors = $item->visitors;

            // Build the month-year key in the format "January 2023"
            $monthYearKey = date('F Y', mktime(0, 0, 0, $month, 1, $year));

            // Use the month-year key to store the visitor count
            $monthlyDataMap[$monthYearKey] = $visitors;
        }

        // Initialize the data for each month with 0 visitors for months with no data
        foreach ($allMonths as $index => $monthName) {
            $year = date('Y'); // You can use the current year or a specific year as needed.
            $monthYearKey = $monthName . ' ' . $year;

            if (!isset($monthlyDataMap[$monthYearKey])) {
                $monthlyDataMap[$monthYearKey] = 0;
            }
        }

        // Sort the data by month
        ksort($monthlyDataMap);

        // Extract the months and visitor counts for the chart
        $months = array_keys($monthlyDataMap);
        $monthlyCount = array_values($monthlyDataMap);


        $weeklyData = Visit_Model::select(
            DB::raw('WEEK(updated_at) as week'),
            DB::raw('SUM(visits_no_of_visitors) as visitors')
        )
            ->where('visits_status', 'APPROVED')
            ->groupBy('week')
            ->orderBy('week')
            ->get();

        $weeks = [];
        $weeklyCount = [];

        foreach ($weeklyData as $item) {
            $weekNumber = $item->week;
            $weeks[] = 'Week ' . $weekNumber;
            $weeklyCount[] = $item->visitors;
        }

        // Create an array to store data for each day of the week
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        // Create an array to store the daily visitor counts for each day of the week
        $dailyVisitorCounts = [0, 0, 0, 0, 0, 0, 0];

        // Retrieve daily data with the "visits_status" condition
        $dailyData = Visit_Model::select(
            DB::raw('DAY(updated_at) as day'),
            DB::raw('SUM(visits_no_of_visitors) as visitors')
        )
            ->where('visits_status', 'APPROVED')
            ->groupBy('day')
            ->orderBy('day')
            ->get();

        // Loop through the daily data and distribute the counts to the corresponding day of the week
        foreach ($dailyData as $item) {
            // Get the day number (1-31) and visitor count for the day
            $dayNumber = $item->day;
            $visitorCount = $item->visitors;

            // Calculate the index of the corresponding day of the week (Monday = 0, Tuesday = 1, etc.)
            // Assuming that the first day of the month is a Monday
            $dayIndex = ($dayNumber - 1) % 7;

            // Add the visitor count to the corresponding day of the week
            $dailyVisitorCounts[$dayIndex] += $visitorCount;
        }



        // Get user counts by province
        $provinceData = Member::select('province')
            ->groupBy('province')
            ->get();

        // Initialize an array to store province names and counts
        $provinceCounts = [];

        // Loop through the data to calculate counts
        foreach ($provinceData as $item) {
            $province = $item->province;
            $count = Member::where('province', $province)->count();
            $provinceCounts[$province] = $count;
        }

        // Prepare data for the chart
        $provinceData = [
            'labels' => array_keys($provinceCounts), // Province names
            'data' => array_values($provinceCounts), // User counts
            'backgroundColor' => [
                'red', 'blue', 'green', 'orange', 'purple', // Add more colors if needed
            ],
        ];


        // Get user counts by municipality
        $municipalityData = Member::select('municipality')
            ->groupBy('municipality')
            ->get();

        // Initialize an array to store province names and counts
        $municipalityCounts = [];

        // Loop through the data to calculate counts
        foreach ($municipalityData as $item) {
            $municipality = $item->municipality;
            $count = Member::where('municipality', $municipality)->count();
            $municipalityCounts[$municipality] = $count;
        }

        // Prepare data for the chart
        $municipalityData = [
            'labels' => array_keys($municipalityCounts), // municipality names
            'data' => array_values($municipalityCounts), // User counts
            'backgroundColor' => [
                'mintgreen', 'blue', 'green', 'orange', 'purple', // Add more colors if needed
            ],
        ];



        // Get user counts by barangay
        $barangayData = Member::select('barangay')
            ->groupBy('barangay')
            ->get();

        // Initialize an array to store province names and counts
        $barangayCounts = [];

        // Loop through the data to calculate counts
        foreach ($barangayData as $item) {
            $barangay = $item->barangay;
            $count = Member::where('barangay', $barangay)->count();
            $barangayCounts[$barangay] = $count;
        }

        // Prepare data for the chart
        $barangayData = [
            'labels' => array_keys($barangayCounts), // barangay names
            'data' => array_values($barangayCounts), // User counts
            'backgroundColor' => [
                'mintgreen', 'blue', 'green', 'orange', 'purple', // Add more colors if needed
            ],
        ];



        // Get user counts by street
        $streetData = Member::select('sitio')
            ->groupBy('sitio')
            ->get();

        // Initialize an array to store province names and counts
        $streetCounts = [];

        // Loop through the data to calculate counts
        foreach ($streetData as $item) {
            $street = $item->sitio;
            $count = Member::where('sitio', $street)->count();
            $streetCounts[$street] = $count;
        }

        // Prepare data for the chart
        $streetData = [
            'labels' => array_keys($streetCounts), // street names
            'data' => array_values($streetCounts), // User counts
            'backgroundColor' => [
                'mintgreen', 'blue', 'green', 'orange', 'purple', // Add more colors if needed
            ],
        ];



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

        // Initialize arrays to store gender labels and counts with fixed labels
        $labels = ['Female', 'Male'];
        $counts = [0, 0]; // Initialize counts for Female and Male to zero

        // Fetch gender distribution data from the member table
        $genderData = Member::select('gender', DB::raw('COUNT(*) as count'))
            ->whereIn('gender', ['Female', 'Male']) // Only select 'Female' and 'Male' genders
            ->groupBy('gender')
            ->get();

        // Populate the counts array with data
        foreach ($genderData as $data) {
            if ($data->gender === 'Female') {
                $counts[0] = $data->count;
            } elseif ($data->gender === 'Male') {
                $counts[1] = $data->count;
            }
        }



        $ageData = Member::select(
            DB::raw('COUNT(*) as count'),
            DB::raw('CASE WHEN age BETWEEN 1 AND 12 THEN "Children" WHEN age BETWEEN 13 AND 18 THEN "Teenagers" WHEN age BETWEEN 19 AND 59 THEN "Adults" ELSE "Seniors" END as category')
        )
            ->groupBy('category')
            ->get();
        // Initialize arrays to store age group labels and counts
        $ageLabels = ['Children', 'Teenagers', 'Adults', 'Seniors'];
        $ageCounts = [0, 0, 0, 0]; // Initialize counts for each category

        // Populate the counts based on the fetched data
        foreach ($ageData as $data) {
            $category = $data->category; // Adjust this based on your age categorization
            switch ($category) {
                case 'Children':
                    $ageCounts[0] = $data->count;
                    break;
                case 'Teenagers':
                    $ageCounts[1] = $data->count;
                    break;
                case 'Adults':
                    $ageCounts[2] = $data->count;
                    break;
                case 'Seniors':
                    $ageCounts[3] = $data->count;
                    break;
            }
        }

        return view('admin.pages.home', [
            'visitCount' => $visitCount,
            'membersCount' => $membersCount,
            'users' => $users,
            'currentDateTime' => $currentDateTime,
            'rentCount' => $rentCount,
            'visit' => $visit,
            'souvenirsCount' => $souvenirsCount,
            'artifactsCount' => $artifactsCount,
            'years' => json_encode($years),
            'yearlyCount' => json_encode($yearlyCount),

            'months' => json_encode($months),
            'monthlyCount' => json_encode($monthlyCount),

            'weeks' => json_encode($weeks),
            'weeklyCount' => json_encode($weeklyCount),

            'days' => json_encode($days),
            'dailyVisitorCounts' => json_encode($dailyVisitorCounts),


            'provinceData' => $provinceData,
            'municipalityData' => $municipalityData,
            'barangayData' => $barangayData,
            'streetData' => $streetData,

            'genderData' => [
                'labels' => $labels,
                'data' => $counts,
            ],
            'ageData' => [
                'labels' => $ageLabels,
                'data' => $ageCounts,
            ],
        ]);
    }





    // public function reserve_visit(Request $request)
    // {
    //     $user = session()->get('User');
    //     $userid = $user['user_id'];
    //     if (!$user) {
    //         return redirect()->back()->with('error', "User not found");
    //     }

    //     // Check if user's bookings is not expired
    //     $uncompleteVisit = Visit_Model::where('userid', $user['user_id'])
    //         ->where('visits_intended_date', '>=', date('Y-m-d'))
    //         ->first();
    //     if (!$uncompleteVisit) {
    //         // Check if user already has a pending reservation
    //         $pendingVisit = Visit_Model::where('userid', $user['user_id'])
    //             ->where('visits_status', '=', 'PENDING')
    //             ->first();
    //         if ($pendingVisit) {
    //             return redirect()->back()->with('failed', 'You already have a pending reservation. Please complete your previous reservation before booking another one.');
    //         }

    //         $rules = [

    //             'visits_intended_date' => [
    //                 'required',
    //                 'date',
    //                 'date_format:Y-m-d',
    //                 'after_or_equal:today',
    //                 // 'equal:' . date('Y-m-d', strtotime('+3 days')),
    //             ],
    //             'visits_time' => 'required',
    //             'visits_no_of_visitors' => [
    //                 'between:0,1000'
    //             ],
    //             'file_of_visitors' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:2048',
    //             // 'file_of_visitors' => 'nullable|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:2048',
    //             'visits_name_of_institution' => 'required'
    //         ];

    //         $messages = [
    //             'visits_intended_date.required' => 'Please input the intended date for reservation',
    //             'visits_intended_date.date' => 'Please input a valid date',
    //             'visits_intended_date.after_or_equal' => 'The intended date must be on or after today',
    //             'visits_time.required' => 'Please select the intended time for reservation',
    //             'visits_no_of_visitors.between' => 'The number of visitors must not be greater than 100',
    //             'file_of_visitors.mimetypes' => 'The file must be a excel file',
    //             'file_of_visitors.max' => 'The file size must not exceed 2048 KB',
    //             'visits_name_of_institution' => 'Please input name of your institution'
    //         ];
    //         $validator = Validator::make($request->all(), $rules, $messages);
    //         if ($validator->fails()) {
    //             return redirect()->back()->withErrors($validator)->withInput();
    //         }
    //         // get the current year
    //         $currentYear = date('Y');
    //         // extract the year from the intended date input
    //         $selectedYear = date('Y', strtotime($request->visits_intended_date));

    //         // check if the selected year is less than the current year
    //         if ($selectedYear < $currentYear) {
    //             return redirect()->back()->with('error', 'The intended date must be in the current year or later.');
    //         }

    //         $visits_fname = $request->visits_fname;
    //         $visits_mname = $request->visits_mname;
    //         $visits_lname = $request->visits_lname;
    //         $gender = $request->gender;
    //         $visits_email = $request->visits_email;
    //         $visits_country = $request->visits_country;
    //         $visits_province = $request->visits_province;
    //         $visits_municipality = $request->visits_municipality;
    //         $visits_brgy = $request->visits_brgy;
    //         $visits_street = $request->visits_street;
    //         $visits_zipcode = $request->visits_zipcode;
    //         $visits_intended_date = $request->visits_intended_date;
    //         $visits_no_of_visitors = $request->visits_no_of_visitors;
    //         $visits_name_of_institution = $request->visits_name_of_institution;
    //         $visits_time = $request->visits_time;
    //         $contact_no = $request->contact_no;
    //         $cancel_reason = $request->cancel_reason;
    //         $visits_status = 'PENDING';

    //         $existingBooking = Visit_Model::where('visits_intended_date', $visits_intended_date)
    //             ->where('visits_status', 'APPROVED')
    //             ->get();

    //         if ($existingBooking) {
    //             $inputtedVisitors = $visits_no_of_visitors; // inputted number of visitors
    //             $visits_intended_date = $request->visits_intended_date; // date selected by the user
    //             $visits_time = $request->visits_time; // time selected by the user

    //             // Calculate the total visitors for the given day and time
    //             $totalVisitorsForDateTime = Visit_Model::whereDate('visits_intended_date', $visits_intended_date)
    //                 ->where('visits_time', $visits_time)
    //                 ->sum('visits_no_of_visitors');

    //             $slotsPerDay = 800; // maximum number of slots available per day is 1000
    //             $remainingSlots = $slotsPerDay - $totalVisitorsForDateTime;

    //             if ($inputtedVisitors <= $remainingSlots) {
    //                 $visit = new Visit_Model();
    //                 $visit->userid = $userid;
    //                 $visit->visits_fname = $visits_fname;
    //                 $visit->visits_mname = $visits_mname;
    //                 $visit->visits_lname = $visits_lname;
    //                 $visit->gender = $gender;
    //                 $visit->visits_email = $visits_email;
    //                 $visit->visits_country = $visits_country;
    //                 $visit->visits_province = $visits_province;
    //                 $visit->visits_municipality = $visits_municipality;
    //                 $visit->visits_brgy = $visits_brgy;
    //                 $visit->visits_street = $visits_street;
    //                 $visit->visits_zipcode = $visits_zipcode;
    //                 $visit->visits_intended_date = $visits_intended_date;
    //                 $visit->visits_no_of_visitors = $visits_no_of_visitors;
    //                 $visit->visits_name_of_institution = $visits_name_of_institution;
    //                 $visit->visits_time = $visits_time;
    //                 $visit->contact_no = $contact_no;
    //                 $visit->cancel_reason = $cancel_reason;
    //                 $visit->visits_status = $visits_status;

    //                 if ($request->hasFile('file_of_visitors')) {
    //                     // Get the file from the request
    //                     $file = $request->file('file_of_visitors');

    //                     // Generate a unique name for the file
    //                     $fileName = time() . '_' . $file->getClientOriginalName();

    //                     // Move the uploaded file to a directory
    //                     $file->move(public_path('uploads'), $fileName);

    //                     // Save the file name to the database
    //                     $visit->file_of_visitors = $fileName;


    //                 }

    //                 $visit->save();

    //                 if (file_exists($file)) {
    //                     Excel::import(new MemberImport, public_path('uploads') . '/' . $fileName);
    //                 } else {
    //                     // Handle the case where the file does not exist
    //                     return redirect()->back()->with('error', 'The uploaded file does not exist.');
    //                 }

    //                 // Generate QR Code
    //                 $qrData = [
    //                     'visits_id' => $visit->visits_id,
    //                     'userid' => $visit->userid,
    //                     'visits_fname' => $visit->visits_fname,
    //                     'visits_lname' => $visit->visits_lname,
    //                     'visits_intended_date' => $visit->visits_intended_date,
    //                     'visits_name_of_institution' => $visit->visits_name_of_institution,
    //                     'visits_status' => $visit->visits_status,

    //                 ];

    //                 $qrCode = QrCode::format('png')
    //                     ->size(200) // Start with a reasonable size
    //                     ->margin(10)
    //                     ->color(0, 0, 0)
    //                     ->backgroundColor(255, 255, 255)
    //                     ->errorCorrection('H')
    //                     ->generate(json_encode($qrData));

    //                 // You can check if the generated QR code is too small for the data
    //                 // If it's too small, you can regenerate with a larger size
    //                 if (strlen($qrCode) < 300) {
    //                     $qrCode = QrCode::format('png')
    //                         ->size(300) // Increase the size
    //                         ->margin(10)
    //                         ->color(0, 0, 0)
    //                         ->backgroundColor(255, 255, 255)
    //                         ->errorCorrection('L')
    //                         ->generate(json_encode($qrData));
    //                 }

    //                 $qrCodePath = public_path('qrcodes/') . $visit->visits_id . '.png';
    //                 file_put_contents($qrCodePath, $qrCode);

    //                 // Store the QR code path and related data in the session
    //                 session(['qrCodePath' => $qrCodePath, 'visitData' => $visit]);

    //                 // Redirect to the route for displaying the QR code
    //                 return redirect()->route('show.qr');
    //             } else {
    //                 return redirect()->back()->with('error', 'Sorry, only ' . $remainingSlots . ' slot(s) are available.');
    //             }
    //         } else {
    //             return redirect()->back()->with('error', 'You are not yet complete with your visitation. Please complete your previous reservation before booking another one.');
    //         }
    //     }
    // }


    public function reserve_visit(Request $request)
    {
        // Get the user data from the session
        $user = session()->get('User');
        $userid = $user['user_id'];

        // Check if the user data is available; if not, redirect with an error message
        if (!$user) {
            return redirect()->back()->with('error', "User not found");
        }

        // Check if there is an uncompleted visit for the user (not expired)
        $uncompleteVisit = Visit_Model::where('userid', $user['user_id'])
            ->where('visits_intended_date', '>=', date('Y-m-d'))
            ->first();

        // If there is an uncompleted visit, prevent booking a new one
        if ($uncompleteVisit) {
            return redirect()->back()->with('failed', 'You already have an uncompleted reservation. Please complete your previous reservation before booking another one.');
        }

        // Define validation rules for the request
        $rules = [
            'visits_intended_date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'after_or_equal:today',
            ],
            'visits_time' => 'required',
            'visits_no_of_visitors' => [
                'between:0,1000'
            ],
            'file_of_visitors' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:2048',
            'visits_name_of_institution' => 'required'
        ];

        // Define custom error messages for validation
        $messages = [
            'visits_intended_date.required' => 'Please input the intended date for reservation',
            'visits_intended_date.date' => 'Please input a valid date',
            'visits_intended_date.after_or_equal' => 'The intended date must be on or after today',
            'visits_time.required' => 'Please select the intended time for reservation',
            'visits_no_of_visitors.between' => 'The number of visitors must not be greater than 100',
            'file_of_visitors.mimetypes' => 'The file must be an Excel file',
            'file_of_visitors.max' => 'The file size must not exceed 2048 KB',
            'visits_name_of_institution' => 'Please input the name of your institution'
        ];

        // Validate the request data using the defined rules and messages
        $validator = Validator::make($request->all(), $rules, $messages);

        // If validation fails, redirect back with validation errors and input data
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Get the current year
        $currentYear = date('Y');

        // Extract the year from the intended date input
        $selectedYear = date('Y', strtotime($request->visits_intended_date));

        // Check if the selected year is less than the current year
        if ($selectedYear < $currentYear) {
            return redirect()->back()->with('error', 'The intended date must be in the current year or later.');
        }

        // Extract data from the request
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

        // Check for existing approved bookings on the same date
        $existingBooking = Visit_Model::where('visits_intended_date', $visits_intended_date)
            ->where('visits_status', 'APPROVED')
            ->get();

        // Check if inputted visitors can be accommodated
        if ($existingBooking) {
            $inputtedVisitors = $visits_no_of_visitors;
            $visits_intended_date = $request->visits_intended_date;
            $visits_time = $request->visits_time;

            // Calculate the total visitors for the given day and time
            $totalVisitorsForDateTime = Visit_Model::whereDate('visits_intended_date', $visits_intended_date)
                ->where('visits_time', $visits_time)
                ->sum('visits_no_of_visitors');

            $slotsPerDay = 800; // maximum number of slots available per day is 1000
            $remainingSlots = $slotsPerDay - $totalVisitorsForDateTime;

            // If there are enough slots, proceed to create the booking
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

                // Handle the uploaded file of visitors
                if ($request->hasFile('file_of_visitors')) {
                    $file = $request->file('file_of_visitors');
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('uploads'), $fileName);
                    $fileFullPath = public_path('uploads') . '/' . $fileName;
                    $visit->file_of_visitors = $fileName;

                    // Get the number of rows in the imported Excel file
                    $excelRowCount = count(\Maatwebsite\Excel\Facades\Excel::toArray(new MemberImport, $fileFullPath)[0]);

                    // Check if the inputted number of visitors matches the number of rows
                    if ($visits_no_of_visitors != $excelRowCount) {
                        return redirect()->back()->with('error', 'The number of visitors in the form does not match the number of data in your Excel file.');
                    }

                    try {
                        // Use Excel::import to import data from the Excel file
                        Excel::import(new MemberImport, $fileFullPath);



                        // Save the visit data to the database
                        $visit->save();
                        // Generate QR Code
                        $qrData = [
                            'visits_id' => $visit->visits_id,
                            'userid' => $visit->userid,
                            'visits_fname' => $visit->visits_fname,
                            'visits_lname' => $visit->visits_lname,
                            'visits_intended_date' => $visit->visits_intended_date,
                            'visits_name_of_institution' => $visit->visits_name_of_institution,
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

                        // Define the path to save the generated QR code
                        $qrCodePath = public_path('qrcodes/') . $visit->visits_id . '.png';

                        // Save the generated QR code to the file path
                        file_put_contents($qrCodePath, $qrCode);

                        // Store the QR code path and related data in the session
                        session(['qrCodePath' => $qrCodePath, 'visitData' => $visit]);

                        // Redirect to the route for displaying the QR code
                        return redirect()->route('show.qr');
                    } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
                        // Handle validation errors in the Excel file
                        $failures = $e->failures();
                        foreach ($failures as $failure) {
                            $row = $failure->row(); // Get the row where validation failed
                            $errors = $failure->errors(); // Get validation error messages
                            // Log or handle the validation errors as needed
                            Log::error("Validation failed for row $row: " . json_encode($errors));
                        }
                        return redirect()->back()->with('error', 'Validation error(s) occurred in the Excel file. Please check and correct the data.');
                    } catch (\Exception $e) {
                        // Handle any exceptions (e.g., invalid file format)
                        // Log::error('Excel import failed: ' . $e->getMessage());
                        return redirect()->back()->with('error', 'Failed to import data from the Excel file.' . $e->getMessage());
                    }
                } else {
                    // Handle the case where no file is uploaded
                    return redirect()->back()->with('error', 'Please upload an Excel file.');
                }
            } else {
                // Redirect with an error message if there are not enough slots
                return redirect()->back()->with('error', 'Sorry, only ' . $remainingSlots . ' slot(s) are available.');
            }
        } else {
            // Redirect with an error message if there's an uncompleted visit
            return redirect()->back()->with('error', 'You have an uncompleted visit. Please complete your previous reservation before booking another one.');
        }
    }


    public function approve_status($user_id)
    {
        $user = users::findOrFail($user_id); // Assuming the model name is 'User'
        $user_id = $user->user_id;
        $visit = Visit_Model::where('userid', $user_id)
            ->whereIn('visits_status', ['PENDING', 'APPROVED']) // Change to 'whereIn' to allow both 'PENDING' and 'APPROVED'
            ->whereRaw('DATE(visits_intended_date) >= CURDATE()') // Filter visits with future dates
            ->first();

        if ($visit) {
            $status = ['visits_status' => 'APPROVED'];
            $success = Visit_Model::where('userid', $user_id)
                ->whereIn('visits_status', ['PENDING', 'APPROVED'])
                ->whereRaw('DATE(visits_intended_date) >= CURDATE()') // Apply the same date filter here
                ->update($status);

            if ($success) {
                // Generate link and send to visitor's email
                $loggedUserId = session()->get('User');
                if ($loggedUserId && $loggedUserId == $user->user_id) {
                    $link = 'http://127.0.0.1:8000/user/profile/';
                } else {
                    $link = 'http://127.0.0.1:8000/';
                }

                $user_email = $user->user_email; // Retrieve the user's email

                if ($user_email) {
                    // Update the QR code with the new data
                    $visitData = [
                        'visits_id' => $visit->visits_id,
                        'userid' => $visit->userid,
                        'visits_fname' => $visit->visits_fname,
                        'visits_lname' => $visit->visits_lname,
                        'visits_intended_date' => $visit->visits_intended_date,
                        'visits_name_of_institution' => $visit->visits_name_of_institution,
                        'visits_status' => 'APPROVED', // Update visits_status
                    ];

                    $qrCode = QrCode::format('png')
                        ->size(200)
                        ->margin(10)
                        ->color(0, 0, 0)
                        ->backgroundColor(255, 255, 255)
                        ->errorCorrection('H')
                        ->generate(json_encode($visitData));

                    // You can check if the generated QR code is too small for the data
                    if (strlen($qrCode) < 300) {
                        $qrCode = QrCode::format('png')
                            ->size(300)
                            ->margin(10)
                            ->color(0, 0, 0)
                            ->backgroundColor(255, 255, 255)
                            ->errorCorrection('L')
                            ->generate(json_encode($visitData));
                    }

                    // Save the updated QR code image to the public folder
                    $updatedQrCodePath = public_path('updatedQrcodes/') . $visit->visits_id . '.png';
                    file_put_contents($updatedQrCodePath, $qrCode);

                    // Update the session data with the new QR code path
                    session(['updatedQrCodePath' => $updatedQrCodePath]);

                    // Send the VisitApproved email with the link
                    Mail::to($user_email)->send(new VisitApproved($link));

                    return redirect()->back()->with('success', "You have approved the reserved visit and sent an email to the user with a link");
                } else {
                    return redirect()->back()->with('failed', "Empty email");
                }
            } else {
                return redirect()->back()->with('failed', "Something went wrong. Please check your internet connection");
            }
        } else {
            return redirect()->back()->with('failed', "Failed to send email to the user");
        }
    }
    public function showQRCode()
    {
        $currentDate = date('Y-m-d');

        // Retrieve the stored QR code paths from the session
        $qrCodePath = session('qrCodePath');
        $updatedQrCodePath = session('updatedQrCodePath');

        // Check if both session variables exist
        if (!$qrCodePath && !$updatedQrCodePath) {
            abort(404); // Handle missing QR code paths
        }

        // Retrieve the user ID from the session
        $user_id = session('User')['user_id'];

        if (!$user_id) {
            abort(404); // Handle missing user ID
        }

        // Fetch the visit data based on user ID
        $visit = DB::table('visits')
            ->where('userid', $user_id)
            ->whereRaw('DATE(visits_intended_date) >= ?', [$currentDate])
            ->first();

        if (!$visit) {
            abort(404); // Handle the case where no visit record is found
        }

        // Check if the user has a pending booking
        $hasPendingBooking = $visit->visits_status === 'PENDING';

        // Check if the user has an approved booking
        $hasApprovedBooking = $visit->visits_status === 'APPROVED';

        // Check if the QR code path to display exists
        if ($hasPendingBooking && !$qrCodePath) {
            abort(404); // Handle missing QR code path for pending booking
        } elseif ($hasApprovedBooking && !$updatedQrCodePath) {
            abort(404); // Handle missing QR code path for approved booking
        }

        // ... (other logic for displaying QR codes and related data)

        // Fetch other related data (users, reservedSouvenir, rent)
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $reservedSouvenir = Reserved_Souvenir::with('souvenir')->with('user')->where('userid', $user_id)->where('is_archived', 0)->get();
        $rent = Function_Hall::with('user')->where('userid', $user_id)->whereRaw('DATE(date_requested) >= ?', [$currentDate])->get();

        return view('user.pages.profile.mybookings', compact('qrCodePath', 'visit', 'hasPendingBooking', 'hasApprovedBooking', 'users', 'reservedSouvenir', 'rent'));
    }



    public function processQRCode()
    {
        // Get the stored QR code path and related visit data from the session
        $qrCodePath = session('UpdatedQrCodePath');
        $visitData = session('visitData');

        if (!$qrCodePath || !$visitData) {
            // Handle the case where session data is missing
            return response()->json(['success' => false, 'error' => 'Session data is missing']);
        }

        // Update visits_status to 'DONE' based on specific criteria
        // Modify the where clause to match your specific criteria
        DB::table('visits')
            ->where('visits_status', 'APPROVED')
            ->where('visit_data', $visitData) // Add your specific criteria here
            ->update(['visits_status' => 'DONE']);

        // Return a JSON response to indicate success
        return response()->json(['success' => true, 'message' => 'QR code processed successfully']);
    }

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
