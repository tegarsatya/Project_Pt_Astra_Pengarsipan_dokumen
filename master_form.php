
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Master Form</h3>
			</div>
		</div>
		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<form>
						<h2>Master Form</h2>&nbsp; &nbsp;
							<a href="export_master_form_xls_sm.php" type="submit" name="xls" class="btn btn-success"><i class="fa fa-download"></i> Export All Data To Excel Mater Form</a>
						<a href="index.php?page=tambah_master_form" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Master Form</a>
						</form>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
							<br><br>
						</form>
						<table id="dokumen_masuk" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 12px;">
									<th width="1" style="vertical-align: middle;"><center>No</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Id Form </center></th>
 									<th width="1" style="vertical-align: middle;"><center>Nama Form</center></th>
 									<th width="1" style="vertical-align: middle;"> <center> Upload master Form</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Action</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM master_form";
 										$sql	= mysqli_query($connect, $query);
 									    while ($data= mysqli_fetch_array($sql)){
 									?>
									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['id_form'] ?><br> </td>
 									<td width="1" style="vertical-align: middle;"><center><?php echo $data['nama_form'] ?><br> </center></td>
 									<td width="1" style="vertical-align: middle;"><center><a href="upload/master/<?php echo $data['uppload_form']?>" class="btn btn-default btn-xs fa fa-download">&nbsp;<?php echo $data['uppload_form']; ?> </a></center>
 									</td>
 									<td>
 										<center>
 											<a href="index.php?page=edit_master_form&id_form=<?php echo $data['id_form']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<a href="index.php?page=hapus_master_form&id_form=<?php echo $data['id_form'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>

 											<?php  if($_SESSION['level']== 'admin') {?>
 											<?php } ?>

 										</center>
 									</td>
 								</tr>
 								<?php } ?>
 							</tbody>
 						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
