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
                        <div class="profile-card pt-4 d-flex flex-column align-items-center ">

                            <img src="<?= base_url(); ?>assets/img/profile-img1.png" alt="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png" class="rounded-circle">
                            <h2>
                                <?php if ($dosen['nama_depan'] != NULL) {
                                    echo $dosen['nama_depan'] . ' ';
                                }
                                if ($dosen['nama_tengah'] != NULL) {
                                    echo $dosen['nama_tengah'] . ' ';
                                }
                                echo $dosen['nama_belakang'];
                                ?>
                            </h2>
                            <h3 class=""> <?= $dosen['nama_jabatan'] ?>
                                <?php if ($dosen['nama_jabatan'] == 'Dekan') {
                                    echo 'Fakultas ' . $dosen['nama_unit'];
                                } else {
                                    echo $dosen['nama_prodi'];
                                } ?>
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Ringkasan</h5>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label fw-bold ">NIDN</div>
                                    <div class="col-lg-7 col-md-8"><?= $dosen['id_pegawai']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label fw-bold ">Nama Lengkap</div>
                                    <div class="col-lg-7 col-md-8">
                                        <?php if ($dosen['nama_depan'] != NULL) {
                                            echo $dosen['nama_depan'] . ' ';
                                        }
                                        if ($dosen['nama_tengah'] != NULL) {
                                            echo $dosen['nama_tengah'] . ' ';
                                        }
                                        echo $dosen['nama_belakang'];
                                        ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label fw-bold">Jenis Kelamin</div>
                                    <div class="col-lg-7 col-md-8">
                                        <?php if ($dosen['jenis_kelamin'] == 'L') { ?>
                                            Laki - Laki
                                        <?php } else if ($dosen['jenis_kelamin'] == 'P') { ?>
                                            Perempuan
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-5 col-md-4 label fw-bold">Tempat, Tanggal Lahir</div>
                                    <div class="col-lg-7 col-md-8"><?= $dosen['tempat_lahir']; ?>, <?= date('d F Y', strtotime($dosen['tanggal_lahir'])); ?></div>
                                </div>
                                <div class="d-md-flex justify-content-md-end mt-3">
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
                    <div class="card-body">

                        <div class="row ms-4">
                            <h5 class="card-title ms-2">Kependudukan</h5>
                            <div class="col-lg-5 col-md-4 label fw-bold ">NIK</div>
                            <div class="col-lg-7 col-md-8"><?= $dosen['nik']; ?></div>
                        </div>
                        <div class="row ms-4">
                            <div class="col-lg-5 col-md-4 label fw-bold ">Agama</div>
                            <div class="col-lg-7 col-md-8"><?= $dosen['agama']; ?></div>
                        </div>
                        <div class="row ms-4">
                            <div class="col-lg-5 col-md-4 label fw-bold ">Kenegaraan</div>
                            <div class="col-lg-7 col-md-8">Indonesia</div>
                            <div class="d-md-flex justify-content-md-end mt-3">
                                <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#kependudukan">
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ms-4">
                                <h5 class="card-title ms-2 ">Alamat dan Kontak</h5>
                                <div class="col-lg-5 col-md-4 label fw-bold">Alamat</div>
                                <div class="col-lg-7 col-md-8"><?= $dosen['alamat'] ?></div>
                            </div>

                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Phone</div>
                                <div class="col-lg-7 col-md-8"><?= $dosen['kontak'] ?></div>
                            </div>

                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Email</div>
                                <div class="col-lg-7 col-md-8"><?= $dosen['email_pribadi'] ?></div>
                                <div class="d-md-flex justify-content-md-end mt-3">
                                    <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#alamatdankontak">
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ms-4">
                                <h5 class="card-title ms-2">Bidang Keilmuan</h5>
                                <div class="col-lg-3 col-md-4 label fw-bold">Fakultas</div>
                                <div class="col-lg-9 col-md-8"><?= $dosen['nama_unit']; ?></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-3 col-md-4 label fw-bold">Jabatan</div>
                                <div class="col-lg-9 col-md-8"><?= $dosen['nama_jabatan']; ?></div>
                                <div class="d-md-flex justify-content-md-end mt-3">
                                    <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#bidangkeilmuan">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ms-4">
                                <h5 class="card-title ms-2">Lain-lain</h5>
                                <div class="col-lg-5 col-md-4 label fw-bold ">NPWP</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold ">Nama Wajib Pajak</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold ">SINTA ID</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold ">Scopus ID</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold ">Publons ID</div>
                                <div class="col-lg-7 col-md-8"></div>
                                <div class="d-md-flex justify-content-md-end mt-3">
                                    <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#lain-lain">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ms-2 ">Dokumen Kerja</h5>
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
                            <div class="d-md-flex justify-content-md-end mt-3">
                                <button type="button" class="btn btn-primary bi bi-plus-circle" data-bs-toggle="modal" data-bs-target="#dokumenkerja">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row ms-4">
                            <h5 class="card-title ms-2">Keluarga</h5>
                            <div class="col-lg-5 col-md-4 label fw-bold ">Staus Perkawinan</div>
                            <div class="col-lg-7 col-md-8">Menikah</div>
                        </div>
                        <div class="row ms-4">
                            <div class="col-lg-5 col-md-4 label fw-bold ">Nama Suami/Istri</div>
                            <div class="col-lg-7 col-md-8">Diana</div>
                        </div>
                        <div class="row ms-4">
                            <div class="col-lg-5 col-md-4 label fw-bold ">Pekerja Suami/Istri (list)</div>
                            <div class="col-lg-7 col-md-8">Kantoran</div>
                        </div>
                        <div class="row ms-4">
                            <div class="col-lg-5 col-md-4 label fw-bold ">Jumlah Tanggungan</div>
                            <div class="col-lg-7 col-md-8">2</div>
                            <div class="d-md-flex justify-content-md-end mt-3 ">
                                <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#keluarga">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ms-4">
                                <h5 class="card-title ms-2">Kepegawaian</h5>
                                <div class="col-lg-5 col-md-4 label fw-bold">Unit Tendik</div>
                                <div class="col-lg-7 col-md-8"><?= $dosen['nama_unit']; ?></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">NIP</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Status Kepegawai</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Status Keaktifan</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Nomber SK Calon Pegawai</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">TMT SK Calon Pegawai</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Nomber SK Pegawai Tetap</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Pangkat/Golonga</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Jabatan fungsional</div>
                                <div class="col-lg-7 col-md-8"></div>
                            </div>
                            <div class="row ms-4">
                                <div class="col-lg-5 col-md-4 label fw-bold">Jabatan Struktural</div>
                                <div class="col-lg-7 col-md-8"></div>
                                <div class="d-md-flex justify-content-md-end mt-3">
                                    <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#kepegawaian">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Rekam Pendidikan</h5>
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
                                <div class="d-md-flex justify-content-md-end mt-3">
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Ringkasan</h1>
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
                                <input name="nidn" type="text" class="form-control" id="nidn" value="<?= $dosen['id_pegawai']; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Depan</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="namadpn" type="text" class="form-control" id="namadpn" value="<?= $dosen['nama_depan']; ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Tengah</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="namatgh" type="text" class="form-control" id="namatgh" value="<?= $dosen['nama_tengah']; ?>">
                            </div>
                        </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Belakang</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="namablkg" type="text" class="form-control" id="namablkg" value="<?= $dosen['nama_belakang']; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Kependudukan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <label for="nidn" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="nidn" type="text" class="form-control" id="nik" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Agama</label>
                            <div class="col-md-8 col-lg-9">
                                <input name="namadpn" type="text" class="form-control" id="agama" value="">
                            </div>
                        </div>

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Kenegaraan</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namatgh" type="text" class="form-control" id="kenegaraan" value="">
                        </div>
                    </div>

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
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="alamat" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">No. HP</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="nohp" value="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namatgh" type="text" class="form-control" id="email" value="">
                        </div>
                    </div>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Bidang Keilmuan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Fakultas</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Lain-lain</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">NPWP</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Wajib Pajak</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Sinta ID</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Scopus ID</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Publons ID</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Keluarga</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Status Perkawinan</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Suami/Istri</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPekerjaan" class="col-md-4 col-lg-3 col-form-label">Pekerjaan Suami/Istri</label>
                        <div class="col-md-8 col-lg-9">
                            <select name="inputPekerjaan" class="form-select">
                                <option selected disabled>....</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Jumlah Tanggungan</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Unggah Rekam Pendidikan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Nama Institusi</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Program Studi</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Jenjang</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Tahun Lulus</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="text" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Gelar</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Bukti Ijazah</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="file" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Unggah Dokumen Kerja</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">Nama Berkas</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="nidn" type="text" class="form-control" id="fakultas" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Upload File</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="namadpn" type="file" class="form-control" id="jabatan" value="">
                        </div>
                    </div>
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