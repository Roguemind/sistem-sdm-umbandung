<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Jad</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Jad</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pengajuan Jad</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Dosen</th>
                                    <th scope="col">Prodi</th>
                                    <th scope="col">Persetujuan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no= 1; ?>
                                <?php foreach ($listjad as $jad) : ?>
                                    <tr>
                                        <td>
                                            <div><?= $no++ ?></div>
                                        </td>
                                        <td>
                                            <div><?= $jad['nama'] ?></div>
                                        </td>
                                        <td>
                                            <div><?= $jad['nama_prodi'] ?></div>
                                        </td>
                                        <td>
                                            <?php 
                                                if($jad['aktivasi'] == 0){
                                                    echo "<div>Belum Disetujui</div>";
                                                }else{
                                                    echo "<div>Disetujui</div>";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary bi bi-pencil-square" href="<?= base_url(); ?>/admin/fungsi/aksiSetujuJAD/<?= $jad['id_jad'];?>"> Setujui</a>
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
    <div class="modal fade" id="EditDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Dosen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                    <?php foreach ($lista as $unit) { ?>
                                        <option value=<?= $unit['id_unit'] ?>><?= $unit['id_unit'] ?> - <?= $unit['nama_unit'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="form-label">No SK</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control form-control-user" id="no_sk" name="no_sk" placeholder="No SK" value="<?= set_value('no_sk') ?>">
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
    <div class="modal fade" id="TambahDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Dosen</h1>
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
                                        <?php foreach ($lista as $unit) { ?>
                                            <option value=<?= $unit['id_unit'] ?>><?= $unit['id_unit'] ?> - <?= $unit['nama_unit'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="form-label">No SK</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="no_sk" name="no_sk" placeholder="No SK" value="<?= set_value('no_sk') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
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