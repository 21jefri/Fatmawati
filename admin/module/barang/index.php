        <div class="page-wrapper">
            <h4>Data Barang</h4>
            <br />
            <?php if (isset($_GET['success-stok'])) { ?>
                <div class="alert alert-success">
                    <p>Tambah Stok Berhasil !</p>
                </div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success">
                    <p>Tambah Data Berhasil !</p>
                </div>
            <?php } ?>
            <?php if (isset($_GET['remove'])) { ?>
                <div class="alert alert-danger">
                    <p>Hapus Data Berhasil !</p>
                </div>
            <?php } ?>

            <?php
            $sql = " select * from produk where stok <= 3";
            $row = $config->prepare($sql);
            $row->execute();
            $r = $row->rowCount();
            if ($r > 0) {
                echo "
				<div class='alert alert-warning'>
					<span class='glyphicon glyphicon-info-sign'></span> Ada <span style='color:red'>$r</span> barang yang Stok tersisa sudah kurang dari 3 items. silahkan pesan lagi !!
					<span class='pull-right'><a href='index.php?page=barang&stok=yes'>Cek Barang <i class='fa fa-angle-double-right'></i></a></span>
				</div>
				";
            }
            ?>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-primary btn-md mr-2" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i> Insert Data</button>
            <!-- <a href="index.php?page=barang&stok=yes" class="btn btn-warning btn-md mr-2">
            <i class="fa fa-list"></i> Sortir Stok Kurang</a> -->
            <a href="index.php?page=barang" class="btn btn-success btn-md">
                <i class="fa fa-refresh"></i> Refresh Data</a>
            <div class="clearfix"></div>
            <br />
            <!-- view barang -->
            <div class="card card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-sm" id="example1">
                        <thead>
                            <tr style="background:#DFF0D8;color:#333;">
                                <th>No.</th>
                                <th>ID Barang</th>
                                <th>Kategori</th>
                                <th>Nama Barang</th>
                                <th>Merk</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th>Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $totalBeli = 0;
                            $totalJual = 0;
                            $totalStok = 0;
                            if ($_GET['stok'] == 'yes') {
                                $hasil = $lihat->barang_stok();
                            } else {
                                $hasil = $lihat->barang();
                            }
                            $no = 1;
                            foreach ($hasil as $isi) {
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $isi['id_barang']; ?></td>
                                    <td><?php echo $isi['nama_kategori']; ?></td>
                                    <td><?php echo $isi['nama_barang']; ?></td>
                                    <td><?php echo $isi['merk']; ?></td>
                                    <td>
                                        <?php if ($isi['stok'] == '0') { ?>
                                            <button class="btn btn-danger"> Habis</button>
                                        <?php } else { ?>
                                            <?php echo $isi['stok']; ?>
                                        <?php } ?>
                                    </td>
                                    <td>Rp.<?php echo number_format($isi['harga_beli']); ?>,-</td>
                                    <td>Rp.<?php echo number_format($isi['harga_jual']); ?>,-</td>
                                    <td> <?php echo $isi['satuan_barang']; ?></td>
                                    <td>
                                        <?php if ($isi['stok'] <= '3') { ?>
                                            <form method="POST" action="fungsi/edit/edit.php?stok=edit">
                                                <input type="text" name="restok" class="form-control">
                                                <input type="hidden" name="id" value="<?php echo $isi['id_barang']; ?>" class="form-control">
                                                <button class="btn btn-primary btn-sm">
                                                    Restok
                                                </button>
                                                <a href="fungsi/hapus/hapus.php?produk=hapus&id=<?php echo $isi['id_barang']; ?>" onclick="javascript:return confirm('Hapus Data barang ?');">
                                                    <button class="btn btn-danger btn-sm">Hapus</button></a>
                                            </form>
                                        <?php } else { ?>
                                            <a href="index.php?page=barang/details&barang=<?php echo $isi['id_barang']; ?>"><button class="btn btn-primary btn-xs">Details</button></a>

                                            <a href="index.php?page=barang/edit&barang=<?php echo $isi['id_barang']; ?>"><button class="btn btn-warning btn-xs">Edit</button></a>
                                            <a href="fungsi/hapus/hapus.php?produk=hapus&id=<?php echo $isi['id_barang']; ?>" onclick="javascript:return confirm('Hapus Data barang ?');"><button class="btn btn-danger btn-xs">Hapus</button></a>
                                        <?php } ?>
                                </tr>
                            <?php
                                $no++;
                                $totalBeli += $isi['harga_beli'] * $isi['stok'];
                                $totalJual += $isi['harga_jual'] * $isi['stok'];
                                $totalStok += $isi['stok'];
                            }
                            ?>
                        </tbody>
                        <!-- <tfoot>
                        <tr>
                            <th colspan="5">Total </td>
                            <th><?php echo $totalStok; ?></td>
                            <th>Rp.<?php echo number_format($totalBeli); ?>,-</td>
                            <th>Rp.<?php echo number_format($totalJual); ?>,-</td>
                            <th colspan="2" style="background:#ddd"></th>
                        </tr>
                    </tfoot> -->
                    </table>
                </div>
            </div>
            <!-- end view barang -->
            <!-- tambah barang MODALS-->
            <!-- Modal -->
            <div class="modal fade" tabindex="-1" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
                        </div>
                        <form action="fungsi/tambah/tambah.php?produk=tambah" method="POST">
                            <div class="modal-body">
                                <div class="">
                                    <?php
                                    $format = $lihat->barang_id();
                                    ?>
                                    <label for="" class="form-label">ID Barang</label>
                                    <input type="text" readonly="readonly" required value="<?php echo $format; ?>" class="form-control" name="id">
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Kategori</label>
                                    <select name="kategori" class="form-control" required>
                                        <option value="#">Pilih Kategori</option>
                                        <?php $kat = $lihat->kategori();
                                        foreach ($kat as $isi) { ?>
                                            <option value="<?php echo $isi['id_kategori']; ?>">
                                                <?php echo $isi['nama_kategori']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Nama Barang</label>
                                    <input type="text" placeholder="Nama Barang" required class="form-control" name="nama">
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Merk Barang</label>
                                    <input type="text" placeholder="Merk Barang" required class="form-control" name="merk">
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Harga Beli</label>
                                    <input type="number" placeholder="Harga beli" required class="form-control" name="beli">
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Harga Jual</label>
                                    <input type="number" placeholder="Harga Jual" required class="form-control" name="jual">
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Satuan Barang</label>
                                    <select name="satuan" class="form-control" required>
                                        <option value="#">Pilih Satuan</option>
                                        <option value="PCS">PCS</option>
                                    </select>
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Stok</label>
                                    <input type="number" required Placeholder="Stok" class="form-control" name="stok">
                                </div>
                                <div class="">
                                    <label for="" class="form-label">Tanggal Input</label>
                                    <input type="text" required readonly="readonly" class="form-control" value="<?php echo date("j F Y, G:i"); ?>" name="tgl">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>