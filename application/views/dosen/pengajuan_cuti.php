<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Pengajuan Cuti</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('dosen/dashboard/aksicuti'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama_cuti" name="nama_cuti" placeholder="Nama Cuti" value="<?= set_value('nama_cuti') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="id_pegawai" name="id_pegawai" value="<?= $akun['id_pegawai'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="jangka_waktu" name="jangka_waktu">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
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