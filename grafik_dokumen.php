<div class="row">
		<div class="col-md-8 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Grafik Data <small>Persentase</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                   <div class="chart" id="chart" style="height: 100%; width: 100%"></div>
                </div>
            </div>
        </div>
<div class="col-md-4 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Log activity <small>Lates Update</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content bs-example-popovers">
                  <?php
                    $query = "SELECT * FROM dokumen_masuk ORDER BY id_dok DESC LIMIT 1";
                    $sql   = mysqli_query($connect, $query);
                    while ($data1 = mysqli_fetch_array($sql)) {
                  ?>
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      Perihal / Isi ringkas <strong><u><?php echo $data1['isi_ringkas'] ?></u></strong> Telah di tambahkan ke Dokumen Masuk.
                    </div>
                    <?php } ?>

                  <?php
                    $query = "SELECT * FROM dokumen_keluar ORDER BY id_dok DESC LIMIT 1";
                    $sql   = mysqli_query($connect, $query);
                    while ($data2 = mysqli_fetch_array($sql)) {
                  ?>                    
                   <div class="alert alert-info alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      Perihal / Isi ringkas <strong><u><?php echo $data2['isi_ringkas']; ?></u></strong> Telah ditambahkan ke Dokumen Keluar.
                    </div>
                    <?php } ?>

                    <?php
                    $query = "SELECT * FROM dokumen_filling ORDER BY id_dok DESC LIMIT 1";
                    $sql   = mysqli_query($connect, $query);
                    while ($data4 = mysqli_fetch_array($sql)) {
                  ?>
                    <div class="alert alert-danger  alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                       perihal / jenis_dokumen <strong><u><?php echo $data4['jenis_dok'] ?></u></strong> Telah ditambahkan ke dokumen filling.
                    </div>
                    <?php } ?>

                      <?php
                    $query = "SELECT * FROM index_dokumen ORDER BY id_dok DESC LIMIT 1";
                    $sql   = mysqli_query($connect, $query);
                    while ($data3 = mysqli_fetch_array($sql)) {
                  ?>
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      perihal / Index Dokumen <strong><u><?php echo $data3['jenis_dok'] ?></u></strong> telah ditambahkan ke index dokumen.
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
  </div>
    

