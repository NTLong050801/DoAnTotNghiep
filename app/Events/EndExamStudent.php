<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EndExamStudent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user_id,$exam_id;
    /**
     * Create a new event instance.
     */
    public function __construct($user_id,$exam_id)
    {
        $this->user_id = $user_id;
        $this->exam_id = $exam_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('EndExamStudent'),
        ];
    }

    public function broadcastWith()
    {
        return [
            'user_id' => $this->user_id,
            'exam_id' => $this->exam_id,
        ];
    }
}
