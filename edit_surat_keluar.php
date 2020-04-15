	<?php
		if (isset($_REQUEST['edit'])) {
			$id_dok			= $_POST['id_dok'];
			$nama_dok		= $_POST['nama_dok'];
			$jenis_dok		= $_POST['jenis_dok'];
			$tanggal_dok	= InggrisTgl($_POST['tanggal_dok']);
			$isi_ringkas	= $_POST['isi_ringkas'];
			$file 			= $_FILES['file']['name'];
			$tmp			= $_FILES['file']['tmp_name'];
			$path			= "upload/surat_keluar/".$file;

			//proses update
			if (move_uploaded_file($tmp, $path)) {
				$query = "SELECT * FROM dokumen_keluar WHERE id_dok='$_GET[id_dok]'";
				$sql   = mysqli_query($connect, $query);
				$data  = mysqli_fetch_array($sql);
			//jika filenya ada, hapus filenya
				if (file_exists("upload/surat_keluar/".$data['file'])){
					unlink("upload/surat_keluar/".$data['file']);
				}
			//jika mengubah file		
				$query 	= "UPDATE dokumen_keluar SET id_dok='$id_dok', nama_dok='$nama_dok', jenis_dok='$jenis_dok', tanggal_dok='$tanggal_dok',  isi_ringkas='$isi_ringkas', file='$file' WHERE id_dok='$_GET[id_dok]'";
				$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
							  window.alert("Data berhasil di ubah")
	               	  		  window.location.href="./index.php?page=surat_keluar";
              	  		  </script>';
				}else{
					echo '<script>
						   	  window.alert("Data gagal diubah");
			 			  </script>';
				}
			}else{
			//jika tidak mengubah file
				$query 	= "UPDATE dokumen_keluar SET id_dok='$id_dok', nama_dok='$Snama_dok', jenis_dok='$jenis_dok', tanggal_dok='$tanggal_dok',  isi_ringkas='$isi_ringkas', file='$file' WHERE id_dok='$_GET[id_dok]'";
				$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
						  window.alert("Data berhasil di ubah")
               	  		  window.location.href="./index.php?page=surat_keluar";
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
				<h3>Edit Dokumen Keluar</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Edit Dokumen Keluar</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- Form edit surat masuk -->
						<?php
							$query 	= "SELECT * FROM dokumen_keluar WHERE id_dok='$_GET[id_dok]'";
							$sql 	= mysqli_query($connect, $query);
							while ($data = mysqli_fetch_array($sql)) {
						?>	
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Id Dokumen<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="id_dok" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['id_dok'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Nama Dokumen<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nama_dok" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['nama_dok'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Jenis Dokumen<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select class="form-control col-md-7 col-xs-12" name="jenis_dok" required="required">
										<option value="null">-- Pilih --</option>
								        <option>Urgent</option>
								        <option>No Urgent</option>
							        </select>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Tanggal Dokumen<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal_dok" class="form-control has-feedback-left" id="tanggal" required="required" value="<?php echo IndonesiaTgl($data['tanggal_dok']);?> ">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>	
							<div class="item form-group">
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Isi Ringkas<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<textarea name="isi_ringkas" class="form-control col-md-7 col-xs-12" required="required"><?php echo $data['isi_ringkas'] ?></textarea>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">File<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="file" name="file" class="form-control col-md-7 col-xs-12"  value="<?php echo $data['file'] ?>">
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