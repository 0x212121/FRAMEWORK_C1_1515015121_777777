<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table='dosen';
    protected $fillable=['nama','nip','alamat','pengguna_id'];

    public function Pengguna(){
    	return $this->belongsTo(Pengguna::class);
    }

    public function dosen_matakuliah(){
    	return $this->hasMany(Dosen_Matakuliah::class);	
    }

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }

    public function listDosenDanNim(){
        $out = [];
        foreach ($this->all() as $dosen) {
            $out[$dosen->id] = "{$dosen->nama} ({$dosen->nip})";
        }
        return $out;
    }
}
