<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Data Dosen</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Data Dosen</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahDosen" data-bs-whatever="">Tambah Dosen</button>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Dosen</h5>

                        <!-- Table with hoverable rows -->
                        <table class="table table-hover" id="tabel-dosen" name="tabel-dosen">
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
                                <?php foreach ($listd as $dosen) : ?>
                                <tr>
                                    <th scope="row"><?= $no++?></th>
                                    <td><?= $dosen['nama']; ?></td>
                                    <td><?= $dosen['nama_prodi']; ?></td>
                                    <td><?= $dosen['email']; ?></td>
                                    <td>
                                        <a class="btn btn-primary bi bi-pencil-square" href="<?= base_url();?>profile/dosen/<?=$dosen['no_pegawai'];?>"></a>
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

    <!-- Edit -->
    <div class="modal fade" id="EditDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Dosen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">No Pegawai</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">ID Pegawai</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Nama Lengkap</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="form-label">Alamat</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="form-label">Tanggal Lahir</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Tempat Lahir</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <fieldset class="row mb-3">
                            <legend class="col-form-label pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="row mb-3">
                            <label class="form-label">Agama</label>
                            <div class="col-sm-12">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">Islam</option>
                                    <option value="2">Katholik</option>
                                    <option value="3">Kristen</option>
                                    <option value="3">Hindu</option>
                                    <option value="3">Budha</option>
                                    <option value="3">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Pendidikan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">No. Handphone</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label">Status Pernikahan</label>
                            <div class="col-sm-12">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">Belum Menikah</option>
                                    <option value="2">Menikah</option>
                                    <option value="3">Cerai Hidup</option>
                                    <option value="3">Cerai Mati</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Tahun Lulus</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">Almamater</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label">Prodi</label>
                            <div class="col-sm-12">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">Teknik Informatika</option>
                                    <option value="2">Teknik Elektro</option>
                                    <option value="3">Teknik Industri</option>
                                    <option value="3">Teknologi Pangan Halal</option>
                                    <option value="3">Farmasi</option>
                                    <option value="3">Bioteknologi</option>
                                    <option value="3">Agribisnis</option>
                                    <option value="3">Psikologi</option>
                                    <option value="3">Ilmu Komunikasi</option>
                                    <option value="3">Kriya Tekstil dan Fashion</option>
                                    <option value="3">Administrasi Publik</option>
                                    <option value="3">PAI</option>
                                    <option value="3">PIAUD</option>
                                    <option value="3">Hukum Keluarga Islam</option>
                                    <option value="3">Ekonomi Syariah</option>
                                    <option value="3">Komunikasi Penyiaran Islam</option>
                                    <option value="3">Akuntansi</option>
                                    <option value="3">Manajemen</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label">Jabatan Struktural</label>
                            <div class="col-sm-12">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">Opsi 1</option>
                                    <option value="2">Opsi 2</option>
                                    <option value="3">Opsi 3</option>
                                    <option value="3">Opsi 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="form-label">Jabatan Fungsional</label>
                            <div class="col-sm-12">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected></option>
                                    <option value="1">Opsi 1</option>
                                    <option value="2">Opsi 2</option>
                                    <option value="3">Opsi 3</option>
                                    <option value="3">Opsi 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="form-label">No. SK</label>
                            <div class="col-sm-12">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="form-label">TMT</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary">Ubah</button>
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
                        <form class="user" method="POST" action="<?= base_url('admin/dashboard/aksiTambahPegawai'); ?>">
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">No Pegawai</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="no_pegawai" name="no_pegawai" placeholder="NO PEGAWAI" value="<?= set_value('no_pegawai') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">ID Pegawai</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="id_pegawai" name="id_pegawai" placeholder="ID PEGAWAI" value="<?= set_value('id_pegawai') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Nama Lengkap</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="form-label">Alamat</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Tempat Lahir</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir " <?= set_value('tempat-lahir') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-12">
                                    <select class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin">
                                        <option selected disabled>---Pilih Jenis Kelamin---</option>
                                        <option value="<?= set_value('L') ?>">Laki-laki</option>
                                        <option value="<?= set_value('P') ?>">Perempuan</option>
                                    </select>
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label class="form-label">Agama</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="agama" name="agama" placeholder="Agama" value="<?= set_value('agama') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Pendidikan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?= set_value('penididikan') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">No. Handphone</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="kontak" name="kontak" placeholder="Kontak" value="<?= set_value('kontak') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Status Pernikahan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="status_pernikahan" name="status_pernikahan" placeholder="Status Pernikahan" value="<?= set_value('status_pernikahan') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Tahun Lulus</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="tahun_lulus" name="tahun_lulus" placeholder="tahun lulus" value="<?= set_value('tahun_lulus') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Almamater</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="almamater" name="almamater" placeholder="Almamater" value="<?= set_value('alamamater') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Prodi</label>
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
                                <label class="form-label">Jabatan Fungsional</label>
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">Opsi 1</option>
                                        <option value="2">Opsi 2</option>
                                        <option value="3">Opsi 3</option>
                                        <option value="3">Opsi 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="form-label">No. SK</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="no_sk_pegawai" name="no_sk_pegawai" placeholder="NO SK" value="<?= set_value('no_sk_pegawai') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">TMT</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control form-control-user" id="tmt_pegawai" name="tmt_pegawai" placeholder="TMT" value="<?= set_value('tmt_pegawai') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </form>
                        <!-- End Form tambah dosen -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</main><!-- End #main -->

<script type="text/javascript">
    $(document).ready( function () {
        $('#tabel-dosen').DataTable();
    } );
</script>