<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboardAdmin', 'Home::dashboardAdmin');

$routes->get('/login', 'Home::viewLogin');
$routes->get('/forgot', 'Home::viewForgot');


// INI UNTUK KELOLA KOPERASI
$routes->get('kelola-koperasi', 'koperasiController::index');
$routes->post('kelola-koperasi', 'koperasiController::insertkoperasi');
$routes->post('kelola-koperasi/(:any)', 'koperasiController::update/$1');
$routes->get('kelola-koperasi/hapus/(:segment)', 'koperasiController::destroy/$1');

// INI UNTUK KELOLA ANGGOTA
$routes->get('kelola-anggota', 'anggotaController::index');
$routes->post('kelola-anggota', 'anggotaController::insertanggota');
$routes->post('kelola-anggota/(:any)', 'anggotaController::update/$1');
$routes->get('kelola-anggota/hapus/(:segment)', 'anggotaController::destroy/$1');

// INI UNTUK KELOLA PENANGGUNG JAWAB
$routes->get('kelola-penanggungjawab', 'penanggungjawabController::index');
$routes->post('kelola-penanggungjawab', 'penanggungjawabController::insertpenanggungjawab');
$routes->post('kelola-penanggungjawab/(:any)', 'penanggungjawabController::update/$1');
$routes->get('kelola-penanggungjawab/hapus/(:segment)', 'penanggungjawabController::destroy/$1');

// INI UNTUK KELOLA ARUS KAS & Bank
$routes->get('kelola-uang-kas-drum', 'aruskasbankController::drum');
$routes->get('kelola-uang-kas-druk', 'aruskasbankController::druk');

$routes->get('kelola-uang-bank-drum', 'aruskasbankController::drumbank');
$routes->get('kelola-uang-bank-druk', 'aruskasbankController::drukbank');

$routes->get('laporan-laba-rugi', 'laporanController::laporanLabaRugi');

$routes->get('laporan-bulanan', 'laporanController::laporanBulanan');

$routes->get('neraca', 'laporanController::laporanNeraca');

$routes->get('laporan-pinjaman', 'laporanController::laporanPinjaman');

$routes->get('laporan-simpanan', 'laporanController::laporanSimpanan');

$routes->get('portofolio', 'laporanController::laporanPortofolio');

$routes->get('skm', 'laporanController::laporanSkm');

$routes->get('jurnal', 'laporanController::laporanJurnal');



//HALAMAN KOPERASI

$routes->get('/dashboardKoperasi', 'Home::dashboardKoperasi');

// INI UNTUK KELOLA ARUS KAS & Bank
$routes->get('kelola-uang-kas-drum-koperasi', 'aruskasbankController::drumKoperasi');
$routes->get('kelola-uang-kas-druk-koperasi', 'aruskasbankController::drukKoperasi');

$routes->get('kelola-uang-bank-drum-koperasi', 'aruskasbankController::drumbankKoperasi');
$routes->get('kelola-uang-bank-druk-koperasi', 'aruskasbankController::drukbankKoperasi');

$routes->get('laporan-laba-rugi-koperasi', 'laporanController::laporanLabaRugiKoperasi');

$routes->get('laporan-bulanan-koperasi', 'laporanController::laporanBulananKoperasi');



