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
<h1 class="h3 mb-4 text-gray-900">Form Tambah Data Eselon</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Tambah Data Eselon</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form action="" method="POST" enctype="multipart/form-data" class="text-gray-900">
        <div class="form-group">
          <label>Tipe Eselon</label>
          <input type="text" name="ttipeeselon" class="form-control">
        </div>
        <div class="form-group">
          <label>Keterangan</label> <br>
          <textarea name="tketerangan" class="ckeditor" id="tketerangan" value="" ></textarea>
        </div>
        <button type="submit" name="tambah" class="btn btn-primary btn-md">Tambah</button>
      </form>
    </div>
  </div>
</div>


<?php  

if ( isset($_POST['tambah']) ) {

    $tipeeselon = $_POST['ttipeeselon'];
    $keterangan = $_POST['tketerangan'];


    $tambah = $conn->query("INSERT INTO tb_eselon (
                              tipe_eselon, 
                              keterangan )
                            VALUES (
                              '$tipeeselon',
                              '$keterangan') 
                            ");


    if ( $tambah ) {
        echo "<script>
                alert('Data berhasil disimpan')
                window.location.href = 'index.php?page=eselon/vieweselon'
              </script>";
    } else {
        echo "<script>
                alert('Data gagal disimpan')
                window.location.href = 'index.php?page=eselon/vieweselon'
              </script>";
    }
}

?>