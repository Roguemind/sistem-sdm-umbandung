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
                            <h2><?= $akun['nama']; ?></h2>
                            <h3>Kepala Bagian Prodi</h3>

                            <div class="social-links mt-2">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Profile</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#rekam-pendidikan">Rekam Pendidikan</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dokumen-kerja">Dokumen Kerja</button>
                                </li>

                            </ul>


                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
                                    <!-- Profile Edit Form -->
                                    <form method="POST" action="<?= base_url() ?>admin/pegawai/update">
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
                                            <label for="inputGelarDepan" class="col-md-4 col-lg-3 col-form-label">Gelar Depan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="inputGelarDepan" name="inputGelarDepan" class="form-select" style="width: 100%">
                                                    <option selected disabled>Pilih gelar depan...</option>
                                                    <option value="Prof." <?php echo ($pegawai->gelar_depan == 'Prof.' ? 'selected' : ''); ?>>Prof.</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNamaLengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="inputNamaLengkap" id="inputNamaLengkap" value="<?= $pegawai->nama; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputGelarBelakang" class="col-md-4 col-lg-3 col-form-label">Gelar Belakang</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="inputGelarBelakang" name="inputGelarBelakang" class="form-select" style="width: 100%">
                                                    <option selected disabled>Pilih gelar belakang...</option>
                                                    <option value="M.Ag" <?php echo ($pegawai->gelar_belakang == 'M.Ag' ? 'selected' : ''); ?>>M.Ag</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNik" class="col-md-4 col-lg-3 col-form-label">No Induk Keluarga</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control <?php echo form_error('inputNik') ? 'is-invalid' : '' ?>" name="inputNik" id="inputNik" value="<?php echo $pegawai->nik; ?>">
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('inputNik') ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputTempatLahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="inputTempatLahir" id="inputTempatLahir" value="<?php echo $pegawai->tempat_lahir; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputTanggalLahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="date" class="form-control" name="inputTanggalLahir" id="inputTanggalLahir" value="<?php echo $pegawai->tanggal_lahir; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="negara" class="col-md-4 col-lg-3 col-form-label">Kenegaraan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="negara" type="text" class="form-control" id="negara" value="Indonesia">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputJenisKelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="inputJenisKelamin" class="form-select" style="width: 100%">
                                                    <option selected disabled>....</option>
                                                    <option value="L" <?php echo ($pegawai->jenis_kelamin == 'L' ? 'selected' : ''); ?>>Laki-laki</option>
                                                    <option value="P" <?php echo ($pegawai->jenis_kelamin == 'P' ? 'selected' : ''); ?>>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputAgama" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="inputAgama" class="form-select" style="width: 100%">
                                                    <option selected disabled>....</option>
                                                    <option value="Islam" <?php echo ($pegawai->agama == 'Islam' ? 'selected' : ''); ?>>Islam</option>
                                                    <option value="Kristen" <?php echo ($pegawai->agama == 'Kristen' ? 'selected' : ''); ?>>Kristen</option>
                                                    <option value="Budha" <?php echo ($pegawai->agama == 'Budha' ? 'selected' : ''); ?>>Budha</option>
                                                    <option value="Hindu" <?php echo ($pegawai->agama == 'Hindu' ? 'selected' : ''); ?>>Hindu</option>
                                                    <option value="Konghucu" <?php echo ($pegawai->agama == 'Konghucu' ? 'selected' : ''); ?>>Konghucu</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputSetatusPernikahan" class="col-md-4 col-lg-3 col-form-label">Status Pernikahan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="inputSetatusPernikahan" class="form-select" style="width: 100%">
                                                    <option selected disabled>....</option>
                                                    <option value="Lajang" <?php echo ($pegawai->status_pernikahan == 'Lajang' ? 'selected' : ''); ?>>Lajang</option>
                                                    <option value="Menikah" <?php echo ($pegawai->status_pernikahan == 'Menikah' ? 'selected' : ''); ?>>Menikah</option>
                                                    <option value="Duda/Janda" <?php echo ($pegawai->status_pernikahan == 'Duda/Janda' ? 'selected' : ''); ?>>Duda/Janda</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNoPegawai" class="col-md-4 col-lg-3 col-form-label">No Pegawai</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="inputNoPegawai" id="inputNoPegawai" value="<?php echo $pegawai->id_pegawai; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputpendidikan" class="col-md-4 col-lg-3 col-form-label">Pendidikan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="inputpendidikan" class="form-select" style="width: 100%">
                                                    <option selected disabled>....</option>
                                                    <option value="S1" <?php echo ($pegawai->pendidikan == 'S1' ? 'selected' : ''); ?>>S1</option>
                                                    <option value="S2" <?php echo ($pegawai->pendidikan == 'S2' ? 'selected' : ''); ?>>S2</option>
                                                    <option value="S3" <?php echo ($pegawai->pendidikan == 'S3' ? 'selected' : ''); ?>>S3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNoSkPegawai" class="col-md-4 col-lg-3 col-form-label">No SK</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="inputNoSkPegawai" value="<?php echo $pegawai->no_sk_pegawai; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNIDN" class="col-md-4 col-lg-3 col-form-label">NIDN</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="inputNIDN" type="text" class="form-control" id="inputNIDN">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="prodi" class="col-md-4 col-lg-3 col-form-label">Fakultas</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="unit_kerja" class="form-select" id="unit_kerja">
                                                    <option selected disabled>....</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputProgramStudi" class="col-md-4 col-lg-3 col-form-label">Program Studi</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="inputProgramStudi" id="inputProgramStudi" class="form-select" style="width: 100%">
                                                    <option selected disabled>....</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <select name="jabatan" class="form-select" id="jabatan">
                                                    <option selected disabled>....</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="pangkat" class="col-md-4 col-lg-3 col-form-label">Pangkat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="pangkat" type="text" class="form-control" id="pangkat">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputTmtPegawai" class="col-md-4 col-lg-3 col-form-label">Terhitung Mulai Tanggal</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="inputTmtPegawai" value="<?php echo $pegawai->tmt_pegawai; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputAlamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea type="text" class="form-control" name="inputAlamat" id="inputAlamat"><?php echo $pegawai->alamat; ?></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Kontak" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="inputKontak" value="<?php echo $pegawai->kontak; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input type="text" class="form-control" name="inputEmail" value="<?php echo $pegawai->email; ?>">
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Edit</button>
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
                                                    <h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
                                                    <div class="experience-box">
                                                        <ul class="experience-list">
                                                            <li>
                                                                <div class="experience-user">
                                                                    <div class="before-circle"></div>
                                                                </div>
                                                                <div class="experience-content">
                                                                    <div class="timeline-content">
                                                                        <a href="#/" class="name">International College of Arts and Science (UG)</a>
                                                                        <div>Bsc Computer Science</div>
                                                                        <span class="time">2000 - 2003</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="experience-user">
                                                                    <div class="before-circle"></div>
                                                                </div>
                                                                <div class="experience-content">
                                                                    <div class="timeline-content">
                                                                        <a href="#/" class="name">International College of Arts and Science (PG)</a>
                                                                        <div>Msc Computer Science</div>
                                                                        <span class="time">2000 - 2003</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End settings Form -->
                                        <div class="text-center">
                                            <a href="" class="btn btn-primary">Tambah Pendidikan</a>
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