<?php

namespace App\Providers;

use Vulcan\Rivescript\Rivescript;
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
        $this->app->singleton('rivescript', function ($app) {
            $rivescript = new Rivescript;
            $rivescript->load(storage_path('rivescript/atom.rive'));

            return $rivescript;
        });
    }
}
