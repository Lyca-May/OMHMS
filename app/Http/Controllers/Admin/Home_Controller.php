<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home_Controller extends Controller
{
    public function Home(){
        return view('Admin.Home');
    }
}
