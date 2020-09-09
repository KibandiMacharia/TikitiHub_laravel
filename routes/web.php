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
Route::get('/', function () {
    return view('pages.index');
});

// ------------------------ADMIN---------------------------
Route::get('/admin/admin_dash',function(){
    return view('admin_dash');
});

Route::get('/admin/cinema', function () {
    return view('admin_cinema');
});

Route::get('/admin/cinema/create', function () {
    return view('admin_cinema_create');
});

Route::get('/admin/movieinfo', function () {
    return view('admin_movieinfo');
});

Route::get('/admin/movieinfo/create', function () {
    return view('admin_movieinfo_create');
});

Route::get('/admin/movieschedule', function () {
    return view('admin_movie_schedule');
});
 
Route::get('/admin/cinema','CinemaController@home')->name('cinemas');

Route::get('/admin/movieinfo','MovieController@home')->name('movie');

Route::get('/admin/movieschedule','ScheduleController@home')->name('schedule');

Route::resource('cinemas','CinemaController');

Route::resource('movie','MovieController');

//display admin dashboard
Route::get('users','usersController@index');

//delete user
Route::get('delete-records','usersController@index');
Route::get('delete/{id}','usersController@destroy');

//edit user role
Route::get('edit-records','usersController@index');
Route::get('edit/{id}','usersController@show');
Route::post('edit/{id}','usersController@edit');