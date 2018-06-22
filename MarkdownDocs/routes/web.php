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

Route::get('/', function () {
    return redirect()->guest('/login');
})->name('login');


Route::get('/logout', function () {
    return view('vlog');
})->name('logout');


Route::get('/parser', function () {
    return view('vparser');
})->name('parser');


Route::get('/docs', function () {
    return view('vdocs');
})->name('docs');


Route::get('/drilldown', function () {
    return view('vdrilldown');
})->name('drilldown');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
