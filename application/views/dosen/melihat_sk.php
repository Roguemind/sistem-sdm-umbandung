<head>
   <?php $this->load->view('_partials/head');?>
   <?php $this->load->view('_partials/script');?>
</head>
<body>
    <main id="main" class="main" >
        <div class="pagetitle">
            <h1>Arsip Berkas</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('dosen/dashboard');?>">Home</a></li>
                    <li class="breadcrumb-item active">Arsip</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="card">
            <div class="card-body pt-3">
                <div class="content">
                    <div class="toolbar">
                        <a href="#" class="button button-primary" role="button"></a>
                    </div>

                    <table id="tabel_arsip" class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th>No SK</th>
                                <th>Judul</th>
                                <th>Unit</th>
                                <th>Tipe Surat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $num = 1; ?>
                            <?php foreach ($lista as $list) : ?>
                                <tr>
                                    <td>
                                        <div><?= $num++;  ?></div>
                                    </td>
                                    <td>
                                        <div><?= $list['judul'] ?></div>
                                    </td>
                                    <td>
                                        <div><?= $list['nama_prodi'] ?></div>
                                    </td>
                                    <td>
                                        <div><?= $list['tipe_surat'] ?></div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#tabel_arsip').DataTable();
	    function filterData () {
		    $('#tabel_arsip').DataTable().search(
		        $('.judul').val()
		    	).draw();
		}
		$('.judul').on('change', function () {
	        filterData();
	    });
	});
   $('#tabel_arsip').dataTable( {
      "search": {
         "search": $('. ') 
      }
   } );
</script>