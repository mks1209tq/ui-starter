<?php

namespace Mks1209tq\UiStarter;

use Illuminate\Support\ServiceProvider;

class UiStarterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views'),
            __DIR__ . '/../public/images' => public_path('images'),
        ], 'starter-files');

    }

    public function register()
    {

    }
}