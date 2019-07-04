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

Route::group(['prefix' => '/v1'], function(){
	
	// Ruta para validar login desde el dispositivo movil
	/* /api/v1/login  */
	Route::post('login', 'Api\LoginController@jwtLogin')->name('api.v1.login');

	

});
