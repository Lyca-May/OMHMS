<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AnnouncementModel;
use Illuminate\Support\Facades\Validator;


class AnnouncementController extends Controller
{
    public function displayAnnouncement(){
        $user_id = session('Admin')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        $announcement = DB::table('announcement')->where('announcement_status', 'POSTED')->get();
        return view('admin.pages.announcement.announcement', compact('announcement', 'users'));
    }

    public function UserdisplayAnnouncement1(){
        // $user_id = session('Admin')['user_id'];
        // $users = DB::table('users')->where('user_id', $user_id)->get();
        $announcement = DB::table('announcement')->where('announcement_status', 'POSTED')->get();
        return view('user.pages.landingpage1.reviewpages.testimonials1', compact('announcement'));
    }

    public function UserdisplayLandinganounce(){
        // $user_id = session('Admin')['user_id'];
        // $users = DB::table('users')->where('user_id', $user_id)->get();
        $announcement = DB::table('announcement')->where('announcement_status', 'POSTED')->get();

        return view('user.pages.landingpage.landingpage', compact('announcement'));
    }
    public function UserdisplayLanding1anounce(){
        // $user_id = session('Admin')['user_id'];
        // $users = DB::table('users')->where('user_id', $user_id)->get();
        $announcement = DB::table('announcement')->where('announcement_status', 'POSTED')->get();
        return view('user.pages.landingpage1.landingpage1', compact('announcement'));
    }
    public function UserdisplayAnnouncement(){
        // $user_id = session('Admin')['user_id'];
        // $users = DB::table('users')->where('user_id', $user_id)->get();
        $announcement = DB::table('announcement')->where('announcement_status', 'POSTED')->get();
        return view('user.pages.landingpage.reviewpages.testimonials', compact('announcement'));
    }
    public function create_announcement(Request $request)
{
    $user_id = session('Admin')['user_id'];

    $rules = [
        'announcer' => 'required',
        'announcement_content' => 'required',
        // 'announcement_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation rule for the image field
    ];

    $message = [
        'announcer.required' => 'Name of the announcer is required',
        'announcement_content.required' => 'Announcement Content is empty. Please fill it up',
        // 'announcement_image.image' => 'Invalid image format',
        // 'announcement_image.mimes' => 'Image must be a JPEG, PNG, JPG, or GIF',
        // 'announcement_image.max' => 'Image size should not exceed 2MB',
    ];

    $validator = Validator::make($request->all(), $rules, $message);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $announcer = $request->announcer;
    $announcement_content = $request->announcement_content;
    $announcement_status = 'POSTED';
    $announcement = new AnnouncementModel();
    $announcement->userid = $user_id;
    $announcement->announcer = $announcer;
    $announcement->announcement_content = $announcement_content;
    $announcement->announcement_status = 'POSTED';

    // Handle the uploaded image
    if ($request->hasFile('announcement_image')) {
        // Get the uploaded file
        $announcement_image = $request->file('announcement_image');

        // Generate a unique filename for the uploaded file
        $filename = time() . '_' . $announcement_image->getClientOriginalName();

        // Save the file to the storage/app/public/announcement_image directory
        $announcement_image->move(public_path('announcement_image'), $filename);

        // Update the user's avatar column with the filename
        $announcement->announcement_image = $filename;
    }
    $announcement->save();

    if($announcement){
        return redirect('admin/announcement')->with('success', 'Announcement created successfully');
    }else{
        return redirect('admin/announcement')->with('failed', 'Adding announcement is unsuccessful');
    }
    // Redirect the user to the announcement page
}


    public function archiveAnnouncement(){
        $announcement = DB::table('announcement')->where('announcement_status', 'POSTED')->first();

        if($announcement){
            $status = ['announcement_status' => 'ARCHIVE'];
            $success = DB::table('announcement')->where('announcement_id', $announcement->announcement_id)
                                                ->where('announcement_status', 'POSTED')
                                                ->update($status);
            if($success){
                return redirect()->back()->with('success', "Archived Successfully");
            }
            else{
                return redirect()->back()->with('failed', "Archived Unsuccessful");
            }
        }
        else{
            return redirect()->back()->with('failed', "The announce was already archived");
        }
    }

    public function editAnnouncement($announcement_id)
    {
        $announcement = DB::table('announcement')->where('announcement_id', $announcement_id)->first();
        return view('admin.pages.announcement.edit-announcement', compact('announcement'));
    }

    public function updateAnnouncement(Request $request, $announcement_id)
{
    $announcement = DB::table('announcement')->where('announcement_id', $announcement_id)->first();

    $announcement->announcer = $request->input('announcer');
    $announcement->announcement_content = $request->input('announcement_content');

    // Handle file upload
    if ($request->hasFile('announcement_image')) {
        $file = $request->file('announcement_image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('announcement_image'), $filename);
        $announcement->announcement_image = $filename;
    }

    DB::table('announcement')->where('announcement_id', $announcement_id)->update((array) $announcement);

    if($announcement){
        return redirect()->back()->with('success', 'Announcement updated successfully.');
    }else{
        return redirect()->back()->with('failed', 'Updating announcement is unsuccessful. Please try again.');
    }
}





}
