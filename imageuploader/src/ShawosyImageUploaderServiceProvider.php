<?php

namespace Shawosy\Imageuploader;


use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;

class ShawosyImageUploaderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Register your controller here
        $this->app->make('Shawosy\Imageuploader\Controllers\ImageUploaderController');
        
       

        







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
