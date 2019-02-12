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

//auth, login, reset
Auth::routes();
//homepage
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('/layouts/home');
});
//logout
Route::get('/logout','HomeController@logout')->name('logout');

//profile
Route::get('/profile','ProfileController@index')->name('profile.read');

//dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard.read');
//data
Route::get('/datakelerengan','DataController@MaosKelerengan')->name('datakelerengan.read');
Route::get('/datapenggunaanlahan','DataController@MaosPenggunaanLahan')->name('datapenggunaanlahan.read');
Route::get('/datarawanbencanalongsor','DataController@MaosRawanBencanaLongsor')->name('datarawanbencanalongsor.read');
Route::get('/datacurahhujan','DataController@MaosCurahHujan')->name('datacurahhujan.read');
Route::get('/datahidrogeologi','DataController@MaosHidrogeologi')->name('datahidrogeologi.read');
Route::get('/datajenistanah','DataController@MaosJenisTanah')->name('datajenistanah.read');
Route::get('/datarawanbencanabanjir','DataController@MaosRawanBencanaBanjir')->name('datarawanbencanabanjir.read');
//nilaiklasifikasi
Route::get('/nilaiklasifikasi','NilaiKlasifikasiController@MaosNilaiKlasifikasi')->name('nilaiklasifikasi.read');
//smart
//bobot parameter
Route::get('/parameter','SMARTController@MaosParameter')->name('parameter.read');
//
Route::get('/parameternilai','SMARTController@MaosParameterNilai')->name('parameternilai.read');
//bobot parameter
Route::get('/bobotparameter','SMARTController@MaosBobotParameter')->name('bobotparameter.read');
Route::post('/bobotparameter/ndamel','SMARTController@NdamelBobotParameter')->name('bobotparameter.create');
Route::post('/bobotparameter/hapus','SMARTController@HapusBobotParameter')->name('bobotparameter.delete');

Route::get('/parameternilaibobot','SMARTController@MaosParameterNilaiBobot')->name('parameternilaibobot.read');
Route::get('/bobotrelatif','SMARTController@MaosBobotRelatif')->name('bobotrelatif.read');
Route::get('/faktorevaluasi','SMARTController@MaosFaktorEvaluasi')->name('faktorevaluasi.read');
Route::get('/bobotevaluasi','SMARTController@MaosBobotEvaluasi')->name('bobotevaluasi.read');
Route::get('/ranking','SMARTController@MaosRanking')->name('ranking.read');
//maps
Route::get('/maps','MapsController@index')->name('maps');
//user
Route::get('/user','UserController@index')->name('user.read');

