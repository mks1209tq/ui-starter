<?php

namespace Mks1209tq\UiStarter;

use Illuminate\Support\ServiceProvider;

class UiStarterServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views'),
            __DIR__ . '/../public/images' => public_path('images'),
            __DIR__ . '/../routes/apps1-routes.php' => base_path('routes/apps1-routes.php'),
            
        ], 'starter-files');

    }

    public function register()
    {

    }
}