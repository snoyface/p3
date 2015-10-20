<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lorem', function () {
	return view('lorem');
});

//responds to GET from /lorem/num
//Route::get('/lorem/{paragraphs?}', );

Route::get('/users', function () {
	return view('users');
});

// Route::get('/result',function() {
//	return view('result');
//});

Route::controller('lorem','loremController');
Route::post('/lorem', 'loremController@generator');
