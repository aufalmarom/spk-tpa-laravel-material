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
    return view('layouts/login');
});


// Administrator
//create
Route::post('/data/insert','DataKelerenganController@create')->name('insertdatakelerengan.admin');

//read
//administrator
Route::get('/administrator/dashboard','DashboardController@index')->name('dashboard.admin');
Route::get('/administrator/datakelerengan','DataKelerenganController@index')->name('datakelerengan.admin');
Route::get('/administrator/datapenggunaanlahan','DataPenggunaanLahanController@index')->name('datapenggunaanlahan.admin');
Route::get('/administrator/datarawanbencanalongsor','DataRawanBencanaLongsorController@index')->name('datarawanbencanalongsor.admin');
Route::get('/administrator/datacurahhujan','DataCurahHujanController@index')->name('datacurahhujan.admin');
Route::get('/administrator/datahidrogeologi','DataHidrogeologiController@index')->name('datahidrogeologi.admin');
Route::get('/administrator/datajenistanah','DataJenisTanahController@index')->name('datajenistanah.admin');
Route::get('/administrator/datarawanbencanabanjir','DataRawanBencanaBanjirController@index')->name('datarawanbencanabanjir.admin');
Route::get('/administrator/bobotparameter','BobotParameterController@index')->name('bobotparameter.admin');
Route::get('/administrator/parameterdata','ParameterDataController@index')->name('parameterdata.admin');
Route::get('/administrator/bobotrelatif','BobotRelatifController@index')->name('bobotrelatif.admin');
Route::get('/administrator/faktorevaluasi','FaktorEvaluasiController@index')->name('faktorevaluasi.admin');
Route::get('/administrator/bobotevaluasi','BobotEvaluasiController@index')->name('bobotevaluasi.admin');
Route::get('/administrator/ranking','RankingController@index')->name('ranking.admin');
Route::get('/administrator/maps','MapsController@index')->name('maps.admin');
Route::get('/administrator/profile','ProfileController@index')->name('profile.admin');
Route::get('/administrator/user','UserController@index')->name('user.admin');

//general


//update
Route::get('/administrator/data/{id}','DataKelerenganController@updatepage')->name('updatedatakelerengan.admin');

//delete
Route::get('/data/delete/{id}', 'DataKelerenganController@delete')->name('deletedatakelerengan.admin');

//login
Route::post('/login','ActorController@login')->name('login');

//logout
Route::get('/logout','ActorController@logout')->name('logout');


