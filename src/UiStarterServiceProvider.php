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
            __DIR__ . '/../routes/nav-routes.php' => base_path('routes\nav-routes.php'),
            __DIR__ . '/../storage/app/public/profile/avatar.png' => storage_path('app/public/profile/avatar.png'),
            __DIR__ . '/../app/Http/Controllers/AppController.php' => app_path('Http/Controllers/AppController.php'),

        ], 'starter-files');

    }

    public function register()
    {

    }
}