<table border=1>
   <thead>
      <tr>
         <th>No</th>
         <th>Nomor Pegawai</th>
         <th>Unit Kerja</th>
         <th>Nama Lengkap</th>
         <th>Tanggal Masuk</th>
      </tr>
   </thead>
   <tbody>
      <?php 
	$no = 1;
	foreach ($datadosen as $dosen){
      ?>
	   <tr><td><?php echo $no++; ?></td>
	      <td><?php echo $dosen['no_pegawai'];  ?></td>
	      <td><?php echo $dosen['namapeg']; ?></td>
         <td><?php echo $dosen['unitkerja']; ?></td>
         <td><?php echo $dosen['tmt_pegawai']; ?></td>
	   </tr>
      <?php
	}
      ?>
   </tbody>
</table>
