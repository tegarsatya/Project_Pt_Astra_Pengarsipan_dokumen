	<?php
		if (isset($_REQUEST['edit'])) {
			$id_form		= $_POST['id_form'];
			$nama_form		= $_POST['nama_form'];
			$uppload_form 	= $_FILES['uppload_form']['name'];
			$tmp			= $_FILES['uppload_form']['tmp_name'];
			$path			= "upload/master/".$uppload_form;
			//proses update
			if (move_uploaded_file($tmp, $path)) {
				$query = "SELECT * FROM master_form WHERE id_form='$_GET[id_form]'";
				$sql   = mysqli_query($connect, $query);
				$data  = mysqli_fetch_array($sql);
			//jika filenya ada, hapus filenya
				if (file_exists("upload/master/".$data['uppload_form'])){
					unlink("upload/master/".$data['uppload_form']);
				}
			//jika mengubah file
				$query 	= "UPDATE master_form SET id_form='$id_form', nama_form= '$nama_form', uppload_form='$uppload_form'  WHERE id_form='$_GET[id_form]'";
				$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
							  window.alert("Data berhasil di ubah")
	               	  		  window.location.href="./index.php?page=master_form";
              	  		  </script>';
				}else{
					echo '<script>
						   	  window.alert("Data gagal diubah");
			 			  </script>';
				}
			}else{
			//jika tidak mengubah file
			$query 	= "UPDATE master_form SET id_form='$id_form', nama_form= '$nama_form', uppload_form='$uppload_form'  WHERE id_form='$_GET[id_form]'";
			$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
						  window.alert("Data berhasil di ubah")
               	  		  window.location.href="./index.php?page=master_form";
              	  		  </script>';
				}else{
					echo '<script>
						  window.alert("Data gagal di ubah");
			 			  </script>';
				}
			}
		}
	?>
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Edit Master form</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Edit Master Form</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- Form edit surat masuk -->
						<?php
							$query 	= "SELECT * FROM master_form WHERE id_form='$_GET[id_form]'";
							$sql 	= mysqli_query($connect, $query);
							while ($data = mysqli_fetch_array($sql)) {
						?>
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Id Form<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="id_form" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['id_form'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Nama Form<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nama_form" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['nama_form'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Upload Form<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="uppload_form" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['uppload_form'] ?>">
								</div>
							</div>
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<button type="reset" class="btn btn-default">Reset</button>
									<input type="submit" class="btn btn-success" value="Simpan" name="edit">
								</div>
							</div>
						</form>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
