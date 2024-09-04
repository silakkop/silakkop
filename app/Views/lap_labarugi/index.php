<?= $this->extend('layout/default') ?> <!-- panggil default.php -->

<?= $this->section('title') ?>
<title>Laporan Laba Rugi</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="div" hidden><?= $i = 1 ?></div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <i class="fas fa-chart-line"></i> Laporan Laba Rugi</h1>

    <!-- ALERT -->
    <div class="swal" data-swal="<?= session()->getFlashdata('success'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="card h-100" style="">
                                        <canvas width="400" height="100" id="myChart"></canvas> 
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="h7 font-weight-bold mb-1 text-dark">
                                                            Pendapatan</div>
                                                            
                                                        <div class="h5 mb-0 font-weight-bold text-dark text-center">Rp. 00000</div>

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
                                                    <div class="col mr-2">
                                                        <div class="h7 font-weight-bold mb-1 text-dark">
                                                            Biaya</div>
                                                            
                                                        <div class="h5 mb-0 font-weight-bold text-dark text-center">Rp. 00000</div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                            <div class="col-3">
                                <div class="card h-100" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 font-weight-bold mb-1 text-dark">
                                                    PHU s/d Bulan Ini</div><br>
                                                    
                                                <div class="h3 mb-0 font-weight-bold text-dark text-center">Rp. 00000</div><br><br>

                                                <div class="h6 mb-0 font-weight-bold text-dark text-right">Rp. 0 / Bulan Lalu</div>
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
                    <div class="col-md-2">

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
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #FFE7AD;">
                        <tr>
                            <th class="text-center text-dark">No.</th>
                            <th class="text-center text-dark">Nama Koperasi</th>
                            <th class="text-center text-dark">PHU Bulan Ini</th>
                            <th class="text-center text-dark">Pendapatan</th>
                            <th class="text-center text-dark">Total Biaya</th>
                            <th class="text-center text-dark">Laba Sebelum Pajak</th>
                            <th class="text-center text-dark">SHU s/d Bulan Ini</th>
                            <th class="text-center text-dark">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                         <!-- ambil dari anggotaController.php -->
                            <tr>
                                <td class="text-center"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                                <td class="text-center">
                                    <a title="Detail" data-toggle="modal" data-target="#ringkasanModal" href="" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a title="Edit Kelas" data-toggle="modal" data-target="" href="" class="btn btn-secondary btn-circle btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>

                                    <a title="Hapus Kelas" href="" class="btn btn-danger btn-circle btn-sm btn_hapus">
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

<!-- MODAL RINGKASAN -->

<div class="modal fade" id="ringkasanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laba Rugi - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap. Laba Rugi</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#biayaModal" href="" class="btn btn-white text-left">Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#bebanModal" href="" class="btn btn-white text-left">Beban Pajak</a><br>
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-12">
                                <div class="card h-100" style="">
                                        <canvas width="400" height="100" id="myChart2"></canvas> 
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-6">
                                <div class="card h-100" style="">
                                        <canvas width="400" height="100" id="myChart2"></canvas> 
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
 
                                                <div class="row">
                                                    <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div><br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="h6 mb-0 text-dark text-left ">PHU s/d Bulan Ini</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
 
                                                <div class="row">
                                                    <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div><br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="h6 mb-0 text-dark text-left ">Pendapatan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
 
                                                <div class="row">
                                                    <div class="h5 mb-1 font-weight-bold text-danger text-left">Rp. 00000</div><br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="h6 mb-0 text-dark text-left ">Biaya</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
 
                                                <div class="row">
                                                    <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div><br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="h6 mb-0 text-dark text-left ">Beban Pajak</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
 
                                                <div class="row">
                                                    <div class="h5 mb-1 font-weight-bold text-success text-left">0</div><br><br>
                                                </div>
                                                <div class="row">
                                                    <div class="h6 mb-0 text-dark text-left ">SHU s/d Bulan Ini</div>
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

                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#tambahtransaksiModal" class="btn btn-white border-success text-success"> Tambah Transaksi</button>
                    
                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL LAP.LABA RUGI -->

<div class="modal fade" id="kasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laba Rugi - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Lap. Laba Rugi</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#biayaModal" href="" class="btn btn-white text-left">Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#bebanModal" href="" class="btn btn-white text-left">Beban Pajak</a><br>
                            
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
                                            <td class="text-center"><button class="btn btn-light text-dark"style ="border-radius:30px">Biaya</button> / Lorem</td>
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

<!-- MODAL PENDAPATAN -->

<div class="modal fade" id="pendapatanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laba Rugi - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap. Laba Rugi</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#biayaModal" href="" class="btn btn-white text-left">Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#bebanModal" href="" class="btn btn-white text-left">Beban Pajak</a><br>
                            
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
                                                    <td class="text-left text-dark">Jasa Administrasi....</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Jasa Administrasi....</td>
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

<!-- MODAL BIAYA -->

<div class="modal fade" id="biayaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laba Rugi - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap. Laba Rugi</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="" href="#pendapatanModal" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#bebanModal" href="" class="btn btn-white text-left">Beban Pajak</a><br>
                            
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
                                                    <td class="text-left text-dark">Biaya Administrasi....</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Bunga Pinjaman....</td>
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

<!-- MODAL BEBAN PAJAK -->

<div class="modal fade" id="bebanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laba Rugi - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap. Laba Rugi</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="" href="#pendapatanModal" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#biayaModal" href="" class="btn btn-white text-left">Biaya</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Beban Pajak</a><br>
                            
                            
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
                                                    <td class="text-left text-dark">Lorem....</td>
                                                    <td class="text-right">Rp. 0</td>
                                                    <td class="text-center">0</td>                             
                                                </tr>
                                                <tr>
                                                    <td class="text-left text-dark">Lorem....</td>
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


<!-- Modal Tambah Transaksi-->
<div class="modal fade" id="tambahtransaksiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Tambah Transaksi - Nama Koperasi</b></h5>
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
                                <select class="input-large form-control" name="nama_anggota" required>
                                    <option value="" readonly="">Pilih Kategori Produk</option>

                                    <option value="">null</option>
                                    <option value="">null</option>

                                </select>

                            </div>
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nominal Transaksi</label>
                                <input type="number" class="form-control" name="nominal" required><br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Produk</label>
                                <select class="input-large form-control" name="kategori" required>
                                    <option value="" readonly="">Pilih Nama Produk</option>

                                    <option value="">null</option>
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

<!-- Modal Ubah Transaksi-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Edit Transaksi - Nama Koperasi</b></h5>
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
                                <select class="input-large form-control" name="nama_anggota" required>
                                    <option value="" readonly="">Pilih Kategori Produk</option>

                                    <option value="">null</option>
                                    <option value="">null</option>

                                </select>

                            </div>
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nominal Transaksi</label>
                                <input type="number" class="form-control" name="nominal" required><br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nama Produk</label>
                                <select class="input-large form-control" name="kategori" required>
                                    <option value="" readonly="">Pilih Nama Produk</option>

                                    <option value="">null</option>
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
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Kategori Produk</label>
                                <select class="input-large form-control" name="nama_produk" required>
                                    <option value="" readonly="">Pilih Kategori Produk</option>

                                    <option value="">Pendapatan</option>
                                    <option value="">Biaya</option>
                                    <option value="">Beban Pajak</option>

                                </select>

                            </div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Berlakukan Untuk Semua Koperasi</label>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="form-group">
                            <div class="custom-control custom-switch">
                                    <input type="checkbox" checked="" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="" class="form-control"></textarea>
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