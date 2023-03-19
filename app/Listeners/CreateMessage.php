<?php

namespace App\Listeners;

use App\Events\MessageWarehouse;
use App\Models\Message;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateMessage
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param \App\Events\MessageWarehouse $event
     * @return void
     */
    public function handle(MessageWarehouse $event)
    {
        switch ($event->status) {
            case $event->status == true:
                Message::query()->create([
                    'order_id' => $event->order,
                    'product_id' => $event->product,
                    'title' => 'عدم موجودی کالا',
                    'is_confirm' => false,
                ]);

                break;
            case $event->status == false:
                Message::query()->create([
                    'order_id' => $event->order,
                    'product_id' => $event->product,
                    'title' => 'خرید انجام شده ولی موجودی نداریم',
                    'is_confirm' => false,
                ]);
                break;
            case $event->status == null:
                Message::query()->create([
                    'order_id' => $event->order,
                    'product_id' => $event->product,
                    'title' => 'خرید شما با موفقیت انجام شد',
                    'is_confirm' => false,
                ]);
                break;
            default:
                abort(403);
                break;
        }


    }
}
