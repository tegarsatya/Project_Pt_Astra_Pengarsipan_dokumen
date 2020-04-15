	<?php
		if (isset($_REQUEST['submit'])) {
			$id_dok			= $_POST['id_dok'];
			$nama_dok		= $_POST['nama_dok'];
			$jenis_dok		= $_POST['jenis_dok'];
			$tanggal		= InggrisTgl($_POST['tanggal']);
			$posisi_rak		= $_POST['posisi_rak'];

			$query 		= "INSERT INTO index_dokumen VALUES('$id_dok', '$nama_dok', '$jenis_dok',
			 '$tanggal','$posisi_rak')";
				$sql		= mysqli_query($connect, $query);
			if($sql){
			    echo  '<script language="javascript">
			    		window.alert("Data berhasil di simpan");
               		  	window.location.href="./index.php?page=index_dokumen";
              		  </script>';  
			}else{
				echo  '<script>
						window.alert("Data gagal di simpan");
					  </script>';
			}	
		
		}	
	?>	

	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Tambah Index Dokumen </h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Tambah Index Dokumen </h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!--Form tambah surat masuk -->
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Id Dokumen<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="id_dok" class="form-control col-md-7 col-xs-12"  required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Dokumen<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nama_dok" class="form-control col-md-7 col-xs-12"  required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Dokumen<span class="required">&nbsp; :</span></label>
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
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text"  name="tanggal" class="form-control has-feedback-left" id="tanggal">
                               		<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>	
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Posisi Rak<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="posisi_rak" class="form-control col-md-7 col-xs-12" required="required">
								</div>
							</div>												
							<div class="ln_solid"></div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-3">
									<button type="reset" class="btn btn-default">Reset</button>
  									<input type="submit" class="btn btn-success" value="Simpan" name="submit">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>