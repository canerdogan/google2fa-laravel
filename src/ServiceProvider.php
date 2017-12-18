<?php

namespace PragmaRX\Google2FALaravel;

use Illuminate\Support\ServiceProvider;
use PragmaRX\Google2FALaravel\Google2FA;
use Illuminate\Support\Facades\Blade;

class Google2FAServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Configure package paths.
     */
    private function configurePaths()
    {
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('google2fa.php'),
        ]);
    }

    /**
     * Merge configuration.
     */
    private function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/config.php', 'google2fa'
        );
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['pragmarx.google2fa'];
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
	    Blade::if('google2fa', function () {
		    return Google2FA::check();
	    });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('pragmarx.google2fa', function ($app) {
            return $app->make(Google2FA::class);
        });

        $this->configurePaths();

        $this->mergeConfig();
    }
}
