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

// Generate models using Artisan
// php artisan make:model Todolist

// Create migration
// php artisan make:migration create_todolists_table --create=todolists

Route::get('/', 'WelcomeController@index');
