<?php

namespace ConfrariaWeb\File\Providers;

use ConfrariaWeb\File\Components\FileInput;
use ConfrariaWeb\File\Contracts\FileContract;
use ConfrariaWeb\File\Models\File;
use ConfrariaWeb\File\Observers\FileObserver;
use ConfrariaWeb\File\Repositories\FileRepository;
use ConfrariaWeb\File\Services\FileService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FileServiceProvider extends ServiceProvider {

    public function boot() {
        //$this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'file');
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
        //$this->publishes([__DIR__ . '/../../config/cw_file.php' => config_path('cw_file.php')], 'config');

        Blade::component('file-input', FileInput::class);
        File::observe(FileObserver::class);
    }

    public function register() {
        $this->app->bind(FileContract::class, FileRepository::class);
        $this->app->bind('FileService', function ($app) {
            return new FileService($app->make(FileContract::class));
        });
    }

}
