<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\ContactFormSubmitted::class => [
            \App\Listeners\SendContactFormNotification::class,
            //           "App\Listeners\AnotherListener",
        ],
    ];

    public function shouldDiscoverEvents()
    {
        return true;
    }

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        parent::boot();
    }
}
