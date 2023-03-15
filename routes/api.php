<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Route
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

   'middleware' => 'api',
   'prefix' => 'prueba'

], function ($router) {
   Route::get('/', 'App\Http\Controllers\Apiprueba@primera');
   Route::post('/vermov', 'App\Http\Controllers\ApitestingController@vermov');
   Route::post('/pagar', 'App\Http\Controllers\ApitestingController@pagar');
   Route::get('/consulta2', 'App\Http\Controllers\Apiprueba@consulta');
   Route::post('/pruebapost','App\Http\Controllers\Apiprueba@pruebapost');
   
   
   
   Route::post('/payoutsuccess', 'App\Http\Controllers\Apiprueba@payoutsuccess');
   Route::post('/payoutedclined', 'App\Http\Controllers\Apiprueba@payoutedclined');
   Route::post('/payinsuccess', 'App\Http\Controllers\Apiprueba@payinsuccess');
   Route::post('/paydeclined', 'App\Http\Controllers\Apiprueba@paydeclined');
   Route::post('/payinsuccessperu', 'App\Http\Controllers\Apiprueba@payinsuccessperu');
   Route::post('/payindeclinedsperu', 'App\Http\Controllers\Apiprueba@payindeclinedsperu');
   Route::post('/payoutdeclinedsperu', 'App\Http\Controllers\Apiprueba@payoutdeclinedperu');
   Route::post('/payoutsuccessperu', 'App\Http\Controllers\Apiprueba@payoutsuccessperu');

});