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

// creating a new migration that adds a column named deleted_at to the todolists table
// php artisan make:migration add_soft_delete_to_todolists --table=todolists

// Run migration
// php artisan migrate

// include soft deleted records in your results
// $lists = Todolist::withTrashed()->get();

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');
