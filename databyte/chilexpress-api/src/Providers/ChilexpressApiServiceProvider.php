<?php

namespace Databyte\ChilexpressApi\Providers;

use Databyte\ChilexpressApi\Console\Commands\ChilexpressApiSeed;
use Illuminate\Support\ServiceProvider;

class ChilexpressApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadResources();
        $this->loadRoutesFrom(__DIR__.'../Http/Routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'es');

        $this->publishes([
            __DIR__.'/../../resources/lang' =>  resource_path('lang/vendor/es')
        ]);

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'test');
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->publishResources();
            $this->registerCommands();
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/chilexpress-api.php', 'chilexpress-api');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['chilexpress-api'];
    }

    protected function loadResources()
    {
        $this->loadMigrationsFrom([
            __DIR__ . '/../database/migrations',
        ]);
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'chilexpress-api');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../../resources/lang');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'chilexpress-api');
    }

    protected function publishResources()
    {
        // // Publishing the configuration file.
        $this->publishes([
            __DIR__ . '/../../config/chilexpress-api.php' => config_path('chilexpress-api.php'),
        ], 'chilexpress-api.config');

        // Publishing the views.
        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/chilexpress-api'),
        ], 'chilexpress-api.views');

        // Publishing the translation files.
        $this->publishes([
            __DIR__ . '/../../resources/lang' => resource_path('lang/vendor/chilexpress-api'),
        ], 'chilexpress-api.lang');

    }

    protected function registerCommands()
    {
        $this->commands([
            ChilexpressApiSeed::class,
        ]);
    }

}
