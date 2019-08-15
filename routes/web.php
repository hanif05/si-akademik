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

	// Route Data Mapel
	Route::resource('/mapel', 'MataPelajaranController');
	Route::get('/table/mapel', 'MataPelajaranController@dataTable')->name('table.mapel');

});


Route::group(['middleware' => ['auth', 'checkLevel:1,2']], function(){


	//Route Home
	Route::get('/home', 'HomeController@index');

});
