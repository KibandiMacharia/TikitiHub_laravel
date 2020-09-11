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


Route::post('login', 'Api\AuthController@login');
Route::post('register', 'Api\AuthController@register');
Route::get('logout', 'Api\AuthController@logout');

// //Movies
Route::get('movies', 'Api\MoviesController@movies');

// //Movies
Route::get('cinemas', 'Api\CinemasController@cinemas');

//orders
Route::post('orders/create', 'Api\OrdersController@create')->middleware('jwtAuth');

Route::get('orders', 'Api\OrdersController@orders')->middleware('jwtAuth'); 
