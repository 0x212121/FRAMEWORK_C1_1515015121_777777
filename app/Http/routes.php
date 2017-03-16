<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return ("hello world dari pengguna $pengguna");
// });

Route::get('hello-world', function () {
    return 'hello world';
});

Route::get('berita/{berita?}', function ($berita = 'Laravel 5') {
	return "berita $berita belum dibaca";
});

Route::get('pengguna','PenggunaController@awal');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('Dosen','DosenController@awal');
Route::get('Dosen_Matakuliah','Dosen_MatakuliahController@awal');
Route::get('Ruangan','RuanganController@awal');
Route::get('Matakuliah','MatakuliahController@awal');
Route::get('Jadwal_Matakuliah','Jadwal_MatakuliahController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('Dosen/tambah','DosenController@tambah');
Route::get('Dosen_Matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('Ruangan/tambah','RuanganController@tambah');
Route::get('Matakuliah/tambah','MatakuliahController@tambah');
Route::get('Jadwal_Matakuliah/tambah','Jadwal_MatakuliahController@tambah');

Route::get('/pengguna/add', function(){
	$pengguna = new App\pengguna();
	$pengguna->username = "myname";
	$pengguna->password = "myname";
	$pengguna->save();
	return "Telah disimpan pengguna dengan nama {$pengguna->username}";
	});