<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Components\Calculation;

class CalculationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Calculation', Calculation::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
