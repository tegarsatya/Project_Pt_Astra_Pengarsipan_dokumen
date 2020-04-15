<?php
include 'koneksi.php';
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=All_data_Dokumen_Keluar.xls");
?>
	<center><h2>All Data Dokumen Masuk</h2></center>
	<table border="1" cellspacing="0" cellpadding="5" width="100%">
		<thead>
			<tr>
				<th>Id Dokumen</th>
				<th>Nama Dokumen</th>
				<th>Jenis Dokumen</th>
				<th>Isi Ringkas</th>
				<th>Tanggal Dokumen</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no =1;
				$query	= "SELECT * FROM dokumen_keluar";
				$sql    = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $data['id_dok'] ?></td>
				<td><?php echo $data['nama_dok'] ?></td>
				<td><?php echo $data['jenis_dok'] ?></td>
				<td><?php echo $data['isi_ringkas'] ?></td>
				<td><?php echo $data['tanggal_dok'] ?></td>

			</tr>
			<?php
				}
			?>
		</tbody>
	</table>