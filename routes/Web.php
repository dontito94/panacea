<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



    includeRouteFiles(__DIR__ . '/Web/');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
