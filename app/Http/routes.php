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

// Faker - Rebuild the classmap
// composer dump-autoload

// Faker - Seed a database
// php artisan db:seed

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');
