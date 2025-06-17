<?php

namespace Mks1209tq\UiStarter;

use Illuminate\Support\ServiceProvider;

class UiStarterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources/views/welcome.blade.php' => resource_path('views/welcome.blade.php'),
        ], 'starter-files');
    }

    public function register()
    {
        
    }
}