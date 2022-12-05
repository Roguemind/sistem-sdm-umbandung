<head>
   <?php $this->load->view('_partials/head');?>
   <?php $this->load->view('_partials/script');?>
</head>
<body>
<table class="table table-striped" id="tabel_tendik">
   <thead>
      <tr>
         <th>No</th>
         <th>Nomor Pegawai</th>
         <th>Nama Pegawai</th>
         <th>Unit Kerja</th>
         <th>Kota Lahir</th>
      </tr>
   </thead>
   <tbody>
      <?php 
	$no = 1;
	foreach ($datatendik as $tendik){
      ?>
	   <tr><td><?php echo $no++; ?></td>
	      <td><?php echo $tendik['no_pegawai'];  ?></td>
	      <td><?php echo $tendik['namapeg']; ?></td>
         <td><?php echo $tendik['unitkerja']; ?></td>
         <td><?php echo $tendik['tempat-lahir']; ?></td>
	   </tr>
      <?php
	}
      ?>
   </tbody>
</table>


<script type="text/javascript">
	$(document).ready(function() {
	    $('#tabel_tendik').DataTable();
	    function filterData () {
		    $('#tabel_tendik').DataTable().search(
		        $('.unitkerja').val()
		    	).draw();
		}
		$('.unitkerja').on('change', function () {
	        filterData();
	    });
	});
   $('#tabel_tendik').dataTable( {
      "search": {
         "search": $('. ') 
      }
   } );
</script>