<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    // Display the chat interface
    public function index()
    {
        // You can load chat messages here and pass them to the view
        $messages = Chat::orderBy('created_at', 'desc')->get();
        return view('chat.chat', compact('messages'));
    }

    // Handle sending chat messages
    public function sendMessage(Request $request)
    {
        // Validate the message content
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Check if the user is an admin or a regular user based on the role in session data
        $userRole = session('Admin')['role']; // Assuming 'role' represents the user's role

        // Create a new chat message
        $chatMessage = new Chat();
        $chatMessage->user_id = ($userRole === 'ADMIN') ? null : session('User')['user_id'];
        $chatMessage->message = $request->input('message');
        $chatMessage->save();

        // Automatically reply to the user if it's not an admin message
        if ($userRole !== 'ADMIN') {
            $adminMessage = new Chat();
            $adminMessage->user_id = null; // Set user_id to null for system messages
            $adminMessage->message = 'Thank you for your message. We will get back to you soon.';
            $adminMessage->save();
        }

        // Redirect back to the chat interface
        return redirect()->route('chat.index');
    }
}
