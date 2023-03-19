<?php

namespace App\Listeners;

use App\Events\MessageWarehouse;
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
            ->where('order_id',$event->order->id)
            ->get();
        $status=true;
        foreach ($Find_OrderDetailes as $orderDetaile)
        {
            $res=WareHouseDetaile::query()
                ->where('product_id',$orderDetaile->product_id)
                ->first();

            if (($res->stock-$orderDetaile->qty)>=0)
            {
                if(($res->stock-$orderDetaile->qty)==0)
                {

                    MessageWarehouse::dispatch($orderDetaile->product_id,$event->order->id ,$status==true);
                }
                $res->stock=$res->stock-$orderDetaile->qty;
                $res->save();
                MessageWarehouse::dispatch($orderDetaile->product_id,$event->order->id ,$status==null);

            }
            else
            {
                MessageWarehouse::dispatch($orderDetaile->product_id,$event->order->id,$status=false );
            }

        }
    }
}
