<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function (){
    return Response::json('hola son una api',200);
});

Route::get('/user', function (){
    return response()->json('soy otra api bb',200);
});

Route::get('/user/edit/{id}', [UserController::class,'index']);

Route::get('/cache', function (){
    return Cache::get('key');
});
