<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table='jadwal_matakuliah';
    protected $fillable=['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function Mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function Ruangan()
    {
        return $this->belongsTo(Ruangan::class);
    }

    public function Dosen_Matakuliah()
    {
        return $this->belongsTo(Dosen_Matakuliah::class);
    }

    public function getNamadosenAttribute(){
        return $this->dosen_matakuliah->dosen->nama;
    }
    public function getNipdosenAttribute(){
        return $this->dosen_matakuliah->dosen->nip;
    }
    public function getMKdosenAttribute(){
        return $this->dosen_matakuliah->matakuliah->title;
    }
    
    public function getNamamhsAttribute(){
        return $this->mahasiswa->nama;
    }

    public function getNimAttribute(){
        return $this->mahasiswa->nim;
    }
    public function getTitleruanganAttribute(){
        return $this->ruangan->title;
    }
}
