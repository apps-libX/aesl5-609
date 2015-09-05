<?php

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');

Route::get('contact', ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'AboutController@store']);

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
