<?= $this->extend('layout/default') ?> <!-- panggil default.php -->

<?= $this->section('title') ?>
<title>Kelola Koperasi</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="div" hidden><?= $i = 1 ?></div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <i class="fas fa-building"></i> Data Koperasi</h1>

    <!-- ALERT -->
    <div class="swal" data-swal="<?= session()->getFlashdata('success'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 text-right">
            <!-- <a href="" data-toggle="modal" data-target="#tambahModal" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Koperasi</span>
            </a> -->
            <a href="" data-toggle="modal" data-target="" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-print"></i>
                </span>
                <span class="text">Print</span>
            </a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #FFE7AD;">
                        <tr>
                            <th class="text-center text-dark">No.</th>
                            <th class="text-center text-dark">Nama Koperasi</th>
                            <th class="text-center text-dark">Anggota</th>
                            <th class="text-center text-dark">Total Simpanan</th>
                            <th class="text-center text-dark">Total Pinjaman</th>
                            <th class="text-center text-dark">Total Asset</th>
                            <th class="text-center text-dark">PHU</th>
                            <th class="text-center text-dark">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($koperasi as $key => $value) : ?> <!-- ambil dari koperasiController.php -->
                            <tr>
                                <td class="text-center"><?= $i++ ?></td>
                                <td><?=$value->nama_koperasi?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center">
                                    <a title="Detail" data-toggle="modal" data-target="#lihatModal<?php echo $value->id; ?>" href="" class="btn btn-primary btn-circle btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a title="Edit Kelas" data-toggle="modal" data-target="#editModal<?php echo $value->id; ?>" href="" class="btn btn-secondary btn-circle btn-sm">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a title="Hapus Kelas" href="<?= site_url('kelola-anggota/hapus/' . $value->id) ?>" class="btn btn-danger btn-circle btn-sm btn_hapus">
                                        <i class="fas fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Modal Tambah-->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Tambah Koperasi</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></i> <b>Data Koperasi</b></h5>
                </div>
                <div class="modal-body">    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nama Koperasi</label>
                                <input type="text" class="form-control" name="nama_lengkap" required><br>

                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="recipient-name" class="col-form-label">Pengurus</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="recipient-name" class="col-form-label">1*</label><br><br>
                                        <label for="recipient-name" class="col-form-label">2*</label><br><br>
                                        <label for="recipient-name" class="col-form-label">3*</label><br><br>
                                        <label for="recipient-name" class="col-form-label">4*</label><br><br>
                                        <label for="recipient-name" class="col-form-label">5*</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="pengurus1" required><br>
                                        <input type="text" class="form-control" name="pengurus2" required><br>
                                        <input type="text" class="form-control" name="pengurus3" required><br>
                                        <input type="text" class="form-control" name="pengurus4" required><br>
                                        <input type="text" class="form-control" name="pengurus5" required>
                                    </div>
                                </div><br>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">AD/ART</label>
                                <input type="file" class="form-control" name="ad/art" accept="image/*" required>

                                <label for="recipient-name" class="col-form-label">Alamat</label>
                                <textarea name="alamat" class="form-control"></textarea>

                                <label for="recipient-name" class="col-form-label">Email Koperasi</label>
                                <input type="email" class="form-control" name="email" required>

                                <label for="recipient-name" class="col-form-label">Telepon</label>
                                <input type="number" class="form-control" name="pekerjaan" required>

                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></i> <b>Akun Koperasi</b></h5>
                </div>
                <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Username</label>
                            <input type="text" class="form-control" name="username" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Password</label>
                            <input type="text" class="form-control" name="password" required>
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

