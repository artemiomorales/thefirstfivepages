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


// These are Laravel methods that pull templates from the app/views folder

Route::get('/', function(){
	return View::make('hello');
});

Route::get('submit', function(){
	return Redirect::to('/');
});

Route::post('submit', function(){
	$data = Input::all();
	$user = new User;
    $user->email = $data['email'];
    $user->save();
	return View::make('submit');
});