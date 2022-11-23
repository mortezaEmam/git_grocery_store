<?php

namespace App\Providers;

use App\Events\CartCreate;
use App\Events\CartDetail;
use App\Events\EventsOrderDetaile;
use App\Events\UpdateWareHouseDetaile;
use App\Events\WareHouseCreate;
use App\Events\WarehouseDetaileSold;
use App\Listeners\CreateCartDetaile;
use App\Listeners\CreateOrderDetaile;
use App\Listeners\StoreCart;
use App\Listeners\StoreWareHouse;
use App\Listeners\UpdateOrCreateWarehouseDetaile;
use App\Listeners\UpdateStockProduct;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        CartCreate::class => [
            StoreCart::class,
        ],
        CartDetail::class => [
            CreateCartDetaile::class,
        ],
        WareHouseCreate::class => [
            StoreWareHouse::class,
        ],
        UpdateWareHouseDetaile::class => [
            UpdateOrCreateWarehouseDetaile::class,
        ],
        EventsOrderDetaile::class => [
            CreateOrderDetaile::class,
        ],
        WarehouseDetaileSold::class => [
            UpdateStockProduct::class,

        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
