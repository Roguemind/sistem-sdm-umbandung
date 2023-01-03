<body>
    <main id="main" class="main" style="margin-top: 0px;">

        <div class="pagetitle">
            <h1>Data Pegawai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>admin">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dosen">Data Dosen</a></li>
                    <li class="breadcrumb-item active">Tambah Data Pegawai</li>
                </ol>
            </nav>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            </div>
        </div>

        <!-- #main -->
        <section class="section profile">
            <form class="row g-3" method="POST" action="<?= base_url() ?>admin/dosen/store">
                <div>
                    <h3 class="fw-bold text-center">Tambah Data Dosen</h3>
                    <div class="card mb-3">

                        <div class="row g-0">
                            <div class="card-body">

                                <div>
                                    <h5 class="card-title">Profil</h5>
                                    <div class="row g-2">
                                        <div class="col-md-4">
                                            <label for="inputNamaDepan" class="form-label">Nama Depan</label>
                                            <input type="text" class="form-control <?php echo form_error('inputNamaDepan') ? 'is-invalid' : '' ?>" name="inputNamaDepan" id="inputNamaDepan">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputNamaTengah" class="form-label">Nama Tengah</label>
                                            <input type="text" class="form-control <?php echo form_error('inputNamaTengah') ? 'is-invalid' : '' ?>" name="inputNamaTengah" id="inputNamaTengah">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputNamaBelakang" class="form-label">Nama Belakang</label>
                                            <input type="text" class="form-control <?php echo form_error('inputNamaBelakang') ? 'is-invalid' : '' ?>" name="inputNamaBelakang" id="inputNamaBelakang">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNamaBelakang') ?>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-2">
                                        <div class="col-md-4">
                                            <label for="inputJenisKelamin" class="form-label">Jenis Kelamin</label>
                                            <select name="inputJenisKelamin" class="form-select <?php echo form_error('inputJenisKelamin') ? 'is-invalid' : '' ?>" style="width: 100%">
                                                <option selected disabled>....</option>
                                                <option value="Lk">Laki-laki</option>
                                                <option value="Pr">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputJenisKelamin') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTempatLahir" class="form-label">Tempat lahir</label>
                                            <input type="text" class="form-control <?php echo form_error('inputTempatLahir') ? 'is-invalid' : '' ?>" name="inputTempatLahir" id="inputTempatLahir">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputTempatLahir') ?>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTanggalLahir" class="form-label">Tanggal lahir</label>
                                            <input type="date" class="form-control <?php echo form_error('inputTanggalLahir') ? 'is-invalid' : '' ?>" name="inputTanggalLahir" id="inputTanggalLahir">
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
                                        <label for="inputNik" class="form-label">No Induk Kependudukan</label>
                                        <input type="text" class="form-control <?php echo form_error('inputNik') ? 'is-invalid' : '' ?>" name="inputNik" id="inputNik">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNik') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="inputAgama" class="form-label">Agama</label>
                                        <select name="inputAgama" class="form-select <?php echo form_error('inputAgama') ? 'is-invalid' : '' ?>" style="width: 100%">
                                            <option selected disabled>....</option>
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
                                        <select name="inputKewarganegaraan" class="form-select <?php echo form_error('inputKewarganegaraan') ? 'is-invalid' : '' ?>" style="width: 100%">
                                            <option selected disabled>....</option>
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
                                                <textarea type="text" class="form-control <?php echo form_error('inputAlamat') ? 'is-invalid' : '' ?>" name="inputAlamat" id="inputAlamat"></textarea>
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('inputAlamat') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="Kontak" class="form-label">Nomor Telepon/HP</label>
                                            <input type="text" class="form-control <?php echo form_error('inputKontak') ? 'is-invalid' : '' ?>" name="inputKontak">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label for="Email" class="form-label">Email Pribadi</label>
                                            <input type="text" class="form-control <?php echo form_error('inputEmail') ? 'is-invalid' : '' ?>" name="inputEmail">
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
                                            <input type="text" class="form-control <?php echo form_error('inputNPWP') ? 'is-invalid' : '' ?>" name="inputNPWP">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNPWP') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputNamaWajibPajak" class="form-label">Nama Wajib Pajak</label>
                                            <input type="text" class="form-control <?php echo form_error('inputNamaWajibPajak') ? 'is-invalid' : '' ?>" name="inputNamaWajibPajak">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNamaWajibPajak') ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputSINTAID" class="form-label">SINTA ID</label>
                                            <input type="text" class="form-control <?php echo form_error('inputSINTAID') ? 'is-invalid' : '' ?>" name="inputSINTAID">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputScopusID" class="form-label">Scopus ID</label>
                                            <input type="text" class="form-control <?php echo form_error('inputScopusID') ? 'is-invalid' : '' ?>" name="inputScopusID">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputPublonsID" class="form-label">Publons ID</label>
                                            <input type="text" class="form-control <?php echo form_error('inputPublonsID') ? 'is-invalid' : '' ?>" name="inputPublonsID">
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
                                        <label for="inputStatusPernikahan" class="form-label">Status pernikahan</label>
                                        <select name="inputStatusPernikahan" class="form-select <?php echo form_error('inputStatusPernikahan') ? 'is-invalid' : '' ?>" style="width: 100%">
                                            <option selected disabled>....</option>
                                            <option value="Lajang">Lajang</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Duda/Janda">Duda/Janda</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('inputNamaWajibPajak') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputNamaPasangan" class="form-label">Nama Suami/Istri</label>
                                        <input type="text" class="form-control <?php echo form_error('inputNamaPasangan') ? 'is-invalid' : '' ?>" name="inputNamaPasangan">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputPekerjaanPasangan" class="form-label">Pekerjaan Suami/Istri</label>
                                        <select name="inputPekerjaanPasangan" class="form-select <?php echo form_error('inputPekerjaanPasangan') ? 'is-invalid' : '' ?>" style="width: 100%">
                                            <option selected disabled>....</option>
                                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                                            <option value="Wirausaha">Wirausaha</option>
                                            <option value="Kantoran">Kantoran</option>
                                            <option value="Buruh">Buruh</option>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('inputPekerjaanPasangan') ?>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputJumlahTanggungan" class="form-label">Jumlah Anak</label>
                                        <input type="text" class="form-control <?php echo form_error('inputJumlahTanggungan') ? 'is-invalid' : '' ?>" name="inputJumlahTanggungan">
                                    </div>
                                </div>
                                <div class="invalid-feedback">
                                    <?php echo form_error('inputJumlahTanggungan') ?>
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
                                            <input type="text" class="form-control <?php echo form_error('inputNoPegawai') ? 'is-invalid' : '' ?>" name="inputNoPegawai" id="inputNoPegawai">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNoPegawai') ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputProgramStudi" class="form-label">Program Studi</label>
                                            <select name="inputProgramStudi" id="inputProgramStudi" class="form-select <?php echo form_error('inputProgramStudi') ? 'is-invalid' : '' ?>" style="width: 100%">
                                                <option selected disabled>....</option>
                                                <?php foreach ($prodi as $prd) :  ?>
                                                    <option value="<?= $prd['id_prodi'] ?>"><?= $prd['nama_prodi'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputProgramStudi') ?>
                                        </div>
                                    </div>
                                    <div class="row ">

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputStatusKerja" class="form-label">Status Kerja</label>
                                            <select class="inputStatusKerja form-select <?php echo form_error('inputStatusKerja') ? 'is-invalid' : '' ?>" id="inputStatusKerja" name="inputStatusKerja" style="width: 100%">
                                                <option selected disabled>....</option>
                                                <option value="Tetap">Tetap</option>
                                                <option value="Kontrak">Kontrak</option>
                                                <option value="Calon Tetap">Calon Tetap</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputStatusKerja') ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputStatus" class="form-label">Status</label>
                                            <select class="inputStatus form-select <?php echo form_error('inputStatus') ? 'is-invalid' : '' ?>" name="inputStatus" style="width: 100%">
                                                <option selected disabled>....</option>
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
                                            <label for="inputNoSKPegawai" class="form-label">Nomber SK Pegawai</label>
                                            <input type="text" class="form-control <?php echo form_error('inputNoSKPegawai') ? 'is-invalid' : '' ?>" name="inputNoSKPegawai" id="inputNoSKPegawai">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputNoSKPegawai') ?>
                                        </div>
                                        <div class="col">
                                            <label for="inputTMTSKPegawai" class="form-label">Terhitung Masuk Tanggal</label>
                                            <input type="date" class="form-control <?php echo form_error('inputTMTSKPegawai') ? 'is-invalid' : '' ?>" name="inputTMTSKPegawai" id="inputTMTSKPegawai">
                                        </div>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('inputTMTSKPegawai') ?>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <label for="inputGolongan" class="form-label">Pangkat/Golongan</label>
                                            <input type="text" class="form-control <?php echo form_error('inputGolongan') ? 'is-invalid' : '' ?>" name="inputGolongan" id="inputGolongan">
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <label for="inputJabatanFungsional" class="form-label">Jabatan Fungsional</label>
                                            <input type="text" class="form-control <?php echo form_error('inputJabatanFungsional') ? 'is-invalid' : '' ?>" name="inputJabatanFungsional" id="inputJabatanFungsional">
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col">
                                            <label for="inputJabatan" class="form-label">Jabatan Struktural</label>
                                            <select name="inputJabatan" id="inputJabatan" class="form-select <?php echo form_error('inputJabatan') ? 'is-invalid' : '' ?>" style="width: 100%">
                                                <option selected disabled>....</option>
                                                <?php foreach ($jabdos as $jbds) { ?>
                                                    <option value=<?= $jbds['id_jabatan'] ?>><?= $jbds['nama_jabatan'] ?></option>
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