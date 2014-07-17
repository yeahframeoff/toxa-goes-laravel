<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

App::singleton('PhoneViewProvider', 'PhoneDetailedViewProvider');

// app works fine without this line. Nevertheless, I added it as it is required
App::bind('Phone', function() { return new Phone(); });

Route::get('/phones/{id}', 'PhoneController@viewPhone');

Route::get('/phone', 'PhoneController@viewPhone');