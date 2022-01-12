<?php  

$tipe_eselon = $_GET['id'];
$eselon = $conn->query("SELECT * FROM tb_eselon WHERE tipe_eselon = '$tipe_eselon' ")->fetch_array();

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
<h1 class="h3 mb-4 text-gray-900">Form Ubah Data Eselon</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Ubah Data</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form action="" method="POST" enctype="multipart/form-data" class="text-gray-900">

        <div class="form-group">
          <label>Tipe Eselon</label>
          <input type="text" name="ttipeeselon" class="form-control" value="<?= $eselon['tipe_eselon']; ?>">
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <textarea class="ckeditor" name="tketerangan" id="tketerangan" ><?= $eselon['keterangan']; ?></textarea>
        </div>
        <button type="submit" name="update" class="btn btn-primary btn-md">Ubah</button>
      </form>
    </div>
  </div>
</div>


<?php 

if ( isset($_POST['update']) ) {


    $tipeeselon = $_POST['ttipeeselon'];
    $keterangan = $_POST['tketerangan'];
 
    $update = $conn->query("UPDATE tb_eselon SET 
                                tipe_eselon = '$tipeeselon',
                                keterangan = '$keterangan'

                                WHERE tipe_eselon = '$tipe_eselon'  
                                    
                                ");
 
    if ( $update ) {
            echo "<script>
                      alert('Data Berhasil Diubah')
                      window.location = 'index.php?page=eselon/vieweselon'
                  </script>";
    } else {
            echo "<script>
                      alert('Data gagal Diubah')
                      window.location = 'index.php?page=eselon/editeselon&id=". $tipe_eselon." '
                  </script>";

        }
}

?>