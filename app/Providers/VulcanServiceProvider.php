<?php

namespace App\Providers;

use App\Contracts\DialogInterface;
use Illuminate\Support\ServiceProvider;

class VulcanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $drivers = config('vulcan.drivers');
        
        $dialogDefault = config('vulcan.defaults.dialog');
        $dialogDriver  = $drivers['dialog'][$dialogDefault];
        
        $this->app->bind(DialogInterface::class, $dialogDriver);
    }
}
