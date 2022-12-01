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
                                        <div class="col-lg-9 col-md-8"><?= $akun['nama'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIK</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['id_pegawai'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIDN</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['no_pegawai'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">TTL</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['tempat-lahir'];?>, <?= $akun['tanggal_lahir'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Kenegaraan</div>
                                        <div class="col-lg-9 col-md-8">Indonesia</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['jenis_kelamin'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Agama</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['agama'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Unit Kerja</div>
                                        <div class="col-lg-9 col-md-8"><?= $unit['nama_unit']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jabatan</div>
                                        <div class="col-lg-9 col-md-8"><?= $jabatan['nama_jabatan']; ?></div>
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
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['kontak'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?= $akun['email'] ?></div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form>
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
                                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="fullName" type="text" class="form-control" id="fullName" value="Eleonora">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nik" type="text" class="form-control" id="nik" value="32052798078009">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="nidn" class="col-md-4 col-lg-3 col-form-label">NIDN</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="nidn" type="text" class="form-control" id="nidn" value="200102045">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="ttl" class="col-md-4 col-lg-3 col-form-label">TTL</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="ttl" type="text" class="form-control" id="ttl" value="Bandung, 09 September 2001">
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
                                                <input name="jk" type="text" class="form-control" id="jk" value="Perempuan">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="agama" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="agama" type="text" class="form-control" id="agama" value="Islam">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="prodi" class="col-md-4 col-lg-3 col-form-label">Dosen Prodi</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="prodi" type="text" class="form-control" id="prodi" value="Teknik Informatika">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="jabatan" type="text" class="form-control" id="jabatan" value="Kepala Bagian Prodi">
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
                                                <input name="alamat" type="text" class="form-control" id="alamat" value="Jl. Ciganitri No. 28, Ds. Cipagalo, Kec. Bojongsoang, Bandung, 40288">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone" value="(+62) 821 1820 4968">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email" value="eleonora@example.com">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
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