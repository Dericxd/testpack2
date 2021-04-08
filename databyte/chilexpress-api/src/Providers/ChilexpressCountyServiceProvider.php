<?php

namespace Databyte\ChilexpressApi\Providers;

use Illuminate\Support\ServiceProvider;

class ChilexpressCountyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Databyte\ChilexpressApi\Models\ChilexpressCounty::observe(\Databyte\ChilexpressApi\Observers\ChilexpressCountyObserver::class);
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
