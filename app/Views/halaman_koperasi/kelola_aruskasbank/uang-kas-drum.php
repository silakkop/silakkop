<?= $this->extend('halaman_koperasi/layout/default') ?> <!-- panggil default.php -->

<?= $this->section('title') ?>
<title>Kelola Uang Kas</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="div" hidden><?= $i = 1 ?></div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <i class="fas fa-money-bill-alt"></i> Data Uang Kas</h1>

    <!-- ALERT -->
    <div class="swal" data-swal="<?= session()->getFlashdata('success'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        Total Drum Kas</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Kas Masuk <br>
                                                Angsuran Pinjaman<br>
                                                Simpanan Anggota
                                            </div>
                                            <div class="col-md-6 text-dark">
                                                <b>
                                                Rp. 0 <br>
                                                Rp. 0 <br>
                                                Rp. 0
                                                </b>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        Total Druk Kas</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Kas Keluar <br>
                                                Pencairan Pinjaman<br>
                                                Simpanan Anggota
                                            </div>
                                            <div class="col-md-6 text-dark">
                                                <b>
                                                Rp. 0 <br>
                                                Rp. 0 <br>
                                                Rp. 0
                                                </b>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100" style="background-color: #FFE7AD;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        Saldo Kas Akhir</div><br>
                                        
                                    <div class="h2 mb-0 font-weight-bold text-dark text-center">Rp. 00000</div><br>
                                    <div class="h6 mb-0 font-weight-bold text-dark text-right"><b>Rp. 0</b>/Bulan Lalu</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">

        <div class="card-header">

            <div class="text-left">

                <div class="row">
                    <div class="col-md-2">
                        <a href="#" class="btn btn-success btn-icon-split"><span class="text">DRUM KAS</span></a>

                        <a href="kelola-uang-kas-druk-koperasi" class="btn btn-white btn-icon-split border border-success"><span class="text"><b>DRUK KAS</b></span></a>
                    </div>
                    <div class="col-md-2">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <div class="text-right">
                            <a href="" data-toggle="modal" data-target="#tambahprodukModal" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Tambah Produk</span>
                            </a>
                            <a href="" data-toggle="modal" data-target="" class="btn btn-primary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-print"></i>
                                </span>
                                <span class="text">Print</span>
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="card-body">

                        <div class="row">
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 font-weight-bold mb-1 text-dark">
                                                    Total - Juni</div><br>
                                                    
                                                <div class="h3 mb-0 font-weight-bold text-dark text-right">Rp. 00000</div>
                                                <div class="h6 mb-0 text-dark text-right">Rp. 0 <b class="text-success">(0%)</b></div><br>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="h6 mb-1 text-dark">Bulan Sebelumnya</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="h6 mb-0 font-weight-bold text-dark text-right">Rp. 0</div>
                                                    </div>    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">KAS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Angsuran Pinjaman</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Simpanan Modal</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Simpanan Non Modal</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Hutang Jangka Pendek</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Aktiva Tetap</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Pendapatan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body"><br>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-7">
                                                <a href="" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-success btn-icon-split">
                                                    <span class="icon text-white-50">
                                                    <i class="fas fa-plus"></i>
                                                    </span>
                                                    <span class="text">Tambah Transaksi</span>
                                                </a>
                                            </div>
                                            <div class="col-2"></div>

                                            
                                        </div><br>
                                        <div class="row">
                                            <div class="col-4"></div>
                                            <div class="col-6">
                                                <a href="" data-toggle="modal" data-target="#ringkasanModal" class="btn btn-white btn-icon-split">
                                                    
                                                    <span class="text-dark"><b>Selengkapnya</b></span>
                                                </a>
                                            </div>
                                            
                                            <div class="col-2"></div>
                                            
                                        </div>

                                         
                                    </div>
                                </div>
                            </div>
                        </div>
            
        </div>
    </div>

</div>

