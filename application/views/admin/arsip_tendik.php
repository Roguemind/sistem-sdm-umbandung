<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Tambah Surat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Tambah Surat</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahTendik" data-bs-whatever="">Tambah Surat</button>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Arsip Tendik</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Tipe Surat</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">No Surat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lista as $list) : ?>
                                    <tr>
                                        <td>
                                            <div></div>
                                        </td>
                                        <td>
                                            <div><?= $list['judul'] ?></div>
                                        </td>
                                        <td>
                                            <div><?= $list['tipe_surat'] ?></div>
                                        </td>
                                        <td>
                                            <div><?= $list['nama_unit'] ?></div>
                                        </td>
                                        <td>
                                            <div hidden><?= $list['id_surat'] ?></div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditTendik" data-bs-whatever=""></button>
                                            <button type="button" class="btn btn-danger bi bi-trash3" data-bs-toggle="modal" data-bs-target="#hapus"></button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>
    </section>

    <!-- Edit -->
    <div class="modal fade" id="EditTendik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Surat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="user" method="POST" action="<?= base_url('admin/fungsi/aksiBerkas/tendik'); ?>">
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Judul</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul" value="<?= set_value('judul') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Tipe Surat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control form-control-user" id="tipe_surat" name="tipe_surat" placeholder="tipe_surat" value="<?= set_value('tipe_surat') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Unit/Prodi</label>
                            <div class="col-sm-12">
                                <select class="form-control form-control-user" id="unit-kerja" name="unit-kerja" placeholder="Unit Kerja">
                                    <option selected disabled>-- Pilih --</option>
                                    <?php foreach ($lista as $unit) { ?>
                                        <option value=<?= $unit['id_unit'] ?>><?= $unit['id_unit'] ?> - <?= $unit['nama_unit'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="form-label">Unggah</label>
                            <div class="col-sm-12">
                                <input type="file" class="form-control form-control-user" id="file_surat" name="file_surat" value="<?= set_value('no_sk') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal Hapus -->
    <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan !!!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus data ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah Dosen -->
    <div class="modal fade" id="TambahTendik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Surat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <!-- Form tambah dosen -->
                        <form class="user" method="POST" action="<?= base_url('admin/tambah/aksiSk'); ?>">
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Judul</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul" value="<?= set_value('judul') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Tipe Surat</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="tipe_surat" name="tipe_surat" placeholder="tipe_surat" value="<?= set_value('tipe_surat') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Unit/Prodi</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-user" id="unit-kerja" name="unit-kerja" placeholder="Unit Kerja">
                                        <option selected disabled>-- Pilih --</option>
                                        <?php foreach ($lista as $unit) : ?>
                                            <option value=<?= $unit['id_unit'] ?>><?= $unit['id_unit'] ?> - <?= $unit['nama_unit'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="form-label">Unggah</label>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control form-control-user" id="file_surat" name="file_surat" value="<?= set_value('nama_file') ?>">
                                    <?= form_error('file', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                        <!-- End Form tambah dosen -->
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->