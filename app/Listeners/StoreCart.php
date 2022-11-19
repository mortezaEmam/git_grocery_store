<?php

namespace App\Listeners;

use App\Events\CartCreate;
use App\Events\CreateCartEvent;
use App\Models\Basket;
use App\Models\Cart;
use App\Models\CartDetaile;
use App\Models\WareHouseDetaile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class StoreCart
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
     * @param \App\Events\CartCreate $event
     * @return void
     */
    public function handle(CartCreate $event)
    {
        $cart = Cart::query()->where('user_id', $event->user->id)->get();
        if (filled($cart))
            {
                Cart::query()->where('user_id', $event->user->id)
                    ->update([
                        'qty' => Basket::getNumberSessionCartProduct(),
                        'total' => Basket::getTotalSessionCart(),
                    ]);
            }
        else
            {
                $cart = new Cart();
                $cart->user_id = $event->user->id;
                $cart->qty = Basket::getNumberSessionCartProduct();
                $cart->total = Basket::getTotalSessionCart();
                $cart->status = 'block';
                $cart->save();
        }
    }
}
