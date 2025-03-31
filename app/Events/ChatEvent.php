<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatEvent  implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public string $message)
    {

    }

    public function broadcastWhen():bool
    {
        if($this->message=='hello socket')
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function broadcastOn(): array
    {
        return [
            new Channel('chatting'),
        ];
    }
}
