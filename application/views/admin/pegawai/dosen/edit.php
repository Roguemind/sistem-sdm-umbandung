<body>
    <main id="main" class="main" style="margin-top: 0px;">

        <div class="pagetitle">
            <h1>Data Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>/">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/pegawai">Data Pegawai</a></li>
                    <li class="breadcrumb-item active">Edit Data Dosen</li>
                </ol>
            </nav>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            </div>
        </div>

        <!-- #main -->
        <section class="section profile">
            <form class="row g-3" method="POST" action="<?= base_url(); ?>admin/dosen/update/<?= $dosen['nik']; ?>">
                <div>
                    <input type="hidden" name="inputJabatanPegawai" value="Dosen">
                    <h3 class="fw-bold text-center">Edit Data Dosen</h3>
                    <div class="card mb-3">

                        <div class="row g-0">
                            <div class="card-body">

                                <div>
                                    <h5 class="card-title">Profil</h5>
                                    <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="inputNamaDepan" class="form-label">Nama Depan</label>
                                            <input type="text" class="form-control" name="inputNamaDepan" id="inputNamaDepan" value="<?= $dosen['nama_depan']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputNamaTengah" class="form-label">Nama Tengah</label>
                                            <input type="text" class="form-control" name="inputNamaTengah" id="inputNamaTengah" value="<?= $dosen['nama_tengah']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputNamaBelakang" class="form-label">Nama Belakang</label>
                                            <input type="text" class="form-control" name="inputNamaBelakang" id="inputNamaBelakang" value="<?= $dosen['nama_belakang']; ?>">
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col-md-4">
                                            <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="inputJenisKelamin" class="form-select" style="width: 100%">
                                                <option disabled value="<?= $dosen['jenis_kelamin'] ?>"><?= $dosen['jenis_kelamin'] ?></option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTempatLahir" class="form-label">Tempat lahir</label>
                                            <input type="text" class="form-control" name="inputTempatLahir" id="inputTempatLahir" value="<?= $dosen['tempat_lahir']; ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTanggalLahir" class="form-label">Tanggal lahir</label>
                                            <input type="date" class="form-control" name="inputTanggalLahir" id="inputTanggalLahir" value="<?= $dosen['tanggal_lahir']; ?>">
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
                                        <label for="inputNik" class="form-label">No Induk Kependudukan</label>
                                        <input type="text" class="form-control <?php echo form_error('inputNik') ? 'is-invalid' : '' ?>" name="inputNik" id="inputNik" value="<?= $dosen['nik']; ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNik') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="inputAgama" class="form-label">Agama</label>
                                        <select name="inputAgama" class="form-select" style="width: 100%">
                                            <option disabled value="<?= $dosen['agama'] ?>"><?= $dosen['agama'] ?></option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Budha">Budha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="inputKewarganegaraan" class="form-label">Kewarganegaraan</label>
                                        <select name="inputKewarganegaraan" class="form-select" style="width: 100%">
                                            <option disabledvalue="<?= $dosen['status_kewarganegaraan']; ?>"><?= $dosen['status_kewarganegaraan']; ?></option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </select>
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
                                                <textarea type="text" class="form-control" name="inputAlamat" id="inputAlamat" value="<?= $dosen['alamat']; ?>"><?= $dosen['alamat']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="Kontak" class="form-label">Nomor Telepon/HP</label>
                                            <input type="text" class="form-control" name="inputKontak" value="<?= $dosen['kontak']; ?>">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="Email" class="form-label">Email Pribadi</label>
                                            <input type="text" class="form-control" name="inputEmail" value="<?= $dosen['email_pribadi']; ?>">
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
                                            <input type="text" class="form-control" name="inputNPWP" value="<?= $dosen['npwp']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNPWP') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputNamaWajibPajak" class="form-label">Nama Wajib Pajak</label>
                                            <input type="text" class="form-control" name="inputNamaWajibPajak" value="<?= $dosen['nama_wajib_pajak']; ?>">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNamaWajibPajak') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputSINTAID" class="form-label">SINTA ID</label>
                                            <input type="text" class="form-control" name="inputSINTAID" value="<?= $dosen['id_sinta']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputScopusID" class="form-label">Scopus ID</label>
                                            <input type="text" class="form-control" name="inputScopusID" value="<?= $dosen['id_scopus']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputPublonsID" class="form-label">Publons ID</label>
                                            <input type="text" class="form-control" name="inputPublonsID" value="<?= $dosen['id_publons']; ?>">
                                        </div>
                                        <!-- <div class="d-md-flex justify-content-md-end mt-3">
                                            <button type="button" class="btn btn-primary bi bi-pencil-square " data-bs-toggle="modal" data-bs-target="#lain-lain">
                                            </button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h5 class="card-title ms-2">Keluarga</h5>
                                    <div class="col-md-6">
                                        <label for="inputStatusPernikahan" class="form-label">Status Pernikahan</label>
                                        <select name="inputStatusPernikahan" class="form-select" style="width: 100%">
                                            <option disabled value="<?= $dosen['status_pernikahan']; ?>"><?= $dosen['status_pernikahan']; ?></option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Duda/Janda">Duda/Janda</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputNamaPasangan" class="form-label">Nama Suami/Istri (Kosongkan bila tidak ada)</label>
                                        <input type="text" class="form-control" name="inputNamaPasangan" value="<?= $dosen['nama_pasangan'] ?>">
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-6">
                                        <label for="inputPekerjaanPasangan" class="form-label">Pekerjaan Suami/Istri</label>
                                        <select name="inputPekerjaanPasangan" class="form-select" style="width: 100%">
                                            <option disabled></option>
                                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                                            <option value="Wirausaha">Wirausahawan</option>
                                            <option value="Pegawai Swasta">Pegawai Swasta</option>
                                            <option value="Pengusaha">Pengusaha</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputJumlahTanggungan" class="form-label">Jumlah Anak</label>
                                        <input type="text" class="form-control" name="inputJumlahTanggungan" value="<?= $dosen['jumlah_tanggungan']; ?>">
                                    </div>
                                    <div class="row ">
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
                                                <input type="text" class="form-control" name="inputNoPegawai" id="inputNoPegawai" value="<?= $dosen['id_pegawai']; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputProgramStudi" class="form-label">Program Studi</label>
                                                <select name="inputProgramStudi" id="inputProgramStudi" class="form-select" style="width: 100%">
                                                    <option disabled value="<?= $dosen['nama_prodi'] ?>"><?= $dosen['nama_prodi'] ?></option>
                                                    <?php foreach ($prodi as $prd) :  ?>
                                                        <option value="<?= $prd['id_prodi'] ?>"><?= $prd['nama_prodi'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('inputProgramStudi') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="inputStatusKerja" class="form-label">Status Kerja</label>
                                                    <select class="inputStatusKerja form-select" id="inputStatusKerja" name="inputStatusKerja" style="width: 100%" value="<?= $dosen['status_kerja']; ?>">
                                                        <option disabled>...</option>
                                                        <option value="Tetap">Tetap</option>
                                                        <option value="Kontrak">Kontrak</option>
                                                        <option value="Calon">Calon Tetap</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputStatusKeaktifan" class="form-label">Status Keaktifan</label>
                                                    <select class="inputStatusKeaktifan form-select" name="inputKeaktifan" value="<?= $dosen['status']; ?>" style="width: 100%">
                                                        <option disabled value="<?= $dosen['status']; ?>"><?= $dosen['status'] ?></option>
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Tidak Aktif">Tidak AKtif</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="inputNoSKPegawai" class="form-label">Nomber SK Pegawai</label>
                                                    <input type="text" class="form-control" name="inputNoSKPegawai" id="inputNoSKPegawai" value="<?= $dosen['no_sk_pegawai']; ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('inputNoSKPegawai') ?>
                                                </div>
                                                <div class="col">
                                                    <label for="inputTMTSKPegawai" class="form-label">TMT Pegawai</label>
                                                    <input type="date" class="form-control" name="inputTMTSKPegawai" id="inputTMTSKPegawai" value="<?= $dosen['tmt_pegawai']; ?>">
                                                </div>
                                                <div class="invalid-feedback">
                                                    <?php echo form_error('inputTMTSKPegawai') ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col">
                                                <label for="inputGolongan" class="form-label">Pangkat/Golongan</label>
                                                <input type="text" class="form-control" name="inputGolongan" id="inputGolongan" value="<?= $dosen['golongan_dan_pangkat']; ?>">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col">
                                                <label for="inputJabatanFungsional" class="form-label">Jabatan fungsional</label>
                                                <input type="text" class="form-control" name="inputJabatanFungsional" id="inputJabatanFungsional" value="<?= $dosen['jad']; ?>">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col">
                                                <label for="inputJabatan" class="form-label">Jabatan Struktural</label>
                                                <select name="inputJabatan" id="inputJabatan" class="form-select" style="width: 100%">
                                                    <option disabled value="<?= $dosen['nama_jabatan']; ?>"><?= $dosen['nama_jabatan'] ?></option>
                                                    <?php foreach ($jabdos as $jbtnds) { ?>
                                                        <option value=<?= $jbtnds['id_jabatan'] ?>><?= $jbtnds['nama_jabatan'] ?></option>
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
<script type="text/javascript">
    function hideDosenTendik() {
        $('.divTetap').hide();
        $('.divCalon').hide();
        $('.divKontrak').hide();
    }

    $(document).ready(function() {
        $('select').select2();
        hideDosenTendik();

        $('#inputStatusKerja').on('change', function() {
            let tipePegawai = this.value;

            hideDosenTendik();
            if (tipePegawai === 'Tetap') {

                $('.divTetap').show();
            } else if (tipePegawai === 'Calon') {

                $('.divCalon').show();
            } else if (tipePegawai === 'Kontrak') {
                $('.divKontrak').show();
            }
        })

    });
</script>

</html>