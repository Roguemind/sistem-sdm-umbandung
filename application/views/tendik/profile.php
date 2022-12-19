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
                                <?php if ($akun['nama_depan'] != NULL) {
                                    echo $akun['nama_depan'] . ' ';
                                }
                                if ($akun['nama_tengah'] != NULL) {
                                    echo $akun['nama_tengah'] . ' ';
                                }
                                echo $akun['nama_belakang'];
                                ?>
                            </h2>
                            <h3 class="text-center"><?= $akun['nama_jabatan'] . ' ' . $akun['nama_unit'] ?></h3>
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
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
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
                                            <?php if ($akun['nama_depan'] != NULL) {
                                                echo $akun['nama_depan'] . ' ';
                                            }
                                            if ($akun['nama_tengah'] != NULL) {
                                                echo $akun['nama_tengah'] . ' ';
                                            }
                                            echo $akun['nama_belakang'];
                                            ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIK</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['nik']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIDN</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['id_pegawai']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">TTL</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['tempat_lahir']; ?>, <?= date('d F Y', strtotime($akun['tanggal_lahir'])); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Kenegaraan</div>
                                        <div class="col-lg-9 col-md-8">Indonesia</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                        <div class="col-lg-9 col-md-8">
                                            <?php
                                            if ($akun['jenis_kelamin'] == 'L') {
                                                echo "Laki-Laki";
                                            } else if ($akun['jenis_kelamin'] == 'P') {
                                                echo "Perempuan";
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Agama</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['agama']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Unit Kerja</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['nama_unit']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jabatan</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['nama_jabatan']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Pangkat/Golongan</div>
                                        <div class="col-lg-9 col-md-8">3C</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['alamat'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Telepon</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['kontak'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['email_pribadi'] ?></div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form method="post" action="<?php echo base_url(); ?>tendik/saveprofile">
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="<?= base_url(); ?>assets/img/profile-img1.png" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Depan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="namadpn" type="text" class="form-control" id="namadpn" value="<?= $akun['nama_depan']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Tengah</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="namatgh" type="text" class="form-control" id="namatgh" value="<?= $akun['nama_tengah']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Belakang</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="namablkg" type="text" class="form-control" id="namablkg" value="<?= $akun['nama_belakang']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nik" type="text" class="form-control" id="nik" value="<?= $akun['nik']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nidn" class="col-md-4 col-lg-3 col-form-label">NIDN</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nidn" type="text" class="form-control" id="nidn" value="<?= $akun['id_pegawai']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="ttl" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" value="<?= $akun['tempat_lahir']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="ttl" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" value="<?= $akun['tanggal_lahir']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="negara" class="col-md-4 col-lg-3 col-form-label">Kenegaraan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="negara" type="text" class="form-control" id="negara" value="Indonesia">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="jk" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="jeniskelamin" type="text" class="form-control" id="jeniskelamin" value="<?= $akun['jenis_kelamin']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="agama" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="agama" type="text" class="form-control" id="agama" value="<?= $akun['agama']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="unitkerja" class="col-md-4 col-lg-3 col-form-label">Unit Kerja</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="unit_kerja" class="form-select" id="unit_kerja">
                                                    <option default value="<?= $akun['id_unit']; ?>" readonly> <?= $akun['nama_unit']; ?></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="jabatan" class="form-select" id="jabatan">
                                                    <option default value="<?= $akun['id_jabatan']; ?>" readonly> <?= $akun['nama_jabatan']; ?></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="pangkat" class="col-md-4 col-lg-3 col-form-label">Pangkat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="pangkat" type="text" class="form-control" id="pangkat" value="3C">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $akun['alamat']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="kontak" type="text" class="form-control" id="kontak" value="<?= $akun['kontak']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email" value="<?= $akun['email_pribadi']; ?>">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- End Profile Edit Form -->

                                </div>

                                <div class="tab-pane fade pt-3" id="rekam-pendidikan">
                                    <!-- rekam pendidikan -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex mb-4">
                                            <div class="card profile-box flex-fill">
                                                <div class="card-body">
                                                    <h3 class="card-title">Rekam Pendidikan<a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
                                                    <div class="experience-box">
                                                        <ul class="experience-list">
                                                            <?php foreach ($rekpens as $rekpen) : ?>
                                                                <li>
                                                                    <div class="experience-user">
                                                                        <div class="before-circle"></div>
                                                                    </div>
                                                                    <div class="experience-content">
                                                                        <div class="timeline-content">
                                                                            <span><?= $rekpen['nama_universitas']; ?></span>
                                                                            <div><?= $rekpen['jenjang']; ?> - <?= $rekpen['jurusan']; ?></div>
                                                                            <span class="time"><?= $rekpen['tahun_lulus']; ?></span><br>
                                                                            <span><?= $rekpen['nama_gelar']; ?>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <br>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End settings Form -->
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