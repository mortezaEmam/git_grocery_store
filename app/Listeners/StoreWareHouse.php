<?php

namespace App\Listeners;

use App\Events\WareHouseCreate;
use App\Models\WareHouse;
use App\Models\WareHouseDetaile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreWareHouse
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
     * @param  \App\Events\WareHouseCreate  $event
     * @return void
     */
    public function handle(WareHouseCreate $event)
    {
        $warehouse=WareHouse::query()->where('origin_id',$event->user->id)->get();
        if(filled($warehouse))
        {
            $requset=$event->request;

            $warehousedetaile=new WareHouseDetaile();
            $warehousedetaile->warehouse_id=$requset->warehouse_id;
            $warehousedetaile->product_id=$event->product->id;
            $warehousedetaile->product_counting_unit_id=$requset->vahed;
            $warehousedetaile->stock=$requset->stock;
            $warehousedetaile->save();
        }


    }
}
