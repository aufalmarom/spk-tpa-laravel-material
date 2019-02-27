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
//dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard.read');
//data
Route::get('/dataparameter/{id}','DataController@MaosDataParameter')->name('dataparameter.read');
Route::get('/tambaheditdataparameter/{id}','DataController@MaosTambahEditDataParameter')->name('tambaheditdataparameter.read');
Route::post('/tambaheditdataparameter/create','DataController@TambahEditDataParameter')->name('tambaheditdataparameter.create');

Route::get('/datakecamatan' ,'DataController@MaosDataKecamatan')->name('datakecamatan.read');
Route::post('/datakecamatan/ndamel','DataController@NdamelDataKecamatan')->name('datakecamatan.create');
Route::post('/datakecamatan/hapus','DataController@HapusDataKecamatan')->name('datakecamatan.delete');

//smart
//nilai klasifikasi
Route::get('/nilaiklasifikasi','SMARTController@MaosNilaiKlasifikasi')->name('nilaiklasifikasi.read');
//kategori
Route::get('/editnilaikategori/{id}','SMARTController@EditNilaiKlasifikasiKategori')->name('editnilaiklasifikasikategori.read');
Route::post('/editnilaikategori/create','SMARTController@NdamelNilaiKlasifikasiKategori')->name('editnilaiklasifikasikategori.create');
Route::post('/nilaiklasifikasikategori/hapus','SMARTController@HapusKategori')->name('kategori.delete');
//kriteria
Route::get('/editnilaiklasifikasikriteria/{id}','SMARTController@EditNilaiKlasifikasiKriteria')->name('editnilaiklasifikasikriteria.read');
Route::post('/editnilaiklasifikasikriteria/create','SMARTController@NdamelNilaiKlasifikasiKriteria')->name('editnilaiklasifikasikriteria.create');
Route::post('/nilaiklasifikasikriteria/hapus','SMARTController@HapusKriteria')->name('kriteria.delete');
//parameter_nilai
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
Route::get('/user','UserController@MaosUser')->name('user.read');
Route::post('/user/create','UserController@NdamelUser')->name('user.create');
Route::post('/user/hapus','UserController@HapusUser')->name('user.delete');
//profile
Route::get('/profile/{id}','UserController@MaosProfile')->name('profile.read');
//ubahpassword
Route::post('/ubahpassword','UserController@GantosPassword')->name('profile.changepassword');


