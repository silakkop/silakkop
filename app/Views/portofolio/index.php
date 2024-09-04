<?= $this->extend('layout/default') ?> <!-- panggil default.php -->

<?= $this->section('title') ?>
<title>PortofolioAt Risk</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="div" hidden><?= $i = 1 ?></div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <i class="fas fa-chart-pie"></i> Portofolio At Risk</h1>

    <!-- ALERT -->
    <div class="swal" data-swal="<?= session()->getFlashdata('success'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">

                <div class="col-md-2">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        Lancar</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Baki Debet <br><br>
                                                Tak Tertagih<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-success">
                                                    Rp. 0
                                                </div><br>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>

                                                </b>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        1 Bulan</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Baki Debet <br><br>
                                                Tak Tertagih<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-success">
                                                    Rp. 0
                                                </div><br>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>

                                                </b>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        2 - < 3 Bulan</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Baki Debet <br><br>
                                                Tak Tertagih<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-success">
                                                    Rp. 0
                                                </div><br>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>

                                                </b>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        3 - < 6 Bulan</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Baki Debet <br><br>
                                                Tak Tertagih<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-success">
                                                    Rp. 0
                                                </div><br>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>

                                                </b>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        6 - < 12 Bulan</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Baki Debet <br><br>
                                                Tak Tertagih<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-success">
                                                    Rp. 0
                                                </div><br>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>

                                                </b>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="card h-100" style="background-color: #F8F9FC;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold mb-1 text-dark">
                                        > 12 Bulan</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Baki Debet <br><br>
                                                Tak Tertagih<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-success">
                                                    Rp. 0
                                                </div><br>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>

                                                </b>
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
                            <th class="text-center text-dark">Nasabah</th>
                            <th class="text-center text-dark">Baki Debet</th>
                            <th class="text-center text-dark">Portofolio Beresiko</th>
                            <th class="text-center text-dark">Tak Tertagih</th>
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
                                <td class="text-center">
                                    <a title="Detail" data-toggle="modal" data-target="#ringkasanModal" href="" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a title="Edit Kelas" data-toggle="modal" data-target="#editModal" href="" class="btn btn-secondary btn-circle btn-sm">
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
                <h5 class="modal-title" id="exampleModalLabel"><b> Portofolio At Risk - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Portofolio At Risk</a><br>
                            <a data-toggle="modal" data-dismiss="modal" data-target="#laporanModal" href="" class="btn btn-white text-left">Laporan Anggota</a>

                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-8">
                                <div class="card h-100" style="">
                                        
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
                                               
                                                <div class="row">
                                                    <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                                </div>
                                                <div class="row">
                                                    <div class="h6 mb-0 text-dark text-left ">Lancar</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div><br>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card h-100" style="background-color: #F8F9FC;">
                                            <div class="card-body">
                                               
                                                <div class="row">
                                                    <div class="h5 mb-1 font-weight-bold text-success text-left">Rp. 00000</div>
                                                </div>
                                                <div class="row">
                                                    <div class="h6 mb-0 text-dark text-left ">Total Tunggakan</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="background-color: #FFE7AD;">
                                            <tr>
                                                <th class="text-center text-dark">No.</th>
                                                <th class="text-center text-dark">Periode Tunggakan</th>
                                                <th class="text-center text-dark">Nasabah</th>
                                                <th class="text-center text-dark">Baki Debet</th>
                                                <th class="text-center text-dark">Portofolio Beresiko</th>
                                                <th class="text-center text-dark">Tak Tertagih</th>
 

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- ambil dari anggotaController.php -->
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    
                                                </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                </div>

                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL Portofolio -->

<div class="modal fade" id="kasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Portofolio At Risk - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Portofolio At Risk</a><br>
                            <a data-toggle="modal" data-dismiss="modal" data-target="#laporanModal" href="" class="btn btn-white text-left">Laporan Anggota</a>
 
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead style="">
                                    <tr>
                                        <th class="text-center text-dark">Tanggal</th>
                                        <th class="text-center text-dark">Jenis Transaksi</th>
                                        <th class="text-center text-dark">Tunggakan</th>
                                        <th class="text-center text-dark">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Nama Anggota</td>
                                            <td class="text-center"><button class="btn btn-light text-dark"style ="border-radius:30px">Lancar</button></td>
                                            <td class="text-right">Rp. 0</td>                             
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

                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL LAPORAN -->

<div class="modal fade" id="laporanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Portofolio At Risk - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Portofolio At Risk</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Laporan Anggota</a>
                            
 
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead style="">
                                    <tr>
                                        <th class="text-center text-dark">No ID. Anggota</th>
                                        <th class="text-center text-dark">Nama Anggota</th>
                                        <th class="text-center text-dark">Total Pinjaman</th>
                                        <th class="text-center text-dark">Tunggakan s/d Bulan Ini</th>
                                        <th class="text-center text-dark">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center">Nama Anggota</td>
                                            <td class="text-center">Rp. 0</td>
                                            <td class="text-right">Rp. 0</td>        
                                            <td class="text-center">
                                                <button data-toggle="modal" data-target="#bayarModal" type="button" class="btn btn-primary btn-icon-split"> .
                                                    <i class="fas fa-paper-plane"><span class="text"> Bayar</span></i>
                                                </button>
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

                    <button type="button" class="btn btn-success btn-icon-split">
                        <span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal BAYAR-->
<div class="modal fade" id="bayarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-paper-plane"></i><b> Bayar Pinjaman - Nama Koperasi</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-body">    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nama Anggota</label><br>
                                <label for="recipient-name" class="col-form-label">Nama Anggota</label>
                                

                            </div>
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Bulan</label><br>
                                <label for="recipient-name" class="col-form-label">Bulan</label>
                                

                            </div>
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nominal Pembayaran</label>
                                <input type="text" class="form-control" name="nominal_transaksi" required><br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Koperasi</label><br>
                                <label for="recipient-name" class="col-form-label">Nama Koperasi</label>
                                

                            </div>
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Tunggakan s/d Bulan Ini</label><br>
                                <label for="recipient-name" class="col-form-label">Rp. 0</label>
                                

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