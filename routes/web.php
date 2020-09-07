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
// Customer

//Route::get('/listings', function () {
    //return view('pages.customer.view_listings');
//});

// ------------------------ADMIN---------------------------
Route::get('/admin/admin_dash',function(){
    return view('pages.admin.admin_dash');
});
Route::get('/admin', function () {
    return view('layouts.admin_layout');
});

// Reports

//Route::get('/admin/reports', function () {
  //  return view('pages.admin.admin_reports');
//});

// Listings

//Route::get('/admin/listings', function () {
  //  return view('pages.admin.admin_listings');
//});
//View existing properties

//Route::get('/admin/listings/create', function () {
  //  return view('pages.admin.admin_listings_create');
//});
//Create Property

// Agents

//Route::get('/admin/agents', function () {
  //  return view('pages.admin.admin_agents');
//});

Route::get('/admin/cinema', function () {
    return view('pages.admin.admin_cinema');
});

Route::get('/admin/cinema/create', function () {
    return view('pages.admin.admin_cinema_create');
});

Route::get('/admin/movieinfo', function () {
    return view('pages.admin.admin_movieinfo');
});

Route::get('/admin/movieinfo/create', function () {
    return view('pages.admin.admin_movieinfo_create');
});

Route::get('/admin/movieschedule', function () {
    return view('pages.admin.admin_movie_schedule');
});
/*
/*

/*
Route::get('/admin/agents/create', function () {
    return view('pages.admin.admin_agents_create');
});*/

// Blog
//Route::get('/admin/blog','BlogController@home')->name('blog');

//Route::get('/admin/agents','AgentController@home')->name('agents');
 
Route::get('/admin/cinema','CinemaController@home')->name('cinemas');


//Route::get('/admin/listings','PropertiesController@home')->name('property');

Route::get('/admin/movieinfo','MovieController@home')->name('movie');

Route::get('/admin/movieschedule','ScheduleController@home')->name('schedule');


//Route::get('/home', 'HomeController@index')->name('home');
//Create blog
//Route::get('/admin/blog/create', function () {
  //  return view('pages.admin.admin_blog_create');
//});

//Route::get('/admin/agents/create', function () {
  //  return view('pages.admin.admin_agents_create');
//});


//Route::resource('agents','AgentController');

//Route::resource('blogs','BlogController');

//Route::resource('property','PropertiesController');

Route::resource('cinemas','CinemaController');

Route::resource('movie','MovieController');

//Route::get('admin/pages.admin.admin_listings', 'ListingController@showDash'); 