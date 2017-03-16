<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
    {
        return "Hello dari DosenController";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $dosen = new dosen();
        $dosen->nama = 'KennyS';
        $dosen->nip = '12345678';
        $dosen->alamat = 'Europe';
        $dosen->pengguna_id = 1;
        $dosen->save();
        return "data dengan nama {$dosen->nama} telah disimpan";
    }
}