<!-- MODAL RINGKASAN -->

<div class="modal fade" id="ringkasanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Ringkasan</a><br>
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">KAS</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a> 
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-8">
                                <div class="card h-100" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 font-weight-bold mb-1 text-dark">
                                                    Total - Juni</div><br>
                                                    
                                                <div class="h3 mb-0 font-weight-bold text-dark text-right">Rp. 00000</div>
                                                <div class="h6 mb-0 text-dark text-right">Rp. 0 <b class="text-success">(0%)</b></div><br>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="h6 mb-1 text-dark">Bulan Sebelumnya</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="h6 mb-0 font-weight-bold text-dark text-right">Rp. 0</div>
                                                    </div>    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">KAS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Angsuran Pinjaman</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Simpanan Modal</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Simpanan Non Modal</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Hutang Jangka Pendek</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Aktiva Tetap</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-wallet fa-2x text-success"></i>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">0%</b></span></button>
                                                </div>
                                            </div>
                                        </div><br><br>
                                         <div class="row">
                                            <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Pendapatan</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL KAS -->

<div class="modal fade" id="kasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal"data-dismiss="modal" data-target="#ringkasanModal" href="" class="btn btn-white text-left">Ringkasan</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">KAS</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a> 
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead style="">
                                    <tr>
                                        <th class="text-center text-dark">Tanggal</th>
                                        <th class="text-center text-dark">Jenis Transaksi</th>
                                        <th class="text-center text-dark">Jumlah</th>
                                        <th class="text-center text-dark">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center"><button class="btn btn-light"style ="border-radius:30px">Simpanan Modal</button></td>
                                            <td class="text-right">Rp. 0</td>    
                                            <td class="text-center">
                                                <a title="Edit" data-toggle="modal" data-target="#editModal" href="" class="btn btn-secondary btn-circle btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>

                                                <a title="Hapus" href="" class="btn btn-danger btn-circle btn-sm btn_hapus">
                                                    <i class="fas fa-trash"></i>
                                                </a>

                                            </td>                          
                                        </tr>   
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    
                    <div class="col-3">
                        <div class="card" style="background-color: #FFE7AD;">
                            <div class="card-body">
                                <div class="h6 mb-0 text-dark text-center">Total Bulan Ini</div>
                                    <div class="h5 mb-1 font-weight-bold text-dark text-center">Rp. 00000</div>         
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card" style="background-color: #F8F9FC;">
                            <div class="card-body">
                                <div class="h6 mb-0 text-dark text-center">Jumlah Transaksi</div>
                                    <div class="h5 mb-1 font-weight-bold text-dark text-center">0 Bulan Ini</div>         
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL ANGSURAN PINJAMAN -->

<div class="modal fade" id="angsuranpinjamanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal"data-dismiss="modal" data-target="#ringkasanModal" href="" class="btn btn-white text-left">Ringkasan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">KAS</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a>
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="">
                                            <tr>
                                                <th class="text-center text-dark">Kategori</th>
                                                <th class="text-center text-dark">Jumlah</th>
                                                <th class="text-center text-dark">Jumlah Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                                <tr>
                                                    <td class="text-left text-dark">Pinjaman Umum</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Pinjaman Pengurus</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>   
                                                <tr>
                                                    <td class="text-left text-dark">Pinjaman UMKM</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>  
                                                <tr>
                                                    <td class="text-left text-dark">Pinjaman Khusus</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>  
                                                <tr>
                                                    <td class="text-left text-dark">Pinjaman Harian Calon Anggota</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>  
                                                <tr>
                                                    <td class="text-left text-dark">Pinjaman Luar Calon Anggota</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>  
                                                <tr>
                                                    <td class="text-left text-dark">Cadangan Kerugian Pinjaman</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-3"><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div class="card" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Jumlah Transaksi</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">0 Bulan Ini</div>         
                                    </div>
                                </div><br>
                                <div class="card" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Total</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">Rp. 00000</div>         
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL SIMPANAN MODAL -->

