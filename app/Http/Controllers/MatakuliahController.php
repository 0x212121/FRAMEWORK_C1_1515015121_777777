<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MataKuliah;

class MatakuliahController extends Controller
{
    public function awal()
    {
        return "Fungsi awal dari MatakuliahController";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $matakuliah = new matakuliah();
        $matakuliah->title = 'Framework';
        $matakuliah->keterangan= 'Pemrograman';
        $matakuliah->save();
        
        return "Data dengan nama matakuliah: {$matakuliah->title} berhasil disimpan";
    }
}
