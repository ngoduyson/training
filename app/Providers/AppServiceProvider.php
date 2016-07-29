<?php

namespace Benlly\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		$this->app->alias('bugsnag.log', Log::class);
		$this->app->alias('bugsnag.log', LoggerInterface::class);
    }
}
