<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('/', function () {
return view('welcome');
});

Route::group(['middleware' => ['auth', 'verified']], function () {

});
 */

Route::group(['middleware' => ['auth', 'verified', 'can_use_route']], function () {
    Route::get('quote-test', ['as' => 'quote-test', 'uses' => 'ChilexpressController@index']);
    Route::post('quote-result', ['as' => 'quote-result', 'uses' => 'ChilexpressController@quote']);
});
