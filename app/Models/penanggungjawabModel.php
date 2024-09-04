<?php

namespace App\Models;

use CodeIgniter\Model;

class penanggungjawabModel extends Model
{
    protected $table = 'penanggungjawab';  //nama tabel
    protected $primaryKey = 'id';   //primary key
    protected $returnType = 'object';   //tipe return
    protected $allowedFields = ['id','id_anggota','nik','nama_lengkap','tempat_lahir','tanggal_lahir','jenis_kelamin','status_perkawinan','alamat','jenis_usaha','username','password']; //field tabel
}
