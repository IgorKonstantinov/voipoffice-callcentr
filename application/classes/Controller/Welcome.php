<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Main {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

} // End Welcome
