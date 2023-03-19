<?php

namespace App\Events;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageWarehouse
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $product;
    public $order;
    public $status;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($product, $order,$status)
    {
        $this->product=$product;
        $this->order=$order;
        $this->status=$status;
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
