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
Auth::routes();

Route::get('/', function () {
    return view('sign');
});
Route::get('/home', function () {
    return view('home.home');
});

Route::get('/home', 'HomeController@index');

// page penduduk
Route::get('/penduduk', 'PendudukController@viewData');
Route::get('/penduduk/edit{id}', 'PendudukController@viewEdit');
Route::post('/penduduk/edit{id}', 'PendudukController@editData');
Route::get('/penduduk/delete{id}', 'PendudukController@deleteData');

// page tambah data
Route::get('/tambah-data', 'DataController@view');
Route::get('/regency/get/{id}', 'DataController@getRegency');
Route::get('/district/get/{id}', 'DataController@getDistrict');
Route::get('/village/get/{id}', 'DataController@getVillage');

Route::post('/penduduk/buat', 'DataController@create');