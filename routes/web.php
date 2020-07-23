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

Route::any('/{id?}', 'CellController@index')->name('home');

Route::any('/add/{id?}', 'AddLinkcontroller@index')->name('add');

//Route::post('/add', 'AddLinkcontroller@submit')->name('add');

/*Route::get('/add/{id}', function () {
    return view('addHyperLink');
});*/
