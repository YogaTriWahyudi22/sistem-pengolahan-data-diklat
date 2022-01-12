<?php

if ($_SESSION['level'] != 'admin') {
  echo '
        <div class="container-fluid">
            <div class="text-center">
                <div class="error mx-auto" data-text="404">404</div>
                    <p class="lead text-gray-800 mb-5">Maaf laman yang anda cari ilegal atau tidak ditemukan</p>
                    <p class="text-gray-500 mb-0">Silahkan kembali ke Beranda</p> <br>
                    <a href="index.php">&larr; Kembali</a>
                </div>
            </div>
        </div> ';
  die();
}

?>

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-900">Form Tambah Data Pejabat</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Tambah Data Pejabat</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form action="" method="POST" enctype="multipart/form-data" class="text-gray-900">
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" name="tnama" class="form-control" placeholder="Masukkan Nama Lengkap Pejabat..." required>
        </div>
        <div class="form-group">
          <label>NIP</label>
          <input type="text" name="tnip" class="form-control" placeholder="Masukkan Nomor Induk Pejabat..." required>
        </div>
        <div class="form-group">
          <label>GOL/RUANG</label>
                 <select name="tgol" class="form-control" required>
                    <option value="" selected disabled>--Silahkan Pilih Golongan/Ruang--</option>
                    <?php
                            $query = $conn->query("SELECT * FROM tb_gol ORDER BY id_gol ASC");
                            while ($gol = mysqli_fetch_array($query)) :
                        ?>

                            <option value="<?= $gol['gol']; ?>">
                                    <?= $gol['gol']; ?>
                            </option>
                        <?php endwhile; ?>
                 </select>            
        </div>
        <div class="form-group">
          <label>JABATAN</label>
          <input type="text" name="tjabatan" class="form-control" placeholder="Masukkan Jabatan Pejabat..." required>
        </div>

        <div class="form-group">
            <label for="">INSTANSI</label>

                <select name="tinstansi" class="form-control" required>
                    <option value="" selected disabled>--Silahkan Pilih Instansi--</option>

                        <?php
                            $query = $conn->query("SELECT * FROM tb_instansi ORDER BY namains ASC");
                            while ($ins = mysqli_fetch_array($query)) :
                        ?>

                            <option value="<?= $ins['namains']; ?>">
                                    <?= $ins['namains']; ?>
                            </option>
                        <?php endwhile; ?>
                </select>
        </div>



        <div class="form-group">
            <label for="">KETERANGAN ESELON</label>

                <select name="tket" class="form-control" required>
                    <option value="" selected disabled>--Silahkan Pilih Eselon--</option>

                        <?php
                            $query = $conn->query("SELECT * FROM tb_eselon ORDER BY tipe_eselon ASC");
                            while ($ese = mysqli_fetch_array($query)) :
                        ?>

                            <option value="<?= $ese['tipe_eselon']; ?>">
                                    <?= $ese['tipe_eselon']; ?>
                            </option>
                        <?php endwhile; ?>
                </select>
        </div>
        <div class="form-group">
          <label>STATUS</label>
                 <select name="tstatus" class="form-control" required>
                    <option value="" selected disabled>--Silahkan Pilih Status Diklat--</option>
                    <option value="Sudah Diklat">Sudah Diklat</option>
                    <option value="Belum Diklat">Belum Diklat</option>
                 </select>            
        </div>
        <button type="submit" name="tambah" class="btn btn-primary btn-md">Tambah</button>
      </form>
    </div>
  </div>
</div>


<?php  

if ( isset($_POST['tambah']) ) {

    $nama = $_POST['tnama'];
    $nip = $_POST['tnip'];
    $gol = $_POST['tgol'];
    $jabatan = $_POST['tjabatan'];
    $instansi = $_POST['tinstansi'];
    $ket = $_POST['tket'];
    $status = $_POST['tstatus'];



    $tambah = $conn->query("INSERT INTO tb_pejabat (
                              namapjb, 
                              nip, 
                              gol, 
                              jabatan,
                              namains,
                              ket,
                              status )
                            VALUES (
                              '$nama',
                              '$nip',
                              '$gol',
                              '$jabatan',
                              '$instansi',
                              '$ket',
                              '$status' ) 
                            ");

                    

    if ( $tambah ) {

        echo "<script>
                alert('Data berhasil disimpan')
                window.location.href = 'index.php?page=pejabat/viewpjb'
              </script>";
    } else {
        echo "<script>
                alert('Data gagal disimpan')
                window.location.href = 'index.php?page=pejabat/viewpjb'
              </script>";
    }
}

?>