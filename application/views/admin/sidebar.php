<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?= $title == "dashboard" ? '' : 'collapsed' ?>" href="<?= base_url(); ?>admin">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a href="<?= base_url(); ?>admin/pegawai" class="nav-link <?= $title == "pegawai" ? '' : 'collapsed' ?>">
                <i class="bi bi-person"></i>
                <span>Pegawai</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link <?= ($title == "dosen") || ($title == "tendik") ? '' : 'collapsed' ?>" data-bs-target="#Pegawai" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Pegawai</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Pegawai" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url(); ?>admin/dosen" class="<?= $title == "dosen" ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>admin/tendik" class="<?= $title == "tendik" ? 'active' : '' ?>">
                        <i class="bi bi-circle"></i><span>Tendik</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Kinerja</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Pendidikan</span>
                    </a>
                </li>
                <li>
                    <a href="charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>Penelitian</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>Pengabdian</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>Penunjang</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>AIK</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Pengajuan" data-bs-toggle="collapse" href="#">
                <i class="bx bx-file-blank"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Pengajuan" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>NIDN</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>NIP</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin/fungsi/tampiljad">
                        <i class="bi bi-circle"></i><span>JAD</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin/fungsi/melihatCuti">
                        <i class="bi bi-circle"></i><span>Cuti</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>admin/fungsi/melihatlembur">
                        <i class="bi bi-circle"></i><span>Lembur</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>BPJS</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#Arsip" data-bs-toggle="collapse">
                <i class="bx bx-folder-open"></i><span>Arsip</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="Arsip" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url(); ?>admin/arsip/dosen">
                        <i class="bi bi-circle"></i><span>Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>admin/arsip/tendik">
                        <i class="bi bi-circle"></i><span>Tendik</span>
                    </a>
                </li>
            </ul>
        </li>
        <a href="<?= base_url(); ?>" class="nav-link collapsed">
            <i class="bi bi-person"></i>
            <span>Unit</span>
        </a>
        <a href="<?= base_url(); ?>" class="nav-link collapsed">
            <i class="bi bi-person"></i>
            <span>Fakultas</span>
        </a>


        <!-- End Blank Page Nav -->

</aside><!-- End Sidebar-->