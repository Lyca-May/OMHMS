<?php

namespace App\Http\Controllers;

use App\Models\InventoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\users;
use Carbon\Carbon;

class Inventory extends Controller
{
    public function displayArtifacts(){
        // $category = DB::table('category')->where('is_archived','0')->get();
        // $archived = DB::table('category')->where('is_archived','1')->get();
        $currentDateTime = Carbon::now()->tz('UTC');
        $categories = DB::table('category')->get();
        $archived = InventoryModel::with('category')->where('is_archived','1')->get();
        $artifacts = InventoryModel::with('category')->where('is_archived','0')->get();
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('admin.pages.inventory.inventory-table', ['users' => $users, 'categories' => $categories, 'artifacts' => $artifacts, 'archived' => $archived], compact('currentDateTime'));
    }

    // public function archived_item()
    // {
    //     $archived = DB::table('inventory_artifacts')->where('is_archived', 'ARCHIVED')->get();
    //     return view('admin.pages.inventory.inventory-table', ['archived' => $archived]);
    // }


    public function create_artifact(Request $request)
    {
        $userid = session('Admin')['user_id'];


        // Validate the request data
        $rules = [
            'artifact_name' => 'required',
            'artifact_description' => 'required',
            'artifact_category' => 'required',
            'artifact_image' => 'required',
            'quantity' => 'required',
        ];

        $messages = [
            'artifact_name.required' => 'The artifact name is required.',
            'artifact_description.required' => 'The artifact description is required.',
            'artifact_category.required' => 'The artifact category is required.',
            'artifact_image' => 'Image of the item is required',
            'quantity' => 'Its quantity is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $artifact_name = $request->input('artifact_name');
        $artifact_description = $request->input('artifact_description');
        $artifact_category = $request->input('artifact_category');
        $quantity = $request->input('quantity');
        $artifact_category = $request->input('artifact_category');

        // Create and save the artifact
        $artifact = new InventoryModel();
        $artifact->userid = $userid; // Access the user_id property correctly
        $artifact->artifact_name = $artifact_name;
        $artifact->artifact_description = $artifact_description;
        $artifact->category_id = $artifact_category;
        $artifact->quantity = $quantity;
        $artifact->is_archived = false;

        if ($request->hasFile('artifact_image')) {
            // Get the uploaded file
            $artifact_image = $request->file('artifact_image');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $artifact_image->getClientOriginalName();

            // Save the file to the storage/app/public/artifact_images directory
            $artifact_image->move(public_path('artifact_image'), $filename);

            // Update the user's artifact_image column with the filename
            $artifact->artifact_image = $filename;
        }

        $artifact->save();

        // Check if the artifact was successfully saved
        if ($artifact) {
            return redirect()->back()->with('success', 'Inventory item created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create inventory item.');
        }
    }

    public function update_artifact(Request $request, $artifact_id)
    {
        // Validate the request data
        $rules = [
            'artifact_name' => 'required',
            'artifact_description' => 'required',
            'category_id' => 'required',
            'quantity' => 'required',
        ];

        $messages = [
            'artifact_name.required' => 'The artifact name is required.',
            'artifact_description.required' => 'The artifact description is required.',
            'category_id.required' => 'The artifact category is required.',
            'quantity.required' => 'The quantity is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $artifact = InventoryModel::findOrFail($artifact_id);

        if (!$artifact) {
            return redirect()->back()->with('error', 'Artifact not found.');
        }

        $artifact->artifact_name = $request->input('artifact_name');
        $artifact->artifact_description = $request->input('artifact_description');
        $artifact->category_id = $request->input('category_id');
        $artifact->quantity = $request->input('quantity');

        if ($request->hasFile('artifact_image')) {
            $file = $request->file('artifact_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('artifact_image'), $filename);
            $artifact->artifact_image = $filename;
        }

        $artifact->save();

        if ($artifact) {
            return redirect()->back()->with('success', 'Inventory item updated successfully.');
        } else {
            return redirect()->back()->with('failed', 'Failed to update inventory item.');
        }
    }


}
