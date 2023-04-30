<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Visit_Model;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class VisitController extends Controller
{
    //get
    public function index()
    {
        $visits = DB::table('visits')->get();
        return view('admin.pages.visit', ['visit' => $visits]);
    }


}
