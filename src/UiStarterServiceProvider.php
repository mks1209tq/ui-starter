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
            __DIR__ . '/../routes/app1-routes.php' => base_path('routes\apps\app1\app1-routes.php'),
            __DIR__ . '/../storage/app/public/profile/avatar.png' => storage_path('app/public/profile/avatar.png'),

        ], 'starter-files');

    }

    public function register()
    {

    }
}