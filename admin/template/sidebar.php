<?php
$id = $_SESSION['admin']['id_member'];
$hasil_profil = $lihat->member_edit($id);
?>
<!-- bawaan -->
<!-- Sidebar -->
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow d-none">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>
      <h5 class="d-lg-block d-none mt-2"><b><?php echo $toko['nama_toko']; ?>, <?php echo $toko['alamat_toko']; ?></b></h5>
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
        <!-- Topbar Search -->
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="img-profile rounded-circle" src="assets/img/user/<?php echo $hasil_profil['gambar']; ?>">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small ml-2"><?php echo $hasil_profil['nm_member']; ?></span>
            <i class="fas fa-angle-down"></i>
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="index.php?page=user">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout.php">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- End of Topbar -->
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- bawaan -->
      <!-- template -->
      <!-- <div class="main-wrapper"> -->
      <div class="header" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px; z-index: 99999;">
        <div class="header-left">
          <a href="index.html" class="logo" style="display: flex; align-items: center; gap: 5px; transform: translateY(-3px);">
            <span style="font-family: cursive; font-weight: 900; font-size: 32px; color: black; letter-spacing: -1px;">Kasir</span><span style="font-family: cursive; font-weight: 900; font-size: 32px;color: blue; letter-spacing: -1px;">Fatmawati</span>
          </a>
          <a href="index.html" class="logo logo-small">
            <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30" />
          </a>
        </div>

        <a class="mobile_btn" id="mobile_btn">
          <i class="fas fa-bars"></i>
        </a>
      </div>

      <div class="sidebar" id="sidebar" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="menu-title">
                <span>Main Menu</span>
              </li>
              <li class="submenu">
                <a href="index.php"><i class="feather-home"></i> <span> Dashboard</span></a>
                <ul>
                  <li>
                    <a href="index.html" class="active">Admin Dashboard</a>
                  </li>
                  <li>
                    <a href="teacher-dashboard.html">Teacher Dashboard</a>
                  </li>
                  <li>
                    <a href="student-dashboard.html">Student Dashboard</a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="index.php?page=barang"><i class="feather-box"></i> <span> Produk</span></a>
                <ul>
                  <li>
                    <a href="index.html" class="active">Admin Dashboard</a>
                  </li>
                  <li>
                    <a href="teacher-dashboard.html">Teacher Dashboard</a>
                  </li>
                  <li>
                    <a href="student-dashboard.html">Student Dashboard</a>
                  </li>
                </ul>
              </li>
              <li class="submenu">
                <a href="index.php?page=kategori"><i class="feather-grid"></i></i> <span> Kategori</span></a>
              </li>
              <li class="submenu">
                <a href="index.php?page=jual"><i class="feather-shopping-cart"></i></i>
                  <span> Keranjang</span></a>
              </li>
              <li class="submenu">
                <a href="logout.php"><i class="feather-log-out text-danger"></i>
                  <span class="text-danger"> Logout</span></a>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <!-- </div> -->