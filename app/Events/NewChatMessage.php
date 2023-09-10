<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;

class NewChatMessage implements ShouldBroadcastNow
{
    use SerializesModels;

    public $chatMessage;

    /**
     * Create a new event instance.
     *
     * @param $chatMessage
     */
    public function __construct($chatMessage)
    {
        $this->chatMessage = $chatMessage;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        // Broadcast to a specific channel for the conversation
        return new Channel('chat.' . $this->chatMessage->conversation_id);
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'user_id' => $this->chatMessage->user_id,
            'message' => $this->chatMessage->message,
            'id' => $this->chatMessage->id,
            // You can include additional data you want to send to the client
            // For example, you can send the timestamp of the message
            'created_at' => $this->chatMessage->created_at->toIso8601String(),
        ];
    }
}
