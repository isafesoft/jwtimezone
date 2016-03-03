<?php

namespace Jwdaily\Timezones;

use Illuminate\Support\ServiceProvider;

class JwServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__. '/views', 'timezones');
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/jwdaily/timezones'),
            ]);
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
            include __DIR__ . '/routes.php';
            $this->app->make('Jwdaily\Timezones\JwtimeController');
        //
    }
}
