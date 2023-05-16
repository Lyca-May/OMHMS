<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Comments_Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Comments_Controller extends Controller
{
    public function create_comment(Request $request, $feed_id)
{
    $user_id = DB::table('users')->first()->user_id;
    // validate the request data
    $validatedData = $request->validate([
        'comment_text' => 'required|max:255',
    ]);

    // create the new comment
    $comment = new Comments_Model();
    $comment->userid = $user_id;
    $comment->feed_id = $feed_id;
    $comment->comment_text = $validatedData['comment_text'];
    $comment->save();

    if($comment){
        return redirect()->back()->with('success', 'Comment added successfully!');
    }else{
        return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
    }
}

public function displayComments($post_id)
{
    $user = DB::table('users')->get();
    $posts = DB::table('newsfeed')->get();

    $comments = DB::table('comments')
                ->join('users', 'comments.userid', '=', 'users.user_id')
                ->select('comments.*', 'users.user_fname')
                ->where('comments.feed_id', $post_id)
                ->get();

    return view('user.pages.landingpage1.feed1', compact('comments', 'user', 'posts'));
}



}
