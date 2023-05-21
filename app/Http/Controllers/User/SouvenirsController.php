<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\SouvenirsModel;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;


class SouvenirsController extends Controller
{
    public function store(Request $request)
    {
        $admin = DB::table('users')->first();

        // Validate the request data
        $validatedData = $request->validate([
            'souvenir_name' => 'required|string',
            'souvenir_description' => 'required|string',
            'souvenir_qty' => 'required|string',
            'souvenir_price' => 'required|string',
            'souvenir_municipality' => 'required|string',
            'souvenir_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle image upload
        if ($request->hasFile('souvenir_image')) {
            $image = $request->file('souvenir_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('souvenir'), $imageName);
        }

        // Create and save the souvenir
        $souvenir = new SouvenirsModel();
        $souvenir->userid = $admin;
        $souvenir->souvenir_name = $validatedData['souvenir_name'];
        $souvenir->souvenir_description = $validatedData['souvenir_description'];
        $souvenir->souvenir_qty = $validatedData['souvenir_qty'];
        $souvenir->souvenir_price = $validatedData['souvenir_price'];
        $souvenir->souvenir_municipality = $validatedData['souvenir_municipality'];
        $souvenir->souvenir_image = $imageName ?? null; // Set the image name if it was uploaded
        $souvenir->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Souvenir created successfully.');
    }

    public function displaySouvenirs(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('admin.pages.inventory.inventory-table', ['users' => $users]);
    }
}
