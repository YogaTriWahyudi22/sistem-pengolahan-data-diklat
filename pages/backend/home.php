                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Halaman Utama Balai Diklat</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Jumlah Pejabat -->
                        <?php 
                          $query = $conn->query("SELECT * FROM tb_pejabat");
                          $totalpjb = mysqli_num_rows($query);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                <a href="index.php?page=pejabat/viewpjb" style="text-decoration: none;" class="text-dark">
                                                    Total Jumlah Pejabat Kabupaten Sijunjung
                                                </a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalpjb; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                        <!-- Total Pejabat Sudah Diklat -->
                        <?php 
                          $query = $conn->query("SELECT * FROM tb_pejabat WHERE status = 'Sudah Diklat' ");
                          $totalpjbs = mysqli_num_rows($query);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <a href="index.php?page=laporan/sudahdiklat" style="text-decoration: none;" class="text-success">
                                                    Jumlah Pejabat yang Sudah Diklat
                                                </a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalpjbs; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Total Pejabat Belum Diklat -->
                        <?php 
                          $query = $conn->query("SELECT * FROM tb_pejabat WHERE status = 'Belum Diklat' ");
                          $totalpjbs = mysqli_num_rows($query);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                <a href="index.php?page=laporan/belumdiklat" style="text-decoration: none;" class="text-danger">
                                                    Jumlah Pejabat yang Belum Diklat
                                                </a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalpjbs; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-times fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Total Instansi -->
                         <?php 
                          $query = $conn->query("SELECT * FROM tb_instansi");
                          $totalins = mysqli_num_rows($query);
                        ?>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                <a href="index.php?page=instansi/viewinstansi" style="text-decoration: none;" class="text-info">
                                                    Jumlah Instansi Kabupaten Sijunjung
                                                </a>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalins; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-city fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    

                        
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        

                        
                    </div>