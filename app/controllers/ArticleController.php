<?php

// app/controllers/ArticleController.php

class ArticleController extends BaseController
{

	public function showIndex()
	{
		return View::make('hello');
	}


	public function showSingle($articleId)
	{
		return View::make('single');
	}

}