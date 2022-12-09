    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Unit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Unit</li>
                </ol>
            </nav>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#TambahUnit" data-bs-whatever="">Tambah Unit</button>
            </div>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Unit</h5>

                            <!-- Table with hoverable rows -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Unit</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>keuangan</td>
                                        <td>
                                            <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditDosen" data-bs-whatever=""></button>
                                            <button type="button" class="btn btn-danger bi bi-trash3" data-bs-toggle="modal" data-bs-target="#hapus"></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Sisisnfo</td>
                                        <td>
                                            <button type="button" class="btn btn-primary bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#EditDosen" data-bs-whatever=""></button>
                                            <button type="button" class="btn btn-danger bi bi-trash3" data-bs-toggle="modal" data-bs-target="#hapus"></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->

                        </div>
                    </div>
        </section>

        <!-- Edit -->
        <div class="modal fade" id="EditDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Dosen</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">No Pegawai</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">ID Pegawai</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Nama Lengkap</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword" class="form-label">Alamat</label>
                                <div class="col-sm-12">
                                    <textarea class="form-control" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail" class="form-label">Email</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputDate" class="form-label">Tanggal Lahir</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Tempat Lahir</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label pt-0">Jenis Kelamin</legend>
                                <div class="col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <label class="form-label">Agama</label>
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">Islam</option>
                                        <option value="2">Katholik</option>
                                        <option value="3">Kristen</option>
                                        <option value="3">Hindu</option>
                                        <option value="3">Budha</option>
                                        <option value="3">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Pendidikan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">No. Handphone</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Status Pernikahan</label>
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">Belum Menikah</option>
                                        <option value="2">Menikah</option>
                                        <option value="3">Cerai Hidup</option>
                                        <option value="3">Cerai Mati</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Tahun Lulus</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">Almamater</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Prodi</label>
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">Teknik Informatika</option>
                                        <option value="2">Teknik Elektro</option>
                                        <option value="3">Teknik Industri</option>
                                        <option value="3">Teknologi Pangan Halal</option>
                                        <option value="3">Farmasi</option>
                                        <option value="3">Bioteknologi</option>
                                        <option value="3">Agribisnis</option>
                                        <option value="3">Psikologi</option>
                                        <option value="3">Ilmu Komunikasi</option>
                                        <option value="3">Kriya Tekstil dan Fashion</option>
                                        <option value="3">Administrasi Publik</option>
                                        <option value="3">PAI</option>
                                        <option value="3">PIAUD</option>
                                        <option value="3">Hukum Keluarga Islam</option>
                                        <option value="3">Ekonomi Syariah</option>
                                        <option value="3">Komunikasi Penyiaran Islam</option>
                                        <option value="3">Akuntansi</option>
                                        <option value="3">Manajemen</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Jabatan Struktural</label>
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">Opsi 1</option>
                                        <option value="2">Opsi 2</option>
                                        <option value="3">Opsi 3</option>
                                        <option value="3">Opsi 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label">Jabatan Fungsional</label>
                                <div class="col-sm-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="1">Opsi 1</option>
                                        <option value="2">Opsi 2</option>
                                        <option value="3">Opsi 3</option>
                                        <option value="3">Opsi 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="form-label">No. SK</label>
                                <div class="col-sm-12">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="form-label">TMT</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Ubah</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Modal Hapus -->
        <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan !!!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus data ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tambah Unit -->
        <div class="modal fade" id="TambahUnit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Unit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="section">
                            <!-- Form tambah unit -->
                            <form>
                                <div class="row mb-3">
                                    <label for="inputText" class="form-label">ID Unit</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="form-label">Nama Unit</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </form>
                            <!-- End Form tambah unit -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End #main -->