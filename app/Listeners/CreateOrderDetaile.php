<?php

namespace App\Listeners;

use App\Events\EventsOrderDetaile;
use App\Models\CartDetaile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateOrderDetaile
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
     * @param  \App\Events\EventsOrderDetaile  $event
     * @return void
     */
    public function handle(EventsOrderDetaile $event)
    {
        $find_cartdetailes=CartDetaile::query()->where('cart_id',$event->cart->id)->get();

        $item=$event->order;
        foreach ($find_cartdetailes as $cartdetaile)
        {
            $orderdetaile=new \App\Models\OrderDetaile();
            $orderdetaile->order_id=$item->id;
            $orderdetaile->product_id=$cartdetaile->product_id;
            $orderdetaile->qty=$cartdetaile->qyt;
            $orderdetaile->price=$cartdetaile->price;
            $orderdetaile->total_price=$cartdetaile->price*$cartdetaile->qyt;
            $orderdetaile->save();
            CartDetaile::query()->where('cart_id',$event->cart->id)
                ->where('product_id',$cartdetaile->product_id)
                ->delete();
            session()->forget('cart-product-'.$cartdetaile->product_id);

        }



    }
}
