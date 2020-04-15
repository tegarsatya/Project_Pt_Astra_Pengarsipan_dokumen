	<?php
		if (isset($_REQUEST['edit'])) {
			$id_penyusutan					= $_POST['id_penyusutan'];
			$nama_dokumen_penyusutan		= $_POST['nama_dokumen_penyusutan'];
			$tanggal_penyusutan				= InggrisTgl($_POST['tanggal_penyusutan']);
			//proses update
			
				$query = "SELECT * FROM dokumen_penyusutan WHERE tanggal_penyusutan='$_GET[tanggal_penyusutan]'";
				$sql   = mysqli_query($connect, $query);
				$data  = mysqli_fetch_array($sql);
			//jika filenya ada, hapus filenya
				//if (file_exists("upload/surat_keluar/".$data['file'])){
				//	unlink("upload/surat_keluar/".$data['file']);
				//}
			//jika mengubah file		
				$query 	= "UPDATE dokumen_penyusutan SET id_penyusutan='$id_penyusutan', nama_dokumen_penyusutan='$nama_dokumen_penyusutan',  tanggal_penyusutan='$tanggal_penyusutan'  WHERE tanggal_penyusutan='$_GET[tanggal_penyusutan]'";
				$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
							  window.alert("Data berhasil di ubah")
	               	  		  window.location.href="./index.php?page=penyusutan_dokumen";
              	  		  </script>';
				}else{
					echo '<script>
						   	  window.alert("Data gagal diubah");
			 			  </script>';
				}
			}

			//jika tidak mengubah file
	?>	
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Edit Dokumen Penyusutan</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Edit Dokumen Penyusutan</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- Form edit surat masuk -->
						<?php
							$query 	= "SELECT * FROM dokumen_penyusutan WHERE tanggal_penyusutan='$_GET[tanggal_penyusutan]'";
							$sql 	= mysqli_query($connect, $query);
							while ($data = mysqli_fetch_array($sql)) {
						?>	
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Id Dokumen Penyusutan<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="id_penyusutan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['id_penyusutan'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Nama Dokumen Penyusutan<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nama_dokumen_penyusutan" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['nama_dokumen_penyusutan'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Tanggal Penyusutan<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal_penyusutan" class="form-control has-feedback-left" id="tanggal" required="required" value="<?php echo IndonesiaTgl($data['tanggal_penyusutan']);?> ">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
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