<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect()->route('buku_list');
});

Route::get('/jenis_buku','JenisBukuController@list')->name('jenis_buku_list');
Route::get('/jenis_buku/tambah','JenisBukuController@tambah')->name('jenis_buku_tambah');
Route::post('/jenis_buku/simpan','JenisBukuController@simpan')->name('jenis_buku_simpan');
Route::get('/jenis_buku/{id}/ubah','JenisBukuController@ubah')->name('jenis_buku_ubah');
Route::post('/jenis_buku/{id}/perbarui','JenisBukuController@perbarui')->name('jenis_buku_perbarui');
Route::get('/jenis_buku/{id}/hapus','JenisBukuController@hapus')->name('jenis_buku_hapus');

Route::get('/buku','BukuController@list')->name('buku_list');
Route::get('/buku/tambah','BukuController@tambah')->name('buku_tambah');
Route::post('/buku/simpan','BukuController@simpan')->name('buku_simpan');
Route::get('/buku/{id}/ubah','BukuController@ubah')->name('buku_ubah');
Route::post('/buku/{id}/perbarui','BukuController@perbarui')->name('buku_perbarui');
Route::get('/buku/{id}/hapus','BukuController@hapus')->name('buku_hapus');
