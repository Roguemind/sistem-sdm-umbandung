<table border=1>
   <thead>
      <tr>
	<th>No</th>
	<th>Nomor Pegawai</th>
	<th>Nama Lengkap</th>
    <th>Kota Lahir</th>
      </tr>
   </thead>
   <tbody>
      <?php 
	$no = 1;
	foreach ($datadosen as $dosen){
      ?>
	   <tr><td><?php echo $no++; ?></td>
	     <td><?php echo $dosen['no_pegawai'];  ?></td>
	     <td><?php echo $dosen['nama']; ?></td>
         <td><?php echo $dosen['tempat-lahir']; ?></td>
	   </tr>
      <?php
	}
      ?>
   </tbody>
</table>
<br>
<table border=1>
   <thead>
      <tr>
	<th>No</th>
	<th>Nomor Pegawai</th>
	<th>Nama Lengkap</th>
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
	     <td><?php echo $tendik['nama']; ?></td>
         <td><?php echo $tendik['tempat-lahir']; ?></td>
	   </tr>
      <?php
	}
      ?>
   </tbody>
</table>