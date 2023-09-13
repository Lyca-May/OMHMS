<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Carbon\Carbon;

class ReservedsouvenirsController extends Controller
{
    public function admin_reservedsouvenirs()
    {
        $currentDateTime = Carbon::now()->tz('UTC');
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();


        return view('admin.pages.reservedsouvenirs.reserved_souvenirs', compact('currentDateTime', 'users'));
    }

}
