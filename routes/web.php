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

// Route::get('/', function () {
//     return view('layouts/login');
// });


// Administrator
//create
// Route::post('/data/insert','DataKelerenganController@create')->name('datakelerengan');

//read
//dashboard
Route::get('dashboard','DashboardController@index')->name('dashboard.read');
//data
Route::get('/datakelerengan','DataController@MaosKelerengan')->name('datakelerengan.read');
Route::get('/datapenggunaanlahan','DataController@MaosPenggunaanLahan')->name('datapenggunaanlahan.read');
Route::get('/datarawanbencanalongsor','DataController@MaosRawanBencanaLongsor')->name('datarawanbencanalongsor.read');
Route::get('/datacurahhujan','DataController@MaosCurahHujan')->name('datacurahhujan.read');
Route::get('/datahidrogeologi','DataController@MaosHidrogeologi')->name('datahidrogeologi.read');
Route::get('/datajenistanah','DataController@MaosJenisTanah')->name('datajenistanah.read');
Route::get('/datarawanbencanabanjir','DataController@MaosRawanBencanaBanjir')->name('datarawanbencanabanjir.read');
//smart
Route::get('/bobotparameter','DataController@MaosBobotParameter')->name('bobotparameter.read');
Route::get('/parameterdata','ParameterDataController@index')->name('parameterdata.read');
Route::get('/bobotrelatif','DataController@MaosBobotRelatif')->name('bobotrelatif.read');
Route::get('/faktorevaluasi','FaktorEvaluasiController@index')->name('faktorevaluasi.read');
Route::get('/bobotevaluasi','BobotEvaluasiController@index')->name('bobotevaluasi.read');
Route::get('/ranking','RankingController@index')->name('ranking.read');
Route::get('/maps','MapsController@index')->name('maps');
Route::get('/profile','ProfileController@index')->name('profile.read');
Route::get('/user','UserController@index')->name('user.read');

//general

//update
// Route::get('/data/{id}','DataKelerenganController@updatepage')->name('updatedatakelerengan');

//delete
// Route::get('/data/delete/{id}', 'DataKelerenganController@delete')->name('deletedatakelerengan.admin');

//login
// Route::post('/login','ActorController@login')->name('login');

//logout
Route::get('/logout','ActorController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
