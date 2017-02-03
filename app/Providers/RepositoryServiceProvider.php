<?php

namespace App\Providers;

use App\Contracts\ResponseRepository;
use App\Repositories\LocalResponseRepository;
use Illuminate\Support\ServiceProvider;

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
