<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// app/routes.php


// Route::get('/', 'ArticleController@showIndex');

// Route::get('/', 'Article@getCreate');

// Route::get('/', 'Blog\Controller\Article@getCreate');


Route::get('/', function(){
	return View::make('home');
});

Route::get('/show_story', function(){
	$story = Story::find(0);
	return $story->title;
});

Route::get('/create_story', function()
{
	$story = new Story;
	$story->title = 'Use';
	$story->author = 'Alice Walker';
	$story->slug = 'use';
	$story->save();
});

Route::get('/post_test', function(){
	return View::make('post_test');
});

Route::get('post-form', function(){
	return View::make('form');
});

Form::macro('discover', function()
{
	return 'form function is working';
});

/*
Route::get('/{squirrel}', function($squirrel)
{
	$data['squirrel'] = $squirrel;
	return View::make('example', $data);
});

Route::get('/beta_template/stumble.php', function()
{
	return 'Hallelujah!';
});

*/