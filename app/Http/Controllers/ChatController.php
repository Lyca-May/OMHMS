<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Pusher\Pusher;


class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request, Pusher $pusher)
    {
        $message = $request->input('message');
        $userId = auth()->user()->id; // Assuming you have user authentication
        $adminChannel = 'admin_channel'; // Replace with the admin's channel name

        // Save the message to the database (if needed)

        // Broadcast the message using Pusher
        $pusher->trigger($adminChannel, 'new-message', [
            'message' => $message,
            'user_id' => $userId,
        ]);

        return response()->json(['status' => 'success']);
    }
}

