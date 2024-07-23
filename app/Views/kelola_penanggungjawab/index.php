<?= $this->extend('layout/default') ?> <!-- panggil default.php -->

<?= $this->section('title') ?>
<title>Kelola Penanggung Jawab</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="div" hidden><?= $i = 1 ?></div>

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"> <i class="fas fa-user"></i> Data Penanggung Jawab</h1>

    <!-- ALERT -->
    <div class="swal" data-swal="<?= session()->getFlashdata('success'); ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 text-right">
            <a href="" data-toggle="modal" data-target="#tambahModal" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Penanggung Jawab</span>
            </a>
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
                            <th class="text-center text-dark">No ID Anggota</th>
                            <th class="text-center text-dark">Nama Penanggung Jawab</th>
                            <th class="text-center text-dark">Total Simpanan</th>
                            <th class="text-center text-dark">Total Pinjaman</th>
                            <th class="text-center text-dark">Jumlah Anggota</th>
                            <th class="text-center text-dark">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($penanggungjawab as $key => $value) : ?> <!-- ambil dari penanggungjawabController.php -->
                            <tr>
                                <td class="text-center"><?= $i++ ?></td>
                                <td><?=$value->id_anggota?></td>
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
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i><b> Tambah Penanggung Jawab</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-anggota') ?>" method="post" autocomplete="off">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></i> <b>Data Penanggung Jawab</b></h5>
                </div>
                <div class="modal-body">    

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Foto Profil</label>

                                <input type="file" name="foto_profil" class="file" accept="image/*" hidden>
                                <div class="input-group my-3">
                                    <input type="text" class="form-control" disabled placeholder="Upload File" id="file" hidden>
                                    <div class="input-group-append">
                                        <div class="ml-2 col-sm-6">
                                            <img src="<?= base_url() ?>/ava.png" id="preview" class="img-thumbnail">
                                        </div>
                                        <button type="button" class="browse btn btn-success">Upload</button>
                                    </div>
                                </div>

                            <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" required>

                            <label for="recipient-name" class="col-form-label">NIK</label>
                            <input type="number" class="form-control" name="nik" required>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="recipient-name" class="col-form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" required>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-laki <i class="fas fa-male text-primary"></i>
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan <i class="fas fa-female text-danger"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
                            
                            <label for="recipient-name" class="col-form-label">Status Perkawinan</label>
                            <select class="input-large form-control" name="status_perkawinan" required>
                            <option value="" readonly="">Status Perkawinan</option>

                                <option value="Lajang">Lajang</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Orang Tua Tunggal">Orang Tua Tunggal</option>

                            </select>

                            <label for="recipient-name" class="col-form-label">Telepon</label>
                            <input type="number" class="form-control" name="telepon" required>

                            <label for="recipient-name" class="col-form-label">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" required>

                            <label for="recipient-name" class="col-form-label">Foto KTP/ID</label>
                            <input type="file" class="form-control" name="foto_ktp" accept="image/*" required>
                        </div>
                    </div>
                </div>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></i> <b>Koperasi Penanggung Jawab</b></h5>
                </div>
                <div class="modal-body">

                    <label for="recipient-name" class="col-form-label">Koperasi</label>
                    <select class="input-large form-control" name="status_perkawinan" required>
                        <option value="" readonly="">Pilih Koperasi</option>
                        <option value="0">Null</option>
                        
                    </select>
                </div>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></i> <b>Akun Penanggung Jawab</b></h5>
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
<?php foreach ($penanggungjawab as $key => $value) : ?> <!-- ambil dari penanggungjawabController.php -->
<div class="modal fade" id="editModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i><b> Edit Profil Penanggung Jawab</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= site_url('kelola-penanggungjawab/' . $value->id) ?>" method="post" autocomplete="off">

                <div class="modal-body">    

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            
                            <label for="recipient-name" class="col-form-label">Foto Profil</label>
                            <input type="file" class="form-control" name="foto_profil2" accept="image/*" required>

                            <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" required>

                            <label for="recipient-name" class="col-form-label">NIK</label>
                            <input type="number" class="form-control" name="nik" required>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="recipient-name" class="col-form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempat_lahir" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="recipient-name" class="col-form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" required>
                                </div>
                            </div><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="recipient-name" class="col-form-label">Jenis Kelamin</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Laki-laki <i class="fas fa-male text-primary"></i>
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Perempuan <i class="fas fa-female text-danger"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
                            
                            <label for="recipient-name" class="col-form-label">Status Perkawinan</label>
                            <select class="input-large form-control" name="status_perkawinan" required>
                            <option value="" readonly="">Status Perkawinan</option>

                                <option value="Lajang">Lajang</option>
                                <option value="Menikah">Menikah</option>
                                <option value="Orang Tua Tunggal">Orang Tua Tunggal</option>

                            </select>

                            <label for="recipient-name" class="col-form-label">Telepon</label>
                            <input type="number" class="form-control" name="telepon" required>

                            <label for="recipient-name" class="col-form-label">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" required>

                            <label for="recipient-name" class="col-form-label">Foto KTP/ID</label>
                            <input type="file" class="form-control" name="foto_ktp" accept="image/*" required>
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
<?php endforeach; ?>


