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

// Adding the eloquent-sluggable package
// composer require cviebrock/eloquent-sluggable

// Publish the package’s configuration file
// php artisan vendor:publish

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');
