<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}
	public function contacto()
	{
			return View::make('home.contacto');
	}
	public function about()
	{
		return View::make('home.about');
	}

}
