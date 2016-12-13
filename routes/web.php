<?php



Route::post('cekKondisi','c_cek@kondisi');

Route::get('/', function () {
    return view('login');
});
Route::get('/ph', function () {
    return view('v_cekph');
});
//Login
Route::post('semaput','c_login@login');
Route::get('logout','c_login@logout');
//Ketua
Route::get('Ketua','c_ketuaPetani@index');
Route::get('laporanAnalisis','c_ketuaPetani@showLaporanAnalisis');
Route::get('dataAnggota','c_ketuaPetani@showDataAnggota');
Route::post('Anggota','c_ketuaPetani@tambahAnggota');
Route::delete('hapusAnggota/{id_petani}','c_ketuaPetani@hapusAnggota');
//Anggota
Route::post('profil','c_petani@ubahProfil');
Route::get('Petani','c_petani@index');
//analisis
Route::get('Analisis','c_petani@ShowFormDataLahan');
Route::post('kondisiTanah','c_petani@simpanUmurLuas');
Route::post('warnaDaun','c_petani@simpanWarnaDaun');
Route::post('unsurP','c_petani@simpanUnsurP');
Route::post('unsurK','c_petani@simpanUnsurK');
Route::post('ph','c_petani@tampilHasil');
Route::get('tersimpan','c_petani@simpanHasil');
Route::get('home','c_petani@batalSimpan');

