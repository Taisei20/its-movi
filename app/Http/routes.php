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

  Route::auth();
  Route::get('/', 'HomeController@index');

//
  Route::resource('/users/products', 'ProductsController',['except' => 'show']);

//
  Route::post('/users/products/{id}', 'ScenesController@store');
  Route::get('/users/products/{id}', 'ScenesController@show');

//
  Route::post('/users/products/scenes/{id}','CutsController@store');
  Route::get('/users/products/scenes/{id}','CutsController@show');
  Route::get('/users/products/scenes/{id}/edit', 'CutsController@edit');

//
  Route::get('/users/products/scenes/cuts/{id}', 'TakesController@show');
  Route::get('/users/products/scenes/cuts/{id}/edit', 'TakesController@edit');

//
  Route::post('/users/products/scenes/cuts/{id}/kachinko', 'KachinkoController@store');
  Route::get('/users/products/scenes/cuts/{id}/kachinko', 'KachinkoController@show');

// share機能のroute
  Route::get('/users/share/{id}', 'UsersController@users_share');
  Route::get('/users/products/share/{id}', 'UsersController@products_share');



