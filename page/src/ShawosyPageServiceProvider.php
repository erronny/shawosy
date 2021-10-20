<?php

namespace Shawosy\Page;


use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;

class ShawosyPageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Register your controller here
        $this->app->make('Shawosy\Page\Controllers\PageManagerController');
        $this->app->make('Shawosy\Page\Controllers\PagesController');
       

        







        // Register your views here
        $this->loadViewsFrom(__DIR__.'/views', 'shawosy');
        $this->publishes([
        // __DIR__.'/assets' => public_path('Shawosy/Blog'),
    ], 'public');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';
        
    }
}