<div class="modal fade" id="simpananmodalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal"data-dismiss="modal" data-target="#ringkasanModal" href="" class="btn btn-white text-left">Ringkasan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">KAS</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a>
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="">
                                            <tr>
                                                <th class="text-center text-dark">Kategori</th>
                                                <th class="text-center text-dark">Jumlah</th>
                                                <th class="text-center text-dark">Jumlah Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan Pokok</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan Wajib</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>   
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-3"><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div class="card" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Jumlah Transaksi</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">0 Bulan Ini</div>         
                                    </div>
                                </div><br>
                                <div class="card" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Total</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">Rp. 00000</div>         
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL SIMPANAN NON MODAL -->

<div class="modal fade" id="simpanannonmodalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal"data-dismiss="modal" data-target="#ringkasanModal" href="" class="btn btn-white text-left">Ringkasan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">KAS</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a>
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="">
                                            <tr>
                                                <th class="text-center text-dark">Kategori</th>
                                                <th class="text-center text-dark">Jumlah</th>
                                                <th class="text-center text-dark">Jumlah Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan Sukarela</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan Khusus</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>   
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan Harian Anggota</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan Pendidikan Anggota</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan PERMATA Anggota</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan THR Anggota</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Simpanan Umroh</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-3"><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div class="card" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Jumlah Transaksi</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">0 Bulan Ini</div>         
                                    </div>
                                </div><br>
                                <div class="card" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Total</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">Rp. 00000</div>         
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL AKTIVA TETAP -->

<div class="modal fade" id="aktivatetapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal"data-dismiss="modal" data-target="#ringkasanModal" href="" class="btn btn-white text-left">Ringkasan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">KAS</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a>
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="">
                                            <tr>
                                                <th class="text-center text-dark">Kategori</th>
                                                <th class="text-center text-dark">Jumlah</th>
                                                <th class="text-center text-dark">Jumlah Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                                <tr>
                                                    <td class="text-left text-dark">Tanah Sukarela</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Gedung</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>   
                                                <tr>
                                                    <td class="text-left text-dark">Kendaraan</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Komputer</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Elektronik</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Furniture/Peralaran Kantor</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Peralatan Lainnya</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-3"><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div class="card" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Jumlah Transaksi</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">0 Bulan Ini</div>         
                                    </div>
                                </div><br>
                                <div class="card" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Total</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">Rp. 00000</div>         
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL HUTANG JANGKA PENDEK -->

<div class="modal fade" id="hutangjangkapendekModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal"data-dismiss="modal" data-target="#ringkasanModal" href="" class="btn btn-white text-left">Ringkasan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">KAS</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a>
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="">
                                            <tr>
                                                <th class="text-center text-dark">Kategori</th>
                                                <th class="text-center text-dark">Jumlah</th>
                                                <th class="text-center text-dark">Jumlah Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                                <tr>
                                                    <td class="text-left text-dark">Hutang Sementara    </td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Titipan Dana Santunan</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>   
                                                <tr>
                                                    <td class="text-left text-dark">Dana Pendidikan</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Dana Sosial</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Dana Cadangan Resiko</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Dana Pengurus</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Jasa Anggota</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-3"><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div class="card" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Jumlah Transaksi</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">0 Bulan Ini</div>         
                                    </div>
                                </div><br>
                                <div class="card" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Total</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">Rp. 00000</div>         
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL PENDAPATAN -->

