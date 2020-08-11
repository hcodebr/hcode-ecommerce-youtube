<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return 'API Ecommerce Hcode Café';
});

Route::apiResource('/payment-types', 'PaymentTypeController');
/*
Route::put('/payment-types/{paymentType}', 'PaymentTypeController@update');
Route::post('/payment-types', 'PaymentTypeController@store');
Route::get('/payment-types', 'PaymentTypeController@index');
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
