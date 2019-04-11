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
    return view('welcome');
});

Route::get('/semak', function () {
    return view('semak');
});

Route::get('/permohonan', function () {
    return view('permohonan');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/developer', 'HomeController@dev')->name('developer');

Route::post('/admin/tambah', 'UserController@store')->name('user.add');
Route::patch('/admin/kemaskini/{id}', 'UserController@update')->name('user.update');
Route::patch('/profil/kemaskini/{id}', 'UserController@profileUpdate')->name('profile.update');

Route::get('/permohonan/semak', 'PermohonanController@semak')->name('admin.semak');
Route::get('/permohonan/semak/{id}', 'PermohonanController@semakDetail')->name('admin.semakDetail');
Route::post('/permohonan/semak/{id}', 'PermohonanController@semakLulus')->name('admin.semakLulus');
Route::get('/permohonan/agihan/{id}', 'PermohonanController@agihan')->name('admin.agihan');
Route::post('/permohonan/agihan/{id}', 'PermohonanController@agihan')->name('admin.agihanAset');
Route::post('/permohonan/agihan/{id}', 'PermohonanController@agihanUpdate')->name('admin.agihanUpdate');
Route::get('/permohonan/senarai', 'PermohonanController@senarai')->name('admin.senarai');
Route::get('/permohonan/pergerakan', 'PermohonanController@pergerakan')->name('admin.pergerakan');
Route::get('/permohonan/arkib', 'PermohonanController@arkib')->name('admin.arkib');
Route::patch('/permohonan/arkib/{id}', 'PermohonanController@arkibUpdate')->name('admin.arkibUpdate');
Route::get('/permohonan/laporan', 'PermohonanController@create')->name('admin.laporan');
Route::get('/permohonan/cetak/{id}', 'PermohonanController@cetak')->name('admin.cetak');

Route::get('/aset/senarai', 'AsetController@index')->name('aset.senarai');
Route::get('/aset/pergerakan/{id}/{type}', 'AsetController@show')->name('aset.pergerakan');
Route::post('/aset/tambah', 'AsetController@store')->name('aset.tambah');
Route::patch('/aset/kemaskini/{id}', 'AsetController@update')->name('aset.kemaskini');
Route::get('/aset/pemulangan', 'AsetController@pulang')->name('aset.pulang');
Route::get('/aset/pemulangan/{id}', 'AsetController@pulangAset')->name('aset.pulangAset');
Route::post('/aset/pemulangan/{id}', 'AsetController@pulangUpdate')->name('aset.pulangUpdate');
Route::delete('/aset/hapus/{id}/{type}', 'AsetController@destroy')->name('aset.hapus');

// change password
Route::get('/changePassword','HomeController@showChangePasswordForm')->name('change');
Route::post('/changePassword','HomeController@changePassword')->name('change.password');

// unauthenticate User
Route::post('/permohonan', 'PermohonanController@store')->name('permohonan');
Route::get('/permohonan/{ref}', 'PermohonanController@index');
Route::post('/semak', 'PermohonanController@show')->name('getSemak');
Route::get('/getsemak', 'PermohonanController@show')->name('urlSemak');
