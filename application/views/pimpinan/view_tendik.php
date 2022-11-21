<head>
   <?php $this->load->view('_partials/head');?>
   <?php $this->load->view('_partials/script');?>
</head>
<body>

<label>Pilih Unit Kerja</label>
   <select class="form-control" id="select-unit">
      <option>-- Pilih --</option>
      <?php foreach ($units as $unit) { ?>
      <option value = <?= $unit['id_unit'] ?>><?= $unit['id_unit'] ?> - <?= $unit['nama'] ?></option>
      <?php } ?>
   </select>
<table border=1 id="tabel-tendik">
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
	    $('#tabel-tendik').DataTable();
	    function filterData () {
		    $('#tabel-tendik').DataTable().search(
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