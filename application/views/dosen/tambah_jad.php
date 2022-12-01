<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah jad</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('dosen/fungsi/aksiPengajuanJAD'); ?>">
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-user" id="id_pegawai" name="id_pegawai" value="<?= $akun['id_pegawai']; ?>"
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Ajukan
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('dosen/dashboard') ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>