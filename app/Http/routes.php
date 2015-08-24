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

// Generate REST-enabled controller using Artisan
// php artisan make:controller ListsController

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');
