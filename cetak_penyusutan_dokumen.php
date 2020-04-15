<title>Lembar Cetak Penyusutan Dokumen</title>
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
			width: 80px;
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
			font-size: 15px!important;
			font-weight: bold;
			text-transform: uppercase;
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
				$tanggal_penyusutan=$_REQUEST['tanggal_penyusutan'];
				$query	= "SELECT * FROM dokumen_penyusutan WHERE tanggal_penyusutan='$tanggal_penyusutan'";
				$sql    = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_array($sql)) {
	
			?>
				<tr>
					<td class="tgh" id="lbr" colspan="5">DOKUMEN PENYUSUTAN</td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Id Dokumen Penyusutan :</strong></td>
					<td id="left" colspan="2"><?php echo $data['id_penyusutan']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Nama Dokumen Penyustan:</strong></td>
					<td id="left" colspan="2"><?php echo $data['nama_dokumen_penyusutan']?></td>
				</tr>
				<tr>
					<td id="right" width="200"><strong> Tanggal Penyusutan Dokumen :</strong></td>
					<td id="left" colspan="2"><?php echo $data['tanggal_penyusutan'];?></td>
				</tr>
				
			<?php
				}
			?>			
		</table>
	</div>	
	
	<script type="text/javascript">
		window.print();
	</script>