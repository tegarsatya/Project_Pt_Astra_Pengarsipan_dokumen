	<?php
		if (isset($_REQUEST['submit'])) {
			$id_penyusutan					= $_POST['id_penyusutan'];
			$nama_dokumen_penyusutan		= $_POST['nama_dokumen_penyusutan'];
			$tanggal_penyusutan				= InggrisTgl($_POST['tanggal_penyusutan']);

			$query 		= "INSERT INTO dokumen_penyusutan VALUES('$id_penyusutan', '$nama_dokumen_penyusutan',
			 '$tanggal_penyusutan')";
				$sql		= mysqli_query($connect, $query);
			if($sql){
			    echo  '<script language="javascript">
			    		window.alert("Data berhasil di simpan");
               		  	window.location.href="./index.php?page=penyusutan_dokumen";
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
				<h3>Tambah Dokumen Penyusutan</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Tambah Dokumen Pnyusutan </h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<!--Form tambah surat masuk -->
						<form class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Id Penyusutan<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="id_penyusutan" class="form-control col-md-7 col-xs-12"  required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Dokumen Penyusutan<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text" name="nama_dokumen_penyusutan" class="form-control col-md-7 col-xs-12"  required="required">
								</div>
							</div>
							<div class="item form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Penyusutan<span class="required">&nbsp; :</span></label>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<input type="text"  name="tanggal_penyusutan" class="form-control has-feedback-left" id="tanggal">
                               		<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>	
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