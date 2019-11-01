<?php

namespace ShoutLara\Testimonial;

use Illuminate\Support\ServiceProvider;

class TestimonialServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       include __DIR__.'/routes/web.php';
      
       $this->app->make('ShoutLara\Testimonial\TestimonialController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       $this->loadViewsFrom(__DIR__.'/views', 'testimonial');
       
        $this->publishes([
        __DIR__.'/public' => base_path('public'),
        ]);
        
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/vendor/testimonial'),
        ]);
    }
}
