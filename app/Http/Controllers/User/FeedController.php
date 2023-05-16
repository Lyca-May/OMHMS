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
        // $user_id = session('User')['user_id'];
        $posts = DB::table('newsfeed')->get();
        // $images = Images::all();
        return view('user.pages.landingpage1.reviewpages.testimonials1', ['posts' => $posts]);
    }
    public function index_for_feed()
    {
        // $user_id = session('User')['user_id'];
        $posts = DB::table('newsfeed')->get();
        // $images = Images::all();
        return view('user.pages.landingpage1.feed1', ['posts' => $posts]);
    }

    public function displayPostandComments()
{
    $posts = DB::table('newsfeed')
        ->leftJoin('comments', 'newsfeed.feed_id', '=', 'comments.feed_id')
        ->select('newsfeed.*', DB::raw('COUNT(comments.comments_id) as comment_count'))
        ->groupBy('newsfeed.feed_id', 'newsfeed.userid', 'newsfeed.name', 'newsfeed.post', 'newsfeed.comment', 'newsfeed.status', 'newsfeed.image', 'newsfeed.created_at', 'newsfeed.updated_at')
        ->orderBy('newsfeed.created_at', 'DESC')
        ->get();
    return view('user.pages.landingpage1.feed1', compact('posts'));
}



     public function retrieve_image(){

            $images = Images::all();

            return view('user.pages.userhome', compact('image'));
    }

    public function add_post(Request $request){
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
            return redirect()->back()->with('success', 'Post added successfully');
        }else{
            return redirect()->back()->with('failed', 'Something went wrong. Please try again later.');
        }
    }

    public function displayFeed(){
        $user_id = session('User')['user_id'];
        $feed = DB::table('newsfeed')->where('userid', $user_id)->get();
        // $feed = DB::table('comments')->where('userid', $user_id)->get();
        return view('user.pages.landingpage1.feed1', ['feed' => $feed]);
    }
}
