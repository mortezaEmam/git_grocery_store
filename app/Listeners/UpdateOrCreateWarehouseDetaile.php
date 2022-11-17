<?php

namespace App\Listeners;

use App\Events\UpdateWareHouseDetaile;
use App\Models\WareHouse;
use App\Models\WareHouseDetaile;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateOrCreateWarehouseDetaile
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
     * @param \App\Events\UpdateWareHouseDetaile $event
     * @return void
     */
    public function handle(UpdateWareHouseDetaile $event)
    {
        $warehouse = WareHouse::query()->where('origin_id', $event->user->id)->get();
        $warehousedetaile = $event->product->warehousedetaile()->first();
        if (filled($warehouse)) {
            if (filled($warehousedetaile)) {
                $requset = $event->request;
                WareHouseDetaile::query()
                    ->where('product_id', $event->product->id)
                    ->update([
                        'warehouse_id' => $requset->warehouse_id,
                        'product_counting_unit_id' => $requset->vahed,
                        'stock' => $requset->stock,
                    ]);
            } else {
                $requset = $event->request;

                $warehousedetaile = new WareHouseDetaile();
                $warehousedetaile->warehouse_id = $requset->warehouse_id;
                $warehousedetaile->product_id = $event->product->id;
                $warehousedetaile->product_counting_unit_id = $requset->vahed;
                $warehousedetaile->stock = $requset->stock;
                $warehousedetaile->save();
            }
        }
    }
}
