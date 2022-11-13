<?php

namespace App\Listeners;

use App\Events\CartCreate;
use App\Events\CreateCartEvent;
use App\Models\Basket;
use App\Models\Cart;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
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
        $baskets = Basket::getAllSessionCart();

        foreach ($baskets as $basket) {
            Cart::query()->create([
                'user_id' => Auth::id(),
                'product_id' => $basket['id'],
                'title' => $basket['title'],
                'quantity' => $basket['quantity'],
                'price' => $basket['price'],
                'total' => $basket['total'],
                'image' => $basket['image'],
                'created_at' => $basket['created_at'],
                'updated_at' => $basket['updated_at'],
            ]);

            session()->forget('cart-product-' . $basket['id']);
        }
        Log::info('insert carte and delete session');
    }
}
