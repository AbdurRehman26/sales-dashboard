<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\Models\MarketType;
use App\Data\Repositories\MarketTypeRepository;

class MarketTypeRepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind('MarketTypeRepository', function () {
            return new MarketTypeRepository(new MarketType);
        });

    }
}
