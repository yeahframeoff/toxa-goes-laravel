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
/*
*/


Route::get('/', function()
{
	return View::make('hello');
});

App::bind('Phone', function()
{
    return new Phone([
        'Display',
        'Battery',
        'Cpu',
        'Camera',
    ]);
});

App::bind('PhoneContentView', function(){ return 'detailed'; });


App::singleton('BitLy', function()
{
    return new \Hpatoio\Bitly\Client("401386e2d5ec992d33182edc757de7dffa8f20b4");
});

Route::get('/phone', 'PhoneController@phone');

Route::get('/shorten', 'HomeController@shorten');