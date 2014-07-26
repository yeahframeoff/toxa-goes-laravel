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

App::bind('Display', function () {return new DisplayComponent(); });
App::bind('Battery', function () {return new BatteryComponent(); });
App::bind('Cpu',     function () {return new CpuComponent();     });
App::bind('Camera',  function () {return new CameraComponent();  });

App::bind('Phone', function()
{
    return new Phone([
        App::make('Display'),
        App::make('Battery'),
        App::make('Cpu'),
        App::make('Camera'),
    ]);
});

App::bind('PhoneContentView', function(){ return 'detailed'; });

Route::get('/phone', 'PhoneController@phone');