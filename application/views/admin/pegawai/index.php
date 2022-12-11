<main id="main" class="main" style="margin-top: 0px;">

    <div class="pagetitle">
        <h1>Data Dosen</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url()?>/">Home</a></li>
                <li class="breadcrumb-item active">Data Pegawai</li>
            </ol>
        </nav>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="<?= base_url(); ?>admin/pegawai/create" class="btn btn-primary">Tambah Pegawai</a>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="row mt-3"> 
                            <label for="pilihDataTampil" class="col-md-2 col-form-label">Pilih Data Pegawai</label>
                            <div class="col-md-3"> 
                                <select class="pilihDataTampil" name="pilihDataTampil" style="width: 100%">
                                    <option value="0" selected disabled>Pilih data pegawai</option>
                                    <option value="dosen">Dosen</option>
                                    <option value="tendik">Tendik</option>
                                </select>
                            </div>
                        </div>
                        
                        <?php if($this->session->flashdata('msg')): ?>
                        <div class="row mt-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
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
                                <table class="table table-hover" id="tabel-dosen" name="tabel-dosen">
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
                                        <?php foreach ($listDosen as $dosen) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++?></th>
                                            <td><?= $dosen['nama']; ?></td>
                                            <td><?= $dosen['email']; ?></td>
                                            <td>
                                                <a class="btn btn-primary bi bi-pencil-square" href="<?= base_url();?>admin/pegawai/edit/<?=$dosen['id_pegawai'];?>"></a>
                                                <button type="button" class="btn btn-danger bi bi-trash3" onclick="hapusPegawai(<?= $dosen['id_pegawai']?>)"></button>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                        <!-- DATA DOSEN -->

                        <!-- DATA TENDIK -->
                        <div class="dataTendik">
                            <h5 class="card-title">Data Tendik</h5>
                            <div class="table-responsive">
                                <!-- Table with hoverable rows -->
                                <table class="table table-hover" id="tabel-tendik" name="tabel-dosen">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Prodi</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($listTendik as $dosen) : ?>
                                        <tr>
                                            <th scope="row"><?= $no++?></th>
                                            <td><?= $dosen['nama']; ?></td>
                                            <td><?= $dosen['nama_prodi']; ?></td>
                                            <td><?= $dosen['email']; ?></td>
                                            <td>
                                                <a class="btn btn-primary bi bi-pencil-square" href="<?= base_url();?>view/dosen/<?=$dosen['no_pegawai'];?>"></a>
                                                <button type="button" class="btn btn-danger bi bi-trash3" data-bs-toggle="modal" data-bs-target="#hapus"></button>
                                            </td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                </table>
                                <!-- End Table with hoverable rows -->
                            </div>
                        </div>
                        <!-- DATA Tendik -->

                    
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
                    <a class="btn btn-danger" href="<?= base_url(); ?>admin/fungsi/deleteDosen/<?=$dosen['id_pegawai'];?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>

</main>
<!-- End #main -->

<script type="text/javascript">
    // Function Hide table dosen dan tendik 
    function hideDataAll(){
        $('.dataDosen').hide();
        $('.dataTendik').hide();
    }
    
    $(document).ready( function () {
        //Select 2 inisialitaion
        $('.pilihDataTampil').select2();
        
        // call Function Hide table dosen dan tendik 
        hideDataAll();

        // FIlter data pegawai select option
        $('.pilihDataTampil').on('change', function() {
            let filterData = this.value; 
            if(filterData === "dosen"){
                hideDataAll();

                //Show table dosen 
                $('#tabel-dosen').DataTable({
                    dom:"<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4 text-center'B><'col-sm-12 col-md-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend: 'csv', 
                            className: 'btn-primary',
                            text: '<i class="mdi mdi-file-excel"></i> CSV',
                        },
                        { 
                            extend: 'excel', 
                            className: 'btn-primary',
                            text: '<i class="mdi mdi-file-excel"></i> Excel', },
                        { 
                            extend: 'pdf', 
                            className: 'btn-primary',
                            text: '<i class="mdi mdi-file-pdf"></i> Pdf', },
                        { 
                            extend: 'print', 
                            className: 'btn-primary',
                            text: '<i class="mdi mdi-printer"></i> Print', },
                    ]
                });
                $('.dataDosen').show();
            }
            else if(filterData === "tendik"){
                hideDataAll();
                $('.dataTendik').show();
            }

        });

    } );

    // Function js buat hapus data 
    function hapusPegawai(id){
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
                    url: '<?php echo base_url();?>admin/pegawai/delete/'+id,
                    type: 'DELETE',
                    error: function() {
                        console.log('Something is wrong');
                    },
                    success: function(data) {
                        Swal.fire({
                            title: 'Hapus!',
                            text: 'Data berhasil dihapus.',
                            icon: 'success'
                        }).then(function() {
                            window.location.href = '<?php echo base_url();?>admin/pegawai';
                        });
                    }
                });
            }
        })

    }
</script>