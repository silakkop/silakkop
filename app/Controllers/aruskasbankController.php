<?php

namespace App\Controllers;

class aruskasbankController extends BaseController  //class
{
    // private $anggotaModel; //variabel

    public function __construct()   //method
    {
        // $this->anggotaModel = new \App\Models\anggotaModel();   //instansiasi model anggota
    }

    public function drum()
    {
        
            return view('kelola_aruskasbank/uang-kas-drum');

    }

    public function druk()
    {
        
            return view('kelola_aruskasbank/uang-kas-druk');

    }

    public function drumbank()
    {
        
            return view('kelola_aruskasbank/uang-bank-drum');

    }

    public function drukbank()
    {
        
            return view('kelola_aruskasbank/uang-bank-druk');

    }

    public function drumKoperasi()
    {
        
            return view('halaman_koperasi/kelola_aruskasbank/uang-kas-drum');

    }

    public function drukKoperasi()
    {
        
            return view('halaman_koperasi/kelola_aruskasbank/uang-kas-druk');

    }

    public function drumbankKoperasi()
    {
        
            return view('halaman_koperasi/kelola_aruskasbank/uang-bank-drum');

    }

    public function drukbankKoperasi()
    {
        
            return view('halaman_koperasi/kelola_aruskasbank/uang-bank-druk');

    }

}
