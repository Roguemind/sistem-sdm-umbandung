<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/pegawai">Data Pegawai</a></li>
                <li class="breadcrumb-item active">Tambah Data Pegawai</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data Pegawai</h5>
                        <form class="row g-3" method="POST" action="<?= base_url() ?>admin/pegawai/store">
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputNoPegawai" class="form-label">Nomor Pegawai</label>
                                    <input type="text" class="form-control" name="inputNoPegawai" id="inputNoPegawai">
                                </div>
                                <div class="col-md-8">
                                    <label for="inputNik" class="form-label">No Induk Keluarga</label>
                                    <input type="text" class="form-control <?php echo form_error('inputNik') ? 'is-invalid' : '' ?>" name="inputNik" id="inputNik">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('inputNik') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <label for="inputGelarDepan" class="form-label">Gelar Depan</label>
                                    <select name="inputGelarDepan" name="inputGelarDepan" class="form-select" style="width: 100%">
                                        <option selected disabled>Pilih gelar depan...</option>
                                        <option value="Prof.">Prof.</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="inputNamaLengkap" id="inputNamaLengkap">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputGelarBelakang" class="form-label">Gelar Belakang</label>
                                    <select name="inputGelarBelakang" name="inputGelarBelakang" class="form-select" style="width: 100%">
                                        <option selected disabled>Pilih gelar belakang...</option>
                                        <option value="M.Ag">M.Ag</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <label for="inputAlamat" class="form-label">Alamat</label>
                                    <textarea type="text" class="form-control" name="inputAlamat" id="inputAlamat"></textarea>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="inputTempatLahir" class="form-label">Tempat lahir</label>
                                    <input type="text" class="form-control" name="inputTempatLahir" id="inputTempatLahir">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputTanggalLahir" class="form-label">Tanggal lahir</label>
                                    <input type="date" class="form-control" name="inputTanggalLahir" id="inputTanggalLahir">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputAgama" class="form-label">Agama</label>
                                    <select name="inputAgama" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputJenisKelamin" class="form-label">jenis kelamin</label>
                                    <select name="inputJenisKelamin" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="L">laki laki</option>
                                        <option value="P">perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSetatusPernikahan" class="form-label">Status pernikahan</label>
                                    <select name="inputSetatusPernikahan" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Lajang">Lajang</option>
                                        <option value="Menikah">Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="inputEmail">
                                </div>

                                <div class="col-md-6">
                                    <label for="Kontak" class="form-label">Kontak</label>
                                    <input type="text" class="form-control" name="inputKontak">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="inputNoSkPegawai" class="form-label">No sk</label>
                                    <input type="text" class="form-control" name="inputNoSkPegawai">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputTmtPegawai" class="form-label">Tmt pegawai</label>
                                    <input type="text" class="form-control" name="inputTmtPegawai">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputJabatanPegawai" class="form-label">Jabatan Pegawai (Dosen / Tendik /dll)</label>
                                    <select name="inputJabatanPegawai" id="inputJabatanPegawai" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Dosen">Dosen</option>
                                        <option value="Tendik">Tendik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="divDosen row g-2">


                                <label for="" class="form-label">DOSEN</label><br>
                                <div class="col-md-4">
                                    <label for="inputFakultas" class="form-label">Fakultas</label>
                                    <select name="inputFakultas" id="inputFakultas" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <?php foreach ($fakultas as $fk) { ?>
                                            <option value=<?= $fk['id_fakultas'] ?>><?= $fk['nama_fakultas'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputProgramStudi" class="form-label">Program Studi</label>
                                    <select name="inputProgramStudi" id="inputProgramStudi" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Farmasi">Farmasi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputJabatan" class="form-label">Jabatan</label>
                                    <select name="inputJabatan" id="inputJabatan" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="KetuaProgramStudi">Ketua Program Studi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputStatusKerja" class="form-label">Status Kerja</label>
                                    <select name="inputStatusKerja" id="inputStatusKerja" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                </div>

                            </div>
                            <div class="divTendik row g-2">
                                <label for="" class="form-label">TENDIK</label><br>
                                <div class="col-md-4">
                                    <label for="inputUnitKerja" class="form-label">Unit Kerja</label>
                                    <select class="inputUnitKerja form-select" name="inputUnitKerja" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Fakultas">Fakultas</option>
                                        <option value="Unit">Unit</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputFakultasUnit" class="form-label">Fakultas/Unit</label>
                                    <select class="form-select" name="inputFakultasUnit" id="inputFakultasUnit" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <div id="dataFakultas">
                                            <?php foreach ($fakultas as $fk) { ?>
                                                <option value=<?= $fk['id_fakultas'] ?>><?= $fk['nama_fakultas'] ?></option>
                                            <?php } ?>
                                        </div>
                                        <div id="DataUnit">
                                            <?php foreach ($unit as $unt) { ?>
                                                <option value=<?= $unt['id_unit'] ?>><?= $unt['nama_unit'] ?></option>
                                            <?php } ?>
                                        </div>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputJabatan" class="form-label">Jabatan</label>
                                    <select name="inputJabatan" id="inputJabatan" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="KetuaProgramStudi">Ketua Program Studi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputStatusKerja" class="form-label">Status Kerja</label>
                                    <select name="inputStatusKerja" id="inputStatusKerja" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row g-2">
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </section>


</main>
<!-- End #main -->

<script type="text/javascript">
    function hideDosenTendik() {
        $('.divDosen').hide();
        $('.divTendik').hide();
    }

    function hideFakultasUnit() {
        $('#dataFakultas').hide();
        $('#DataUnit').hide();

    }

    $(document).ready(function() {
        $('select').select2();
        hideDosenTendik();

        $('#inputJabatanPegawai').on('change', function() {
            let tipePegawai = this.value;

            hideDosenTendik();
            if (tipePegawai === 'Dosen') {
                alert(this.value);
                $('.divDosen').show();
            } else if (tipePegawai === 'Tendik') {
                alert(this.value);
                $('.divTendik').show();
            }
        })

        hideFakultasUnit();
        $('.inputUnitKerja').on('change', function() {
            let tipeTendik = this.value;
            if (tipeTendik === 'Fakultas') {
                alert(this.value);
                $('#dataFakultas').show();
            } else if (tipeTendik === 'Unit') {
                alert(this.value);
                $('#DataUnit').show();
            }
        })

    });
</script>