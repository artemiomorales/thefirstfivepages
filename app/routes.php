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

Route::get('/', function()
{
	return View::make('simple');
});

Route::get('/{squirrel}', function($squirrel)
{
	$data['squirrel'] = $squirrel;
	return View::make('simple', $data);
});

Route::get('my/page', function()
{
	return 'Hello world!';
});

Route::get('first/page', function()
{
	return 'First!';
});

Route::get('second/page', function()
{
	return 'Second!';
});

Route::get('third/page', function()
{
	return 'Potato!';
});

Route::get('/books/{genre?}', function($genre = 'Crime')
{
	return "Books in the {$genre} category.";
});

// app/routes.php
// Route::controller('account');