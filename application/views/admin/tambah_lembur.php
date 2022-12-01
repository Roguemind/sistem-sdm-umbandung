<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">tambah lembur</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('admin/dashboard/aksilembur'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="id_lembur" name="id_lembur" placeholder="ID lembur" value="<?= set_value('id_lembur') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_pegawai" name="no_pegawai" placeholder="no pegawai" value="<?= set_value('no_pegawai') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="jenis_pk" name="jenis_pk" placeholder="jenis pk" value="<?= set_value('jenis_pk') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="tanggal_lembur" name="tanggal_lembur" placeholder="tanggal lembur" value="<?= set_value('tanggal_lembur') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Tambah
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('admin/dashboard') ?>">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>