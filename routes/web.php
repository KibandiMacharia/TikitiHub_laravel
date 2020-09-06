<?php

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
//display payment
Route::get('/receipt', function()
{
    return view('payment');
});

//display admin dashboard
Route::get('users','usersController@index');

//delete user
Route::get('delete-records','usersController@index');
Route::get('delete/{id}','usersController@destroy');

//edit user role
Route::get('edit-records','usersController@index');
Route::get('edit/{id}','usersController@show');
Route::post('edit/{id}','usersController@edit');