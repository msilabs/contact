<?php

namespace Msilabs\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'contact');

        // $this->publishes([
        //     __DIR__.'/../resources/views' => resource_path('views/vendor/contact'),
        // ]);

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
     
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'contact-migrations');

        $this->mergeConfigFrom(
            __DIR__.'/../config/contact.php', 'contact'
        );

        $this->publishes([
            __DIR__.'/../config/contact.php' => config_path('contact.php'),
        ]);
    }

    public function register(): void
    {
        
    }
}