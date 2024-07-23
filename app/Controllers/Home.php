<?php

namespace App\Controllers;

class Home extends BaseController
{

    private $session;                   //Variabel

    public function __construct() //Method
    {

        $this->session = \Config\Services::session();   //ambil data session  
    }

    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboardAdmin()
    {

        return view('DashboardAdmin'); //jika sudah login maka akan diarahkan ke halaman dashboard
    }

    public function viewLogin()
    {

        return view('login');
    }

}
