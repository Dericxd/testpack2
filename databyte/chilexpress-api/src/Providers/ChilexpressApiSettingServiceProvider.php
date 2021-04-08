<?php

namespace Databyte\ChilexpressApi\Providers;

use Illuminate\Support\ServiceProvider;

class ChilexpressApiSettingServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Databyte\ChilexpressApi\Models\ChilexpressApiSetting::observe(\Databyte\ChilexpressApi\Observers\ChilexpressApiSettingObserver::class);
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
