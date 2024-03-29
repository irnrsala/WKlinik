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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dokter', 'DokterController@index')->name('dokter');
Route::get('/dokter_tambah', 'DokterController@create')->name('DokterT');
Route::post('/dokter_store', 'DokterController@store');
Route::get('/dokter_edit_{id}', 'DokterController@edit');
Route::put('/dokter_update_{id}', 'DokterController@update')->name('DokterU');
Route::get('/dokter_delete_{id}', 'DokterController@delete');

route::get('/pasien','PasienController@index')->name('pasien');