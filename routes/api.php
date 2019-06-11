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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/dealers', 'dealerController@all')->name('dealers.all');

Route::post('/dealers', 'dealerController@store')->name('dealers.store');

Route::get('/dealers/{dealer}', 'dealerController@show')->name('dealers.show');

Route::put('/dealers/{dealer}', 'dealerController@update')->name('dealers.update');

Route::delete('/dealers/{dealer}', 'dealerController@destroy')->name('dealers.destroy');
