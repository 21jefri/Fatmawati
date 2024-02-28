<div class="page-wrapper mt-5" style="margin-top: 120px !important;">
  <h4>Data Petugas</h4>
  <div class="row mt-5">
    <div class="col-xl-12 d-flex">
      <div class="card flex-fill student-space comman-shadow">
        <div class="card-header d-flex align-items-center" style="border-bottom: 1px solid #f3f3f3; justify-content: space-between;">
          <h5 class="card-title">Data Petugas</h5>
          <a href="index.php?page=petugas/tambah" class="btn btn-primary">Tambah Petugas</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table star-student table-hover table-center table-borderless table-striped">
              <thead class="thead-light">
                <tr>
                  <th>ID Petugas</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Nik</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "select * from member";
                $row = $config->prepare($sql);
                $row->execute();
                foreach ($row as $isi) {
                ?>
                  <tr>
                    <td class="text-nowrap">
                      <div><?php echo $isi['id_member']; ?></div>
                    </td>
                    <td class="text-nowrap">
                      <div>
                        <?php echo $isi['nm_member']; ?>
                      </div>
                    </td>
                    <td><?php echo $isi['email'] ?></td>
                    <td><?php echo $isi['NIK'] ?></td>
                    <td class="d-flex gap-2">
                      <a href="index.php?page=petugas/edit&id=<?php echo $isi['id_member'] ?>" class="btn btn-warning text-white">Edit</a>
                      <form action="index.php?page=petugas" method="POST">
                        <input type="hidden" name="hapus" value="<?php echo $isi['id_member'] ?>">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                      </form>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
          <?php
          include 'konek.php';
          if (isset($_POST['hapus'])) {
            $idPetugas = $_POST['hapus'];

            $penjualan = mysqli_query($conn, "SELECT * FROM penjualan WHERE id_member='" . $idPetugas . "'");
            if (mysqli_num_rows($penjualan) > 0) {
              echo '<script>alert("Akun ini sedang di gunakan data penjualan")</script>';
            }

            $nota = mysqli_query($conn, "SELECT * FROM nota WHERE id_member='" . $idPetugas . "'");
            if (mysqli_num_rows($nota) > 0) {
              echo '<script>alert("Akun ini sedang di gunakan data nota")</script>';
            }

            $delete = mysqli_query($conn, "DELETE FROM member WHERE id_member='" . $idPetugas . "'");
            echo '<script>window.location="index.php?page=petugas";</script>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>