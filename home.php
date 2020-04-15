	<?php

		$query 	= "SELECT * FROM dokumen_masuk";
		$sql   	= mysqli_query($connect, $query);
		$count1	= mysqli_num_rows($sql); 

		$query 	= "SELECT * FROM dokumen_keluar";
		$sql   	= mysqli_query($connect, $query);
		$count2	= mysqli_num_rows($sql);  

		$query 	= "SELECT * FROM peminjaman_dokumen";
		$sql   	= mysqli_query($connect, $query);
		$count3	= mysqli_num_rows($sql);


		$query 	= "SELECT * FROM user";
		$sql   	= mysqli_query($connect, $query);
		$count4	= mysqli_num_rows($sql); 

		$query 	= "SELECT * FROM dokumen_filling";
		$sql   	= mysqli_query($connect, $query);
		$count6	= mysqli_num_rows($sql);

		$query 	= "SELECT * FROM index_dokumen";
		$sql   	= mysqli_query($connect, $query);
		$count7	= mysqli_num_rows($sql);

		$query 	= "SELECT * FROM dokumen_penyusutan";
		$sql   	= mysqli_query($connect, $query);
		$count8	= mysqli_num_rows($sql);



	?>
	<!-- Info Box -->





	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Dashboard</h3>
			</div>
		</div>	
		<div class="clearfix"></div>
		<div class="row top_tiles">
			<?php
							if($_SESSION['level'] == 'admin'){?>
			<a href="index.php?page=surat_masuk">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count1 ?></div>
						<h3>Dokumen Masuk</h3>
					</div>
				</div>
			</a>
			<a href="index.php?page=surat_keluar">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count2 ?></div>
						<h3>Dokumen Keluar</h3>
					</div>
				</div>
			</a>
			
			<a href="index.php?page=users">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-users"></i></div>
						<div class="count"><?php echo $count4 ?></div>
						<h3>Users account</h3>
					</div>
				</div>
			</a>
			<a href="index.php?page=dokumen_filling">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count6 ?></div>
						<h3>Dokumen Filling</h3>
					</div>
				</div>
			</a>
			<a href="index.php?page=penyusutan_dokumen">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count8 ?></div>
						<h3>Penyusutan Dokumen</h3>
					</div>
				</div>
			</a>

							<?php
							 }
							 ?> 
								
			<a href="index.php?page=index_dokumen">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count7 ?></div>
						<h3>Index Dokumen</h3>
					</div>
				</div>
			</a>
			<a href="index.php?page=peminjaman_dokumen">
				<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="tile-stats">
						<div class="icon"><i class="fa fa-envelope-o"></i></div>
						<div class="count"><?php echo $count3 ?></div>
						<h3>Peminjaman Dokumen</h3>
					</div>
				</div>
			</a>
		</div>
	</div>
	