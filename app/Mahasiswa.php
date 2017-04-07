<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $fillable=['nama','nim','alamat'];
    protected $guarded=['id'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }

    public function jadwalmatakuliah()
    {
    	return $this->hasMany(jadwal_matakuliah::class);
    }

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
}
