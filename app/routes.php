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


Route::get('/', function()
{
	return View::make('hello');
});


Route::get('/public', function()
{
	$bloom = 'robots.txt';
	$test_response = Response::download($bloom, "Awesome Information", array('Content-Type'=>'application/octet-stream'));
	return $test_response;
});


Route::get('file/download', function()
{


});

Route::filter('birthday', function()
{
	if (date('d/m/y') == '04/10/13') {
		return View::make('birthday');
	}
});

Route::filter('test', function($route, $request)
{
	
});

Route::filter('test', function($route, $request, $response)
{
	
});


/* Route::get('/{squirrel}', function($squirrel)
{
	$data['squirrel'] = $squirrel;
	return View::make('hello', $data);
});

namespace Illuminate\Support\Facades;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Contracts\ArrayableInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;


$test5 = new Route();

$test5::get('/test5', function(){
	echo 'this works';
	$response = new BinaryFileResponse('test.txt', 200, array('Content-Type'=>'application/octet-stream'), true, 'attachment');
	
	echo getcwd();

	$monolog = Log::getMonolog();
	$monolog->pushHandler(new \Monolog\Handler\FirePHPHandler());	
	$monolog->addInfo($response);

	return $response;
});

*/