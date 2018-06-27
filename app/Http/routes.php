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


Route::group(['middleware' => ['web']], function () {

  Route::auth();
  Route::get('/', 'HomeController@index');
  Route::get('/products/kachinko', 'TakesController@create');
  Route::post('/products/kachinko', 'TakesController@store');
  Route::get('/products/takes', 'TakesController@show');
  Route::resource('users', 'UsersController',['only' => 'index']);
});

