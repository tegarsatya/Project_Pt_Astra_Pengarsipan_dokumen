<?php
include 'koneksi.php';
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=All_data_mater_form.xls");
?>
	<center><h2>All Data master_form</h2></center>
	<table border="1" cellspacing="0" cellpadding="5" width="100%">
		<thead>
			<tr>
				<th>Id Form</th>
				<th>Nama Form</th>
				<th>Upload Mater Form</th>

			</tr>
		</thead>
		<tbody>
			<?php
				$no =1;
				$query	= "SELECT * FROM master_form";
				$sql    = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $data['id_form']?></td>
				<td><?php echo $data['nama_form'] ?></td>
				<td><?php echo $data['uppload_form'] ?></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>