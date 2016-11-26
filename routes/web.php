<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

route::get('/', function(){
	return redirect()->to('/petani');
});
Route::resource('petani', 'c_petani');
Route::resource('ketua', 'c_ketua');
Route::resource('anggota', 'c_anggota');
Route::resource('cek', 'c_cek');
Route::resource('laporan','c_laporan');

Route::get('cekn','c_cek@cekn');
Route::get('cekp','c_cek@cekp');
Route::get('cekk','c_cek@cekk');
Route::get('cekph','c_cek@cekph');