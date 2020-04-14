<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Data\Models\Journal;
use App\Data\Repositories\JournalRepository;

class JournalRepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind('JournalRepository', function () {
            return new JournalRepository(new Journal);
        });

    }
}
