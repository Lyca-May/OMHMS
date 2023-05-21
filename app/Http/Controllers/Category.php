<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class Category extends Controller
{
    public function displayCategory()
    {
        $category = DB::table('category')->get();
        $archived = DB::table('category')->where('is_archived','1')->get();
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('admin.pages.category.category-table', ['users' => $users, 'category' => $category, 'archived' => $archived]);
    }

    public function add_category(Request $request)
    {
        $userid = session('Admin')['user_id'];


        // Validate the request data
        $rules = [
            'category_name' => 'required',
            'category_description' => 'required',
            'category_type' => 'required',
        ];

        $messages = [
            'category_name.required' => 'The category name is required.',
            'category_description.required' => 'The category description is required.',
            'category_type.required' => 'The category type is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category_name = $request->input('category_name');
        $category_description = $request->input('category_description');
        $category_type = $request->input('category_type');

        // Create and save the category
        $category = new CategoryModel();
        $category->userid = $userid; // Access the user_id property correctly
        $category->category_name = $category_name;
        $category->category_description = $category_description;
        $category->category_type = $category_type;
        $category->save();

        // Check if the category was successfully saved
        if ($category) {
            return redirect()->back()->with('success', 'Category created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create category.');
        }
    }



    public function edit_category(Request $request, $category_id)
    {
        $userid = session('Admin')['user_id'];

        // Validate the request data
        $rules = [
            'category_name' => 'required',
            'category_description' => 'required',
            'category_type' => 'required',
        ];

        $messages = [
            'category_name.required' => 'The category name is required.',
            'category_description.required' => 'The category description is required.',
            'category_type.required' => 'The category type is required.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category_name = $request->input('category_name');
        $category_description = $request->input('category_description');
        $category_type = $request->input('category_type');

        // Find the category to edit
        $category = CategoryModel::find($category_id);

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        // Update the category data
        $category->userid = $userid;
        $category->category_name = $category_name;
        $category->category_description = $category_description;
        $category->category_type = $category_type;
        $category->save();

        // Check if the category was successfully updated
        if ($category) {
            return redirect()->back()->with('success', 'Category updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update category.');
        }
    }
    public function archive_category($category_id)
{
    // Find the category to archive
    $category = CategoryModel::find($category_id);

    if (!$category) {
        return redirect()->back()->with('error', 'Category not found.');
    }

    // Archive the category (perform the desired action)
    $category->is_archived = true;
    $category->save();

    // Check if the category was successfully archived
    if ($category) {
        return redirect()->back()->with('success', 'Category archived successfully.');
    } else {
        return redirect()->back()->with('error', 'Failed to archive category.');
    }
}


}
