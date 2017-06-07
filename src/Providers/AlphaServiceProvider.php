<?php

namespace ModuleAlpha\Alpha\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AlphaServiceProvider
 * @package ModuleAlpha\Alpha\Providers
 */
class AlphaServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     * @return void
     * @throws \LogicException
     */
    public function boot()
    {
        $this->registerConfig();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     * @return void
     * @throws \LogicException
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('module_alpha.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'module_alpha'
        );
    }
}
