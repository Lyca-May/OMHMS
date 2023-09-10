<?php

namespace App\Http\Controllers;

use App\Models\Footer_Model;
use App\Models\History_Content;
use App\Models\WTS_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class About_Us extends Controller
{

    // HISTORY CONTENT
    public function display_history_content_user(){
        $footer = Footer_Model::where('is_archived','0')->get();
        $wts = WTS_Model::where('is_archived','0')->get();
        $contents = History_Content::where('is_archived','0')->get();
        return view('user.pages.landingpage.aboutpages.history', compact( 'contents', 'wts', 'footer' ));
    }
    public function display_history_content_user1(){
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $footer = Footer_Model::where('is_archived','0')->get();
        $wts = WTS_Model::where('is_archived','0')->get();
        $contents = History_Content::where('is_archived','0')->get();
        return view('user.pages.landingpage1.aboutpages.history1', compact('users', 'contents', 'wts', 'footer'));
    }
    public function display_history_content(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $wts = WTS_Model::where('is_archived','0')->get();
        $contents = History_Content::where('is_archived','0')->get();
        $archived = History_Content::where('is_archived','1')->get();
        $archivedwts = WTS_Model::where('is_archived','1')->get();
        return view('admin.pages.aboutUs.history', compact('users', 'contents', 'archived', 'wts', 'archivedwts'));
    }

    public function add_history_content(Request $request)
    {
        $userid = session('Admin')['user_id'];


        // Validate the request data
        $rules = [
            'history_title' => 'required',
            'history_desc' => 'required',
            'history_info' => 'required',
            'history_info1' => 'required',
            'history_image' => 'required',
            'history_image1' => 'required',
        ];

        $messages = [
            'history_title.required' => 'The title name is required.',
            'history_desc.required' => 'The description is required.',
            'history_info.required' => 'The information is required.',
            'history_info1.required' => 'The information is required.',
            'history_image' => 'Image of the history is required',
            'history_image1' => 'Image of the history is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $history_title = $request->input('history_title');
        $history_desc = $request->input('history_desc');
        $history_info = $request->input('history_info');
        $history_info1 = $request->input('history_info1');


        // Create and save the hist
        $hist = new History_Content();
        $hist->userid = $userid; // Access the user_id property correctly
        $hist->history_title = $history_title;
        $hist->history_desc = $history_desc;
        $hist->history_info = $history_info;
        $hist->history_info1 = $history_info1;
        $hist->is_archived = false;

        if ($request->hasFile('history_image')) {
            // Get the uploaded file
            $history_image = $request->file('history_image');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $history_image->getClientOriginalName();

            // Save the file to the storage/app/public/history_images directory
            $history_image->move(public_path('history_image'), $filename);

            // Update the user's history_image column with the filename
            $hist->history_image = $filename;
        }
        if ($request->hasFile('history_image1')) {
            // Get the uploaded file
            $history_image1 = $request->file('history_image1');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $history_image1->getClientOriginalName();

            // Save the file to the storage/app/public/history_images directory
            $history_image1->move(public_path('history_image1'), $filename);

            // Update the user's history_image column with the filename
            $hist->history_image1 = $filename;
        }

        $hist->save();

        // Check if the hist was successfully saved
        if ($hist) {
            return redirect()->back()->with('success', 'History content created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create history content.');
        }
    }


    public function update_history_content(Request $request, $history_id)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'history_title' => 'required',
            'history_desc' => 'required',
            'history_info' => 'required',
            'history_info1' => 'required',
            'history_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
            'history_image1' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        ], [
            'history_title.required' => 'The history title is required.',
            'history_desc.required' => 'The history description is required.',
            'history_info.required' => 'The history information is required.',
            'history_info1.required' => 'The history information is required.',
            'history_image.image' => 'The history image must be an image file.',
            'history_image.mimes' => 'The history image must be in JPEG, PNG, JPG, or GIF format.',
            'history_image.max' => 'The history image size should not exceed 2MB.',
            'history_image1.image' => 'The second history image must be an image file.',
            'history_image1.mimes' => 'The second history image must be in JPEG, PNG, JPG, or GIF format.',
            'history_image1.max' => 'The second history image size should not exceed 2MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $history = History_Content::findOrFail($history_id);

        if (!$history) {
            return redirect()->back()->with('error', 'History not found.');
        }

        $history->history_title = $request->input('history_title');
        $history->history_desc = $request->input('history_desc');
        $history->history_info = $request->input('history_info');
        $history->history_info1 = $request->input('history_info1');

        if ($request->hasFile('history_image')) {
            $file = $request->file('history_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('history_image'), $filename);
            $history->history_image = $filename;
        }

        if ($request->hasFile('history_image1')) {
            $file = $request->file('history_image1');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('history_image1'), $filename);
            $history->history_image1 = $filename;
        }

        $history->save();

        if ($history) {
            return redirect()->back()->with('success', 'History content updated successfully.');
        } else {
            return redirect()->back()->with('failed', 'Failed to update History content.');
        }
    }


    public function archive_history_content($history_id)
    {
        // Find the category to archive
        $history = History_Content::find($history_id);

        if (!$history) {
            return redirect()->back()->with('error', 'history not found.');
        }

        // Archive the history (perform the desired action)
        $history->is_archived = true;
        $history->save();

        // Check if the history was successfully archived
        if ($history) {
            return redirect()->back()->with('success', 'history archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to archive history.');
        }
    }

    //END OF HISTORY CONTENT


    //WTS

    public function display_history_wts(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $wts = WTS_Model::where('is_archived','0')->get();
        $archivedwts = WTS_Model::where('is_archived','1')->get();
        return view('admin.pages.aboutUs.what-to-see', compact('users', 'wts', 'archivedwts'));
    }

    public function add_history_wts(Request $request)
    {
        $userid = session('Admin')['user_id'];

        // Validate the request data
        $rules = [
            'wts_title' => 'required',
            'wts_info' => 'required',
            'wts_image_title' => 'required',
            'wts_image' => 'required',
        ];

        $messages = [
            'wts_title.required' => 'The title name is required.',
            'wts_info.required' => 'The information is required.',
            'wts_image_title' => 'Image name of the wts is required',
            'wts_image' => 'Image of the wts is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $wts_title = $request->input('wts_title');
        $wts_info = $request->input('wts_info');
        $wts_image_title = $request->input('wts_image_title');

        // Create and save the hist
        $hist = new WTS_Model();
        $hist->userid = $userid; // Access the user_id property correctly
        $hist->wts_title = $wts_title;
        $hist->wts_info = $wts_info;
        $hist->wts_image_title = $wts_image_title;
        $hist->is_archived = false;

        if ($request->hasFile('wts_image')) {
            // Get the uploaded file
            $wts_image = $request->file('wts_image');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $wts_image->getClientOriginalName();

            // Save the file to the storage/app/public/wts_images directory
            $wts_image->move(public_path('wts_image'), $filename);

            // Update the user's wts_image column with the filename
            $hist->wts_image = $filename;
        }

        $hist->save();

        // Check if the hist was successfully saved
        if ($hist) {
            return redirect()->back()->with('success', 'History  created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create history.');
        }
    }


    public function update_history_wts(Request $request, $wts_id)
    {
        // Validate the request data
        $rules = [
            'wts_title' => 'required',
            'wts_info' => 'required',
            'wts_image_title' => 'required',
            'wts_image' => 'required',
        ];

        $messages = [
            'wts_title.required' => 'The title name is required.',
            'wts_info.required' => 'The information is required.',
            'wts_image_title' => 'Image name of the wts is required',
            'wts_image' => 'Image of the wts is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $history = WTS_Model::findOrFail($wts_id);

        if (!$history) {
            return redirect()->back()->with('error', 'history not found.');
        }

        $history->wts_title = $request->input('wts_title');
        $history->wts_info = $request->input('wts_info');
        $history->wts_image_title = $request->input('wts_image_title');
        // $history->history_image = $request->input('history_image');

        if ($request->hasFile('wts_image')) {
            $file = $request->file('wts_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('wts_image'), $filename);
            $history->wts_image = $filename;
        }

        $history->save();

        if ($history) {
            return redirect()->back()->with('success', 'History content updated successfully.');
        } else {
            return redirect()->back()->with('failed', 'Failed to update History content.');
        }
    }

    public function archive_history_wts($wts_id)
    {
        // Find the category to archive
        $history = WTS_Model::find($wts_id);

        if (!$history) {
            return redirect()->back()->with('error', 'history not found.');
        }

        // Archive the history (perform the desired action)
        $history->is_archived = true;
        $history->save();

        // Check if the history was successfully archived
        if ($history) {
            return redirect()->back()->with('success', 'history archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to archive history.');
        }
    }

    //footer
    public function display_history_footer(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $footer = Footer_Model::where('is_archived','0')->get();
        $archived = Footer_Model::where('is_archived','1')->get();
        return view('admin.pages.aboutUs.history-footer', compact('users', 'footer', 'archived'));
    }

    public function add_history_footer(Request $request)
    {
        $userid = session('Admin')['user_id'];
        // Validate the request data
        $rules = [
            'footer_title' => 'required',
            'footer_info' => 'required',
            'footer_image1' => 'required',
            'footer_image2' => 'required',
            'footer_image3' => 'required',
            'footer_trademark' => 'required',
        ];

        $messages = [
            'footer_title.required' => 'The title name is required.',
            'footer_info.required' => 'The information is required.',
            'footer_image1' => 'Image name of the wts is required',
            'footer_image2' => 'Image name of the wts is required',
            'footer_image3' => 'Image name of the wts is required',
            'footer_trademark' => 'Image name of the wts is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $footer_title = $request->input('footer_title');
        $footer_info = $request->input('footer_info');
        $footer_trademark = $request->input('footer_trademark');
        // $footer_image1 = $request->input('footer_image1');

        // Create and save the hist
        $hist = new Footer_Model();
        $hist->userid = $userid; // Access the user_id property correctly
        $hist->footer_title = $footer_title;
        $hist->footer_info = $footer_info;
        $hist->footer_trademark = $footer_trademark;
        $hist->is_archived = false;

        if ($request->hasFile('footer_image1')) {
            // Get the uploaded file
            $footer_image1 = $request->file('footer_image1');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $footer_image1->getClientOriginalName();

            // Save the file to the storage/app/public/footer_image1s directory
            $footer_image1->move(public_path('footer_image1'), $filename);

            // Update the user's footer_image1 column with the filename
            $hist->footer_image1 = $filename;
        }
        if ($request->hasFile('footer_image2')) {
            // Get the uploaded file
            $footer_image2 = $request->file('footer_image2');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $footer_image2->getClientOriginalName();

            // Save the file to the storage/app/public/footer_image2s directory
            $footer_image2->move(public_path('footer_image2'), $filename);

            // Update the user's footer_image2 column with the filename
            $hist->footer_image2 = $filename;
        }
        if ($request->hasFile('footer_image3')) {
            // Get the uploaded file
            $footer_image3 = $request->file('footer_image3');

            // Generate a unique filename for the uploaded file
            $filename = time() . '_' . $footer_image3->getClientOriginalName();

            // Save the file to the storage/app/public/footer_image3s directory
            $footer_image3->move(public_path('footer_image3'), $filename);

            // Update the user's footer_image3 column with the filename
            $hist->footer_image3 = $filename;
        }

        $hist->save();

        // Check if the hist was successfully saved
        if ($hist) {
            return redirect()->back()->with('success', 'History  created successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to create history.');
        }
    }


    public function update_history_footer(Request $request, $footer_id)
    {
        // Validate the request data
        $rules = [
            'footer_title' => 'required',
            'footer_info' => 'required',
            'footer_image1' => 'required',
            'footer_image2' => 'required',
            'footer_image3' => 'required',
            'footer_trademark' => 'required',
        ];

        $messages = [
            'footer_info.required' => 'The title name is required.',
            'footer_title.required' => 'The information is required.',
            'footer_image1' => 'Image name of the wts is required',
            'footer_image2' => 'Image name of the wts is required',
            'footer_image3' => 'Image name of the wts is required',
            'footer_trademark' => 'Image name of the wts is required',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $history = Footer_Model::findOrFail($footer_id);

        if (!$history) {
            return redirect()->back()->with('error', 'history not found.');
        }

        $history->footer_title = $request->input('footer_title');
        $history->footer_info = $request->input('footer_info');
        $history->footer_trademark = $request->input('footer_trademark');
        // $history->history_image = $request->input('history_image');

        if ($request->hasFile('footer_image1')) {
            $file = $request->file('footer_image1');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('footer_image1'), $filename);
            $history->footer_image1 = $filename;
        }
        if ($request->hasFile('footer_image2')) {
            $file = $request->file('footer_image2');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('footer_image2'), $filename);
            $history->footer_image2 = $filename;
        }
        if ($request->hasFile('footer_image3')) {
            $file = $request->file('footer_image3');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('footer_image3'), $filename);
            $history->footer_image3 = $filename;
        }

        $history->save();

        if ($history) {
            return redirect()->back()->with('success', 'History content updated successfully.');
        } else {
            return redirect()->back()->with('failed', 'Failed to update History content.');
        }
    }

    public function archive_history_footer($footer_id)
    {
        // Find the category to archive
        $history = Footer_Model::find($footer_id);

        if (!$history) {
            return redirect()->back()->with('error', 'history not found.');
        }

        // Archive the history (perform the desired action)
        $history->is_archived = true;
        $history->save();

        // Check if the history was successfully archived
        if ($history) {
            return redirect()->back()->with('success', 'history archived successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to archive history.');
        }
    }
}