<!-- Modal Edit-->
<?php foreach ($koperasi as $key => $value) : ?> <!-- ambil dari koperasiController.php -->

    <div class="modal fade" id="editModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i><b> Profil Koperasi</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body">    

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= base_url() ?>/ava.png" id="preview" class="img-thumbnail" width="150px">
                                        </div>
                                        <div class="col-md-8">
                                        <label for="recipient-name" class="col-form-label text"><b>Nama Koperasi</b></label>
                                            <h4><?= $value->nama_koperasi ?></h4>
                                            <label for="recipient-name" class="col-form-label"><b>Jumlah Anggota</b></label>
                                            <h4>----</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"><b>Lokasi Koperasi</b></label>
                                    <h4>----</h4>
                                    <label for="recipient-name" class="col-form-label"><b>Didirikan Pada</b></label>
                                    <h4>----</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <button type="button" data-toggle="modal" data-target="#lihatModal<?php echo $value->id; ?>" class="btn btn-white btn-icon-split" data-dismiss="modal">
                                <span class="text">Laporan</span></button>
                                <button type="button" class="btn btn-success btn-icon-split">
                                <span class="text"><b>Data</b></span></button>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <form action="<?= site_url('kelola-koperasi/' . $value->id) ?>" method="post" autocomplete="off">

                                <div class="modal-body">    
                                    <h4><b>Data Koperasi</b></h4><br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="recipient-name" class="col-form-label">Nama Koperasi</label>
                                            <input type="text" class="form-control" name="nama_lengkap" required>

                                            <label for="recipient-name" class="col-form-label">Pengurus</label>

                                            <div class="row">
                                                
                                                <div class="col-md-1">
                                                    <label for="recipient-name" class="col-form-label">1*</label><br><br>
                                                    <label for="recipient-name" class="col-form-label">2*</label><br><br>
                                                    <label for="recipient-name" class="col-form-label">3*</label><br><br>
                                                    <label for="recipient-name" class="col-form-label">4*</label><br><br>
                                                    <label for="recipient-name" class="col-form-label">5*</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" name="pengurus1" required><br>
                                                    <input type="text" class="form-control" name="pengurus2" required><br>
                                                    <input type="text" class="form-control" name="pengurus3" required><br>
                                                    <input type="text" class="form-control" name="pengurus4" required><br>
                                                    <input type="text" class="form-control" name="pengurus5" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="pengurus1" required><br>
                                                    <input type="text" class="form-control" name="pengurus2" required><br>
                                                    <input type="text" class="form-control" name="pengurus3" required><br>
                                                    <input type="text" class="form-control" name="pengurus4" required><br>
                                                    <input type="text" class="form-control" name="pengurus5" required>
                                                </div>
                                            </div><br>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">AD/ART</label>
                                            <input type="file" class="form-control" name="ad/art" accept="image/*" required>

                                            <label for="recipient-name" class="col-form-label">Alamat</label>
                                            <textarea name="alamat" class="form-control"></textarea>

                                            <label for="recipient-name" class="col-form-label">Email Koperasi</label>
                                            <input type="email" class="form-control" name="email" required>

                                            <label for="recipient-name" class="col-form-label">Telepon</label>
                                            <input type="number" class="form-control" name="pekerjaan" required>

                                        </div>
                                    </div>
                                </div>
                                </div>


                            </form>
                            
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

            </div>
                
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!-- Modal Data-->
<?php foreach ($koperasi as $key => $value) : ?> <!-- ambil dari koperasiController.php -->

    <div class="modal fade" id="dataModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i><b> Profil Koperasi</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body">    

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= base_url() ?>/ava.png" id="preview" class="img-thumbnail" width="150px">
                                        </div>
                                        <div class="col-md-8">
                                        <label for="recipient-name" class="col-form-label text"><b>Nama Koperasi</b></label>
                                            <h4><?= $value->nama_koperasi ?></h4>
                                            <label for="recipient-name" class="col-form-label"><b>Jumlah Anggota</b></label>
                                            <h4>----</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"><b>Lokasi Koperasi</b></label>
                                    <h4>----</h4>
                                    <label for="recipient-name" class="col-form-label"><b>Didirikan Pada</b></label>
                                    <h4>----</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <button type="button" data-toggle="modal" data-target="#lihatModal<?php echo $value->id; ?>" class="btn btn-white btn-icon-split" data-dismiss="modal">
                                <span class="text">Laporan</span></button>
                                <button type="button" class="btn btn-success btn-icon-split">
                                <span class="text"><b>Data</b></span></button>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h4><b>Data Koperasi</b></h4><br>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="recipient-name" class="col-form-label">Nama Koperasi</label><br>
                                        <label for="recipient-name" class="col-form-label">Lokasi</label><br>
                                        <label for="recipient-name" class="col-form-label">AD/ART</label><br>
                                        <label for="recipient-name" class="col-form-label">Alamat</label><br>
                                        <label for="recipient-name" class="col-form-label">Email Koperasi</label><br>
                                        <label for="recipient-name" class="col-form-label">Telepon</label><br>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                        <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                        <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                        <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                        <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                        <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h4 class="text-white"><b>.</b></h4><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label"><b>Pengurus</b></label><br>
                                            <label for="recipient-name" class="col-form-label">Jabatan 1</label><br>
                                            <label for="recipient-name" class="col-form-label">Jabatan 2</label><br>
                                            <label for="recipient-name" class="col-form-label">Jabatan 3</label><br>
                                            <label for="recipient-name" class="col-form-label">Jabatan 4</label><br>
                                            <label for="recipient-name" class="col-form-label">Jabatan 5</label><br>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label text-white"><b>.</b></label><br>  
                                            <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>----</b></label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" data-toggle="modal" data-target="#editModal<?php echo $value->id; ?>" class="btn btn-success btn-icon-split" data-dismiss="modal">
                        <span class="icon text-white-50">
                                <i class="fas fa-pencil-alt"></i>
                            </span>
                        <span class="text"><b>Edit</b></span></button>

                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-print"></i>
                            </span>
                            <span class="text">Cetak Data</span></button>
                    </div>

            </div>
                
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Lihat-->
<?php foreach ($koperasi as $key => $value) : ?> <!-- ambil dari koperasiController.php -->

    <div class="modal fade" id="lihatModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i><b> Profil Penanggung Jawab </b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                    <div class="modal-body">    

                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= base_url() ?>/ava.png" id="preview" class="img-thumbnail" width="150px">
                                        </div>
                                        <div class="col-md-8">
                                        <label for="recipient-name" class="col-form-label text"><b>Nama Koperasi</b></label>
                                            <h4><?= $value->nama_koperasi ?></h4>
                                            <label for="recipient-name" class="col-form-label"><b>Jumlah Anggota</b></label>
                                            <h4>----</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"><b>Lokasi Koperasi</b></label>
                                    <h4>----</h4>
                                    <label for="recipient-name" class="col-form-label"><b>Didirikan Pada</b></label>
                                    <h4>----</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <button type="button" class="btn btn-success btn-icon-split">
                                <span class="text">Laporan</span></button>
                                <button type="button" data-toggle="modal" data-target="#dataModal<?php echo $value->id; ?>" class="btn btn-white btn-icon-split" data-dismiss="modal">
                                <span class="text"><b>Data</b></span></button>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"><b>Pinjaman</b></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Saldo Akhir Pinjaman</label><br>
                                            <label for="recipient-name" class="col-form-label">Pinjaman Bulan Ini</label><br><br>
                                            <label for="recipient-name" class="col-form-label"><b>Simpanan</b></label><br>
                                            <label for="recipient-name" class="col-form-label">Saldo Akhir Simpanan</label><br>
                                            <label for="recipient-name" class="col-form-label">Simpanan Bulan Lalu</label><br>
                                            <label for="recipient-name" class="col-form-label">Kanaikan</label><br>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label"><b>Rp. ----</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>Rp. ----</b></label><br><br>
                                            <label for="recipient-name" class="col-form-label text-white"><b>.</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>Rp. ----</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>Rp. ----</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>Rp. ---- (0%)</b></label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"><b>Perhitungan Hasil Usaha</b></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Total Pendapatan</label><br>
                                            <label for="recipient-name" class="col-form-label">PHU s/d Bulan Ini</label><br><br>
                                            <label for="recipient-name" class="col-form-label"><b>Aset</b></label><br>
                                            <label for="recipient-name" class="col-form-label">Desember</label><br>
                                            <label for="recipient-name" class="col-form-label">November</label><br>
                                            <label for="recipient-name" class="col-form-label">Kenaikan</label><br>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br><br>
                                            <label for="recipient-name" class="col-form-label text-white"><b>.</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-download"></i>
                            </span>
                            <span class="text">Download Laporan</span></button>
                        </div>

                        

            </div>
                
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection() ?>


