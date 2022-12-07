<div class="container">
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
                            <h1 class="h4 text-gray-900 mb-4">Pengajuan JAD</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('dosen/fungsi/aksiPengajuanJAD'); ?>">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-user" id="id_pegawai" name="id_pegawai" value="<?= $akun['id_pegawai']; ?>">
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-warning btn-lg btn-user btn-block position-relative top-50 start-50 translate-middle" disabled>
                                    Sedang Di Proses
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>