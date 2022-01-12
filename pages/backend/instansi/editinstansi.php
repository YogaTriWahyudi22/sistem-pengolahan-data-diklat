<?php  

$id_instansi = $_GET['id'];
$instansi = $conn->query("SELECT * FROM tb_instansi WHERE id_instansi = '$id_instansi' ")->fetch_array();

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
<h1 class="h3 mb-4 text-gray-900">Form Ubah Data Instansi</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Ubah Data Instansi</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form action="" method="POST" enctype="multipart/form-data" class="text-gray-900">

        <div class="form-group">
          <label>Nama Instansi</label>
          <input type="text" name="tnama" class="form-control" value="<?= $instansi['namains']; ?>">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea class="ckeditor" name="talamat" id="talamat" ><?= $instansi['alamat']; ?></textarea>
        </div>
        <button type="submit" name="update" class="btn btn-primary btn-md">Ubah</button>
      </form>
    </div>
  </div>
</div>


<?php 

if ( isset($_POST['update']) ) {


    $nama = $_POST['tnama'];
    $alamat = $_POST['talamat'];
 
    $update = $conn->query("UPDATE tb_instansi SET 
                                namains = '$nama',
                                alamat = '$alamat'

                                WHERE id_instansi = '$id_instansi'  
                                    
                                ");
 
    if ( $update ) {
            echo "<script>
                      alert('Data Berhasil Diubah')
                      window.location = 'index.php?page=instansi/viewinstansi'
                  </script>";
    } else {
            echo "<script>
                      alert('Data gagal Diubah')
                      window.location = 'index.php?page=instansi/editinstansi&id=". $id_instansi." '
                  </script>";

        }
}

?>