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

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showName($name = '')
	{
		if($name == ''){
			return "Hello";
		}

		$data = array('name' => $name);

		return View::make('hello')->with($data);
	}

	public function showGuess($guess = 0)
	{
		if($guess > 0 && $guess < 7) {
			$random = mt_rand(1,6); 
			$data = array('guess' => $guess, 'random' => $random);
			return View::make('roll-dice')->with($data);
		} else {
			return '<h2>Please pick a number between 1 and 6.</h2>';
		}
	}

}
