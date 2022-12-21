<body>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>dosen">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
            <?= $this->session->flashdata('save'); ?>
        </div><!-- End Page Title -->

        <!-- #main -->
        <section class="section profile">
            <div>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div class="profile-card pt-4 d-flex flex-column align-items-center text-center">

                                <img src="<?= base_url(); ?>assets/img/profile-img1.png" alt="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" class="rounded-circle">
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
                                <h3 class=""><?= $akun['nama_jabatan'] . ' ' . $akun['nama_prodi'] ?></h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Ringkasan</h5>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">NIDN</div>
                                        <div class="col-lg-7 col-md-8"><?= $akun['id_pegawai']; ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label ">Nama Lengkap</div>
                                        <div class="col-lg-7 col-md-8">
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
                                        <div class="col-lg-5 col-md-4 label">Jenis Kelamin</div>
                                        <div class="col-lg-7 col-md-8">
                                            <?php if ($akun['jenis_kelamin'] == 'L') { ?>
                                                Laki - Laki
                                            <?php } else if ($akun['jenis_kelamin'] == 'P') { ?>
                                                Perempuan
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-4 label">Tempat, Tanggal Lahir</div>
                                        <div class="col-lg-7 col-md-8"><?= $akun['tempat_lahir']; ?>, <?= date('d F Y', strtotime($akun['tanggal_lahir'])); ?></div>
                                    </div>
                                    <div class="d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#ringkasan">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class=" body-card">

                            <h5 class="card-title text-center">Kependudukan</h5>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label ">NIK</div>
                                <div class="col-lg-7 col-md-8"><?= $akun['nik']; ?></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label ">Agama</div>
                                <div class="col-lg-7 col-md-8"><?= $akun['agama']; ?></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label ">Kenegaraan</div>
                                <div class="col-lg-7 col-md-8">Indonesia</div>
                                <div class="d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#kependudukan">
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class=" body-card">
                                <h5 class="card-title text-center">Alamat dan Kontak</h5>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Alamat</div>
                                    <div class="col-lg-7 col-md-8"><?= $akun['alamat'] ?></div>
                                </div>

                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Phone</div>
                                    <div class="col-lg-7 col-md-8"><?= $akun['kontak'] ?></div>
                                </div>

                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Email</div>
                                    <div class="col-lg-7 col-md-8"><?= $akun['email_pribadi'] ?></div>
                                    <div class="d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#alamatdankontak">
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class=" body-card">
                                <h5 class="card-title text-center">Bidang Keilmuan</h5>
                                <div class="row ms-4">
                                    <div class="col-lg-3 col-md-4 label">Fakultas</div>
                                    <div class="col-lg-9 col-md-8"><?= $akun['nama_unit']; ?></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-3 col-md-4 label">Jabatan</div>
                                    <div class="col-lg-9 col-md-8"><?= $akun['nama_jabatan']; ?></div>
                                    <div class="d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#bidangkeilmuan">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class=" body-card">
                                <h5 class="card-title text-center">Lain-lain</h5>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label ">NPWP</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label ">Nama Wajib Pajak</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label ">SINTA ID</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label ">Scopus ID</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label ">Publons ID</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                    <div class="d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#lain-lain">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class=" body-card">
                                <h5 class="card-title text-center">Dokumen Kerja</h5>
                                <div class="m-2">
                                    <!-- Table with hoverable rows -->
                                    <table border="1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama Dokumen</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div>KTP</div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary bi bi-download" data-bs-toggle="modal" data-bs-target="#EditDosen" data-bs-whatever=""></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table with hoverable rows -->
                                </div>
                                <div class="d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-primary bi bi-plus-circle" data-bs-toggle="modal" data-bs-target="#dokumenkerja">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="col-xl-8">
                    <div class="card">
                        <div class=" body-card">
                            <h5 class="card-title text-center">Keluarga</h5>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label ">Staus Perkawinan</div>
                                <div class="col-lg-7 col-md-8">Menikah</div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label ">Nama Suami/Istri</div>
                                <div class="col-lg-7 col-md-8">Diana</div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label ">Pekerja Suami/Istri (list)</div>
                                <div class="col-lg-7 col-md-8">Kantoran</div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label ">Jumlah Tanggungan</div>
                                <div class="col-lg-7 col-md-8">2</div>
                                <div class="d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#keluarga">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class=" body-card">
                                <h5 class="card-title text-center">Kepegawaian</h5>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Prodi Dosen</div>
                                    <div class="col-lg-7 col-md-8"><?= $akun['nama_prodi']; ?></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">NIP</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Status Kepegawai</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Status Keaktifan</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Nomber SK Calon Pegawai</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">TMT SK Calon Pegawai</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Nomber SK Pegawai Tetap</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Pangkat/Golonga</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Jabatan fungsional</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                </div>
                                <div class="row ms-4">
                                    <div class="col-lg-5 col-md-4 label">Jabatan Struktural</div>
                                    <div class="col-lg-7 col-md-8"></div>
                                    <div class="d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#kepegawaian">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class=" body-card">
                                <h5 class="card-title text-center">Rekam Pendidikan</h5>
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
                                    <div class="d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-primary bi bi-plus-circle " data-bs-toggle="modal" data-bs-target="#rekampendidikan">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade" id="ringkasan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengubah Ringkasan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url(); ?>dosen/saveprofile">
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profil</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="<?= base_url(); ?>assets/img/profile-img1.png" alt="Profile">
                                    <div class="pt-2">
                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nidn" class="col-md-4 col-lg-3 col-form-label">NIDN</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nidn" type="text" class="form-control" id="nidn" value="<?= $akun['id_pegawai']; ?>">
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
                            <div class="row-mb-3">
                                <label for="inputJenisKelamin" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-8 col-lg-9">
                                    <select name="inputJenisKelamin" class="form-select">
                                        <option selected disabled>....</option>
                                        <option value="L" <?php echo ($pegawai->jenis_kelamin == 'L' ? 'selected' : ''); ?>>Laki-laki</option>
                                        <option value="P" <?php echo ($pegawai->jenis_kelamin == 'P' ? 'selected' : ''); ?>>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="kependudukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengubah Kependudukan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="alamatdankontak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengubah Alamat dan Kontak</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="bidangkeilmuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengubah Bidang Keilmuan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="lain-lain" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengubah Lain-lain</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="keluarga" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengubah Keluarga</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="kepegawaian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengubah Kepegawaian</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="rekampendidikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengunggah Rekam Pendidikan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="dokumenkerja" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Mengunggah Dokumen Kerja</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-primary">Ajukan</button>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- End #main -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>