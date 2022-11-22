<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah SK</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('admin/dashboard/aksiSk'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_sk" name="no_sk" placeholder="No SK" value="<?= set_value('no_sk') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Judul" value="<?= set_value('judul') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <select class="form-control form-control-user" id="unit-kerja" name="unit-kerja" placeholder="Unit Kerja">
                                    <option selected disabled>-- Pilih --</option>
                                    <?php foreach ($lista as $unit) { ?>
                                        <option value=<?= $unit['id_unit'] ?>><?= $unit['id_unit'] ?> - <?= $unit['nama_unit'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="tipe_surat" name="tipe_surat" placeholder="tipe_surat" value="<?= set_value('tipe_surat') ?>">
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