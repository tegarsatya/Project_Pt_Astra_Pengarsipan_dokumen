<title>Dokumen Filling</title>
	<link rel="shortcut icon" href="assets/img/IMG-20191018-WA0009.jpg">
<?php
	include 'koneksi.php';
	include 'function_tanggal.php';
?>
	<style type="text/css">
		body {
			font-size: 12px!important;
			color: #212121;
		}
		.header {
			text-align: center;
			margin: -.5rem 0;
		}
		.logo1 {
			float: left;
			position: relative;
			width: 65px;
			height: 65px;
			margin: 0 0 0 1.2rem;
		}
		.logo2 {
			float: right;
			position: relative;
			width: 65px;
			height: 65px;
			margin: 0 0 0 1.2rem;
		}
		.text {
			font-size: 15px!important;
			font-weight: bold;
			text-transform: uppercase;
		}
		#table tr th {
			font-size: 11px;
		}
		#table {
			font-size: 10px
		}
	</style>

		<div class="row" align="center">
		<div class="header">
			<img src="assets/img/IMG-20191018-WA0008.jpg" class="logo1">
			<img src="assets/img/IMG-20191018-WA0009.jpg" class="logo2">
			<h6 class="text">LAPORAN INDEX DOKUMEN<br> PT. ASTRA DAIHATSU  <br> </h6>
			<h4></h4>
			<td colspan="3" bordered="#000000">
				<div align="center" style="border: solid; font-size: 10px;">
				</div>
			</td>
		</div>
		<br>

			<?php
				if (isset($_POST['cetak'])) {
					$dari_tanggal = InggrisTgl($_POST['dari_tanggal']);
					$sampai_tanggal= InggrisTgl($_POST['sampai_tanggal']);

					//indonesia Tgl
					$dari_tanggal_indo = IndonesiaTgl($dari_tanggal);
					$sampai_tanggal_indo= IndonesiaTgl($sampai_tanggal);

					if ($_REQUEST['dari_tanggal']=="" || $_REQUEST['sampai_tanggal']=="") {
						echo '<script>
								window.location.href="./index.php?page=agd_dokumen_filling";
						 	 </script>';
						die();
					}else{
						$query	= "SELECT * FROM dokumen_filling WHERE tanggal BETWEEN '$dari_tanggal' AND '$sampai_tanggal'";
						$sql 	= mysqli_query($connect, $query);
			?>
			<div class="col-md-10">
				<h4><strong>INDEX DOKUMEN KELUAR DARI TANGG <?php echo $dari_tanggal_indo ?> SAMPAI TANGGAL <?php echo $sampai_tanggal_indo; ?></strong></h4>
			</div>	
				<table id="table" border="1" cellspacing="0" cellpadding="5" width="100%">
					<thead>
						<tr>
							<th>Id Dokumen</th>
							<th>Nama Dokumen</th>
							<th>Jenis Dokumen</th>
							<th>Tanggal </th>

						</tr>
					</thead>
					<tbody>
						<?php
							if (mysqli_num_rows($sql)>0) {
								while ($data = mysqli_fetch_array($sql)) {
									
						?>
						<td><?php echo $data['id_dok']?></td>
						<td><?php echo $data['nama_dok']?></td>
						<td><?php echo $data['jenis_dok']?></td>
						<td><?php echo IndonesiaTgl($data['tanggal'])?></td>

					</tbody>
					<?php 
								}
							}else{
								echo '<tr><td colspan="9"><center><h2><strong>Tidak ada Data Agenda Dokumen Filling</></strong></h2></center></td></tr>';
							}
							}
						}	
					?>
				</table>
	</div>
	<script type="text/javascript">
		window.print();
	</script>