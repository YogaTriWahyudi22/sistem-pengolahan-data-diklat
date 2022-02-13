        <!-- Sidebar -->
        <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-building"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Balai Diklat</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <?php
            if ($_SESSION['level'] == 'admin') :
            ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu Administrator
                </div>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=admin/viewadmin">
                        <i class="fas fa-fw fa-user-cog"></i>
                        <span>Kelola Admin</span>
                    </a>
                </li>

                <!-- Nav Item - Kelola Kepala Sub Bidang -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=kepala/viewkpl">
                        <i class="fas fa-fw fa-user-tie"></i>
                        <span>Kelola Kepala Sub Bidang</span>
                    </a>
                </li>

                <!-- Nav Item - Eselon -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=eselon/vieweselon">
                        <i class="fas fa-dharmachakra"></i>
                        <span>Kelola Data Eselon</span>
                    </a>
                </li>


                <!-- Nav Item - Instansi -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=instansi/viewinstansi">
                        <i class="fas fa-fw fa-landmark"></i>
                        <span>Kelola Instansi</span>
                    </a>
                </li>


                <!-- Nav Item - Data Pejabat -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=pejabat/viewpjb">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Data Pejabat</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php
            if ($_SESSION['level'] == 'kepalabidang') :
            ?>

                <!-- Menu Kepala Sub Bidang -->
                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu Kepala Bidang
                </div>
                <!-- Nav Item - Kelola Admin -->
            <?php endif; ?>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-info-circle"></i>
                    <span>Laporan Peserta Diklat</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pelatihan Kepemimpinan :</h6>
                        <a class="collapse-item" href="index.php?page=laporan/eselon2">Tingkat II</a>
                        <a class="collapse-item" href="index.php?page=laporan/eselon3">Administrator</a>
                        <a class="collapse-item" href="index.php?page=laporan/eselon4">Pengawas</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Lainnya
            </div>


            <!-- Nav Item - Logout -->
            <li class="nav-item">
                <a onclick="return confirm('Apakah anda yakin ingin Logout?')" class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
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
        <div id="content-wrapper" class="d-flex flex-column bg-white">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gray topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Tulisan -->
                    <div class="sidebar-brand-text mx-3 text-gray-900">Pemerintah Kabupaten Sijunjung</div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <div class="topbar-divider d-none d-sm-block bg-gray-400"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-900 small"> <?= $_SESSION['username']; ?>
                                    <span class="mr-2 d-none d-lg-inline text-gray-500 small"> [<?= $_SESSION['level']; ?>]</span>
                                </span>
                                <img class="img-profile rounded-circle" src="../../asset/backend/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="logout.php" onclick="return confirm('Apakah anda yakin ingin Logout?')">
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