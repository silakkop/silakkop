<?= $this->extend('layout/default') ?> <!-- panggil default.php -->

<?= $this->section('title') ?>
<title>Laporan Bulanan</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="div" hidden><?= $i = 1 ?></div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <i class="fas fa-poll"></i> Laporan Bulanan</h1>

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
                                        Aktiva</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Debit <br>
                                                Kredit<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>
                                                <div class="text-success">
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
                                        Kewajiban</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Debit <br>
                                                Kredit<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>
                                                <div class="text-success">
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
                                        Modal</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Debit <br>
                                                Kredit<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>
                                                <div class="text-success">
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
                                        Pendapatan</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Debit <br>
                                                Kredit<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>
                                                <div class="text-success">
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
                                        Biaya-biaya</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Debit <br>
                                                Kredit<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>
                                                <div class="text-success">
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
                                        Laba-Rugi</div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                Debit <br>
                                                Kredit<br>
 
                                            </div>
                                            <div class="col-md-6">
                                                <b>
                                                <div class="text-danger">
                                                    Rp. 0
                                                </div>
                                                <div class="text-success">
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
                            <th class="text-center text-dark">Aktiva</th>
                            <th class="text-center text-dark">Pedapatan.</th>
                            <th class="text-center text-dark">Biaya-biaya</th>
                            <th class="text-center text-dark">Transaksi Bulan Ini</th>
                            <th class="text-center text-dark">Total</th>
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
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Aktiva</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Kewajiban</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Laba Rugi</a> 
                            
                        </div>
                        
                    </div>

                    <div class="col-9">

                        <div class="row">
                            <div class="col-8">
                                <div class="card h-100" style="">
                                        <canvas width="400" height="100" id="myChart">tes</canvas> 
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card h-100" style="background-color: #FFE7AD;">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="h6 font-weight-bold mb-1 text-dark">
                                                    Saldo s/d Bulan Ini</div><br>
                                                    
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
                                            <div class="h5 mb-1 font-weight-bold text-danger text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Aktiva</div>
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
                                            <div class="h6 mb-0 text-dark text-left ">Kewajiban</div>
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
                                            <div class="h6 mb-0 text-dark text-left">Modal</div>
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
                                            <div class="h6 mb-0 text-dark text-left ">Pendapatan</div>
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
                                            <div class="h6 mb-0 text-dark text-left ">Biaya-Biaya</div>
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
                                            <div class="h5 mb-1 font-weight-bold text-danger text-left">Rp. 00000</div>
                                        </div>
                                        <div class="row">
                                            <div class="h6 mb-0 text-dark text-left ">Laba Rugi</div>
                                        </div>
                                    </div>
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

<!-- MODAL LAP.BULANAN -->

<div class="modal fade" id="kasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Aktiva</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Kewajiban</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Laba Rugi</a> 
                            
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
                                    </tr>
                                </thead>
                                <tbody>  
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="text-center"><button class="btn btn-light text-danger"style ="border-radius:30px">Aktiva</button> / Lorem</td>
                                            <td class="text-right">Rp. 0</td>                             
                                        </tr> 
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td class="text-center"><button class="btn btn-light text-success"style ="border-radius:30px">Modal</button> / Lorem</td>
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

<!-- MODAL AKTIVA -->

<div class="modal fade" id="angsuranpinjamanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Aktiva</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Kewajiban</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Laba Rugi</a>
                            
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
                                                <th class="text-center text-dark">Debit</th>
                                                <th class="text-center text-dark">Kredit</th>
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

                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL KEWAJIBAN -->

<div class="modal fade" id="simpananmodalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Aktiva</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Kewajiban</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Laba Rugi</a>
                            
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
                                                <th class="text-center text-dark">Debit</th>
                                                <th class="text-center text-dark">Kredit</th>
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
                    
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL MODAL -->

<div class="modal fade" id="simpanannonmodalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Aktiva</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Kewajiban</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Laba Rugi</a>
                            
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
                                                <th class="text-center text-dark">Debit</th>
                                                <th class="text-center text-dark">Kredit</th>
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
                    
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL PENDAPATAN -->

<div class="modal fade" id="aktivatetapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Aktiva</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Kewajiban</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Modal</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Laba Rugi</a>
                            
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
                                                <th class="text-center text-dark">Debit</th>
                                                <th class="text-center text-dark">Kredit</th>
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
                    
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL BIAYA-BIAYA -->

<div class="modal fade" id="hutangjangkapendekModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Aktiva</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Kewajiban</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#pendapatanModal" href="" class="btn btn-white text-left">Laba Rugi</a>
                            
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
                                                <th class="text-center text-dark">Debit</th>
                                                <th class="text-center text-dark">Kredit</th>
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
                    
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL LABA RUGI -->

<div class="modal fade" id="pendapatanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b> Laporan Bulanan - Nama Koperasi</b></h5>
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
                            <a data-toggle="modal"data-dismiss="modal" data-target="#kasModal" href="" class="btn btn-white text-left">Lap.Bulanan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#angsuranpinjamanModal" href="" class="btn btn-white text-left">Aktiva</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpananmodalModal" href="" class="btn btn-white text-left">Kewajiban</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#simpanannonmodalModal" href="" class="btn btn-white text-left">Modal</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#aktivatetapModal" href="" class="btn btn-white text-left">Pendapatan</a><br>
                            <a data-toggle="modal"data-dismiss="modal" data-target="#hutangjangkapendekModal" href="" class="btn btn-white   text-left">Biaya-Biaya</a><br>
                            <a data-toggle="modal" data-target="" href="" class="btn btn-success text-left">Laba Rugi</a>
                            
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
                                                <th class="text-center text-dark">Debit</th>
                                                <th class="text-center text-dark">Kredit</th>
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
                    
                    <button type="button" class="btn btn-success btn-icon-split"><span class="text">Download Laporan</span></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Tambah Transaksi DRUK-->
<div class="modal fade" id="tambahtransaksiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Tambah Transaksi DRUK - Nama Koperasi</b></h5>
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


<?= $this->endSection() ?>