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
    return view('pages.index');
});

Route::get('/tambah','AdminController@tambah');
Route::post('/tambah/store , AdminController@store');
Route::get('/edit','AdminController@edit');
Route::get('/admin', function () {
    return view('admin');
});
