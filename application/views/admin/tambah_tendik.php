<main id="main" class="main" style="margin-top: 0px ;">

    <div class="pagetitle">
        <h1>Tambah Tendik</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Tambah Tendik</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahTendik" data-bs-whatever="">Tambah Tendik</button>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Tendik</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover" id="tabel-tendik" name="tabel_tendik">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Prodi</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                                <?php foreach ($listt as $tendik) : ?>
                                <tr>
                                    <th scope="row"><?= $no++?></th>
                                    <td><?= $tendik['nama'];  ?></td>
                                    <td><?= $tendik['nama_unit']; ?></td>
                                    <td><?= $tendik['email']; ?></td>
                                    <td>
                                        <a class="btn btn-primary bi bi-pencil-square" href="<?= base_url();?>view/tendik/<?= $tendik['no_pegawai'];?>"></a>
                                        <button type="button" class="btn btn-danger bi bi-trash3" data-bs-toggle="modal" data-bs-target="#hapus"></button>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </tbody>
                        </table>
                        <!-- End Table with hoverable rows -->

                    </div>
                </div>
    </section>

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
                    <a class="btn btn-danger" href="<?= base_url(); ?>admin/fungsi/deleteTendik/<?=$tendik['id_pegawai'];?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tambah Tendik -->
    <div class="modal fade" id="TambahTendik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tendik</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section class="section">
                        <!-- Form tambah Tendik -->
                        <form class="user" method="POST" action="<?= base_url('admin/fungsi/aksiTambahTendik'); ?>">
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">No Pegawai</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="no_pegawai" name="no_pegawai" placeholder="NO PEGAWAI" value="<?= set_value('no_pegawai') ?>">
                                    <?= form_error('no_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">ID Pegawai</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="id_pegawai" name="id_pegawai" placeholder="ID PEGAWAI" value="<?= set_value('id_pegawai') ?>">
                                    <?= form_error('id_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Nama Lengkap</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Gelar Depan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="gelar_depan" name="gelar_depan" placeholder="Gelar Depan" value="<?= set_value('nama') ?>">
                                    <?= form_error('gelar_depan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Gelar Belakang</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="gelar_belakang" name="gelar_belakang" placeholder="Gelar Belakang" value="<?= set_value('nama') ?>">
                                    <?= form_error('gelar_belakang', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="form-label">Alamat</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>">
                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="form-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="form-label">Tanggal Lahir</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('id_pegawai') ?>">
                                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Tempat Lahir</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir " <?= set_value('tempat-lahir') ?>">
                                    <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin">
                                        <option selected disabled>---Pilih Jenis Kelamin---</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label class="form-label">Agama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="agama" name="agama" placeholder="Agama" value="<?= set_value('agama') ?>">
                                    <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Pendidikan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?= set_value('penididikan') ?>">
                                    <?= form_error('pendidikan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">No. Handphone</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="kontak" name="kontak" placeholder="Kontak" value="<?= set_value('kontak') ?>">
                                    <?= form_error('emkontakail', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Status Pernikahan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="status_pernikahan" name="status_pernikahan" placeholder="Status Pernikahan" value="<?= set_value('status_pernikahan') ?>">
                                    <?= form_error('status_pernikahan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Unit Kerja</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-user" id="unit-kerja" name="unit-kerja" placeholder="Unit Kerja">
                                        <option selected disabled>-- Pilih Unit--</option>
                                        <?php foreach ($units as $unit) { ?>
                                            <option value=<?= $unit['id_unit'] ?>><?= $unit['id_unit'] ?> - <?= $unit['nama_unit'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Jabatan Struktural</label>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-user" id="jabatan" name="jabatan" placeholder="Jabatan">
                                        <option selected disabled>-- Pilih Jabatan --</option>
                                        <?php foreach ($jabatans as $jabatan) { ?>
                                            <option value=<?= $jabatan['id_jabatan'] ?>><?= $jabatan['id_jabatan'] ?> - <?= $jabatan['nama_jabatan'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="form-label">No. SK</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="no_sk_pegawai" name="no_sk_pegawai" placeholder="NO SK" value="<?= set_value('no_sk_pegawai') ?>">
                                    <?= form_error('no_sk_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">TMT</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control form-control-user" id="tmt_pegawai" name="tmt_pegawai" placeholder="TMT" value="<?= set_value('tmt_pegawai') ?>">
                                    <?= form_error('tmt_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                        <!-- End Form tambah Tendik -->
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->

<script type="text/javascript">
    $(document).ready( function () {
        $('#tabel-tendik').DataTable();
    } );
</script>