<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])
    ->namespace('ConfrariaWeb\File\Controllers')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::resource('files', 'FileController');

    });