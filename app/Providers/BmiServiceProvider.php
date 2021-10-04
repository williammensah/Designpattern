<?php

namespace App\Providers;

use App\StategyPattern\BmiInterface;
use App\StategyPattern\BmiService;
use Illuminate\Support\ServiceProvider;

class BmiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(BmiService::class, BmiInterface::class);
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
