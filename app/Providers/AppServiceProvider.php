<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Vulcan\Rivescript\Rivescript;

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
