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


//Route Login
Route::get('/', 'AuthController@index')->name('login');
Route::post('/validation', 'AuthController@validation');
Route::get('/logout', 'AuthController@logout');


Route::group(['middleware' => ['auth', 'checkLevel:1']], function(){


	// Route Data Guru
	Route::resource('/guru', 'GuruController');
	Route::post('/guru/{guru}', 'GuruController@update')->name('guru/update');
	Route::get('/table/guru', 'GuruController@dataTable')->name('table.guru');

	// Route Siswa
	Route::resource('/siswa', 'SiswaController')->except(['update']);
	Route::post('/siswa/{siswa}', 'SiswaController@update')->name('siswa.update');
	Route::get('/table/siswa', 'SiswaController@dataTable')->name('table.siswa');

	// Route Data Mapel
	Route::resource('/mapel', 'MataPelajaranController');
	Route::get('/table/mapel', 'MataPelajaranController@dataTable')->name('table.mapel');

	// Route Data Kelas
	// Route::resource('/kelas', 'KelasController');
	Route::get('/kelas/create', 'KelasController@create')->name('kelas.create');
	Route::get('/kelas', 'KelasController@index')->name('kelas.index');
	Route::post('/kelas', 'KelasController@store')->name('kelas.store');
	Route::delete('/kelas/{kelas}', 'KelasController@destroy')->name('kelas.destroy');
	Route::put('kelas/{kelas}', 'KelasController@update')->name('kelas.update');
	Route::get('/kelas/{kelas}', 'KelasController@show')->name('kelas.show');
	Route::get('/kelas/{kelas}/edit', 'KelasController@edit')->name('kelas.edit');
	Route::get('/table/kelas', 'KelasController@dataTable')->name('table.kelas');



});


Route::group(['middleware' => ['auth', 'checkLevel:2']], function(){

	// Route Materi Pelajaran
	Route::resource('/materi', 'MateriController');
	Route::get('/table/materi', 'MateriController@dataTable')->name('table.materi');

});

Route::group(['middleware' => ['auth', 'checkLevel:1,2,3']], function(){


	//Route Home
	Route::get('/home', 'HomeController@index');
	Route::get('/profile', 'ProfileController@index');
	Route::post('/profile/{guru}', 'ProfileController@updateGuru')->name('profileguru.update');
	Route::post('/profile/{siswa}', 'ProfileController@updateSiswa')->name('profilesiswa.update');

});
