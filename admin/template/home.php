<h3>Dashboard</h3>
<br />
<?php
$sql = "select * from produk where stok <= 3";
$row = $config->prepare($sql);
$row->execute();
$r = $row->rowCount();
if ($r > 0) {
?>
<?php
  echo "
		<div class='alert alert-warning'>
			<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
			<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Tabel Barang <i class='fa fa-angle-double-right'></i></a></span>
		</div>
		";
}
?>
<?php $hasil_barang = $lihat->barang_row(); ?>
<?php $hasil_kategori = $lihat->kategori_row(); ?>
<?php $stok = $lihat->barang_stok_row(); ?>
<?php $jual = $lihat->jual_row(); ?>

<!-- template -->
<div class="page-wrapper" style="transform: translateY(-50px);">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-sub-header">
            <h3 class="page-title">Welcome Admin!</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Nama Barang</h6>
                <h3><?php echo number_format($hasil_barang); ?></h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Stok Barang</h6>
                <h3><?php echo number_format($stok['jml']); ?></h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-02.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Telah Terjual</h6>
                <h3><?php echo number_format($jual['stok']); ?></h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 d-flex">
        <div class="card bg-comman w-100">
          <div class="card-body">
            <div class="db-widgets d-flex justify-content-between align-items-center">
              <div class="db-info">
                <h6>Kategori Barang</h6>
                <h3><?php echo number_format($hasil_kategori); ?></h3>
              </div>
              <div class="db-icon">
                <img src="assets/img/icons/dash-icon-04.svg" alt="Dashboard Icon" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-12 d-flex">
        <div class="card flex-fill student-space comman-shadow">
          <div class="card-header d-flex align-items-center" style="border-bottom: 1px solid #f3f3f3;">
            <h5 class="card-title">Data Produk</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table star-student table-hover table-center table-borderless table-striped">
                <thead class="thead-light">
                  <tr>
                    <th>ID Barang</th>
                    <th>Kategori</th>
                    <th class="text-center">Nama Barang</th>
                    <th class="text-center">Merk</th>
                    <th class="text-end">Stok</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include '../../konek.php';
                  $sql = "select * from produk";
                  $row = $config->prepare($sql);
                  $row->execute();
                  foreach ($row as $isi) {
                  ?>
                    <tr>
                      <td class="text-nowrap">
                        <div><?php echo $isi['id_barang']; ?></div>
                      </td>
                      <td class="text-nowrap">
                        <div>
                          <?php
                          $idkategori = $isi['id_kategori'];
                          $sqlkategori = "select * from kategori where id_kategori='$idkategori'";
                          $kategori = $config->prepare($sqlkategori);
                          $kategori->execute();
                          foreach ($kategori as $k) {
                            echo $k['nama_kategori'];
                          }                          
                          ?>
                        </div>
                      </td>
                      <td class="text-center"><?php echo $isi['nama_barang'] ?></td>
                      <td class="text-center"><?php echo $isi['merk'] ?></td>
                      <td class="text-end">
                        <div><?php echo $isi['stok'] ?></div>
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
    <footer>
      <p>COPYRIGHT © 2023 KASIR</p>
    </footer>
  </div>

</div>

<!-- <div class="row">
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-cubes"></i> Nama Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_barang); ?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-chart-bar"></i> Stok Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($stok['jml']); ?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=barang'>Tabel
                    Barang <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fas fa-upload"></i> Telah Terjual</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($jual['stok']); ?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=laporan'>Tabel
                    laporan <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h6 class="pt-2"><i class="fa fa-bookmark"></i> Kategori Barang</h6>
            </div>
            <div class="card-body">
                <center>
                    <h1><?php echo number_format($hasil_kategori); ?></h1>
                </center>
            </div>
            <div class="card-footer">
                <a href='index.php?page=kategori'>Tabel
                    Kategori <i class='fa fa-angle-double-right'></i></a>
            </div>
        </div>
    </div>
</div> -->