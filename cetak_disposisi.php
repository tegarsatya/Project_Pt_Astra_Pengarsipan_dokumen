<title>Lembar Index Dokumen</title>
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
		table {
			width: 100%;
			font-size: 12px;
			color: 212121;
		}
		tr, td {
			border: 1px solid #444;
			padding: 8px!important;
			vertical-align: middle;!important;
		}
		#lbr {
			font-size: 17px;
			font-weight: bold;
		}
		.isi_rks {
			height: 150px!important;
		}
		.tgh {
			text-align: center;
		}
		#right {
            border-right: none !important;
        }
        #left {
            border-left: none !important;
        }
		.header {
			text-align: center;
			margin: -.5rem 0;
		}
		.logo1 {
			float: left;
			position: relative;
			width: 100px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.logo2 {
			float: right;
			position: relative;
			width: 80px;
			height: 80px;
			margin: 0 0 0 1.2rem;
		}
		.text {
			font-size: 20px!important;
			font-weight: bold;
		}
		#lead {
			width: auto;
			position: relative;
			margin: 15px 0 0 75%;
		 }
		 .lead {
		 	font-weight: bold;
		 	text-decoration: underline;
		 	margin-bottom: -10px;
		 }
	</style>		
	<div class="row" align="center">
		<div class="header">
			<img src="assets/img/IMG-20191018-WA0008.jpg" class="logo1">
			<img src="assets/img/IMG-20191018-WA0009.jpg" class="logo2">
			<h6 class="text">PT. ASTRA DAIHATSU MONTOR<br>Alamat : Kawasan Industri KIIC <br> Lot M No. 6, Jl. Maligi VI <br> Karawang - Jawa Barat </h6>
			<td colspan="5" bordered="#000000">
		</div>
		<br>
		<br>
		<table cellspacing="0" cellspacing="5" >
			<?php
				$id_dok=$_REQUEST['id_dok'];
				$query	= "SELECT * FROM index_dokumen WHERE id_dok='$id_dok'";
				$sql    = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_array($sql)) {
	
			?>
				<tr>
					<td class="tgh" id="lbr" colspan="5">INDEX DOKUMEN</td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Id Dokumen :</strong></td>
					<td id="left" colspan="2"><?php echo $data['id_dok']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Nama Dokumen:</strong></td>
					<td id="left" colspan="2"><?php echo $data['nama_dok']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Jenis Dokumen :</strong></td>
					<td id="left" colspan="2"><?php echo $data['jenis_dok']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Tanggal :</strong></td>
					<td id="left" colspan="2"><?php echo $data['tanggal'];?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Posisi Rak :</strong></td>
					<td id="left" colspan="2"><?php echo $data['posisi_rak'];?></td>
				</tr>
			<?php
				}
			?>			
		</table>
	</div>	
	
	<script type="text/javascript">
		window.print();
	</script>