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
route::get('cekp', function(){
	return view ('v_homePetani');
});
route::get('/cek/cekk', function(){
	return view ('v_homePetani');
});
route::get('cekph', function(){
	return view ('v_cekph');
});