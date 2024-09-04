<?php

namespace App\Models;

use CodeIgniter\Model;

class koperasiModel extends Model
{
    protected $table = 'koperasi';  //nama tabel
    protected $primaryKey = 'id';   //primary key
    protected $returnType = 'object';   //tipe return
    protected $allowedFields = ['id','nama_koperasi']; //field tabel
}
