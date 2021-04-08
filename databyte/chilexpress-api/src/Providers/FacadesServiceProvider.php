<?php

namespace Databyte\ChilexpressApi\Providers;

use Databyte\ChilexpressApi\Models\ChilexpressApiSetting;
use Illuminate\Support\ServiceProvider;

class FacadesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {}

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ChilexpressApiSetting::class, function ($app) {
            return new ChilexpressApiSetting;
        });
    }
}
