<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('apiProductList', 'RestApiDemoController@list');
Route::get('apiVendedorList', 'RestApiDemoController@Vendedorlist');
Route::get('apiNotifyShow/{id}', 'RestApiDemoController@Notifyshow');
Route::get('apiNotifyUnique/{id}', 'RestApiDemoController@NotifyUnique');
Route::post('apiProductNew', 'RestApiDemoController@create');
Route::post('apiNotifyNew', 'RestApiDemoController@createNotify');
Route::get('apiProductShow/{id}', 'RestApiDemoController@show');
Route::put('apiProductUpdate/{id}', 'RestApiDemoController@update');
Route::put('apiNotifyUpdate/{id}', 'RestApiDemoController@updateNotify');
Route::delete('apiProductDelete/{id}', 'RestApiDemoController@delete');