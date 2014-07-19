<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */
$NS = 'App\\Controllers\\';

//Route::get('/login','App\\Controllers\\LoginController@index');
//Route::post('/login/proses', 'App\\Controllers\\LoginController@prosesLogin');
//route::get('/', 'App\\\\bootstrap3@header');


Route::get('/aksesoris', $NS . 'AccWanitaController@view');
Route::get('/aksesoris/add', $NS . 'AccWanitaController@aksesorisAdd');
Route::post('/aksesoris/addProses', $NS . 'AccWanitaController@prosesAdd');
Route::get('/aksesoris/edit/{id}', $NS . 'AccWanitaController@edit');
Route::post('/aksesoris/edit/proses', $NS . 'AccWanitaController@editproses');
Route::get('/aksesoris/delete/{id}', $NS . 'AccWanitaController@delete');

Route::get('/accpria', $NS . 'AccPriaController@view');
Route::get('/accpria/add', $NS . 'AccPriaController@add');
Route::post('/accpria/add/proses', $NS . 'AccPriaController@addProses');
Route::get('/accpria/edit/{id}', $NS . 'AccPriaController@edit');
Route::post('/accpria/edit/proses', $NS . 'AccPriaController@editProses');
Route::get('/accpria/delete/{id}', $NS . 'AccPriaController@delete');

Route::get('/pembelian', $NS . 'PembelianController@view');
Route::get('/pembelian/add', $NS . 'PembelianController@add');
Route::post('/pembelian/addproses', $NS . 'PembelianController@addproses');
Route::get('/pembelian/edit/{id}', $NS . 'PembelianController@edit');
Route::post('/pembelian/editproses', $NS . 'PembelianController@editProses');
Route::get('/pembelian/delete/{id}', $NS . 'PembelianController@delete');
