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

//
  Route::resource('/users/products', 'ProductsController',['except' => 'show']);

//
  Route::post('/users/products/scenes', 'ScenesController@store');
  Route::get('/users/products/scenes', 'ScenesController@show');

//
  Route::post('/users/products/scenes/cuts','CutsController@store');
  Route::get('/users/products/scenes/cuts','CutsController@show');

//
  Route::get('users/products/scenes/cuts/takes', 'TakesController@show');

//
  Route::get('/users/products/scenes/cuts/kachinko', 'KachinkoController@create');
  Route::post('/users/products/scenes/cuts/kachinko', 'KachinkoController@store');
  Route::post('/users/products/scenes/cuts/kachinko', 'KachinkoController@show');

});

