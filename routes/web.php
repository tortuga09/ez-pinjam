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

// Route::get('/semak', function () {
//     return view('semak');
// });

// Route::get('/permohonan', function () {
//     return view('permohonan');
// });

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/daftar', 'DaftarController@daftar')->name('daftar');
Route::post('/daftar', 'DaftarController@daftarSemak')->name('daftarSemak');
Route::post('/daftar/pengguna', 'DaftarController@daftarPengguna')->name('daftarPengguna');

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/developer', 'HomeController@dev')->name('developer');
Route::get('/developer/admin', 'HomeController@admin')->name('list.admin');
Route::get('/developer/user', 'HomeController@user')->name('list.user');
Route::get('/developer/hq', 'HomeController@hq')->name('list.hq');

Route::post('/pegawai/tambah', 'UserController@storePegawai')->name('pegawai.add');
Route::patch('/pegawai/kemaskini/{id}', 'UserController@updatePegawai')->name('pegawai.update');

Route::get('/utama', 'HomeController@utama')->name('user.utama');
Route::get('/permohonan', 'HomeController@permohonan')->name('permohonan');
Route::get('/sejarah', 'HomeController@sejarah')->name('sejarah');

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
Route::get('/aset/cetak/{id}/{type}', 'AsetController@downloadPDF')->name('aset.downloadPDF');

// change password
Route::get('/changePassword','HomeController@showChangePasswordForm')->name('change');
Route::post('/changePassword','HomeController@changePassword')->name('change.password');

// unauthenticate User
Route::post('/permohonan', 'PermohonanController@store')->name('permohonan.store');
Route::get('/permohonan/{ref}', 'PermohonanController@index');
// Route::post('/semak', 'DaftarController@show')->name('getSemak');
// Route::get('/getsemak', 'DaftarController@show')->name('urlSemak');

// reminder
Route::get('/peringatan/{id}', 'PermohonanController@reminder')->name('reminder');
