<?php  

$username = $_GET['id'];
$user = $conn->query("SELECT * FROM tb_user WHERE username = '$username' ")->fetch_array();

if ($_SESSION['level'] != 'kepalabidang') {
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
<h1 class="h3 mb-4 text-gray-900">Form Ubah Data Admin</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-info">Ubah Data Admin</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <form action="" method="POST" enctype="multipart/form-data" class="text-gray-900">

        <div class="form-group">
          <label>Username</label>
          <input type="text" name="tusername" class="form-control" value="<?= $user['username']; ?>" readonly>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="tpassword" class="form-control" value="<?= $user['password']; ?>">
        </div>
        <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="tnama" class="form-control" value="<?= $user['nama_lengkap']; ?>">
        </div>
        <div class="form-group">
          <label>NIP</label>
          <input type="text" name="tnip" class="form-control" value="<?= $user['nip']; ?>">
        </div>
        <div class="form-group">
          <label>Nomor Handphone</label>
          <input type="text" name="tnohp" class="form-control" value="<?= $user['nohp']; ?>">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="talamat" class="form-control" value="<?= $user['alamat']; ?>">
        </div>
        <div class="form-group">
            <label>Level</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tlevel" id="flexRadioDefault1" value="admin" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        admin
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tlevel" id="flexRadioDefault2" value="kepalabidang">
                    <label class="form-check-label" for="flexRadioDefault2">
                        kepalabidang
                    </label>
                </div>
        </div>
        <button type="submit" name="update" class="btn btn-primary btn-md">Ubah</button>
      </form>
    </div>
  </div>
</div>


<?php 

if ( isset($_POST['update']) ) {

    $nama = $_POST['tnama'];
    $username = $_POST['tusername'];
    $password = $_POST['tpassword'];
    $nip = $_POST['tnip'];
    $nohp = $_POST['tnohp'];
    $alamat = $_POST['talamat'];
    $level = $_POST['tlevel'];

    $update = $conn->query("UPDATE tb_user SET 
                                username = '$username',
                                password = '$password',
                                nama_lengkap = '$nama',
                                nip = '$nip',
                                nohp = '$nohp',
                                alamat = '$alamat',
                                level = '$level'

                                WHERE username = '$username'  
                                    
                                ");
 
    if ( $update ) {
            echo "<script>
                      alert('Data Berhasil Diubah')
                      window.location = 'index.php?page=admin/viewadmin'
                  </script>";
    } else {
            echo "<script>
                      alert('Data gagal Diubah')
                      window.location = 'index.php?page=admin/editadmin&id=". $username." '
                  </script>";

        }
}

?>