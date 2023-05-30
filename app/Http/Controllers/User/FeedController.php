<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\FeedModel;
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
        ->groupBy('newsfeed.feed_id', 'newsfeed.userid', 'newsfeed.post', 'newsfeed.comment', 'newsfeed.status', 'newsfeed.image', 'newsfeed.created_at', 'newsfeed.updated_at')
        ->orderBy('newsfeed.created_at', 'DESC')
        ->get();
    $post  = Newsfeed_Model::with('user')
    ->get();
    return view('user.pages.landingpage1.feed1', compact('posts', 'post'));
}



     public function retrieve_image(){

            $images = Images::all();

            return view('user.pages.userhome', compact('image'));
    }

    public function add_post(Request $request){
        $userid = DB::table('users')->first();
        $postText = $request->post;
        // $name = $request->name;
        $comment = $request->comment;
        $status = 'posted';

        $post = new Newsfeed_Model();
        $post->userid = $userid->user_id;
        // $post->name = $name;
        $post->post = $postText;
        $post->comment = $comment;
        $post->status = $status;

    // Handle the uploaded image
    if ($request->hasFile('image')) {
        // Get the uploaded file
        $image = $request->file('image');

        // Generate a unique filename for the uploaded file
        $filename = time() . '_' . $image->getClientOriginalName();

        // Save the file to the storage/app/public/image directory
        $image->move(public_path('image'), $filename);

        // Update the user's avatar column with the filename
        $post->image = $filename;
    }
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

    public function displayReview(){
        $user_id = session('User')['user_id'];
        $users = DB::table('users')->where('user_id', $user_id)->get();
        return view('user.pages.profile.myreview', ['users' => $users]);

    }
}
