<div class="page-wrapper p-4">
  <div class="card p-4" style="margin-top: 120px !important;">
    <form action="index.php?page=petugas/tambah" method="POST">
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Pegawai">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="mb-3">
        <label class="form-label">No Telephone</label>
        <input type="number" class="form-control" name="no" placeholder="No Aktif">
      </div>
      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" rows="5" class="form-control" placeholder="Alamat"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Nik</label>
        <input type="text" class="form-control" name="nik" placeholder="NIK Pegawai">
      </div>
      <div class="d-flex gap-1">
        <input type="hidden" name="submit" value="pass">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="index.php?page=petugas" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
    <?php
    include 'konek.php';
    if (@$_POST['submit']) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
      $no = $_POST['no'];
      $nik = $_POST['nik'];

      $insert = mysqli_query($conn, "INSERT INTO member VALUES (null,'" . $nama . "','" . $alamat . "','" . $no . "','" . $email . "','" . $nik . "')");
      if ($insert) {
        echo '<script>alert("Registrasi petugas baru berhasil")</script>';
        echo '<script>window.location="index.php?page=petugas";</script>';
      } else {
        echo 'gagal ' . mysqli_error($conn);
      }
    }
    ?>
  </div>
</div>