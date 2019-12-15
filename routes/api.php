<?php

use Illuminate\Http\Request;
use App\Acme\Todo;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('todos','TodoController');

// ------- Todo -------
Route::group(['prefix' => 'list'], function() {
    Route::get('/', 'Api\TodoController@index');
    Route::get('/{id}', 'Api\TodoController@show');
    Route::post('/', 'Api\TodoController@store');
    Route::put('/{id}', 'Api\TodoController@update');
    Route::delete('/{id}', 'Api\TodoController@destroy');
});