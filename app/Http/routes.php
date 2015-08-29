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
// php artisan make:model Category

// Generate migration
// php artisan make:migration create_categories_table --create=categories
// php artisan make:migration create_category_todolist_table --create=category_todolist
// php artisan make:migration add_description_to_category_todolist_table

// Run migration
// php artisan migrate

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');
