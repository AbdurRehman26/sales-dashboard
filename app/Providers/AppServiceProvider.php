<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Data\Models\Journal;
use App\Observers\JournalObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Journal::observe(JournalObserver::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
