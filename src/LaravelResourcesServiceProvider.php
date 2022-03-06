<?php

namespace Llabbasmkhll\LaravelResources;

use Illuminate\Support\ServiceProvider;
use Llabbasmkhll\LaravelResources\Console\Resources;

class LaravelResourcesServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole() and app()['env'] !== 'production') {
            $this->commands(
                [
                    Resources::class,
                ]
            );
        }
    }
}
