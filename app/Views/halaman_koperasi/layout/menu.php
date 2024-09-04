 
<li class="nav-item">
    <a class="nav-link" href="<?= site_url('dashboardKoperasi') ?>">
        <i class="fas fa-fw fa-th-large  text-success"></i>
        <b class="text-dark">Dashboard</b></a>
</li>
<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-users text-success"></i>
                    <b class="text-dark">Data Anggota</b>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-success py-2 collapse-inner rounded">

                        <a class="collapse-item text-white" href="<?= site_url('kelola-anggota') ?>">Anggota</a>
                        <a class="collapse-item text-white" href="<?= site_url('kelola-penanggungjawab') ?>">Penanggung Jawab</a>
                        
                            </div  >
                </div>
</li>

<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-wallet text-success"></i>
                    <b class="text-dark">Arus KAS & Bank</b>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-success py-2 collapse-inner rounded">

                        <a class="collapse-item text-white" href="<?= site_url('kelola-uang-kas-drum-koperasi') ?>">Uang Kas</a>
                        <a class="collapse-item text-white" href="<?= site_url('kelola-uang-bank-drum-koperasi') ?>">Uang Bank</a>
                        
                            </div  >
                </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan-laba-rugi-koperasi') ?>">
        <i class="fas fa-fw fa-chart-line text-success"></i>
        <b class="text-dark">Laporan Laba Rugi</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan-bulanan-koperasi') ?>">
        <i class="fas fa-fw fa-poll text-success"></i>
        <b class="text-dark">Laporan Bulanan</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-map-signs  text-success"></i>
        <b class="text-dark">Neraca</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-book  text-success"></i>
        <b class="text-dark">Laporan Pinjaman</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-archive text-success"></i>
        <b class="text-dark">Laporan Simpanan</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-chart-pie text-success"></i>
        <b class="text-dark">Portofolio At Risk</b></a>
</li>



<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-book-open text-success"></i>
        <b class="text-dark">Jurnal Penyesuaian</b></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">