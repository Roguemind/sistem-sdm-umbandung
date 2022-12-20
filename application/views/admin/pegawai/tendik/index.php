<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Data Tenaga Kependidikan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item">Data Pegawai</li>
                <li class="breadcrumb-item active">Tenaga Kependidikan</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= base_url(); ?>admin/tendik/create" class="btn btn-primary">Tambah Pegawai</a>
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
                            <h5 class="card-title">Data Tenaga Kependidikan</h5>
                            <div class="table-responsive">
                                <!-- Table with hoverable rows -->
                                <table class="table table-hover tabel-dosen" id="tabel-tendik" name="tabel-tendik">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($listTendik as $tendik) : ?>
                                            <tr>
                                                <th scope="row"><?= $no++ . "." ?></th>
                                                <td><a href="<?= base_url(); ?>view/dosen/<?= $tendik['nik']; ?>">
                                                        <?php if ($tendik['nama_depan'] != NULL) {
                                                            echo $tendik['nama_depan'] . ' ';
                                                        }
                                                        if ($tendik['nama_tengah'] != NULL) {
                                                            echo $tendik['nama_tengah'] . ' ';
                                                        }
                                                        echo $tendik['nama_belakang'];
                                                        ?>
                                                    </a></td>
                                                <td><?= $tendik['email_kampus']; ?></td>
                                                <td>
                                                    <a class="btn btn-primary bi bi-pencil-square" href="<?= base_url(); ?>admin/tendik/edit/<?= $tendik['nik']; ?>"></a>
                                                    <button type="button" class="btn btn-danger bi bi-trash3" onclick="hapusPegawai(<?= $tendik['nik'] ?>)"></button>
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

        //Show table tendik 
        $('#tabel-tendik').DataTable({
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