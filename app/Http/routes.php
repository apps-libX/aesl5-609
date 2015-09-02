<?php

// Generate form request class
// php artisan make:request ListFormRequest

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');

Route::get('contact', ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'AboutController@store']);