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

// 作品削除画面
  Route::get('/users/products/{id}/delete', 'ProductsController@destroy');
  Route::get('/users/products/{id}/alart', 'ProductsController@alart');

// エンドフラグ
  Route::get('/users/products/{id}/flag', 'ProductsController@flag');

//
  Route::post('/users/products/{id}', 'ScenesController@store');
  Route::get('/users/products/{id}', 'ScenesController@show');

// シーン削除画面
  Route::get('/users/products/scenes/{id}/delete', 'ScenesController@destroy');
  Route::get('/users/products/scenes/{id}/alart', 'ScenesController@alart');

// シーン情報ページへのroute
  Route::get('/users/products/scenes/{id}/info', 'ScenesController@show_info');

// シーン情報の編集・削除
  Route::resource('/users/products/scenes', 'ScenesController',
                  ['only' => ['update', 'edit', 'destroy'] ]);

//
  Route::post('/users/products/scenes/{id}','CutsController@store');
  Route::get('/users/products/scenes/{id}','CutsController@show');

// カットページ削除
  Route::get('/users/products/scenes/cuts/{id}/delete', 'CutsController@destroy');
  Route::get('/users/products/scenes/cuts/{id}/alart', 'CutsController@alart');
// カットページ編集
  Route::get('/users/products/scenes/cuts/{id}/edit', 'CutsController@edit');
  Route::patch('/users/products/scenes/cuts/{id}/edit', 'CutsController@update');

//
  Route::get('/users/products/scenes/cuts/{id}', 'TakesController@show');
  Route::get('/users/products/scenes/cuts/takes/{id}/edit', 'TakesController@edit');
  Route::patch('/users/products/scenes/cuts/takes/{id}/edit', 'TakesController@update');

//
  Route::post('/users/products/scenes/cuts/{id}/kachinko', 'KachinkoController@store');
  Route::get('/users/products/scenes/cuts/{id}/kachinko', 'KachinkoController@show');

// share機能のroute
  Route::get('/users/share/{id}', 'UsersController@users_share');
  Route::get('/users/products/share/{id}', 'UsersController@products_share');
