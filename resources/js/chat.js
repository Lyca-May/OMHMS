import Echo from 'laravel-echo'

const echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
});

echo.private(`chat.${conversationId}`)
    .listen('NewChatMessage', (event) => {
        // Handle the incoming chat message, e.g., append it to the chat interface
        console.log('New message:', event);
    });
