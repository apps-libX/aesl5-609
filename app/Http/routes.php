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

// Confirm we can instantiate the Todolist class
// vendor/bin/phpunit tests/models/TodolistTest.php

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');
