<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', 'ApiController@register');
Route::post('login', 'ApiController@login');
Route::post('add-market', 'ApiController@addMarket');
Route::get('get-market-types', 'ApiController@getMarketTypes');
Route::get('get-market/{id}', 'ApiController@getMarkets');
Route::post('updateMarkets', 'ApiController@updateMarkets');
Route::post('updateMarkets_final', 'ApiController@updateMarkets2');
Route::get('getPoints', 'ApiController@getPoints');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
