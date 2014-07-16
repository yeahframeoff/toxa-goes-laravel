<?php

class PhoneController extends BaseController {

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

	public function viewPhone($id = null)
	{
		if (empty($id))
			return View::make('empty');
		$pageTitle = Route::currentRouteName();
		$content = App::make('PhoneViewProvider')->make($id);
		return View::make('phone', ['content' => $content, 'pageTitle' => $pageTitle]);
	}

}
