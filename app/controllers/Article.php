<?php

// app/controllers/Article.php

namespace Blog\Controller;

use View;
use BaseController;

class Article extends BaseController
{

	public function getCreate()
	{
		return View::make('hello');
	}

	public function postCreate()
	{
		// Handle the creation form.
	}

}