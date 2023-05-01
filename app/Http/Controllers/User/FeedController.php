<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Images;
use Illuminate\Http\Request;
use App\Models\User\Newsfeed_Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class FeedController extends Controller
{
    public function index()
    {
        $user_id = session('User')['user_id'];
        $posts = DB::table('newsfeed')->where('userid', $user_id)->get();
        $images = Images::all();

        return view('user.pages.userhome', ['newsfeed' => $posts, 'images' => $images]);
    }

        public function retrieve_image(){

            $images = Images::all();

            return view('user.pages.userhome', compact('image'));
        }

        // public function create()
        // {
        //     return view('newsfeed.create');
        // }

        // public function post(Request $request)
        // {
        //     $user = session()->get('User');
        //     if (!$user) {
        //         return redirect()->back()->with('failed', "User not found");
        //     }
        //     $userid = $user['user_id'];

        //     $feed = new Newsfeed_Model();
        //     $feed->userid = $userid;
        //     $feed->post = $request->post;
        //     $feed->comment = $request->comment;
        //     $feed->status = 'posted'; // changed 'comment' to 'status' for clarity
        //     // if ($request->hasFile('image')) {
        //     //     $path = $request->file('image')->store('public/images');
        //     //     $feed->image = Storage::url($path);
        //     // }
        //     $feed->save();

        //     if ($feed) {
        //         return redirect('user/home')->with('success', 'Posted successfully');
        //     } else {
        //         return redirect('user/home')->with('failed', 'There was an error processing your post. Please try again later.');
        //     }
        // }


}
