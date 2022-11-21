<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Jabatan</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('admin/dashboard/aksiTambahJabatan'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="id_jabatan" name="id_jabatan" placeholder="ID Jabatan" value="<?= set_value('id_jabatan') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama_jabatan" name="nama_jabatan" placeholder="Nama Jabatan" value="<?= set_value('nama_jabatan') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Tambah">
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