<div class="modal fade" id="pendapatanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> DRUM KAS - Nama Koperasi</b></h5>
                <div class="col-5"></div>
                    <div class="col-md-3">
                        <select class=" form-control" name="bulan" required>
                            <option value="">=== Pilih Bulan ===</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Maret">Maret</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Juni">Juni</option>
                            <option value="Juli">Juli</option>
                            <option value="Agustus">Agustus</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Desember">Desember</option>
                        </select>
                    </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-3" style="background-color: #F8F9FC;">
                        <div class="card border-0" style="background-color: #F8F9FC;">

                            <a data-toggle="modal"data-dismiss="modal" data-target="#ringkasanModal" href="" class="btn btn-white text-left">Ringkasan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">KAS</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Angsuran Pinjaman</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Simpanan Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Simpanan Non Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Aktiva Tetap</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white   text-left">Hutang Jangka Pendek</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Pendapatan</a>
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="">
                                            <tr>
                                                <th class="text-center text-dark">Kategori</th>
                                                <th class="text-center text-dark">Jumlah</th>
                                                <th class="text-center text-dark">Jumlah Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>  
                                                <tr>
                                                    <td class="text-left text-dark">Jasa Administrasi dari Pinjaman</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Denda Jasa Administrasi dari Pinjaman Umum</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>   
                                                <tr>
                                                    <td class="text-left text-dark">Bunga Bank</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Profisi Kredit Pinjaman</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Pendapatan dari Pinjaman yang Telah Dihapuskan</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Rupa-rupa Pendapatan</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-3"><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div class="card" style="background-color: #F8F9FC;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Jumlah Transaksi</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">0 Bulan Ini</div>         
                                    </div>
                                </div><br>
                                <div class="card" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="h6 mb-0 text-dark text-center">Total</div>
                                            <div class="h5 mb-1 font-weight-bold text-dark text-center">Rp. 00000</div>         
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Tambah Transaksi DRUM-->
<div class="modal fade" id="tambahtransaksiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Tambah Transaksi DRUM - Nama Koperasi</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Kategori Produk</label>
                                <select class="input-large form-control" name="kategori_produk" required>
                                    <option value="" readonly="">Pilih Kategori Produk</option>

                                    <option value="">null</option>
                                    <option value="">null</option>

                                </select>

                            </div>
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nominal Transaksi</label>
                                <input type="text" class="form-control" name="nominal_transaksi" required><br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Produk</label>
                                <select class="input-large form-control" name="nama_produk" required>
                                    <option value="" readonly="">Pilih Nama Produk</option>

                                    <option value="">null</option>
                                    <option value="">null</option>

                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Transaksi DRUM-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Edit Transaksi DRUM - Nama Koperasi</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Kategori Produk</label>
                                <select class="input-large form-control" name="kategori_produk" required>
                                    <option value="" readonly="">Pilih Kategori Produk</option>

                                    <option value="">null</option>
                                    <option value="">null</option>

                                </select>

                            </div>
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nominal Transaksi</label>
                                <input type="text" class="form-control" name="nominal_transaksi" required><br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Produk</label>
                                <select class="input-large form-control" name="nama_produk" required>
                                    <option value="" readonly="">Pilih Nama Produk</option>

                                    <option value="">null</option>
                                    <option value="">null</option>

                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah Produk -->
<div class="modal fade" id="tambahprodukModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Tambah Produk</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nama Produk</label>
                                <input type="text" class="form-control" name="nominal_transaksi" required><br>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Jenis Produk</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            DRUM 
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            DRUK 
                                        </label>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kategori Produk</label>
                                <select class="input-large form-control" name="nama_produk" required>
                                    <option value="" readonly="">Pilih Kategori Produk</option>

                                    <option value="">KAS</option>
                                    <option value="">Angsuran Pinjaman</option>
                                    <option value="">Simpanan Modal</option>

                                </select>

                            </div>
                        </div>
                    </div><br><br><br>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Berlakukan Untuk Semua Koperasi</label>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <button type="button" style="border-radius: 30px" class="btn btn-white border-success"><span class="text-success"><b class="h6">Nama Koperasi</b></span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Tutup</button>
                    <button type="submit" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-save"></i>
                        </span>
                        <span class="text">Simpan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>