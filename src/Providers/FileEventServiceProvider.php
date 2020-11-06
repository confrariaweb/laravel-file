<?php

namespace ConfrariaWeb\File\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class FileEventServiceProvider extends ServiceProvider {

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
