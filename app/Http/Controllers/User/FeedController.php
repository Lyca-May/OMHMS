<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Newsfeed_Model;
use Illuminate\Support\Facades\Storage;

class FeedController extends Controller
{
        public function index()
        {
            $user = session()->get('User')['user_id'];
            // add a check to ensure that $user is not null before accessing its values
            if (!$user) {
                return redirect()->back()->with('failed', "User not found");
            }else{
                return view('user.pages.userhome');

            }
        }

        public function create()
        {
            return view('newsfeed.create');
        }

        public function post(Request $request)
        {
            $user = session()->get('User');
            if (!$user) {
                return redirect()->back()->with('failed', "User not found");
            }
            $userid = $user['user_id'];

            $feed = new Newsfeed_Model();
            $feed->userid = $userid;
            $feed->post = $request->post;
            $feed->comment = $request->comment;
            $feed->status = 'posted'; // changed 'comment' to 'status' for clarity
            // if ($request->hasFile('image')) {
            //     $path = $request->file('image')->store('public/images');
            //     $feed->image = Storage::url($path);
            // }
            $feed->save();

            if ($feed) {
                return redirect('user/home')->with('success', 'Posted successfully');
            } else {
                return redirect('user/home')->with('failed', 'There was an error processing your post. Please try again later.');
            }
        }


}
