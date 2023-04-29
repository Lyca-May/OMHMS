<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class VisitController extends Controller
{
    //get
    public function index()
{
    $visits = DB::table('visits')->get();
    return view('admin.pages.visit', ['visit' => $visits]);
}

}
