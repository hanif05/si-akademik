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
Route::get('/', 'AuthController@index');
Route::post('/validation', 'AuthController@validation');
Route::get('/logout', 'AuthController@logout');


//Route Home

Route::get('/home', function (){
    return 'login success';
});