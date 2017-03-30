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

Route::get('/', function(){
	return view('master');
});

Route::get('hello-world', function () {
    return 'hello world';
});

Route::get('berita/{berita?}', function ($berita = 'Laravel 5') {
	return "berita $berita belum dibaca";
});

Route::get('pengguna','PenggunaController@awal');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('dosen','DosenController@awal');
Route::get('dosen_matakuliah','Dosen_MatakuliahController@awal');
Route::get('ruangan','RuanganController@awal');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('jadwal_matakuliah','Jadwal_MatakuliahController@awal');

Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('dosen/tambah','DosenController@tambah');
Route::get('dosen_matakuliah/tambah','Dosen_MatakuliahController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('jadwal_matakuliah/tambah','Jadwal_MatakuliahController@tambah');

Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah/lihat/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/matakuliah','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{Ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{Ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{Ruangan}','RuanganController@hapus')
;
Route::get('relasi/mahasiswa',function(){
	$mahasiswa = App\Pengguna::find(1)->mahasiswa;
	return "<li>$mahasiswa";
});

Route::get('relasi/pengguna',function(){
	$pengguna = App\Mahasiswa::find(1)->pengguna;
	return "<li>$pengguna";
});

Route::get('relasi/dosen',function(){
	$pengguna = App\Pengguna::find(1)->dosen;
	return "<li>$pengguna";
});

// Route::get('/pengguna/add', function(){
// 	$pengguna = new App\pengguna();
// 	$pengguna->username = "myname";
// 	$pengguna->password = "myname";
// 	$pengguna->save();
// 	return "Telah disimpan pengguna dengan nama {$pengguna->username}";
// 	});