<!-- Modal Data-->
<?php foreach ($penanggungjawab as $key => $value) : ?> <!-- ambil dari penanggungjawabController.php -->

    <div class="modal fade" id="dataModal<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i><b> Profil Penanggung Jawab</b></h5>
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
                                        <label for="recipient-name" class="col-form-label text"><b>Nama Penanggung Jawab</b></label>
                                            <h4>----</h4>
                                            <label for="recipient-name" class="col-form-label"><b>No REK</b></label>
                                            <h4><?= $value->id_anggota ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"><b>NIK</b></label>
                                    <h4>----</h4>
                                    <label for="recipient-name" class="col-form-label"><b>Koperasi</b></label>
                                    <h4>----</h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                <button type="button" data-toggle="modal" data-target="#lihatModal<?php echo $value->id; ?>" class="btn btn-white btn-icon-split" data-dismiss="modal">
                                <span class="text">Laporan</span></button>
                                <button type="button" class="btn btn-success btn-icon-split" data-dismiss="modal">
                                <span class="text"><b>Data</b></span></button>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <h4><b>Data Penanggung Jawab</b></h4><br>
                                <div class="row">
                                    <div class="col-md-7">
                                        <label for="recipient-name" class="col-form-label">Nama Penanggung Jawab</label><br>
                                        <label for="recipient-name" class="col-form-label">NIK</label><br>
                                        <label for="recipient-name" class="col-form-label">Tempat, Tanggal Lahir</label><br>
                                        <label for="recipient-name" class="col-form-label">Jenis Kelamin</label><br>
                                        <label for="recipient-name" class="col-form-label">Alamat</label><br>
                                    </div>
                                    <div class="col-md-5">
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
                                            <label for="recipient-name" class="col-form-label">Status Perkawinan</label><br>
                                            <label for="recipient-name" class="col-form-label">Telepon</label><br>
                                            <label for="recipient-name" class="col-form-label">Pekerjaan</label><br>
                                        </div>
                                        <div class="col-md-6">
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
                            <span class="text">Cetak  Kartu</span></button>
                    </div>

            </div>
                
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Lihat-->
<?php foreach ($penanggungjawab as $key => $value) : ?> <!-- ambil dari penanggungjawabController.php -->

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
                                        <label for="recipient-name" class="col-form-label text"><b>Nama Anggota</b></label>
                                            <h4>----</h4>
                                            <label for="recipient-name" class="col-form-label"><b>No REK</b></label>
                                            <h4>----</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label"><b>NIK</b></label>
                                    <h4>----</h4>
                                    <label for="recipient-name" class="col-form-label"><b>Koperasi</b></label>
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
                                    <label for="recipient-name" class="col-form-label"><b>Keterangan</b></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label">Saldo Akhir SIHARI</label><br>
                                            <label for="recipient-name" class="col-form-label">Saldo Akhir THR</label><br>
                                            <label for="recipient-name" class="col-form-label">Saldo Akhir PERMATA</label><br>
                                            <label for="recipient-name" class="col-form-label">Saldo Akhir PIJAR</label><br><br>
                                            <label for="recipient-name" class="col-form-label">Jasa</label><br>
                                            <label for="recipient-name" class="col-form-label">Fee</label><br>
                                            <label for="recipient-name" class="col-form-label">Jumlah Anggota</label><br>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br>
                                            <label for="recipient-name" class="col-form-label"><b>0</b></label><br><br>
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


