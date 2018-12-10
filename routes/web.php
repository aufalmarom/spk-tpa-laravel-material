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
Route::post('/data/insert','Data@create')->name('insertdata.admin');
Route::post('/data/insert','DataKelerenganController@create')->name('insertdatakelerengan.admin');

//read
//administrator
Route::get('/administrator/dashboard','Dashboard@index')->name('dashboard.admin');
Route::get('/administrator/data','Data@index')->name('data.admin');
Route::get('/administrator/datakelerengan','DataKelerenganController@index')->name('datakelerengan.admin');
Route::get('/administrator/datapenggunaanlahan','DataPenggunaanLahanController@index')->name('datapenggunaanlahan.admin');
Route::get('/administrator/datarawanbencanalongsor','DataRawanBencanaLongsorController@index')->name('datarawanbencanalongsor.admin');
Route::get('/administrator/datacurahhujan','DataCurahHujanController@index')->name('datacurahhujan.admin');
Route::get('/administrator/datahidrogeologi','DataHidrogeologiController@index')->name('datahidrogeologi.admin');
Route::get('/administrator/datajenistanah','DataJenisTanahController@index')->name('datajenistanah.admin');
Route::get('/administrator/datarawanbencanabanjir','DataRawanBencanaBanjirController@index')->name('datarawanbencanabanjir.admin');
Route::get('/administrator/maps','Maps@index')->name('maps.admin');
Route::get('/administrator/profile','Profile@index')->name('profile.admin');
Route::get('/administrator/user','User@index')->name('user.admin');

//general
Route::get('/bobotparameter','BobotParameterController@index')->name('bobotparameter');

//update
Route::get('/administrator/data/{id}','Data@updatepage')->name('updatedata.admin');

//delete
Route::get('/data/delete/{id}', 'Data@delete')->name('deletedata.admin');
Route::get('/data/delete/{id}', 'DataKelerenganController@delete')->name('deletedatakelerengan.admin');

//login
Route::post('/login','ActorController@login')->name('login');

//logout
Route::get('/logout','ActorController@logout')->name('logout');


