<?php namespace App\Http\Controllers;

class HomeController {

	/**
	 * @Get("/", as="home")
	 */
	public function index()
	{
		return view('hello');
	}

}
