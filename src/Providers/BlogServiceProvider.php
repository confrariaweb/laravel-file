<?php

namespace ConfrariaWeb\Blog\Providers;

use Illuminate\Support\ServiceProvider;
use ConfrariaWeb\Blog\Contracts\BlogContract;
use ConfrariaWeb\Blog\Repositories\BlogRepository;
use ConfrariaWeb\Blog\Services\BlogService;

class BlogServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'blog');
        $this->loadMigrationsFrom(__DIR__ . '/../../databases/Migrations');
        $this->publishes([__DIR__ . '/../../config/cw_blog.php' => config_path('cw_blog.php')], 'config');
    }

    public function register() {
        $this->app->bind(BlogContract::class, BlogRepository::class);
        $this->app->bind('BlogService', function ($app) {
            return new BlogService($app->make(BlogContract::class));
        });
    }

}
