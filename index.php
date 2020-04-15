<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<title> PT ASTRA DAIHATSU </title>

		<!-- Bootstrap -->
		<link href="assets/template/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="assets/template/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="assets/template/vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- bootstrap-daterangepicker -->
		<link href="assets/template/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
		<link href="assets/template/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" rel="stylesheet">
		<!-- Data tables -->
		<link href="assets/template/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<!-- Custom Theme Style -->
		<link href="assets/template/build/css/custom.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="assets/img/IMG-20191018-WA0009.jpg">

	</head>
	<?php
			include 'koneksi.php';
			include 'function_tanggal.php';
			session_start();
			//cek session
			if(!isset($_SESSION['username'])){
				echo '<script>
							window.alert("Anda belum login, Silahkan login kembali");
							window.location.href="./login.php";
					  </script>';
			}else
				if(!isset($_SESSION['username'])){
				echo '<script>
							window.alert("Anda belum login, Silahkan login kembali");
							window.location.href="./login.php";
					  </script>';
			}
			//set time session
			$time= 60;
			$ise="internal_server_error.php";
			$timeout= $time * 30;
			if (isset($_SESSION['start_time'])) {
				$ellapsed_time = time() - $_SESSION['start_time'];
				if ($ellapsed_time >= $timeout) {
					session_destroy();
					echo "<script> window.location = '$ise'</script>";
				}
			}
			$_SESSION['start_time'] = time();
	 ?>
	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
							<a href="index.php" class="site_title"><i class="fa fa-home"></i> PT. ASTRA DAIHATSU KARAWANG</a>
						</div>

						<div class="clearfix"></div>

						<!-- menu profile quick info -->
						<div class="profile clearfix">
							<div class="profile_pic">
								<img src="upload/user/<?php echo $_SESSION['foto']; ?>" alt="..." class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Welcome,</span>
								<h2><?php echo $_SESSION['fullname']; ?></h2>
							</div>
						</div>
						<!-- /menu profile quick info -->

						<br />

						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
							<div class="menu_section">
								<h3>Admin</h3>
								<ul class="nav side-menu">
									<li><a href="index.php?page=home"><i class=""></i> Dashboard </a>
									</li>
							<?php
							if($_SESSION['level'] == 'admin'){
							?>
									<li><a><i class="fa fa-edit"></i>Kontrol Dokumen<span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
							
											<li><a href="index.php?page=master_form">Master Form</a></li>
											<li><a href="index.php?page=surat_masuk">Dokumen Masuk</a></li>
											<li><a href="index.php?page=surat_keluar">Dokumen Keluar</a></li>
											<li><a href="index.php?page=agd_surat_masuk">Report Dokumen Masuk</a></li>
											<li><a href="index.php?page=agd_surat_keluar">Report Dokumen Keluar</a></li>

										</ul>
									</li>
							<?php
							 }
							 ?> 
									<li><a><i class="fa fa-file-text-o"></i>DMS <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
									<?php
							if($_SESSION['level'] == 'admin'){
							?>
											<li><a href="index.php?page=dokumen_filling">Dokumen Filling</a></li>
											<li><a href="index.php?page=penyusutan_dokumen">Penyusutan Dokumen</a></li>
											<li><a href="index.php?page=agd_index_dokumen">Report Index Dokumen</a></li>
											<li><a href="index.php?page=agd_dokumen_filling">Report Dokumen Filling</a></li>

							<?php
							 }
							 ?>
							 				<li><a href="index.php?page=index_dokumen"> Index Dokumen</a></li>
 
											<li><a href="index.php?page=peminjaman_dokumen">Peminjaman Dokumen</a></li>

										</ul>
									</li>
								</ul>
							</div>
							<div class="menu_section">
							<?php
							if($_SESSION['level'] == 'admin'){
							?>
								<h3>Setting</h3>
								<ul class="nav side-menu">
									<li><a href="index.php?page=users"><i class="fa fa-user"></i> Users </a></li>
								<li><a><i class="fa fa-files-o"></i> Data <span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
											<li><a href="index.php?page=backup">Backup</a></li>
											<li><a href="index.php?page=restore">Restore</a></li>
											<li><a href="index.php?page=grafik_dokumen"> Grafik Dokumen </a></li>


										</ul>
									</li>
								</ul>
							 <?php
							 }
							 ?> 
							</div>
						</div>
						<!-- /sidebar menu -->

						<!-- /menu footer buttons -->
						<div class="sidebar-footer hidden-small">
							<a data-toggle="tooltip" data-placement="top" title="" href="logout.php" data-original-title="Logout">
								<span class="glyphicon glyphicon-off"></span>
							</a>
						</div>
						<!-- /menu footer buttons -->
					</div>
				</div>

				<!-- top navigation -->
				<div class="top_nav">
					<div class="nav_menu">
						<nav>
							<div class="nav toggle">
								<a id="menu_toggle"><i class="fa fa-bars"></i></a>
							</div>

							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<img src="upload/user/<?php echo $_SESSION['foto'] ?>" alt=""><?php echo $_SESSION['fullname']; ?>
										<span class=" fa fa-angle-down"></span>
									</a>
									<ul class="dropdown-menu dropdown-usermenu pull-right">
										<li><a href="index.php?page=profil_user"> Profile</a></li>
										<li><a href="index.php?page=ganti_pass"> Ganti Password</a></li>
										<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- /top navigation -->
				
				<!-- page content -->
				<div class="right_col" role="main">
				<?php
				// GET PAGE
					if (isset($_GET['page'])) {
						if ($_GET['page']=="home") {
							include 'home.php';
						//surat_masuk
						}elseif ($_GET['page']=="surat_masuk") {
							include 'surat_masuk.php';   
						}elseif ($_GET['page']=="tambah_surat_masuk") {
							include 'tambah_surat_masuk.php';
						}elseif ($_GET['page']=="edit_dokumen_masuk") {
							include 'edit_dokumen_masuk.php';
						}elseif ($_GET['page']=="hapus_surat_masuk") {
							include 'hapus_surat_masuk.php';
						}elseif ($_GET['page']=="detail_dokumen_masuk") {
							include 'detail_dokumen_masuk.php';
						//jenis_dokumen
						}elseif ($_GET['page']=="jenis_dokumen") {
							include 'jenis_dokumen.php';
						}elseif ($_GET['page']=="tambah_jenis_dokumen") {
							include 'tambah_jenis_dokumen.php';
						}elseif ($_GET['page']=="detail_dokumen") {
							include 'detail_dokumen.php';
						}elseif ($_GET['page']=="jenis_dokumen") {
							include 'jenis_dokumen.php';
						}elseif ($_GET['page']=="edit_jenis_dokumen") {
							include 'edit_jenis_dokumen.php';
						}elseif ($_GET['page']=="hapus_jenis_dokumen") {
							include 'hapus_jenis_dokumen.php';
					/* }elseif ($_GET['page']=="cetak_disposisi") {
							include 'cetak_disposisi.php';
					/*penyusutan dokumen*/
						}elseif ($_GET['page']=="penyusutan_dokumen") {
							include 'penyusutan_dokumen.php';
						}elseif ($_GET['page']=="tambah_dokumen_penyusutan") {
							include 'tambah_dokumen_penyusutan.php';
						}elseif ($_GET['page']=="edit_dokumen_penyusutan") {
							include 'edit_dokumen_penyusutan.php';
						}elseif ($_GET['page']=="hapus_penyusutan_dokumen") {
							include 'hapus_penyusutan_dokumen.php';
						}elseif ($_GET['page']=="cetak_penyusutan_dokumen") {
							include 'cetak_penyusutan_dokumen.php';
					/*master Dokumen
					*/
						}elseif ($_GET['page']=="master_form") {
							include 'master_form.php';   
						}elseif ($_GET['page']=="export_master_form_xls_sm") {
							include 'export_master_form_xls_sm.php';
						}elseif ($_GET['page']=="tambah_master_form") {
							include 'tambah_master_form.php';
						}elseif ($_GET['page']=="edit_master_form") {
							include 'edit_master_form.php';
						}elseif ($_GET['page']=="hapus_master_form") {
							include 'hapus_master_form.php';
						//dokumen filling
						}elseif ($_GET['page']=="dokumen_filling") {
							include 'dokumen_filling.php';
						}elseif ($_GET['page']=="tambah_dokumen_filling") {
							include 'tambah_dokumen_filling.php';
						}elseif ($_GET['page']=="edit_dokumen_filling") {
							include 'edit_dokumen_filling.php';
						}elseif ($_GET['page']=="hapus_dokumen_filling") {
							include 'hapus_dokumen_filling.php';
						}elseif ($_GET['page']=="agd_dokumen_filling") {
							include 'agd_dokumen_filling.php';

						//index dokumen
						}elseif ($_GET['page']=="index_dokumen") {
							include 'index_dokumen.php';
						}elseif ($_GET['page']=="tambah_index_dokumen") {
							include 'tambah_index_dokumen.php';
						}elseif ($_GET['page']=="edit_index_dokumen") {
							include 'edit_index_dokumen.php';
						}elseif ($_GET['page']=="hapus_index_dokumen") {
							include 'hapus_index_dokumen.php';
						}elseif ($_GET['page']=="agd_index_dokumen") {
							include 'agd_index_dokumen.php';  		
						}elseif ($_GET['page']=="agd_index_dokumen") {
							include 'agd_index_dokumen.php';
						}elseif ($_GET['page']=="export_index_xls_sk") {
							include 'export_index_xls_sk.php';
						//surat_keluar 
						}elseif ($_GET['page']=="surat_keluar") {
							include 'surat_keluar.php';
						}elseif ($_GET['page']=="tambah_surat_keluar") {
							include 'tambah_surat_keluar.php';
						}elseif ($_GET['page']=="edit_surat_keluar") {
							include 'edit_surat_keluar.php';
						}elseif ($_GET['page']=="hapus_surat_keluar") {
							include 'hapus_surat_keluar.php';
						//Buku agenda
						}elseif ($_GET['page']=="agd_surat_masuk") {
							include 'agd_surat_masuk.php';
						}elseif ($_GET['page']=="agd_surat_keluar") {
							include 'agd_surat_keluar.php';
						//grafik dokumen
						}elseif ($_GET['page']=="grafik_dokumen") {
							include 'grafik_dokumen.php';
						//peminjaman dokumen
						}elseif ($_GET['page']=="peminjaman_dokumen") {
							include 'peminjaman_dokumen.php';
						}elseif ($_GET['page']=="tambah_peminjaman_dokumen") {
							include 'tambah_peminjaman_dokumen.php';
						}elseif ($_GET['page']=="edit_peminjaman_dokumen") {
							include 'edit_peminjaman_dokumen.php';
						}elseif ($_GET['page']=="hapus_peminjaman_dokumen") {
							include 'hapus_peminjaman_dokumen.php';
						}elseif ($_GET['page']=="cetak_peminjaman_dokumen") {
							include 'cetak_peminjaman_dokumen.php';
						}elseif ($_GET['page']=="cetak_peminjaman_dokumen_user") {
							include 'cetak_peminjaman_dokumen_user.php';


						//settings  
						}elseif ($_GET['page']=="users") {
							include 'users.php';
						}elseif ($_GET['page']=="tambah_users") {
							include 'tambah_users.php';
						}elseif ($_GET['page']=="edit_users") {
							include 'edit_users.php';
						}elseif ($_GET['page']=="hapus_users") {
							include 'hapus_users.php';
						}elseif ($_GET['page']=="backup") {
							include 'backup.php';
						}elseif ($_GET['page']=="restore") {
							include 'restore.php';
						}elseif ($_GET['page']=="ganti_pass") {
							include 'ganti_pass.php';
						//general 
						}elseif ($_GET['page']=="profil_user") {
							include 'profil_user.php';
						}
					}else {
						include 'home.php';
					}
				?>

			</div>
				<!-- /page content -->

				<!-- footer content -->
				
				<!-- /footer content -->
			</div>
		</div>

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>

		<!-- jQuery -->
		<script src="assets/template/vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="assets/template/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="assets/template/vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="assets/template/vendors/nprogress/nprogress.js"></script>
		<!-- Chart.js -->
		<script src="assets/template/vendors/Chart.js/dist/Chart.min.js"></script>
		<!-- jQuery Sparklines -->
		<script src="assets/template/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
		<!-- Data tables -->
		<script src="assets/template/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="assets/template/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<!-- morris.js -->
		<script src="assets/template/vendors/raphael/raphael.min.js"></script>
		<script src="assets/template/vendors/morris.js/morris.min.js"></script>
		<!-- bootstrap-progressbar -->
		<script src="assets/template/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<!-- Flot -->
		<script src="assets/template/vendors/Flot/jquery.flot.js"></script>
		<script src="assets/template/vendors/Flot/jquery.flot.pie.js"></script>
		<script src="assets/template/vendors/Flot/jquery.flot.time.js"></script>
		<script src="assets/template/vendors/Flot/jquery.flot.stack.js"></script>
		<script src="assets/template/vendors/Flot/jquery.flot.resize.js"></script>
		<!-- Flot plugins -->
		<script src="assets/template/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
		<script src="assets/template/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
		<script src="assets/template/vendors/flot.curvedlines/curvedLines.js"></script>
		<!-- DateJS -->
		<script src="assets/template/vendors/DateJS/build/date.js"></script>
		<!-- bootstrap-daterangepicker -->
		<script src="assets/template/vendors/moment/min/moment.min.js"></script>
		<script src="assets/template/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/template/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

		<!-- Custom Theme Scripts -->
		<script src="assets/template/build/js/custom.min.js"></script>
		<script>
			$(function(){
				$('#dokumen_masuk').DataTable()
				$('#dokumen_keluar').DataTable()
				$('#dokumen_filling').DataTable()
				$('#index_dokumen').DataTable()
				$('#peminjaman_dokumen').DataTable()
				$('#penyusutan_dokumen').DataTable()
				$('#user').DataTable()
				$('#agd_surat_masuk').DataTable()
				$('#').DataTable({
					'paging'      : true,
					'lengthChange': true,
					'searching'   : true,
					'ordering'    : true,
					'info'        : true,
					'autoWidth'   : false, 
				});
			});
			//datepicker
			$(document).ready(function () {
			$('#tanggal').datepicker({
				format: "dd-mm-yyyy",
				todayHighlight: true,
				});
			$('#tanggal2').datepicker({
				format: "dd-mm-yyyy",
				todayHighlight: true,
				});
			});
		</script>

		<script>
  $(function () {
    "use strict";
    <?php
    	//
          $count1a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='1'"));
          $count2a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='2'"));
          $count3a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='3'"));
          $count4a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='4'"));
          $count5a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='5'"));
          $count6a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='6'"));
          $count7a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='7'"));
          $count8a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='8'"));
          $count9a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='9'"));
          $count10a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='10'"));
          $count11a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='11'"));
          $count12a = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_masuk WHERE MONTH(tanggal_dok)='12'"));


          //menghitung jumlah dokumen masuk
          $count1b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='1'"));
          $count2b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='2'"));
          $count3b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='3'"));
          $count4b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='4'"));
          $count5b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='5'"));
          $count6b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='6'"));
          $count7b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='7'"));
          $count8b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='8'"));
          $count9b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='9'"));
          $count10b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='10'"));
          $count11b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='11'"));
          $count12b = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal_dok AS total FROM dokumen_keluar WHERE MONTH(tanggal_dok)='12'"));


          $count1c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='1'"));
          $count2c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='2'"));
          $count3c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='3'"));
          $count4c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='4'"));
          $count5c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='5'"));
          $count6c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='6'"));
          $count7c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='7'"));
          $count8c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='8'"));
          $count9c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='9'"));
          $count10c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='10'"));
          $count11c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='11'"));
          $count12c = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM dokumen_filling WHERE MONTH(tanggal)='12'"));



          $count1d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='1'"));
          $count2d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='2'"));
          $count3d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='3'"));
          $count4d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='4'"));
          $count5d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='5'"));
          $count6d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='6'"));
          $count7d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='7'"));
          $count8d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='8'"));
          $count9d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='9'"));
          $count10d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='10'"));
          $count11d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='11'"));
          $count12d = mysqli_num_rows(mysqli_query($connect, "SELECT tanggal AS total FROM index_dokumen WHERE MONTH(tanggal)='12'"));
    ?> 
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'chart',
      resize: true,
      data: [
        {y: 'Jan', a: '<?php echo $count1a ?>', b: '<?php echo $count1b ?>', c: '<?php echo $count1c ?>' , d: '<?php echo $count1d ?>'},
        {y: 'Feb', a: '<?php echo $count2a ?>', b: '<?php echo $count2b ?>', c: '<?php echo $count2c ?>' , d: '<?php echo $count2d ?>'},
        {y: 'Maret', a: '<?php echo $count3a ?>', b: '<?php echo $count3b ?>' , c: '<?php echo $count3c ?>' , d: '<?php echo $count3d ?>'},
        {y: 'April', a: '<?php echo $count4a ?>', b: '<?php echo $count4b ?>' , c: '<?php echo $count4c ?>', d: '<?php echo $count4d ?>'},
        {y: 'Mei', a: '<?php echo $count5a ?>', b: '<?php echo $count5b ?>' , c: '<?php echo $count5c ?>' , d: '<?php echo $count5d ?>'},
        {y: 'Juni', a: '<?php echo $count6a ?>', b: '<?php echo $count6b ?>' , c: '<?php echo $count6c ?>' , d: '<?php echo $count6d ?>'},
        {y: 'Juli', a: '<?php echo $count7a ?>', b: '<?php echo $count7b ?>' , c: '<?php echo $count7c ?>' , d: '<?php echo $count7d ?>'},
        {y: 'Agt', a: '<?php echo $count8a ?>', b: '<?php echo $count8b ?>' , c: '<?php echo $count8c ?>' , d: '<?php echo $count8d ?>'},
        {y: 'Sep', a: '<?php echo $count9a ?>', b: '<?php echo $count9b ?>' , c: '<?php echo $count9c ?>' , d: '<?php echo $count9d ?>'},
        {y: 'Okt', a: '<?php echo $count10a ?>', b: '<?php echo $count10b ?>' , c: '<?php echo $count10c ?>' , d: '<?php echo $count10d ?>'},
        {y: 'Nov', a: '<?php echo $count11a ?>', b: '<?php echo $count11b ?>' , c: '<?php echo $count11c ?>' , d: '<?php echo $count11d ?>'},
        {y: 'Des', a: '<?php echo $count12a ?>', b: '<?php echo $count12b ?>' , c: '<?php echo $count12c ?>' , d: '<?php echo $count12d ?>'}
      ],
      barColors: ['#26B99A', '#3498DB', '#DC143C', '#FF8C00' ],
      xkey: 'y',
      ykeys: ['a', 'b', 'c', 'd'],
      labels: ['dokumen_masuk', 'dokumen_keluar', 'dokumen_filling', 'index_dokumen'],
      hideHover: 'auto'
    });
  });
</script>
	
	</body>
</html>
