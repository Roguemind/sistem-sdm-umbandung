<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah prodi</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('admin/dashboard/aksiTambahprodi'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="id_prodi" name="id_prodi" placeholder="ID PRODI" value="<?= set_value('id_prodi') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="id_fakultas" name="id_fakultas" placeholder="ID FAKULTAS" value="<?= set_value('id_fakultas') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama_prodi" name="nama_prodi" placeholder="Nama prodi" value="<?= set_value('nama_prodi') ?>">
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