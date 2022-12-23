<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Data Dosen</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item">Data Pegawai</li>
                <li class="breadcrumb-item active">Dosen</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= base_url(); ?>admin/dosen/create" class="btn btn-primary">Tambah Pegawai</a>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?php if ($this->session->flashdata('msg')) : ?>
                            <div class="row mt-3">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:">
                                        <use xlink:href="#info-fill" />
                                    </svg>
                                    <div>
                                        <p><?php echo $this->session->flashdata('msg'); ?></p>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- DATA DOSEN -->
                        <div class="dataDosen">
                            <h5 class="card-title">Data Dosen</h5>
                            <div class="table-responsive">
                                <!-- Table with hoverable rows -->
                                <table class="table table-hover tabel-dosen" id="tabel-dosen" name="tabel-dosen">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email Kampus</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($listDosen as $dosen) : ?>
                                            <tr>
                                                <th scope="row"><?= $no++ . "." ?></th>
                                                <td><a href="<?= base_url(); ?>view/dosen/<?= $dosen['nik']; ?>">
                                                        <?php if ($dosen['nama_depan'] != NULL) {
                                                            echo $dosen['nama_depan'] . ' ';
                                                        }
                                                        if ($dosen['nama_tengah'] != NULL) {
                                                            echo $dosen['nama_tengah'] . ' ';
                                                        }
                                                        echo $dosen['nama_belakang'];
                                                        ?>
                                                    </a></td>
                                                <td><?= $dosen['email_kampus']; ?></td>
                                                <td>
                                                    <a class="btn btn-primary bi bi-pencil-square" href="<?= base_url(); ?>admin/dosen/edit/<?= $dosen['nik']; ?>"></a>
                                                    <button type="button" class="btn btn-danger bi bi-trash3" onclick="hapusPegawai(<?= $dosen['nik'] ?>)"></button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                        <!-- DATA DOSEN -->
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <!-- End Revenue Card -->
                    <!-- Bar Chart -->
                    <div class="card-body">
                        <h5 class="card-title text-center">Grafik Jumlah Pegawai</h5>
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fst">Fakultas Saintek dan Teknologi</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#feb">Fakultas Ekonomi dan Bisnis</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fai">Fakultas Agama Islam </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#fsh">Fakultas Sosial dan Humaniora</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="fst">
                                <canvas id="fst" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#fst'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['Teknik Informatika', 'Teknik Elektro', 'Teknik Indrustri', 'Tendik Pangan', 'Bioteknologi', 'Farmasi', 'Agribisnis'],
                                                datasets: [{
                                                    label: 'Dosen',
                                                    data: [43, 149, 106, 87],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(201, 203, 207, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(201, 203, 207)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show profile-edit" id="feb">
                                <canvas id="feb" style="max-height: 400px;"></canvas>
                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new Chart(document.querySelector('#feb'), {
                                            type: 'bar',
                                            data: {
                                                labels: ['FST', 'FEB2', 'FAI', 'FSH', 'LPnlLMyrt', 'LPnkLAik', 'LPej', 'Pimpinan'],
                                                datasets: [{
                                                    label: 'Tendik',
                                                    data: [35, 55, 10, 20, 40, 63, 11, 45],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.2)',
                                                        'rgba(255, 159, 64, 0.2)',
                                                        'rgba(255, 205, 86, 0.2)',
                                                        'rgba(75, 192, 192, 0.2)',
                                                        'rgba(54, 162, 235, 0.2)',
                                                        'rgba(153, 102, 255, 0.2)',
                                                        'rgba(201, 203, 207, 0.2)',
                                                        'rgba(221, 213, 217, 0.2)'
                                                    ],
                                                    borderColor: [
                                                        'rgb(255, 99, 132)',
                                                        'rgb(255, 159, 64)',
                                                        'rgb(255, 205, 86)',
                                                        'rgb(75, 192, 192)',
                                                        'rgb(54, 162, 235)',
                                                        'rgb(153, 102, 255)',
                                                        'rgb(201, 203, 207)',
                                                        'rgb(221, 223, 227)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>


                    <!-- End Bar CHart -->

                </div>
            </div>
        </div>
    </section>

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
                    <a class="btn btn-danger" href="<?= base_url(); ?>admin/fungsi/deleteDosen/<?= $dosen['nik']; ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- End #main -->

<script type="text/javascript">
    $(document).ready(function() {
        //Select 2 inisialitaion
        $('.pilihDataTampil').select2();

        //Show table dosen 
        $('#tabel-dosen').DataTable({
            dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4 text-center'B><'col-sm-12 col-md-4'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'csv',
                    className: 'btn-primary',
                    text: '<i class="mdi mdi-file-excel"></i> CSV',
                },
                {
                    extend: 'excel',
                    className: 'btn-primary',
                    text: '<i class="mdi mdi-file-excel"></i> Excel',
                },
                {
                    extend: 'pdf',
                    className: 'btn-primary',
                    text: '<i class="mdi mdi-file-pdf"></i> Pdf',
                },
                {
                    extend: 'print',
                    className: 'btn-primary',
                    text: '<i class="mdi mdi-printer"></i> Print',
                },
            ]
        });

    });

    // Function js buat hapus data 
    function hapusPegawai(id) {
        Swal.fire({
            title: 'Yakin hapus data?',
            text: "Data akan dihapus dari basis data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url(); ?>admin/pegawai/delete/' + id,
                    type: 'DELETE',
                    error: function() {
                        console.log('Something is wrong');
                    },
                    success: function(data) {
                        Swal.fire({
                            title: 'Hapus!',
                            text: data.text,
                            icon: 'success'
                        }).then(function() {
                            window.location.href = '<?php echo base_url(); ?>admin/pegawai/';
                        });
                    }
                });
            }
        })

    }
</script>