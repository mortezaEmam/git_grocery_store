<?php

namespace App\Listeners;

use App\Events\CartCreate;
use App\Events\CartDetail;
use App\Models\Basket;
use App\Models\Cart;
use App\Models\CartDetaile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class CreateCartDetaile
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
     * @param  \App\Events\CartCreate  $event
     * @return void
     */
    public function handle(CartDetail $event)
    {
        $baskets = Basket::getAllSessionCart();
        foreach ($baskets as $basket) {
            $CartDetaile=new CartDetaile();
            $CartDetaile->cart_id=$event->cart['id'];
            $CartDetaile->product_id=$basket['id'];
            $CartDetaile->qyt=$basket['quantity'];
            $CartDetaile->price=$basket['price'];
            $CartDetaile->save();
        }
    }
}
