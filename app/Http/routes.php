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

Route::get('/', function () {

    $items = ['Scutums cadunt!', 'Cur itineris tramitem trabem?', 'Olla mirabilis fermium est.'];
    \Log::debug($items);

    //return view('welcome');
});
