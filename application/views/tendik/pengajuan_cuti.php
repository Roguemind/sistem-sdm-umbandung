<main id="main" class="main">
    <div class="pagetitle">
        <h1>Pengajuan Cuti</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Pengajuan Cuti</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Pengajuan Cuti</h5>
            </div>
            <div class="card-body">
                <form class="user" method="POST" action="<?= base_url('tendik/pengajuan/aksicuti'); ?>">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Cuti</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="nama_cuti" name="nama_cuti" placeholder="" aria-label="" aria-describedby="basic-icon-default-fullname2" value="<?php set_value('nama_cuti'); ?>" />
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
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Tanggal Awal Libur</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="date" id="tanggal_awal" name="tanggal_awal" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Tanggal Masuk</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="row   ">
                            <div class="col d-md-flex justify-content-md-end mt-3 sm-10 ">
                                <button type="submit" class="btn btn-primary ">Kirim</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</main><!-- End #main -->