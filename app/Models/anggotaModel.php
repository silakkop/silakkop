<?php

namespace App\Models;

use CodeIgniter\Model;

class anggotaModel extends Model
{
    protected $table = 'anggota';  //nama tabel
    protected $primaryKey = 'id';   //primary key
    protected $returnType = 'object';   //tipe return
    protected $allowedFields = ['id','id_anggota']; //field tabel
}
