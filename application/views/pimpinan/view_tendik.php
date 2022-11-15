<table border=1>
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