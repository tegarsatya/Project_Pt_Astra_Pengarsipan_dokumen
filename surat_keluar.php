
 	<div class="">
 		<div class="page-title">
 			<div class="title_left">
 				<h3> Dokumen Keluar</h3>
 			</div>
 		</div>
 		<div class="clearfix"></div>

 		<div class="row">
 			<div class="col-md-12 col-sm-12 col-xs-12">
 				<div class="x_panel">
 					<div class="x_title">
 						<h2>Data Dokumen Keluar</h2>&nbsp; &nbsp;<a href="index.php?page=tambah_surat_keluar" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Dokumen Keluar</a>
 						<ul class="nav navbar-right panel_toolbox">
 							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
 						</ul>
 						<div class="clearfix"></div>
 					</div>
 					<div class="x_content">
 						<table id="dokumen_keluar" class="table table-striped table-bordered table-hover">
 							<thead>
 								<tr style="font-size: 13px;">
                  					<th width="1" style="vertical-align: middle;"><center>No</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Id Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><br><center>Nama Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Jenis Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Isi Ringkas,<br>File</center></th>
 									<th width="1" style="vertical-align: middle;"><center> Tanggal Dokumen</center></th>
 									<th width="1" style="vertical-align: middle;"><center>Action</center></th>
 								</tr>
 							</thead>
 							<tbody>
 								<tr>
 									<?php
 										$no=1;
 										$query	= "SELECT * FROM dokumen_keluar";
 										$sql	= mysqli_query($connect, $query);
 										while ($data= mysqli_fetch_array($sql)) {
 									?>
                 					<td width="1" style="vertical-align: middle;"><?php echo $no++; ?></td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['id_dok'] ?><br></td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['nama_dok'] ?><br> </td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['jenis_dok'] ?></td>
 									<td width="1" style="vertical-align: middle;"><?php echo $data['isi_ringkas'] ?> <br> <b>FILE :</b>
 										<a href="upload/surat_keluar/<?php echo $data['file']?>" class="btn btn-default btn-xs fa fa-download">&nbsp;<?php echo $data['file']; ?></a>
 									</td>
 									 <td width="1" style="vertical-align: middle;"><?php echo IndonesiaTgl($data['tanggal_dok']) ?></td>
 									<td>
 										<center>
 											<a href="index.php?page=edit_surat_keluar&id_dok=<?php echo $data['id_dok']; ?>" class="btn btn-warning" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
 											<a href="index.php?page=hapus_surat_keluar&id_dok=<?php echo $data['id_dok'] ?>" class="btn btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></a>
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
