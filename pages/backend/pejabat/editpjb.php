<?php  

$id_pejabat = $_GET['id'];
$pejabat = $conn->query("SELECT * FROM tb_pejabat WHERE id_pejabat = '$id_pejabat' ")->fetch_array();

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
<h1 class="h3 mb-4 text-gray-900">Form Ubah Data Pejabat</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Ubah Data Pejabat</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form action="" method="POST" enctype="multipart/form-data" class="text-gray-900">

        <input type="hidden" name="tid" value="<?= $pejabat['id_pejabat']; ?>">

        <div class="form-group">
          <label>NAMA</label>
          <input type="text" name="tnama" class="form-control" value="<?= $pejabat['namapjb']; ?>">
        </div>
        <div class="form-group">
          <label>NIP</label>
          <input type="text" name="tnip" class="form-control" value="<?= $pejabat['nip']; ?>">
        </div>
        <div class="form-group">
          <label>GOL/RUANG</label>
                 <select name="tgol" class="form-control" required>
                    <option value="<?= $pejabat['gol']; ?>" selected hidden><?= $pejabat['gol']; ?></option>
                    <?php
                            $query = $conn->query("SELECT * FROM tb_gol ORDER BY gol ASC");
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
          <input type="text" name="tjabatan" class="form-control" value="<?= $pejabat['jabatan']; ?>">
        </div>
        <div class="form-group">
            <label for="">INSTANSI</label>

                <select name="tinstansi" class="form-control" required>
                    <option value="<?= $pejabat['namains']; ?>" selected hidden><?= $pejabat['namains']; ?></option>

                        <?php
                            $query = $conn->query("SELECT * FROM tb_instansi ORDER BY id_instansi ASC");
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
                    <option value="<?= $pejabat['ket']; ?>" selected hidden><?= $pejabat['ket']; ?></option>

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
                    <option value="<?= $pejabat['status']; ?>" selected hidden><?= $pejabat['status']; ?></option>
                    <option value="Sudah Diklat">Sudah Diklat</option>
                    <option value="Belum Diklat">Belum Diklat</option>
                 </select>            
        </div>
        <button type="submit" name="update" class="btn btn-primary btn-md">Ubah</button>
      </form>
    </div>
  </div>
</div>


<?php 

if ( isset($_POST['update']) ) {

    $nama = $_POST['tnama'];
    $nip = $_POST['tnip'];
    $gol = $_POST['tgol'];
    $jabatan = $_POST['tjabatan'];
    $instansi = $_POST['tinstansi'];
    $ket = $_POST['tket'];
    $status = $_POST['tstatus'];


    
            $update = $conn->query("UPDATE tb_pejabat SET 
                                    namapjb = '$nama',
                                    nip = '$nip',
                                    gol = '$gol',
                                    jabatan = '$jabatan',
                                    namains = '$instansi',
                                    ket = '$ket',
                                    status = '$status'

                                    WHERE id_pejabat = '$id_pejabat'  
                                    
                                    ");

        
        if ( $update ) {
            echo "<script>
                      alert('Data Berhasil Diubah')
                      window.location = '?page=pejabat/viewpjb'
                  </script>";
        } else {
            echo "<script>
                      alert('Data gagal Diubah')
                      window.location = '?page=pejabat/editpjb&id=". $id_pejabat." '
                  </script>";

        }
    }



?>