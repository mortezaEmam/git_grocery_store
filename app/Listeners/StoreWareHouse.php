<?php

namespace App\Listeners;

use App\Events\WareHouseCreate;
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
        dd($event->request->all());
    }
}
