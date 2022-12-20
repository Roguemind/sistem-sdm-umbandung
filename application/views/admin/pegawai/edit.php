<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/pegawai">Data Pegawai</a></li>
                <li class="breadcrumb-item active">Edit Data Pegawai</li>
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
                        <h5 class="card-title">Edit Data Pegawai</h5>
                        <form class="row g-3" method="POST" action="<?= base_url() ?>admin/pegawai/update">
                            <input type="hidden" name="inputIdPegawai" value="<?php echo $pegawai->id_pegawai; ?>" readonly>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputNoPegawai" class="form-label">Nomor Pegawai</label>
                                    <input type="text" class="form-control" name="inputNoPegawai" id="inputNoPegawai" value="<?php echo $pegawai->id_pegawai; ?>" readonly>
                                </div>
                                <div class="col-md-8">
                                    <label for="inputNik" class="form-label">No Induk Keluarga</label>
                                    <input type="text" class="form-control <?php echo form_error('inputNik') ? 'is-invalid' : '' ?>" name="inputNik" id="inputNik" value="<?php echo $pegawai->nik; ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('inputNik') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <label for="inputAlamat" class="form-label">Alamat</label>
                                    <textarea type="text" class="form-control" name="inputAlamat" id="inputAlamat"><?php echo $pegawai->alamat; ?></textarea>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="inputTempatLahir" class="form-label">Tempat lahir</label>
                                    <input type="text" class="form-control" name="inputTempatLahir" id="inputTempatLahir" value="<?php echo $pegawai->tempat_lahir; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputTanggalLahir" class="form-label">Tanggal lahir</label>
                                    <input type="date" class="form-control" name="inputTanggalLahir" id="inputTanggalLahir" value="<?php echo $pegawai->tanggal_lahir; ?>">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputAgama" class="form-label">Agama</label>
                                    <select name="inputAgama" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Islam" <?php echo ($pegawai->agama == 'Islam' ? 'selected' : ''); ?>>Islam</option>
                                        <option value="Kristen" <?php echo ($pegawai->agama == 'Kristen' ? 'selected' : ''); ?>>Kristen</option>
                                        <option value="Budha" <?php echo ($pegawai->agama == 'Budha' ? 'selected' : ''); ?>>Budha</option>
                                        <option value="Hindu" <?php echo ($pegawai->agama == 'Hindu' ? 'selected' : ''); ?>>Hindu</option>
                                        <option value="Konghucu" <?php echo ($pegawai->agama == 'Konghucu' ? 'selected' : ''); ?>>Konghucu</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="inputJenisKelamin" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="L" <?php echo ($pegawai->jenis_kelamin == 'L' ? 'selected' : ''); ?>>Laki-laki</option>
                                        <option value="P" <?php echo ($pegawai->jenis_kelamin == 'P' ? 'selected' : ''); ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSetatusPernikahan" class="form-label">Status pernikahan</label>
                                    <select name="inputSetatusPernikahan" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Lajang" <?php echo ($pegawai->status_pernikahan == 'Lajang' ? 'selected' : ''); ?>>Lajang</option>
                                        <option value="Menikah" <?php echo ($pegawai->status_pernikahan == 'Menikah' ? 'selected' : ''); ?>>Menikah</option>
                                        <option value="Duda/Janda" <?php echo ($pegawai->status_pernikahan == 'Duda/Janda' ? 'selected' : ''); ?>>Duda/Janda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="inputEmail" value="<?php echo $pegawai->email_pribadi; ?>">
                                </div>

                                <div class="col-md-4">
                                    <label for="Kontak" class="form-label">Kontak</label>
                                    <input type="text" class="form-control" name="inputKontak" value="<?php echo $pegawai->kontak; ?>">
                                </div>

                                <div class="col-md-4">
                                    <label for="inputpendidikan" class="form-label">Pendidikan</label>
                                    <select name="inputpendidikan" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="S1" <?php echo ($pegawai->pendidikan == 'S1' ? 'selected' : ''); ?>>S1</option>
                                        <option value="S2" <?php echo ($pegawai->pendidikan == 'S2' ? 'selected' : ''); ?>>S2</option>
                                        <option value="S3" <?php echo ($pegawai->pendidikan == 'S3' ? 'selected' : ''); ?>>S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="inputNoSkPegawai" class="form-label">No sk</label>
                                    <input type="text" class="form-control" name="inputNoSkPegawai" value="<?php echo $pegawai->no_sk_pegawai; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputTmtPegawai" class="form-label">Terhitung Mulai Tanggal</label>
                                    <input type="date" class="form-control" name="inputTmtPegawai" value="<?php echo $pegawai->tmt_pegawai; ?>">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputJabatanPegawai" class="form-label">Jenis Pegawai</label>
                                    <select name="inputJabatanPegawai" id="inputJabatanPegawai" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Dosen">Dosen</option>
                                        <option value="Tendik">Tendik</option>
                                        <option value="DosenDanTendik">Dosen dan Tendik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="divDosen row g-2">


                                <!-- <label for="" class="form-label">DOSEN</label><br> -->
                                <!-- <div class="col-md-4">
                                    <label for="inputFakultas" class="form-label">Fakultas</label>
                                    <select name="inputFakultas" id="inputFakultas" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <?php foreach ($fakultas as $fk) { ?>
                                            <option value=<?= $fk['id_fakultas'] ?>><?= $fk['nama_fakultas'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div> -->
                                <div class="col-md-4">
                                    <label for="inputProgramStudi" class="form-label">Program Studi</label>
                                    <select name="inputProgramStudi" id="inputProgramStudi" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <?php foreach ($prodi as $prd) :  ?>
                                            <option value="<?= $prd['id_prodi'] ?>"><?= $prd['nama_prodi'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputJabatan" class="form-label">Jabatan</label>
                                    <select name="inputJabatan" id="inputJabatan" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <?php foreach ($jabdos as $jbtnds) { ?>
                                            <option value=<?= $jbtnds['id_jabatan'] ?>><?= $jbtnds['nama_jabatan'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputStatusKerja" class="form-label">Status Kerja</label>
                                    <select class="inputStatusKerja form-select" name="inputStatusKerja" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Tetap">Tetap</option>
                                        <option value="Kontrak">Kontrak</option>
                                    </select>
                                </div>

                            </div>
                            <div class="divTendik row g-2">
                                <!-- <label for="" class="form-label">TENDIK</label><br> -->
                                <div class="col-md-4">
                                    <label for="inputUnitKerja" class="form-label">Unit Kerja</label>
                                    <select class="inputUnitKerja form-select" name="inputUnitKerja" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Fakultas">Fakultas</option>
                                        <option value="Unit">Unit</option>
                                    </select>
                                </div>
                                <div class="col-md-4" id="dataFakultas">
                                    <label for="inputFakultasUnit" class="form-label">Fakultas</label>
                                    <select class="form-select" name="inputFakultasUnit" id="inputFakultasUnit" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <div>
                                            <?php foreach ($fakultas as $fk) { ?>
                                                <option value=<?= $fk['id_fakultas'] ?>><?= $fk['nama_fakultas'] ?></option>
                                            <?php } ?>
                                        </div>
                                    </select>
                                </div>
                                <div class="col-md-4" id="DataUnit">
                                    <label for="inputFakultasUnit" class="form-label">Unit</label>
                                    <select class="form-select" name="inputFakultasUnit" id="inputFakultasUnit" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <div>
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
                                        <div>
                                            <?php foreach ($jabten as $jbtn) { ?>
                                                <option value=<?= $jbtn['id_jabatan'] ?>><?= $jbtn['nama_jabatan'] ?></option>
                                            <?php } ?>
                                        </div>
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
                            <div class="divDosenTendik row g-2">
                                <div class="col-md-4">
                                    <label for="inputProgramStudi" class="form-label">Program Studi</label>
                                    <select name="inputProgramStudi" id="inputProgramStudi" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <?php foreach ($prodi as $prd) { ?>
                                            <option value=<?= $prd['nama_prodi'] ?>><?= $prd['nama_prodi'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputUnitKerja1" class="form-label">Unit Kerja</label>
                                    <select class="inputUnitKerja1 form-select" name="inputUnitKerja1" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Fakultas">Fakultas</option>
                                        <option value="Unit">Unit</option>
                                    </select>
                                </div>
                                <div class="col-md-4" id="dataFakultas1">
                                    <label for="inputFakultasUnit" class="form-label">Fakultas</label>
                                    <select class="form-select" name="inputFakultasUnit" id="inputFakultasUnit" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <div>
                                            <?php foreach ($fakultas as $fk) { ?>
                                                <option value=<?= $fk['id_fakultas'] ?>><?= $fk['nama_fakultas'] ?></option>
                                            <?php } ?>
                                        </div>
                                    </select>
                                </div>
                                <div class="col-md-4" id="DataUnit1">
                                    <label for="inputFakultasUnit" class="form-label">Unit</label>
                                    <select class="form-select" name="inputFakultasUnit" id="inputFakultasUnit" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <div>
                                            <?php foreach ($unit as $unt) { ?>
                                                <option value=<?= $unt['id_unit'] ?>><?= $unt['nama_unit'] ?></option>
                                            <?php } ?>
                                        </div>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputJabatanProgramStudi" class="form-label">Jabatan Program Studi</label>
                                    <select name="inputJabatanProgramStudi" id="inputJabatanProgramStudi" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="KetuaProgramStudi">Ketua Program Studi</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputJabatanUnit" class="form-label">Jabatan Unit</label>
                                    <select name="inputJabatanUnit" id="inputJabatanUnit" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="KetuaProgramStudi">Ketua Bagian</option>
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
                                    <button type="submit" class="btn btn-primary">Edit</button>
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
        $('.divDosenTendik').hide();
    }

    $(document).ready(function() {
        $('select').select2();
        hideDosenTendik();

        $('#inputJabatanPegawai').on('change', function() {
            let tipePegawai = this.value;

            hideDosenTendik();
            if (tipePegawai === 'Dosen') {

                $('.divDosen').show();
            } else if (tipePegawai === 'Tendik') {

                $('.divTendik').show();
            } else if (tipePegawai === 'DosenDanTendik') {
                $('#dataFakultas1').hide();
                $('#DataUnit1').hide();
                $('.divDosenTendik').show();
                $('.inputUnitKerja1').on('change', function() {
                    let tipeTendik = this.value;
                    if (tipeTendik === 'Fakultas') {

                        $('#DataUnit1').hide();
                        $('#dataFakultas1').show();
                    } else if (tipeTendik === 'Unit') {

                        $('#dataFakultas1').hide();
                        $('#DataUnit1').show();
                    }
                })
            }
        })


        $('#dataFakultas').hide();
        $('#DataUnit').hide();
        $('.inputUnitKerja').on('change', function() {
            let tipeTendik = this.value;
            if (tipeTendik === 'Fakultas') {

                $('#DataUnit').hide();
                $('#dataFakultas').show();
            } else if (tipeTendik === 'Unit') {

                $('#dataFakultas').hide();
                $('#DataUnit').show();
            }
        })

    });
</script>