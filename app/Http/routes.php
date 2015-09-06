<?php

Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');

Route::get('contact', ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'AboutController@store']);

// Register
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Sign-in
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Sign-out
Route::get('auth/logout', 'Auth\AuthController@getLogout');
