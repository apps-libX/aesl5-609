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

// Adding the eloquent-sluggable package
// composer require cviebrock/eloquent-sluggable

// Publish the package’s configuration file
// php artisan vendor:publish

// create a migration which adds the slug column to the table
// php artisan sluggable:table todolists

// Run migration
// php artisan migrate

//Reslugify table using faker
// php artisan db:seed

//Reslugify table using tinker
/*
php artisan tinker
namespace todos;
$lists = Todolist::all();
foreach ($lists as $list) {$list->resluggify();$list->save();}
 */
Route::get('/', 'WelcomeController@index');

Route::resource('lists', 'ListsController');