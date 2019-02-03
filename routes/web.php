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
// Route::post('/data/insert','DataKelerenganController@create')->name('insertdatakelerengan.admin');

//read
//administrator
Route::get('/administrator/dashboard','DashboardController@index')->name('dashboard.admin')->middleware(['role', 'auth']);

Route::get('/administrator/datakelerengan','DataController@MaosKelerengan')->name('datakelerengan.admin');
Route::get('/administrator/datapenggunaanlahan','DataController@MaosPenggunaanLahan')->name('datapenggunaanlahan.admin');
Route::get('/administrator/datarawanbencanalongsor','DataController@MaosRawanBencanaLongsor')->name('datarawanbencanalongsor.admin');
Route::get('/administrator/datacurahhujan','DataController@MaosCurahHujan')->name('datacurahhujan.admin');
Route::get('/administrator/datahidrogeologi','DataController@MaosHidrogeologi')->name('datahidrogeologi.admin');
Route::get('/administrator/datajenistanah','DataController@MaosJenisTanah')->name('datajenistanah.admin');
Route::get('/administrator/datarawanbencanabanjir','DataController@MaosRawanBencanaBanjir')->name('datarawanbencanabanjir.admin');
Route::get('/administrator/bobotparameter','DataController@MaosBobotParameter')->name('bobotparameter.admin');
Route::get('/administrator/parameterdata','ParameterDataController@index')->name('parameterdata.admin');
Route::get('/administrator/bobotrelatif','DataController@MaosBobotRelatif')->name('bobotrelatif.admin');
Route::get('/administrator/faktorevaluasi','FaktorEvaluasiController@index')->name('faktorevaluasi.admin');
Route::get('/administrator/bobotevaluasi','BobotEvaluasiController@index')->name('bobotevaluasi.admin');
Route::get('/administrator/ranking','RankingController@index')->name('ranking.admin');
Route::get('/administrator/maps','MapsController@index')->name('maps.admin');
Route::get('/administrator/profile','ProfileController@index')->name('profile.admin');
Route::get('/administrator/user','UserController@index')->name('user.admin');

//general

//update
// Route::get('/administrator/data/{id}','DataKelerenganController@updatepage')->name('updatedatakelerengan.admin');

//delete
// Route::get('/data/delete/{id}', 'DataKelerenganController@delete')->name('deletedatakelerengan.admin');

//login
// Route::post('/login','ActorController@login')->name('login');

//logout
Route::get('/logout','ActorController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manager', function () {
    return 'Halaman Manger';
})->name('manager.dashboard')->middleware(['role', 'auth']);

Route::get('/operator', function () {
    return 'Halaman Operator';
})->name('manager.dashboard');
