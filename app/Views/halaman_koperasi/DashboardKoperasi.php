<?= $this->extend('halaman_koperasi/layout/default') ?> <!-- INI UNTUK PANGGIL DEFAULT -->

<?= $this->section('title') ?>
<title>Dashboard Koperasi</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="container-fluid">


<h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-th-large"></i> Dashboard Koperasi</h1>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Arus Kas</div><br>
                                
                            <div class="h2 mb-0 font-weight-bold text-success">Rp. 00000</div>
                        </div>
                        <div class="col-auto">

                            <i class="fas fa-wallet fa-3x text-success"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Arus Bank</div><br>
                                
                            <div class="h2 mb-0 font-weight-bold text-success">Rp. 00000</div>
                        </div>
                        <div class="col-auto">

                            <i class="fas fa-university  fa-3x text-success"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Anggota</div><br>
                                
                            <div class="h2 mb-0 font-weight-bold text-dark">0 Koperasi</div>
                            <div class="h4 mb-0 font-weight-bold text-dark text-right">0 Anggota</div>
                        </div>
                        <div class="col-auto">

                            <i class="fas fa-users fa-3x text-success"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Aset</div><br>
                                
                            <div class="h2 mb-0 font-weight-bold text-success">Rp. 00000</div>
                            <div class="h4 mb-0 font-weight-bold text-dark text-right">Rp. 00000 /Bulan Lalu</div>
                        </div>
                        <div class="col-auto">

                            <i class="fas fa-credit-card fa-3x text-success"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-7">
            <div class="card h-100 shadow mb-4">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card h-100 shadow mb-4">
                <div class="card-body">
                    <div class="h6 font-weight-bold text-dark mb-1">
                                Laba Rugi</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-success mb-1">
                                Perhitungan Hasil Usaha</div>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-3">
                            <div class="h6 font-weight-bold text-dark mb-1">
                                Selengkapnya</div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12">

                                <div class="card h-100" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 font-weight-bold mb-1 text-dark text-center">
                                                    PHU s/d Bulan Ini</div>
                                                    
                                                <div class="h1 mb-0 font-weight-bold text-dark text-center">Rp. 00000</div>

                                                <div class="h6 mb-0 font-weight-bold text-secondary text-center">(Rp. 0)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1">Total Pendapatan</div>
                        </div>
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1 text-right">Rp. 0 (Rp. 0 )</div>
                        </div>
                        
                    </div><br>

                    <div class="row">
                        <div class="col-12">
                            <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1">Total Seluruh Biaya</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0 (Rp. 0)</div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1">Laba Sebelum Pajak</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0 (Rp. 0)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-12">
                            <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1">Beban Pajak</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0 (0%)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><br>

    <div class="row">

        <div class="col-4">
            <div class="card h-100 shadow mb-4">
                <div class="card-body">
                    <div class="h6 font-weight-bold text-dark mb-1">
                                Grand Total</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-success mb-1">
                                Pinjaman</div>
                        </div>
                        
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1 text-right">
                                Selengkapnya</div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12">

                                                <div class="h6 font-weight-bold mb-1 text-dark text-center">
                                                    Saldo Akhir Pinjaman</div>
                                                    
                                                <div class="h1 mb-0 font-weight-bold text-success text-center">Rp. 00000</div>
                                           
                        </div>
                    </div><br>

                    <div class="row">
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1">Pinjaman Bulan Ini</div>
                        </div>
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1 text-right">Rp. 0</div>
                        </div>
                        
                    </div><br>

                    <div class="row">
                        <div class="col-12">
                            <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="h6 font-weight-bold text-dark mb-1">Angsuran Bulan Ini</div><br>
                                            </div>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6">
                                                
                                                <div class="h6 font-weight-bold text-secondary mb-1">Pokok</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0</div>
                                            </div>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1">Jasa</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card h-100 shadow mb-4">
                <div class="card-body">
                    <div class="h6 font-weight-bold text-dark mb-1">
                                Grand Total</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-success mb-1">
                                Simpanan</div>
                        </div>
                        
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1 text-right">
                                Selengkapnya</div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12">

                                                <div class="h6 font-weight-bold mb-1 text-dark text-center">
                                                    Saldo Akhir Simpanan</div>
                                                    
                                                <div class="h1 mb-0 font-weight-bold text-success text-center">Rp. 00000</div>
                                           
                        </div>
                    </div><br><br><br>

                    <div class="row">
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1">Simpanan Bulan Ini</div>
                        </div>
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1 text-right">Rp. 0</div>
                        </div>
                        
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-6">
                                                
                            <div class="h6 font-weight-bold text-secondary mb-1">Kenaikan</div>
                        </div>
                        <div class="col-6">
                             <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0 <b class="text-success">(0%)</b></div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-12">
                            <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">

                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6">
                                                
                                                <div class="h6 font-weight-bold text-secondary mb-1">Simpanan Bulan Lalu</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card h-100 shadow mb-4">
                <div class="card-body">
                    <div class="h6 font-weight-bold text-dark mb-1">
                                Laporan</div>
                    <div class="row">
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-success mb-1">
                                Neraca</div>
                        </div>
                        
                        <div class="col-6">
                            <div class="h6 font-weight-bold text-dark mb-1 text-right">
                                Selengkapnya</div>
                        </div>
                    </div><br><br>
                    

                    <div class="row">
                        <div class="col-12">
                                <div class="card h-80" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 font-weight-bold mb-1 text-dark text-left">
                                                    Desember</div>
                                                    
                                                <div class="h1 mb-0 font-weight-bold text-dark text-right">Rp. 00000</div>

                                                <div class="h6 mb-0 font-weight-bold text-secondary text-right">Rp. 0 <b class="text-success">(0%)</b></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card h-10" style="background-color: #F8F9FC;">
                                    <div class="card-body">

                                        <div class="row no-gutters align-items-center">
                                            <div class="col-6">
                                                
                                                <div class="h6 font-weight-bold text-secondary mb-1">November</div>
                                            </div>
                                            <div class="col-6">
                                                <div class="h6 font-weight-bold text-secondary mb-1 text-right">Rp. 0</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div><br>

<?= $this->endSection() ?>