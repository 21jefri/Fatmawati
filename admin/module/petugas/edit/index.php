<div class="page-wrapper p-4">
  <div class="card p-4" style="margin-top: 120px !important;">
    <?php
    include 'konek.php';
    $idPetugas = $_GET['id'];
    $sql = "select * from member where id_member='$idPetugas'";
    $row = $config->prepare($sql);
    $row->execute();
    foreach ($row as $isi) {
    ?>
      <form action="index.php?page=petugas/edit&id=<?php echo $idPetugas ?>" method="POST">
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" value="<?php echo $isi['nm_member'] ?>" name="nama" placeholder="Nama Pegawai">
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" value="<?php echo $isi['email'] ?>" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
          <label class="form-label">No Telephone</label>
          <input type="number" class="form-control" value="<?php echo $isi['telepon'] ?>" name="no" placeholder="No Aktif">
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea name="alamat" rows="5" class="form-control" placeholder="Alamat"><?php echo $isi['alamat_member'] ?></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Nik</label>
          <input type="text" class="form-control" value="<?php echo $isi['NIK'] ?>" name="nik" placeholder="NIK Pegawai">
        </div>
        <div class="d-flex gap-1">
          <input type="hidden" name="submit" value="pass">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="index.php?page=petugas" class="btn btn-secondary">Cancel</a>
        </div>
      </form>
    <?php
    }
    ?>
    <?php
    include 'konek.php';
    if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
      $no = $_POST['no'];
      $nik = $_POST['nik'];

      $update = mysqli_query($conn, "UPDATE member SET nm_member = '" . $nama . "', alamat_member = '" . $alamat . "', telepon = '" . $no . "', email = '" . $email . "', NIK = '" . $nik . "' WHERE id_member = '" . $idPetugas . "'");

      if ($update) {
        echo '<script>alert("Data petugas berhasil diperbarui")</script>';
        echo '<script>window.location="index.php?page=petugas";</script>';
      } else {
        echo 'gagal ' . mysqli_error($conn);
      }
    }
    ?>

  </div>
</div>