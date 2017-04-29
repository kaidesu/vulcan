<?php

namespace App\Providers;

use App\Contracts\ResponseRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\LocalResponseRepository;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(ResponseRepository::class, LocalResponseRepository::class);
    }
}
