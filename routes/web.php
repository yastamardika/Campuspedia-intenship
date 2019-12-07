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

Route::get('/', 'AdminController@index');


Route::get('/tambah','AdminController@tambah');
Route::get('/edit/{id}','AdminController@edit');
Route::post('store','AdminController@store');
Route::post('/edit/{id}/update','AdminController@updatedata');
Route::get('/hapus/{id}','AdminController@hapusdata');
Route::get('/admin', function () {
    return view('admin');
});
