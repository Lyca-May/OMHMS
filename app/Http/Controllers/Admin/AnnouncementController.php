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
        // $user_id = session('Admin')['user_id'];
        $announcement = AnnouncementModel::all();
        return view('admin.pages.announcement.announcements', compact('announcement'));

    }
    public function create_announcement(Request $request){
        $user_id = session('Admin')['user_id'];

        $rules = [
            'announcer' => 'required',
            'announcement_content' => 'required',
        ];
        $message = [
            'announcer.required' => 'Name of the announcer is required',
            'announcement_content.required' => 'Announcement Content is empty. Please fill it up',
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
        $announcement->announcement_status = $announcement_status;
        $announcement->save();

        // Redirect the user to the announcement page
        return redirect('admin/announcements')->with('success', 'Announcement created successfully');
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
            return redirect()->back()->with('failed', "No announcement to archive");
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

        DB::table('announcement')->where('announcement_id', $announcement_id)->update((array) $announcement);

        return redirect()->back()->with('success', 'Announcement updated successfully.');
    }




}
