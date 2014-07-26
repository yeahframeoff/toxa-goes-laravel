<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function shorten()
    {
        $bitLy = App::make('BitLy');
        $myLink = 'http://www.metrolyrics.com/survival-lyrics-eminem.html';
        $json = $bitLy->Shorten(['longUrl' => $myLink]);
        $url = $json['url'];
        return View::make('shortened', ['url' => $url]);
    }
}
