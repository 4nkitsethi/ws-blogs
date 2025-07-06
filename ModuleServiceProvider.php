<?php

namespace App\Modules\Product;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/api.php');
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
    }

    public function register()
    {
        //
    }
}
