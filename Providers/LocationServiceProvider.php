<?php
namespace Modules\Location\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Modules\Location\Location;

class LocationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Route::middleware(['web'])
        ->group(__DIR__ . '/../Routes/web.php');
    }

    public function register()
    {
        $this->app->singleton('Location.location', function($app){
            return new Location('pt-br');
        });
    }
}