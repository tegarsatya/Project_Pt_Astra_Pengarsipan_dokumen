	<?php
		if (isset($_REQUEST['edit'])) {
			$id_dok			= $_POST['id_dok'];
			$nama_dok		= $_POST['nama_dok'];
			$jenis_dok		= $_POST['jenis_dok'];
			$tanggal	= InggrisTgl($_POST['tanggal']);
			$posisi_rak		=$_POST['posisi_rak'];

			//proses update
			
				$query = "SELECT * FROM index_dokumen WHERE id_dok='$_GET[id_dok]'";
				$sql   = mysqli_query($connect, $query);
				$data  = mysqli_fetch_array($sql);
			//jika filenya ada, hapus filenya
				//if (file_exists("upload/surat_keluar/".$data['file'])){
				//	unlink("upload/surat_keluar/".$data['file']);
				//}
			//jika mengubah file		
				$query 	= "UPDATE index_dokumen SET id_dok='$id_dok', nama_dok='$nama_dok', jenis_dok='$jenis_dok', tanggal='$tanggal', posisi_rak='$posisi_rak'  WHERE id_dok='$_GET[id_dok]'";
				$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
							  window.alert("Data berhasil di ubah")
	               	  		  window.location.href="./index.php?page=index_dokumen";
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
				<h3>Edit Index Dokumen</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Edit Index Dokumen</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!-- Form edit surat masuk -->
						<?php
							$query 	= "SELECT * FROM index_dokumen WHERE id_dok='$_GET[id_dok]'";
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
								<label class="control-label col-md-3 col-xs-12">Jenis Dokumen<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select class="form-control col-md-7 col-xs-12" name="jenis_dok" required="required">
										<option value="null">-- Pilih --</option>
								        <option>One Sheet One Engine</option>
								        <option>Teriyo</option>
								         <option>Capability Mesin</option>
							        </select>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Tanggal<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal" class="form-control has-feedback-left" id="tanggal" required="required" value="<?php echo IndonesiaTgl($data['tanggal']);?> ">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>	
								<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Posisi Rak<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="posisi_rak" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['posisi_rak'] ?>">
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