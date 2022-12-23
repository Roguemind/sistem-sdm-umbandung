<main id="main" class="main" style="margin-top: 0px;">
    <div class="pagetitle">
        <h1>Pengajuan Cuti</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Pengajuan Cuti</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <!-- Basic with Icons -->
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Pengajuan Cuti</h5>
            </div>
            <div class="card-body">
                <?php echo form_open_multipart('tendik/pengajuan/aksicuti');?>
                    <div class="row mb-3 mt-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jenis Cuti</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                                <select id="jenis_cuti" name="jenis_cuti" class="form-select">
                                    <option id="cuti1" name="cuti1" value="Cuti Nikah">Cuti Nikah
                                    <option id="cuti2" name="cuti2" value="Cuti Libur">Cuti Libur
                                    <option id="cuti3" name="cuti3" value="Cuti Hamil">Cuti Hamil
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">NO Pegawai</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="text" id="no_pegawai" name="no_pegawai" class="form-control" aria-describedby="basic-icon-default-company2" value="<?= $akun['no_pegawai'] ?>" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Tanggal Mulai Cuti</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="date" id="tanggal_awal" name="tanggal_awal" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Tanggal Masuk</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input onchange="itung()" type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Total Hari</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <option type="text" id="total_hari" name="total_hari" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="" readonly></option>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">UPLOAD FILE</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                                <input type="file" id="file" name="file" class="form-control" placeholder="" aria-label="john.doe" aria-describedby="basic-icon-default-email2" value="" />
                            </div>
                        </div>
                    <div class="row col-sm-12">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <script>
        function itung() {
            var tanggal_awal = document.getElementById("tanggal_awal").value;
            var tanggal_masuk = document.getElementById("tanggal_masuk").value;
            // mengatur dua tanggal menjadi dua variabel
            var date1 = new Date(tanggal_awal);
            var date2 = new Date(tanggal_masuk);

            // hitung perbedaan waktu dari dua tanggal
            var Difference_In_Time = date2.getTime() - date1.getTime();

            // hitung jml hari antara dua tanggal
            var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
            document.getElementById("total_hari").innerHTML = Difference_In_Days;

        }
    </script>
</main><!-- End #main -->