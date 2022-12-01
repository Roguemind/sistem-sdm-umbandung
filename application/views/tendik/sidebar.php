<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= base_url(); ?>tendik/dashboard">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <a href="<?= base_url(); ?>tendik/profile" class="nav-link collapsed">
            <i class="bi bi-person"></i>
            <span>Profile</span>
        </a>
        <!-- End Prof -->
        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url(); ?>tendik/dashboard">
                        <i class="bi bi-grid"></i>
                        <span>Dashboard</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <a href="<?= base_url(); ?>tendik/profile" class="nav-link collapsed">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
                <!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-nav1" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Kinerja</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="charts-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
                    <a class="nav-link collapsed" data-bs-target="#charts-nav2" data-bs-toggle="collapse" href="#">
                        <i class="bx bx-file-blank"></i><span>Pengajuan</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="charts-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle"></i><span>NIP</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>tendik/fungsi/tambahlembur">
                                <i class="bi bi-circle"></i><span>Lembur</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>tendik/pengajuan/pengajuanCuti">
                                <i class="bi bi-circle"></i><span>Cuti</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="pages-blank.html">
                        <i class="bx bx-folder-open"></i>
                        <span>Berkas</span>
                    </a>
                </li>
                <!-- End Blank Page Nav -->

        </aside><!-- End Sidebar-->ile Page Nav -->


        <!-- End Charts Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bx bx-folder-open"></i>
                <span>Berkas</span>
            </a>
        </li>
        <!-- End Blank Page Nav -->

</aside><!-- End Sidebar-->