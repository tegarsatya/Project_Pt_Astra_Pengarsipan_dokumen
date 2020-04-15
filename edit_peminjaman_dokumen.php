	<?php
		if (isset($_REQUEST['edit'])) {
			$id_peminjaman	= $_POST['id_peminjaman'];
			$nama_peminjam	= $_POST['nama_peminjam'];
			$nama_dokumen	= $_POST['nama_dok'];
			$tanggal_pinjam	= InggrisTgl($_POST['tanggal_pinjam']);
			$tanggal_kembali= InggrisTgl($_POST['tanggal_kembali']);


			//proses update
				$query = "SELECT * FROM peminjaman_dokumen WHERE id='$_GET[id]'";
				$sql   = mysqli_query($connect, $query);
				$data  = mysqli_fetch_array($sql);
			//jika filenya ada, hapus filenya
			//jika mengubah file		
				$query 	= "UPDATE peminjaman_dokumen  SET id_peminjaman='$id_peminjaman', nama_peminjam='$nama_peminjam', nama_dokumen='$nama_dokumen', tanggal_pinjam='$tanggal_pinjam', tanggal_kembali='$tanggal_kembali' WHERE id='$_GET[id]'";
				$sql   	= mysqli_query($connect, $query);
				if ($sql) {
					echo '<script language="javascript">
							  window.alert("Data berhasil di ubah")
	               	  		  window.location.href="./index.php?page=peminjaman_dokumen";
              	  		  </script>';
				}else{
					echo mysqli_error($connect);
			
				}
			}
	?>	
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Edit Peminjaman Dokumen</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Edit Peminjaman Dokumen</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<?php
							$query 	= "SELECT * FROM peminjaman_dokumen WHERE id='$_GET[id]' ";
							$sql 	= mysqli_query($connect, $query);
							while ($data = mysqli_fetch_array($sql)) {
						?>	
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Id Peminjaman <span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="id_peminjaman" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['id_peminjaman'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Id Dokumen<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<select id="id" class="form-control">
										<option value="null">-- Pilih --</option>
										<?php
	 										$query	= "SELECT * FROM dokumen_filling ";
	 										$sql	= mysqli_query($connect, $query);
	 									    while ($data= mysqli_fetch_array($sql)){
	 									?>
										<option value="<?php echo $data['id_dok']; ?>"><?php echo $data['id_dok']; ?></option>
										<?php 
											}
										 ?>
									</select>
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Nama Peminjam<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nama_peminjam" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['nama_peminjam'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Nama Dokumen<span class="required">&nbsp; :
								</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" id="nama-dokumen" name="nama_dok" class="form-control col-md-7 col-xs-12" required="required" value="<?php echo $data['nama_dok'] ?>">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Tanggal Pinjam<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal_pinjam" class="form-control has-feedback-left" id="tanggal" required="required" value="<?php echo IndonesiaTgl($data['tanggal_pinjam']);?> ">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>	

							<div class="item form-group">
								<label class="control-label col-md-3 col-xs-12">Tanggal Kembali<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="tanggal_kembali" class="form-control has-feedback-left" id="tanggal2" required="required" value="<?php  echo IndonesiaTgl($data['tanggal_kembali']);?> ">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>	
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
					        <script src="assets/js/dokumen.js" type="text/javascript"> </script>
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