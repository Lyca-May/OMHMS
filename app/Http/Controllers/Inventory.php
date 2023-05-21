<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\users;

class Inventory extends Controller
{
    public function displayArtifacts(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('admin.pages.inventory.inventory-table', ['users' => $users]);
    }
}
