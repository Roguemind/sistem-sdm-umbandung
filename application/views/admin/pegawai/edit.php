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
                                <div class="col-md-3">
                                    <label for="inputGelarDepan" class="form-label">Gelar Depan</label>
                                    <select name="inputGelarDepan" name="inputGelarDepan" class="form-select" style="width: 100%">
                                        <option selected disabled>Pilih gelar depan...</option>
                                        <option value="Prof." <?php echo ($pegawai->gelar_depan == 'Prof.' ? 'selected' : ''); ?>>Prof.</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="inputNamaLengkap" id="inputNamaLengkap" value="<?php echo $pegawai->nama; ?>">
                                </div>
                                <div class="col-md-3">
                                    <label for="inputGelarBelakang" class="form-label">Gelar Belakang</label>
                                    <select name="inputGelarBelakang" name="inputGelarBelakang" class="form-select" style="width: 100%">
                                        <option selected disabled>Pilih gelar belakang...</option>
                                        <option value="M.Ag" <?php echo ($pegawai->gelar_belakang == 'M.Ag' ? 'selected' : ''); ?>>M.Ag</option>
                                    </select>
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
                                    <input type="text" class="form-control" name="inputEmail" value="<?php echo $pegawai->email; ?>">
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
                                    <input type="text" class="form-control" name="inputNoSkPegawai" value="<?php echo $pegawai->sk_pegawai; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputTmtPegawai" class="form-label">Tmt pegawai</label>
                                    <input type="text" class="form-control" name="inputTmtPegawai" value="<?php echo $pegawai->tmt_pegawai; ?>">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputfotoprofile" class="form-label">Foto Profile</label>
                                    <input type="file" class="form-control" name="inputfotoprofile" value="<?php echo $pegawai->foto_peg; ?>">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-4">
                                    <label for="inputJabatanPegawai" class="form-label">Jabatan Pegawai (Dosen / Tendik /dll)</label>
                                    <select name="inputJabatanPegawai" class="form-select" style="width: 100%">
                                        <option selected disabled>....</option>
                                        <option value="Dosen">Dosen</option>
                                        <option value="Tendik">Tendik</option>
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
    $(document).ready(function() {
        $('select').select2();
    });
</script>