<?php

namespace ConfrariaWeb\Blog\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class BlogEventServiceProvider extends ServiceProvider {

    protected $listen = [
        /*Registered::class => [
            CreateAccountNewUserListener::class,
        ],*/
    ];

    public function boot() {
        parent::boot();

        //
    }

}
