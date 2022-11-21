<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Tambah Pegawai</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('admin/dashboard/aksiTambahPegawai'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="id_pegawai" name="id_pegawai" placeholder="ID PEGAWAI" value="<?= set_value('id_pegawai') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?= set_value('alamat') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control form-control-user" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('id_pegawai') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir " <?= set_value('tempat-lahir') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= set_value('jenis_kelamin') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="agama" name="agama" placeholder="Agama" value="<?= set_value('agama') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?= set_value('penididikan') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="kontak" name="kontak" placeholder="Kontak" value="<?= set_value('kontak') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="status_pernikahan" name="status_pernikahan" placeholder="Status Pernikahan" value="<?= set_value('status_pernikahan') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="tahun_lulus" name="tahun_lulus" placeholder="tahun lulus" value="<?= set_value('tahun_lulus') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="almamater" name="almamater" placeholder="Almamater" value="<?= set_value('alamamater') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="no_sk_pegawai" name="no_sk_pegawai" placeholder="NO SK" value="<?= set_value('no_sk_pegawai') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="tmt_pegawai" name="tmt_pegawai" placeholder="TMT" value="<?= set_value('tmt_pegawai') ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
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