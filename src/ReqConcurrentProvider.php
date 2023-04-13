<?php

namespace Http\ReqConcurrent;

use Illuminate\Support\ServiceProvider;

class ReqConcurrentProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('ReqConcurrent', function () {
            return new ReqConcurrent();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [ReqConcurrent::class];
    }
}