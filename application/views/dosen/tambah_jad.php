<main id="main" class="main" style="margin-top: 0px;">
    <div class="pagetitle pt-4 ms-3">
        <h1>Pengajuan JAD</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Pengajuan JAD</li>
            </ol>
        </nav>
    </div>
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4 ">Pengajuan Jabatan Akademik Dosen</h1>
                        </div>
                        <div class="col-lg">
                            <div class="p-3 bg-warning bg-opacity-10 ">
                                <h5 class="text-center fw-bold">Persyaratan</h5>
                                <ol type="1">
                                    <li>
                                        Min 2 Tahun Mengajar
                                    </li>
                                    <li>
                                        Ijazah
                                    </li>
                                    <li>
                                        Laporan Kinerja
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <form class="user mt-3" method="POST" action="<?= base_url('dosen/fungsi/aksiPengajuanJAD'); ?>">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-user" id="id_pegawai" name="id_pegawai" value="<?= $akun['id_pegawai']; ?>">
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary btn-lg btn-user btn-block position-relative top-50 start-50 translate-middle">
                                    Ajukan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>