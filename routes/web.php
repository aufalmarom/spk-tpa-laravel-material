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
    return view('home');
});


// Administrator
//create
Route::post('/data/insert','Data@create')->name('insertdata.admin');

//read
Route::get('/administrator/dashboard','Dashboard@index')->name('dashboard.admin');
Route::get('/administrator/data','Data@index')->name('data.admin');
Route::get('/administrator/maps','Maps@index')->name('maps.admin');
Route::get('/administrator/profile','Profile@index')->name('profile.admin');
Route::get('/administrator/user','User@index')->name('user.admin');

//update

//delete
Route::get('/data/delete/{id}', 'Data@delete')->name('deletedata.admin');


