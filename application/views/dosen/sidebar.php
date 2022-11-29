<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
<<<<<<< Updated upstream
            <a class="nav-link " href="<?= base_url('dosen/dashboard'); ?>">
=======
            <a class="nav-link " href="<?=base_url(); ?>dosen">
>>>>>>> Stashed changes
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

<<<<<<< Updated upstream
        <a href="<?= base_url(); ?>dosen/profile" class="nav-link collapsed">
=======
        <a href="<?= base_url();?>dosen/profile/<?=$akun['nik'];?>" class="nav-link collapsed">
>>>>>>> Stashed changes
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Kinerja</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Pengajaran</span>
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
                        <i class="bi bi-circle"></i><span>AIK</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav2" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Pengajuan/Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>JAD</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('dosen/fungsi/cuti'); ?>">
                        <i class="bi bi-circle"></i><span>Cuti</span>
                    </a>
                </li>
                <li>
                    <a href="charts-echarts.html">
                        <i class="bi bi-circle"></i><span>BPJS</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Lembur</span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('dosen/pengajuan/melihatSk'); ?>">
                <i class="bx bx-folder-open"></i>
                <span>Berkas</span>
            </a>
        </li>
        <!-- End Blank Page Nav -->

</aside><!-- End Sidebar-->