<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Data Pegawai</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url()?>/">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url()?>admin/pegawai">Data Pegawai</a></li>
                <li class="breadcrumb-item active">Tambah Data Pegawai</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data Pegawai</h5>
                        <form class="row g-3" method="POST" action="<?= base_url()?>admin/dosen/store">
                            <div class="row g-2">
                                <div class="col-md-3"> 
                                    <label for="inputName5" class="form-label">Nomor Pegawai</label> 
                                    <input type="text" class="form-control" name="no_pegawai" id="no_pegawai">
                                </div>
                                <div class="col-md-3"> 
                                    <label for="inputName5" class="form-label">ID Pegawai</label> 
                                    <input type="text" class="form-control" name="id_pegawai" id="id_pegawai">
                                </div>
                                <div class="col-md-6"> 
                                    <label for="inputName5" class="form-label">No Induk Keluarga</label> 
                                    <input type="text" class="form-control" name="nik" id="nik">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-3"> 
                                    <label for="inputEmail5" class="form-label">Gelar Depan</label> 
                                    <select name="gelar_depan" id="gelar_depan" class="form-select">
                                        <option selected="">Pilih gelar...</option>
                                        <option>Prof.</option> 
                                    </select>
                                </div>
                                <div class="col-md-6"> 
                                    <label for="inputPassword5" class="form-label">Nama Lengkap</label> 
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">
                                </div>
                                <div class="col-md-3"> 
                                    <label for="inputAddress5" class="form-label">Gelar Belakang</label> 
                                    <select name="gelar_belakang" id="gelar_belakang" class="form-select">
                                        <option selected="">Pilih gelar...</option>
                                        <option>M.Ag</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-12"> 
                                    <label for="inputAddress5" class="form-label">Alamat</label> 
                                    <textarea type="text" class="form-control" name="alamat" id="alamat"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                <label for="inputCity" class="form-label">Tempat lahir</label> 
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                            </div>
                            <div class="col-md-6"> 
                                <label for="inputCity" class="form-label">Tanggal lahir</label> 
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            <div class="col-md-4"> 
                                <label for="inputAgama" class="form-label">Agama</label> 
                                <select id="inputAgama" class="form-select">
                                    <option selected="">....</option> 
                                    <option >Islam</option>
                                    <option >Kristen</option>
                                    <option >Budha</option> 
                                    <option >Hindu</option>
                                    <option >konghucu</option>
                                </select>
                            </div>
                            <div class="col-md-4"> 
                                <label for="inputState" class="form-label">jenis kelamin</label> 
                                <select id="inputState" class="form-select">
                                    <option selected="">....</option> 
                                    <option >laki laki</option>
                                    <option >perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-4"> 
                                <label for="inputSetatus" class="form-label">Status pernikahan</label> 
                                <select id="inputSetatus" class="form-select">
                                    <option selected="">....</option> 
                                    <option >Lajang</option>
                                    <option >Menikah</option>
                                    <option >Duda/Janda</option>
                                </select>
                            </div>
                                <div class="col-md-6"> 
                                    <label for="Email" class="form-label">Email</label> 
                                    <input type="text" class="form-control" id="Email">
                                </div>
                            
                                <div class="col-md-6"> 
                                    <label for="Kontak" class="form-label">Kontak</label> 
                                    <input type="text" class="form-control" id="Kontak">
                                </div>
                                <div class="col-md-6"> 
                                    <label for="No_sk_pegawai" class="form-label">No sk</label> 
                                    <input type="text" class="form-control" id="No_sk_pegawai">
                                </div>
                                <div class="col-md-6"> 
                                    <label for="tmt_pegawai" class="form-label">Tmt pegawai</label> 
                                    <input type="text" class="form-control" id="tmt_pegawai">
                                </div>
                                <div class="form-check"> 
                                    <input class="form-check-input" type="checkbox" id="gridCheck"> 
                                    <label class="form-check-label" for="gridCheck"> Check me out </label>
                                </div>
                            </div>
                            <div class="text-end"> 
                                <button type="submit" class="btn btn-primary">Submit</button> 
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
    </section>


</main>
<!-- End #main -->

<script type="text/javascript">
    $(document).ready( function () {
        $('#tabel-dosen').DataTable();
    } );
</script>