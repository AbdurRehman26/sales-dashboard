<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\Models\Market;
use App\Data\Repositories\MarketRepository;

class MarketRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('MarketRepository', function () {
            return new MarketRepository(new Market);
        });

    }
}
