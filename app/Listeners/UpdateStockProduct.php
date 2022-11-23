<?php

namespace App\Listeners;

use App\Events\WarehouseDetaileSold;
use App\Models\OrderDetaile;
use App\Models\WareHouseDetaile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateStockProduct
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
     * @param  \App\Events\WarehouseDetaileSold  $event
     * @return void
     */
    public function handle(WarehouseDetaileSold $event)
    {
        $Find_OrderDetailes = OrderDetaile::query()
            ->where('order_id',$event->order->id)->get();
        foreach ($Find_OrderDetailes as $orderDetaile)
        {
            $res=WareHouseDetaile::query()->where('product_id',$orderDetaile->product_id)->first();
            $res->stock=$res->stock-$orderDetaile->qty;
            $res->save();
        }
    }
}
