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
*/

Route::get('/', 'Auth\RegisterController@index');

Auth::routes();

Route::get('/success', function () {
    return view('success');
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');

Route::get('/admin/events', 'AdminController@events')->name('events')->middleware('admin');

Route::patch('admin/events/update', 'AdminController@update')->middleware('admin');

Route::resource('admin/category', 'CategoryController')->middleware('admin');;
