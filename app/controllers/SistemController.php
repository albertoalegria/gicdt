<?php

class SistemController extends Controller {
    protected $layout = 'layouts.sistema';

	protected function setupLayout()
	{

		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
