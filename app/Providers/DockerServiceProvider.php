<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\DockerApi;
use Http\Message\MessageFactory\DiactorosMessageFactory;

class DockerServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Helpers\DockerApi', function() {
            $factory = new DiactorosMessageFactory();
            return new DockerApi($factory);
        });
    }
}
