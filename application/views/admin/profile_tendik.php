<body>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>admin">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
            <?= $this->session->flashdata('save'); ?>
        </div><!-- End Page Title -->

        <!-- #main -->
        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="<?= base_url(); ?>assets/img/profile-img1.png" alt="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" class="rounded-circle">
                            <h2><?= $tendik['nama']; ?></h2>
                            <h3><?= $tendik['nama_jabatan']; ?></h3>'</h3>

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
                                        <div class="col-lg-9 col-md-8"><?= $tendik['nama'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIK</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['nik']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">NIDN</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['no_pegawai']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">TTL</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['tempat-lahir']; ?>, <?= date('d F Y', strtotime($tendik['tanggal_lahir'])); ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Kenegaraan</div>
                                        <div class="col-lg-9 col-md-8">Indonesia</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                                        <div class="col-lg-9 col-md-8">
                                            <?php
                                                if ($tendik['jenis_kelamin'] == 'L'){
                                                    echo "Laki-Laki";
                                                } else if ($tendik['jenis_kelamin'] == 'P'){
                                                    echo "Perempuan";
                                                }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Agama</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['agama']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Unit</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['nama_unit']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Jabatan</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['nama_jabatan']; ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Pangkat/Golongan</div>
                                        <div class="col-lg-9 col-md-8">3C</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['alamat'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['kontak'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?= $tendik['email'] ?></div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <?= form_open('admin/fungsi/aksiEditProfileTendik') ?>
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
                                            <input name="nama" type="text" class="form-control" id="nama" value="<?= $tendik['nama']; ?>">
                                        </div>
                                    </div>
                                        <input type="hidden" name="no_pegawai" id="no_pegawai" value="<?= $tendik['no_pegawai'];?>">
                                    <div class="row mb-3">
                                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">NIP</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="id_pegawai" type="text" class="form-control" id="id_pegawai" value="<?= $tendik['id_pegawai']; ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="nik" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="nik" type="text" class="form-control" id="nik" value="<?= $tendik['nik']; ?>" maxlength="16">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="ttl" class="col-md-4 col-lg-3 col-form-label">TTL</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" value="<?= $tendik['tempat-lahir']; ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="ttl" class="col-md-4 col-lg-3 col-form-label">TTL</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" value="<?= $tendik['tanggal_lahir']; ?>">
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
                                            <select name="jenis_kelamin" type="text" class="form-select" id="jenis_kelamin">
                                                <?php
                                                    if ($tendik['jenis_kelamin'] == 'L'){
                                                        echo "<option disabled selected>Laki - Laki</option>";
                                                    } else if ($tendik['jenis_kelamin'] == 'P'){
                                                        echo "<option disabled selected>Perempuan</option>";
                                                    }
                                                ?>
                                                <option value="L">Laki - Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="agama" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select name="agama" type="text" class="form-select" id="agama">
                                                <option selected value="<?= $tendik['agama'];?>"><?= $tendik['agama'];?></option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Protestan">Protestan</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="prodi" class="col-md-4 col-lg-3 col-form-label">Dosen Prodi</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select name="unit" type="text" class="form-select" id="unit">
                                                <option selected value="<?= $tendik['id_unit'];?>"><?= $tendik['nama_unit'];?></option>
                                                <?php foreach ($units as $unit) : ?>
                                                    <option value="<?= $unit['id_unit'];?>"><?= $unit['nama_unit'];?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                                        <div class="col-md-8 col-lg-9">
                                            <select name="jabatan" type="text" class="form-select" id="jabatan">
                                                <option value="<?= $tendik['id_jabatan'];?>"><?= $tendik['nama_jabatan'];?></option>
                                                <?php foreach ($jabatans as $listjab) : ?>
                                                    <option value="<?= $listjab['id_jabatan'];?>"><?= $listjab['nama_jabatan'];?></option>
                                                <?php endforeach; ?>
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
                                            <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $tendik['alamat']; ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="Phone" value="<?= $tendik['kontak']; ?>">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="Email" value="<?= $tendik['email']; ?>">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal-Save">
                                            Save changes
                                        </button>
                                    </div>

                                    <!-- End Profile Edit Form -->
                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal-Save" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Save</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Yakin Akan Menggantinya ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-primary">Yakin</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
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
                                                                            <span class="time"><?= $rekpen['tahun_lulus']; ?></span>
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