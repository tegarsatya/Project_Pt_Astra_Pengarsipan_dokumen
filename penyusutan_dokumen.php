
 	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3> Penyusutan Dokumen</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2>Form Penyusutan Dokumen </h2>&nbsp; &nbsp;<a href="index.php?page=tambah_dokumen_penyusutan" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Penyusutan Dokumen</a>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="penyusutan_dokumen" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 13px;">
 									<th width="1" style="vertical-align: middle;"><center>No<center></th>
 									<th width="1" style="vertical-align: middle;"><center>Id_Penyusutan</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Nama Dokumen Penyusutan</center></th>
 									<th width="1" style="vertical-align: middle;"><center> Tanggal Dokumen Penyusutan</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Action</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM dokumen_penyusutan";
 										$sql	= mysqli_query($connect, $query);
 										while ($data= mysqli_fetch_array($sql)) {
 									?>
 									<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td width="1" style="vertical-align: middle;"><center><?php echo $data['id_penyusutan']; ?></center></td>
 									<td width="1" style="vertical-align: middle;"><center><?php echo $data['nama_dokumen_penyusutan'] ?><br> </center></td>
 									 <td width="1" style="vertical-align: middle;"><center><?php echo IndonesiaTgl($data['tanggal_penyusutan']) ?></center></td>
 									<td>
 										<center>
 											<a href="index.php?page=edit_dokumen_penyusutan&tanggal_penyusutan=<?php echo $data['tanggal_penyusutan']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<a href="index.php?page=hapus_penyusutan_dokumen&tanggal_penyusutan=<?php echo $data['tanggal_penyusutan'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
 											<?php  if($_SESSION['level']== 'admin') {?>
 											<a href="cetak_penyusutan_dokumen.php?tanggal_penyusutan=<?php echo $data['tanggal_penyusutan']; ?>" class="btn btn-success" title="Print" type="submit" target="_blank" name="cetak"><i class="fa fa-print"></i></a>
 											<?php } ?>

 										</center>
 									</td>
 								</tr>
 								<?php 
 									}
 								?>
 							</tbody>
 						</table>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>