<body>
    <main id="main" class="main" style="margin-top: 0px;">

        <div class="pagetitle">
            <h1>Data Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/pegawai">Data Pegawai</a></li>
                    <li class="breadcrumb-item active">Edit Data Tendik</li>
                </ol>
            </nav>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            </div>
        </div>

        <!-- #main -->
        <section class="section profile">
        <?php echo validation_errors(); ?>
            <form class="row g-3" method="POST" action="<?= base_url(); ?>admin/tendik/update/<?= $tendik['nik']; ?>">
                <div>
                    <input type="hidden" name="inputJabatanPegawai" value="Tendik">
                    <h3 class="fw-bold text-center">Edit Data Tenaga Kependidikan</h3>
                    <div class="card mb-3">

                        <div class="row g-0">
                            <div class="card-body">

                                <div>
                                    <h5 class="card-title">Ringkasan</h5>
                                    <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="inputNamaDepan" class="form-label">Nama Depan</label>
                                            <input type="text" class="form-control" name="inputNamaDepan" id="inputNamaDepan" value="<?= $tendik['nama_depan']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputNamaTengah" class="form-label">Nama Tengah</label>
                                            <input type="text" class="form-control" name="inputNamaTengah" id="inputNamaTengah" value="<?= $tendik['nama_tengah']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputNamaBelakang" class="form-label">Nama Belakang</label>
                                            <input type="text" class="form-control" name="inputNamaBelakang" id="inputNamaBelakang" value="<?= $tendik['nama_belakang']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNamaBelakang') ?>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col-md-4">
                                            <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="inputJenisKelamin" class="form-select" style="width: 100%">
                                                <option disabled value="<?= $tendik['jenis_kelamin']; ?>"><?= $tendik['jenis_kelamin']; ?></option>
                                                <option value="Lk">Laki - Laki</option>
                                                <option value="Pr">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputJenisKelamin') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTempatLahir" class="form-label">Tempat lahir</label>
                                            <input type="text" class="form-control" name="inputTempatLahir" id="inputTempatLahir" value="<?= $tendik['tempat_lahir']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputTempatLahir') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTanggalLahir" class="form-label">Tanggal lahir</label>
                                            <input type="date" class="form-control" name="inputTanggalLahir" id="inputTanggalLahir" value="<?= $tendik['tanggal_lahir']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputTanggalLahir') ?>
                                        </div>
                                    </div>
                                    <!-- <div class="d-md-flex justify-content-md-end mt-3">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#ringkasan">
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h5 class="card-title ms-2">Kependudukan</h5>
                                    <div class="col">
                                        <label for="inputNik" class="form-label">No Induk Keluarga</label>
                                        <input type="text" class="form-control <?php echo form_error('inputNik') ? 'is-invalid' : '' ?>" name="inputNik" id="inputNik" value="<?= $tendik['nik']; ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNik') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="inputAgama" class="form-label">Agama</label>
                                        <select name="inputAgama" class="form-select" style="width: 100%">
                                            <option disabled value="<?= $tendik['agama']; ?>"><?= $tendik['agama']; ?></option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                            <?php echo form_error('inputAgama') ?>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="inputKewarganegaraan" class="form-label">Kewarganegaraan</label>
                                        <select name="inputKewarganegaraan" class="form-select" style="width: 100%">
                                            <option disabled value="<?= $tendik['status_kewarganegaraan']; ?>"><?= $tendik['status_kewarganegaraan']; ?></option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('inputKewarganegaraan') ?>
                                    </div>
                                    <!-- <div class="d-md-flex justify-content-md-end mt-3">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#kependudukan">
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h5 class="card-title ms-2 ">Alamat dan Kontak</h5>
                                        <div class="row">
                                            <div class="col">
                                                <label for="inputAlamat" class="form-label">Alamat</label>
                                                <textarea type="text" class="form-control" name="inputAlamat" id="inputAlamat" value="<?= $tendik['alamat']; ?>"><?= $tendik['alamat']; ?></textarea>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('inputAlamat') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="Kontak" class="form-label">Nomor Telepon/HP</label>
                                            <input type="text" class="form-control" name="inputKontak" value="<?= $tendik['kontak']; ?>">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="Email" class="form-label">Email Pribadi</label>
                                            <input type="text" class="form-control" name="inputEmail" value="<?= $tendik['email_pribadi']; ?>">
                                        </div>
                                        <!-- <div class="d-md-flex justify-content-md-end mt-3">
                                            <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#alamatdankontak">
                                            </button>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <h5 class="card-title ms-2">Lain-lain</h5>
                                        <div class="col">
                                            <label for="inputNPWP" class="form-label">NPWP</label>
                                            <input type="text" class="form-control" name="inputNPWP" value="<?= $tendik['npwp']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNPWP') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputNamaWajibPajak" class="form-label">Nama Wajib Pajak</label>
                                            <input type="text" class="form-control" name="inputNamaWajibPajak" value="<?= $tendik['nama_wajib_pajak']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNamaWajibPajak') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row ">
                                    <h5 class="card-title ms-2">Keluarga</h5>
                                    <div class="col-md-6">
                                        <label for="inputStatusPernikahan" class="form-label">Status Pernikahan</label>
                                        <select name="inputStatusPernikahan" class="form-select" style="width: 100%">
                                            <option disabled value="<?= $tendik['status_pernikahan']; ?>"><?= $tendik['status_pernikahan']; ?></option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Duda/Janda">Duda/Janda</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                            <?php echo form_error('inputStatusPernikahan') ?>
                                        </div>
                                    <div class="col-md-6">
                                        <label for="inputNamaPasangan" class="form-label">Nama Suami/Istri (Kosongkan bila tidak ada)</label>
                                        <input type="text" class="form-control" name="inputNamaPasangan" value="<?= $tendik['nama_pasangan']?>">
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label for="inputPekerjaanPasangan" class="form-label">Pekerjaan Suami/Istri</label>
                                        <select name="inputPekerjaanPasangan" class="form-select" style="width: 100%">
                                            <option disabled></option>
                                            <option value="Wirausaha">Wirausahawan</option>
                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                            <option value="Pengusaha">Pengusaha</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                            <?php echo form_error('inputPekerjaanPasangan') ?>
                                        </div>
                                    <div class="col-md-6">
                                        <label for="inputJumlahTanggungan" class="form-label">Jumlah Tanggungan</label>
                                        <input type="text" class="form-control" name="inputJumlahTanggungan" value="<?= $tendik['jumlah_tanggungan']; ?>">
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('inputJumlahTanggungan') ?>
                                    </div>
                                </div>
                                <div class="row ms-4">
                                    <!-- <div class="d-md-flex justify-content-md-end mt-3 ">
                                        <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#keluarga">
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row ">
                                        <h5 class="card-title ms-2">Kepegawaian</h5>
                                        <div class="col-md-6">
                                            <label for="inputNoPegawai" class="form-label">Nomor Induk Pegawai</label>
                                            <input type="text" class="form-control" name="inputNoPegawai" id="inputNoPegawai" value="<?= $tendik['id_pegawai']; ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputUnitKerja" class="form-label">Unit Kerja</label>
                                            <select name="inputUnitKerja" id="inputUnitKerja" class="form-select" style="width: 100%">
                                                <option disabled value="<?= $tendik['nama_unit']; ?>"><?= $tendik['nama_unit']; ?></option>
                                                <?php foreach ($units as $unit) :  ?>
                                                    <option value="<?= $unit['id_unit'] ?>"><?= $unit['nama_unit'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputUnitKerja') ?>
                                        </div>
                                    </div>
                                    <div class="row ms-4">

                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <label for="inputStatusKerja" class="form-label">Status Kerja</label>
                                            <select class="inputStatusKerja form-select" name="inputStatusKerja" style="width: 100%">
                                                <option disabled value="<?= $tendik['status_kerja']; ?>"><?= $tendik['status_kerja']; ?></option>
                                                <option value="Tetap">Tetap</option>
                                                <option value="Kontrak">Kontrak</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputStatusKerja') ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputStatus" class="form-label">Status Keaktifan</label>
                                            <select class="inputStatus form-select" name="inputStatus" style="width: 100%">
                                                <option disabled value="<?= $tendik['status']; ?>"><?= $tendik['status']; ?></option>
                                                <option value="y">Aktif</option>
                                                <option value="n">Tidak AKtif</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputStatus') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputNoSKPegawai" class="form-label">Nomor SK Pegawai</label>
                                            <input type="text" class="form-control" name="inputNoSKPegawai" id="inputNoSKPegawai" value="<?= $tendik['no_sk_pegawai']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNoSKPegawai') ?>
                                        </div>
                                        <div class="col">
                                            <label for="inputTMTSKPegawai" class="form-label">TMT SK Pegawai</label>
                                            <input type="date" class="form-control" name="inputTMTSKPegawai" id="inputTMTSKPegawai" value="<?= $tendik['tmt_pegawai']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputTMTSKPegawai') ?>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <label for="inputGolongan" class="form-label">Pangkat/Golongan</label>
                                            <input type="text" class="form-control" name="inputGolongan" id="inputGolongan" value="<?= $tendik['golongan_dan_pangkat']; ?>">
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <label for="inputJabatan" class="form-label">Jabatan Struktural</label>
                                            <select name="inputJabatan" id="inputJabatan" class="form-select" style="width: 100%">
                                                <option disabled value="<?= $tendik['nama_jabatan']; ?>"><?= $tendik['nama_jabatan']; ?></option>
                                                <?php foreach ($jabten as $jbtntd) { ?>
                                                    <option value=<?= $jbtntd['id_jabatan'] ?>><?= $jbtntd['nama_jabatan'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputJabatan') ?>
                                        </div>
                                        <!-- <div class="d-md-flex justify-content-md-end mt-3">
                                            <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#kepegawaian">
                                            </button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Batal</button>
                    </div>
                </div>
            </form>
        </section>
    </main><!-- End #main -->
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>

</html>