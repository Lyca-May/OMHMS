<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Images;
use App\Models\User\Newsfeed_Model;
use Illuminate\Http\Request;
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

    public function add_post(Request $request){
        // $userid = session('User')['user_id'];

        $userid = DB::table('users')->first();
        $postText = $request->post;
        $name = $request->name;
        $comment = $request->comment;
        $status = 'posted';

        $post = new Newsfeed_Model();
        $post->userid = $userid->user_id;
        $post->name = $name;
        $post->post = $postText;
        $post->comment = $comment;
        $post->status = $status;
        $post->save(); // save the post record to the database

        if($post){
            return redirect('user/home')->with('success', 'Post added successfully');
        }else{
            return redirect()->back()->with('failed', 'Something went wrong. Please try again later.');
        }
    }


}
