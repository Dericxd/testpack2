<?php

namespace Databyte\ChilexpressApi\Providers;

use Illuminate\Support\ServiceProvider;

class ChilexpressRegionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Databyte\ChilexpressApi\Models\ChilexpressRegion::observe(\Databyte\ChilexpressApi\Observers\ChilexpressRegionObserver::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
