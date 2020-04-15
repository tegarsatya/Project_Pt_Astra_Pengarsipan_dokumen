<?php
include 'koneksi.php';
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=All_data_index_dokumen.xls");
?>
	<center><h2>All Data Index Dokumen </h2></center>
	<table border="1" cellspacing="0" cellpadding="5" width="100%">
		<thead>
			<tr>
				<th>Id Dokumen</th>
				<th>Nama Dokumen</th>
				<th>Jenis Dokumen</th>
				<th>Tanggal </th>
				<th>Posisi Rak</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no =1;
				$query	= "SELECT * FROM index_dokumen";
				$sql    = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $data['id_dok'] ?></td>
				<td><?php echo $data['nama_dok'] ?></td>
				<td><?php echo $data['jenis_dok'] ?></td>
				<td><?php echo $data['tanggal'] ?></td>
				<td><?php echo $data['posisi_rak'] ?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>