 
<li class="nav-item">
    <a class="nav-link" href="<?= site_url('dashboardAdmin') ?>">
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

                        <a class="collapse-item text-white" href="<?= site_url('kelola-koperasi') ?>">Koperasi</a>
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

                        <a class="collapse-item text-white" href="<?= site_url('kelola-uang-kas-drum') ?>">Uang Kas</a>
                        <a class="collapse-item text-white" href="<?= site_url('kelola-uang-bank-drum') ?>">Uang Bank</a>
                        
                            </div  >
                </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan-laba-rugi') ?>">
        <i class="fas fa-fw fa-chart-line text-success"></i>
        <b class="text-dark">Laporan Laba Rugi</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan-bulanan') ?>">
        <i class="fas fa-fw fa-poll text-success"></i>
        <b class="text-dark">Laporan Bulanan</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('neraca') ?>">
        <i class="fas fa-fw fa-map-signs  text-success"></i>
        <b class="text-dark">Neraca</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan-pinjaman') ?>">
        <i class="fas fa-fw fa-book  text-success"></i>
        <b class="text-dark">Laporan Pinjaman</b></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="<?= site_url('laporan-simpanan') ?>">
        <i class="fas fa-fw fa-archive text-success"></i>
        <b class="text-dark">Laporan Simpanan</b></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">