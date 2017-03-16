<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
        return "Hello dari MahasiswaController";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $mahasiswa = new mahasiswa();
        $mahasiswa->nama = 'Indra W';
        $mahasiswa->nim = '1515015121';
        $mahasiswa->alamat = 'Samarinda';
        $mahasiswa->pengguna_id = 2;
        $mahasiswa->save();
        return "Data dengan nama mahasiswa: {$mahasiswa->nama} berhasil disimpan";
    }
}
