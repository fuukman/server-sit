<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ="siswa";

    protected $fillable = ['nis','nama','jenis_kelamin','tahun_masuk','tempat_lahir','tanggal_lahir','agama','alamat','jurusan','kelas'];

    // public function getKelas(){

    // 	return $this->belongsTo('App\Kelas','id_kelas');
    // }
    // public function getJurusan(){
    // 	return $this->belongsTo('App\Jurusan','id_jurusan');
    // }
}
