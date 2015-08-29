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

// Generate model
// php artisan make:model Profile

// Generate migration class which create profiles table
// php artisan make:migration create_profiles_table --create=profiles

// Run migration
// php artisan migrate

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');
