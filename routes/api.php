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


Route::resource('market', 'Api\V1\MarketController')->except([
	'edit'
])->middleware('jwt.auth');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('file/upload', 'Api\V1\FileUploadController@upload')->name("file.upload");
Route::post('file/remove', 'Api\V1\FileUploadController@remove')->name("file.remove");

Route::resource('user', 'Api\V1\UserController')->except([
             'edit'
]);

Route::resource('markettype', 'Api\V1\MarketTypeController')->except([
             'edit'
]);

Route::resource('journal', 'Api\V1\JournalController')->except([
             'edit'
        ]);