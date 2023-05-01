<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Images;

class ImagesController extends Controller
{


    public function upload(Request $request)
    {
        // Check if the user is authenticated
        if (!$request->session()->has('User.user_id')) {
            return redirect('/login')->with('error', 'Please login to upload an image');
        }

        // Validate the uploaded image file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the uploaded image file
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Get the authenticated user
        $user_id = $request->session()->get('user_id');

        // Store the path of the image in the database
        $imagePath = 'images/' . $imageName;
        DB::table('images')->insert(['userid' => $user_id, 'path' => $imagePath]);

        return redirect('user/image')->with('success', 'Image uploaded successfully');
    }


}
