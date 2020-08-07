<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\Blog\Controllers')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::resource('blogs', 'BlogController');

    });