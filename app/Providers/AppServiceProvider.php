<?php
declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\SampleInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SampleService', function($app) {
            return new \App\Services\SampleService($app->make(SampleInterface::class));
        });

        $this->app->bind(SampleInterface::class, function($app) {
            return new \App\Components\SampleComponentAAA();
            // OR
            // return new \App\Components\SampleComponentBBB();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
