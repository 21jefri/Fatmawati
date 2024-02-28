<?php
include 'konek.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Member</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iofrm-theme9.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="assets/images/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="assets/images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="login1.php">Login</a><a href="" class="active">Register</a>
                        </div>
                        <form action="" method="post">
                        <input type="text" name="nm_member" class="form-control" placeholder="Nama Pegawai" required>
                        <input type="text" name="alamat_member" class="form-control" placeholder="Alamat" required>
                        <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="file" name="gambar" class="form-control" placeholder="Upload Gambar" required>
                        <input type="text" name="NIK" class="form-control" placeholder="NIK" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" name="submit" value="submit">Register</button>
                            </div>
                        </form>
                        <?php
if (isset($_POST['submit'])) {

    $nm_member = $_POST['nm_member'];
    $alamat_member = ucwords($_POST['alamat_member']);
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $gambar = $_POST['gambar'];
    $NIK = $_POST['NIK'];

    $insert = mysqli_query($conn, "INSERT INTO member VALUES (
             null,
                      '" . $nm_member . "',
                      '" . $alamat_member . "',
					  '" . $telepon . "',
					  '" . $email . "',
					  '" . $gambar . "',
                      '" . $NIK . "')
            ");
    if ($insert) {
        echo '<script>alert("registrasi member berhasil")</script>';
        echo '<script>window.location="login1.php";</script>';
    } else {
        echo 'gagal ' . mysqli_error($conn);
    }
}
?>
                        <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>


</html>



