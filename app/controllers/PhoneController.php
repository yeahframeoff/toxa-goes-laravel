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

//	public function viewPhone($id = null)
//	{
//
//		if (empty($id))
//			return View::make('empty', ['url' => Request::url()]);
//		$content = App::make('PhoneViewProvider')->make($id);
//		return $this->render($content);
//	}

	public function phone()
	{
		$phone = App::make('Phone');
        $phoneContentView = App::make('PhoneContentView');
        $pageTitle = Route::currentRouteName();
        return View::make('phone', ['pageTitle' => $pageTitle])->nest('phoneView', $phoneContentView, ['phone' => $phone]);
	}
}
