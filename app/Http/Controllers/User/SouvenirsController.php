<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\SouvenirsModel;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use Illuminate\Support\Facades\Validator;



class SouvenirsController extends Controller
{
    public function displaySouvenirs(){
        $categories = DB::table('category')->get();
        $archived = SouvenirsModel::with('category')->where('souvenir_status','archived')->get();
        $souvenirs = SouvenirsModel::with('category')->where('souvenir_status','posted')->get();
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('admin.pages.souvenirs.souvenir-table', ['users' => $users, 'categories' => $categories, 'souvenirs' => $souvenirs, 'archived' => $archived]);
    }

    // public function displaySouvenirs(){
    //     $user_id = session('Admin')['user_id'];
    //     $users = DB::table('users')->where('user_id', $user_id)->get();
    //     return view('admin.pages.souvenirs.souvenir-table', ['users' => $users]);
    // }

    public function create_souvenir(Request $request)
{
    $userid = session('Admin')['user_id'];

    // Validate the request data
    $rules = [
        'souvenir_name' => 'required',
        'souvenir_qty' => 'required|integer',
        'souvenir_price' => 'required|numeric',
        'souvenir_description' => 'required',
        'souvenir_municipality' => 'required',
        'souvenir_image' => 'required|image|mimes:jpeg,png,jpg,gif',
    ];

    $messages = [
        'souvenir_name.required' => 'The souvenir name is required.',
        'souvenir_qty.required' => 'The souvenir quantity is required.',
        'souvenir_qty.integer' => 'The souvenir quantity must be an integer.',
        'souvenir_price.required' => 'The souvenir price is required.',
        'souvenir_price.numeric' => 'The souvenir price must be a number.',
        'souvenir_description.required' => 'The souvenir description is required.',
        'souvenir_municipality.required' => 'The souvenir municipality is required.',
        'souvenir_image.required' => 'The souvenir image is required.',
        'souvenir_image.image' => 'The souvenir image must be an image file.',
        'souvenir_image.mimes' => 'The souvenir image must be a file of type: jpeg, png, jpg, gif.',
        // 'souvenir_image.max' => 'The souvenir image may not be greater than 2 MB.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $category_name = $request->input('category_name');
    $souvenir_name = $request->input('souvenir_name');
    $souvenir_qty = $request->input('souvenir_qty');
    $souvenir_price = $request->input('souvenir_price');
    $souvenir_description = $request->input('souvenir_description');
    $souvenir_municipality = $request->input('souvenir_municipality');

    // Create and save the artifact
    $souvenir = new SouvenirsModel();
    $souvenir->userid = $userid;
    $souvenir->category_id = $category_name;
    $souvenir->souvenir_name = $souvenir_name;
    $souvenir->souvenir_qty = $souvenir_qty;
    $souvenir->souvenir_price = $souvenir_price;
    $souvenir->souvenir_description = $souvenir_description;
    $souvenir->souvenir_municipality = $souvenir_municipality;
    $souvenir->souvenir_status = 'posted';

    if ($request->hasFile('souvenir_image')) {
        // Get the uploaded file
        $souvenir_image = $request->file('souvenir_image');

        // Generate a unique filename for the uploaded file
        $filename = time() . '_' . $souvenir_image->getClientOriginalName();

        // Save the file to the storage/app/public/souvenir_images directory
        $souvenir_image->move(public_path('souvenir_image'), $filename);

        // Update the user's souvenir_image column with the filename
        $souvenir->souvenir_image = $filename;
    }

    $souvenir->save();

    // Check if the artifact was successfully saved
    if ($souvenir) {
        return redirect()->back()->with('success', 'Inventory item created successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to create inventory item.');
    }
}


    // public function update_souvenir(Request $request, $souvenir_id)
    // {
    //     // Validate the request data
    //     $rules = [
    //         'souvenir_name' => 'required',
    //         'souvenir_qty' => 'required|integer',
    //         'souvenir_price' => 'required|numeric',
    //         'souvenir_description' => 'required',
    //         'souvenir_municipality' => 'required',
    //         'souvenir_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ];

    //     $messages = [
    //         'souvenir_name.required' => 'The souvenir name is required.',
    //         'souvenir_qty.required' => 'The souvenir quantity is required.',
    //         'souvenir_qty.integer' => 'The souvenir quantity must be an integer.',
    //         'souvenir_price.required' => 'The souvenir price is required.',
    //         'souvenir_price.numeric' => 'The souvenir price must be a number.',
    //         'souvenir_description.required' => 'The souvenir description is required.',
    //         'souvenir_municipality.required' => 'The souvenir municipality is required.',
    //         'souvenir_image.required' => 'The souvenir image is required.',
    //         'souvenir_image.image' => 'The souvenir image must be an image file.',
    //         'souvenir_image.mimes' => 'The souvenir image must be a file of type: jpeg, png, jpg, gif.',
    //         'souvenir_image.max' => 'The souvenir image may not be greater than 2 MB.',
    //     ];

    //     $validator = Validator::make($request->all(), $rules, $messages);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $souvenir = SouvenirsModel::findOrFail($souvenir_id);

    //     if (!$souvenir) {
    //         return redirect()->back()->with('error', 'souvenir not found.');
    //     }

    //     $souvenir->souvenir_name = $request->input('souvenir_name');
    //     $souvenir->souvenir_description = $request->input('souvenir_description');
    //     $souvenir->category_id = $request->input('category_id');
    //     $souvenir->souvenir_qty = $request->input('souvenir_qty');

    //     if ($request->hasFile('souvenir_image')) {
    //         $file = $request->file('souvenir_image');
    //         $filename = time() . '_' . $file->getClientOriginalName();
    //         $file->move(public_path('souvenir_image'), $filename);
    //         $souvenir->souvenir_image = $filename;
    //     }

    //     $souvenir->save();

    //     if ($souvenir) {
    //         return redirect()->back()->with('success', 'Inventory item updated successfully.');
    //     } else {
    //         return redirect()->back()->with('failed', 'Failed to update inventory item.');
    //     }
    // }

    public function update_souvenir(Request $request, $souvenir_id)
{
    // Validate the request data
    $rules = [
        'souvenir_name' => 'required',
        'souvenir_qty' => 'required|integer',
        'souvenir_price' => 'required|numeric',
        'souvenir_description' => 'required',
        'souvenir_municipality' => 'required',
        'souvenir_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
    ];

    $messages = [
        'souvenir_name.required' => 'The souvenir name is required.',
        'souvenir_qty.required' => 'The souvenir quantity is required.',
        'souvenir_qty.integer' => 'The souvenir quantity must be an integer.',
        'souvenir_price.required' => 'The souvenir price is required.',
        'souvenir_price.numeric' => 'The souvenir price must be a number.',
        'souvenir_description.required' => 'The souvenir description is required.',
        'souvenir_municipality.required' => 'The souvenir municipality is required.',
        'souvenir_image.image' => 'The souvenir image must be an image file.',
        'souvenir_image.mimes' => 'The souvenir image must be a file of type: jpeg, png, jpg, gif.',
        // 'souvenir_image.max' => 'The souvenir image may not be greater than 2 MB.',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $souvenir = SouvenirsModel::findOrFail($souvenir_id);

    if (!$souvenir) {
        return redirect()->back()->with('error', 'Souvenir not found.');
    }

    $souvenir->souvenir_name = $request->input('souvenir_name');
    $souvenir->souvenir_description = $request->input('souvenir_description');
    $souvenir->category_id = $request->input('category_id');
    $souvenir->souvenir_qty = $request->input('souvenir_qty');
    $souvenir->souvenir_price = $request->input('souvenir_price');
    $souvenir->souvenir_municipality = $request->input('souvenir_municipality');

    if ($request->hasFile('souvenir_image')) {
        $file = $request->file('souvenir_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('souvenir_image'), $filename);
        $souvenir->souvenir_image = $filename;
    }

    $souvenir->save();

    if ($souvenir) {
        return redirect()->back()->with('success', 'Souvenir item updated successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to update souvenir item.');
    }
}

    public function archive_souvenir($souvenir_id)
    {
        // Find the category to archive
        $souvenir = SouvenirsModel::find($souvenir_id);

        if (!$souvenir) {
            return redirect()->back()->with('error', 'Souvenir not found.');
        }

        // Archive the category (perform the desired action)
        $souvenir->souvenir_status = 'archived';
        $souvenir->save();

        // Check if the souvenir was successfully archived
        if ($souvenir) {
            return redirect()->back()->with('success', 'Category archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to archive category.');
        }
    }
}
