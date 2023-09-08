<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>
    <div id="app">
        <!-- Display chat messages -->
        <div id="chat-messages">
            @foreach ($messages as $message)
                <div class="message">
                  </strong> {{ $message->message }}
                </div>
            @endforeach
        </div>

        <!-- Chat message input form -->
        <form action="{{ route('chat.sendMessage') }}" method="POST">
            @csrf
            <input type="text" name="message" placeholder="Type your message" required>
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>
