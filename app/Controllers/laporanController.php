<?php

namespace App\Controllers;

class laporanController extends BaseController  //class
{
    // private $anggotaModel; //variabel

    public function __construct()   //method
    {
        // $this->anggotaModel = new \App\Models\anggotaModel();   //instansiasi model anggota
    }

        public function laporanLabaRugi()
    {
        
        return view('lap_labarugi/index');

    }

    public function laporanBulanan()
    {
        
        return view('lap_bulanan/index');

    }

    public function laporanNeraca()
    {
        
        return view('lap_neraca/index');

    }

    public function laporanPinjaman()
    {
        
        return view('lap_pinjaman/index');

    }
    public function laporanSimpanan()
    {
        
        return view('lap_simpanan/index');

    }

}
