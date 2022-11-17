<?php

namespace App\Events;

use App\Models\Product;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class UpdateWareHouseDetaile
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public $request;
    public $product;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Request $request,User $user,Product $product)
    {
        $this->user=$user;
        $this->request=$request;
        $this->product=$product;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
