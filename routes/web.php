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
    return view('index');
});
Route::get('/', 'AllController@show');
Route::get('/admin', 'AdminController@show');

Route::get('/about', 'AboutController@show')->name('about');
Route::get('/event', 'EventController@show')->name('event');
Route::get('/work', 'WorkController@show')->name('work');
Route::get('/contact', 'ContactController@show')->name('contacts');


// ABOUT
Route::get('/aboutedit', 'AboutController@show')->name('about');
// create
Route::get('/about/create', 'AboutController@create');
Route::post('/about/store', 'AboutController@store');
// edit
Route::get('/about/{id}/edit', 'AboutController@edit');
Route::post('/about/{id}/update', 'AboutController@update');
// delete
Route::get('/about/{id}/destroy', 'AboutController@destroy');

// EVENT
Route::get('/eventedit', 'EventController@show')->name('event');
// create
Route::get('/event/create', 'EventController@create');
Route::post('/event/store', 'EventController@store');
// edit
Route::get('/event/{id}/edit', 'EventController@edit');
Route::post('/event/{id}/update', 'EventController@update');
// delete
Route::get('/event/{id}/destroy', 'EventController@destroy');

// WORK
Route::get('/workedit', 'WorkController@show')->name('work');
// create
Route::get('/workedit/create', 'WorkController@create');
Route::post('/workedit/store', 'WorkController@store');
// edit
Route::get('/workedit/{id}/edit', 'WorkController@edit');
Route::post('/workedit/{id}/update', 'WorkController@update');
// delete
Route::get('/workedit/{id}/destroy', 'WorkController@destroy');


// CONTACT
Route::get('/contactedit', 'ContactController@show')->name('contact');
// create
Route::get('/contactedit/create', 'ContactController@create');
Route::post('/contactedit/store', 'ContactController@store');
// edit
Route::get('/contactedit/{id}/edit', 'ContactController@edit');
Route::post('/contactedit/{id}/update', 'ContactController@update');
// delete
Route::get('/contactedit/{id}/destroy', 'ContactController@destroy');
