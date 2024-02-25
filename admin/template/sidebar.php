
<?php
$id = $_SESSION['admin']['id_member'];
$hasil_profil = $lihat->member_edit($id);
?>
<!-- bawaan -->
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-cash-register"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Aplikasi Kasir<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <!-- <div class="sidebar-heading">
           Master 
       </div> -->
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="index.php?page=barang">Barang</a>
                <a class="collapse-item" href="index.php?page=kategori">Kategori</a>
                <!-- <a class="collapse-item" href="index.php?page=user">User</a> -->
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
            aria-controls="collapse3">
            <i class="fas fa-fw fa-desktop"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                <a class="collapse-item" href="index.php?page=jual">Transaksi Jual</a>
                <a class="collapse-item" href="index.php?page=laporan">Laporan Penjualan</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="index.php?page=pengaturan">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Pengaturan Toko</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle"
                            src="assets/img/user/<?php echo $hasil_profil['gambar']; ?>">
                        <span
                            class="mr-2 d-none d-lg-inline text-gray-600 small ml-2"><?php echo $hasil_profil['nm_member']; ?></span>
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
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
      <div class="header">
      <div class="header-left">
        <a href="index.html" class="logo">
          <img src="assets/img/logo.png" alt="Logo" />
        </a>
        <a href="index.html" class="logo logo-small">
          <img
            src="assets/img/logo-small.png"
            alt="Logo"
            width="30"
            height="30"
          />
        </a>
      </div>

      <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
          <i class="fas fa-bars"></i>
        </a>
      </div>

      <div class="top-nav-search">
        <form>
          <input type="text" class="form-control" placeholder="Search here" />
          <button class="btn" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>

      <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
      </a>

      <ul class="nav user-menu">

        <li class="nav-item dropdown has-arrow new-user-menus">
          <a
            href="#"
            class="dropdown-toggle nav-link"
            data-bs-toggle="dropdown"
          >
            <div class="user-img">
              <img
                class="rounded-circle"
                src="assets/img/profiles/avatar-01.jpg"
                width="31"
                alt="Ryan Taylor"
              />    
              <div class="user-text">
                <h6>Ryan Taylor</h6>
                <p class="text-muted mb-0">Administrator</p>
              </div>
            </div>
          </a>
          <div class="dropdown-menu">
            <div class="user-header">
              <div class="avatar avatar-sm">
                <img
                  src="assets/img/profiles/avatar-01.jpg"
                  alt="User Image"
                  class="avatar-img rounded-circle"
                />
              </div>
              <div class="user-text">
                <h6>Ryan Taylor</h6>
                <p class="text-muted mb-0">Administrator</p>
              </div>
            </div>
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="inbox.html">Inbox</a>
            <a class="dropdown-item" href="login.html">Logout</a>
          </div>
        </li>
      </ul>
    </div>

    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li class="menu-title">
              <span>Main Menu</span>
            </li>
            <li class="submenu">
              <a href="index.php"
                ><i class="feather-grid"></i> <span> Dashboard</span>
                <span class="menu-arrow"></span
              ></a>
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
              <a href="index.php?page=barang"
                ><i class="feather-grid"></i> <span> Produk</span>
                <span class="menu-arrow"></span
              ></a>
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
              <a href="index.php?page=kategori"
                ><i class="fas fa-graduation-cap"></i> <span> Kategori</span>
                <span class="menu-arrow"></span
              ></a>
              <ul>
                <li><a href="students.html">Student List</a></li>
                <li><a href="student-details.html">Student View</a></li>
                <li><a href="add-student.html">Student Add</a></li>
                <li><a href="edit-student.html">Student Edit</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="index.php?page=jual"
                ><i class="fas fa-file-invoice-dollar"></i>
                <span> Keranjang</span> <span class="menu-arrow"></span
              ></a>
              <ul>
                <li><a href="fees-collections.html">Fees Collection</a></li>
                <li><a href="expenses.html">Expenses</a></li>
                <li><a href="salary.html">Salary</a></li>
                <li><a href="add-fees-collection.html">Add Fees</a></li>
                <li><a href="add-expenses.html">Add Expenses</a></li>
                <li><a href="add-salary.html">Add Salary</a></li>
              </ul>
            </li>
 
       </ul>
        </div>
      </div>
    </div>
    <!-- </div> -->






      