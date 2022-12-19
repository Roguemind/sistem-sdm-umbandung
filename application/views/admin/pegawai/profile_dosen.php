<body>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <!-- #main -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="<?= base_url(); ?>assets/img/profile-img1.png" alt="Profile" class="rounded-circle">
                            <h2>
                            <?php if ($dosen['nama_depan'] != NULL){
                                    echo $dosen['nama_depan'].' ';
                                } if ($dosen['nama_tengah'] != NULL){
                                    echo $dosen['nama_tengah'].' ';
                                }
                                echo $dosen['nama_belakang'];
                            ?>
                            </h2>
                            <?php if ($dosen['nama_jabatan'] == 'Dekan'){?>
                                <h3><?= $dosen['nama_jabatan'].' Fakultas '.$dosen['nama_unit']?></h3>
                            <?php } else {?>
                                <h3><?= $dosen['nama_jabatan'].' '.$dosen['nama_prodi']?></h3>
                            <?php } ?>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#rekam-pendidikan">Rekam Pendidikan</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dokumen-kerja">Dokumen Kerja</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">Informasi Pribadi</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                                        <div class="col-lg-9 col-md-8">
                                        <?php if ($dosen['nama_depan'] != NULL){
                                                echo $dosen['nama_depan'].' ';
                                            } if ($dosen['nama_tengah'] != NULL){
                                                echo $dosen['nama_tengah'].' ';
                                            }
                                            echo $dosen['nama_belakang'];
                                            ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIK</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['nik'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIDN</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['id_pegawai'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">TTL</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['tempat_lahir'];?>, <?= date('d F Y', strtotime($dosen['tanggal_lahir'])); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Kenegaraan</div>
                                        <div class="col-lg-9 col-md-8">Indonesia</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                        <div class="col-lg-9 col-md-8">
                                            <?php
                                                if ($dosen['jenis_kelamin'] == 'L'){
                                                    echo "Laki-Laki";
                                                } else if ($dosen['jenis_kelamin'] == 'P'){
                                                    echo "Perempuan";
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Agama</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['agama'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Fakultas</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['nama_unit']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Program Studi</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['nama_prodi']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jabatan</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['nama_jabatan']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Pangkat/Golongan</div>
                                        <div class="col-lg-9 col-md-8">3C</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['alamat'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Telepon</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['kontak'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?= $dosen['email_pribadi'] ?></div>
                                    </div>
                                </div>

                                </div>

                                <div class="tab-pane fade pt-3" id="rekam-pendidikan">
                                <!-- rekam pendidikan -->
                                <h3 class="card-title text-center">Rekam Pendidikan</h3>
                                <div class="row">
                                    <?php foreach ($rekpens as $rekpen) : ?>
                                        <div class="col-md-6 d-flex mb-4">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <div class="experience-box">
                                                        <div class="experience-user">
                                                            <div class="before-circle"></div>
                                                        </div>
                                                        <div class="experience-content mt-4">
                                                            <div class="timeline-content">
                                                                <h6 class="fw-bold"> Kampus </h6>
                                                                <p class=""><?= $rekpen['nama_universitas']; ?></p>
                                                                <h6 class="fw-bold"> Program Studi </h6>
                                                                <p class=""><?= $rekpen['jenjang']; ?> - <?= $rekpen['jurusan']; ?></p>
                                                                <p class="time">
                                                                    <span class="fw-bold">Tahun Lulus </span><?= $rekpen['tahun_lulus']; ?>
                                                                </p>
                                                                <p><span class="fw-bold">Gelar </span>
                                                                    <?= $rekpen['nama_gelar']; ?> </p>
                                                            </div>
                                                        </div>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End settings Form -->
                                    <?php endforeach; ?>
                                </div>

                                    </div>

                                    <div class="tab-pane fade pt-3" id="profile-change-password">
                                        <!-- Change Password Form -->
                                        <form>

                                            <div class="row mb-3">
                                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control" id="currentPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="newpassword" type="password" class="form-control" id="newPassword">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Change Password</button>
                                            </div>
                                        </form><!-- End Change Password Form -->

                                    </div>

                                </div><!-- End Bordered Tabs -->

                            </div>
                        </div>

                    </div>
                </div>
        </section>

    </main><!-- End #main -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>