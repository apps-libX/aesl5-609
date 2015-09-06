<?php

Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@index']);

// Route::get('/', 'WelcomeController@index');

Route::get('about', 'AboutController@index');

Route::resource('lists', 'ListsController');

Route::get('contact', ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'AboutController@store']);

// Register
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
get('/signup', ['as' => 'signup', 'uses' => 'Auth\AuthController@getRegister']);
post('/signup', ['as' => 'signup', 'uses' => 'Auth\AuthController@postRegister']);


// Sign-in
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Sign-out
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Password recovery
Route::get('password/email', 'PasswordController@getEmail');
Route::post('password/email', 'PasswordController@postEmail');
Route::get('password/reset/{token}', 'PasswordController@getReset');
Route::post('password/reset', 'PasswordController@postReset');
