<?php

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

$username = $_GET['id'];

$hapus = $conn->query("DELETE FROM tb_user WHERE username ='$username'");

if ($hapus) {

	echo "<script>
			  alert('Data Berhasil Di Hapus')
			  window.location='index.php?page=kepala/viewkpl'
	      </script>";

} else {
	echo "<script>
			  alert('Data Berhasil Di Hapus')
			  window.location='index.php?page=kepala/viewkpl'
	 	  </script>";
}
