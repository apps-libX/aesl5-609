<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    // cli
    // composer require barryvdh/laravel-debugbar
    // php artisan vendor:publish

    \Debugbar::error('A falsis, axona talis caesium.');

    return view('welcome');
});
