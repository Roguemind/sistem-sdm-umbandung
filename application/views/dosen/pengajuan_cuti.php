<main id="main" class="main">
    <div class="pagetitle text-center">
        <h1>PENGAJUAN CUTI</h1>
        <!-- End Page Title -->
    </div>
    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Pengajuan Cuti</h5>
            </div>
            <div class="card-body">
                <form class="user" method="POST" action="<?= base_url('tendik/fungsi/aksicuti'); ?>">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Cuti</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="nama_cuti" name="nama_cuti" placeholder="" aria-label="" aria-describedby="basic-icon-default-fullname2" value="<?= set_value('nama_cuti') ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">ID Pegawai</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="text" id="id_pegawai" name="id_pegawai" class="form-control" aria-describedby="basic-icon-default-company2" value="<?= $akun['id_pegawai'] ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Tanggal</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="date" id="jangka_waktu" name="jangka_waktu" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</main><!-- End #main -->