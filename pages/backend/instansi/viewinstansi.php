<?php 
 $instansi = $conn->query("SELECT * FROM tb_instansi ORDER BY namains ASC");
 
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
<h1 class="h3 mb-2 text-gray-900">Data Instansi</h1>
 <a href="index.php?page=instansi/addinstansi" class="btn btn-info btn-md"><i class="fas fa-plus-square"></i> Tambah Data</a>
 <br><br>

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Data Instansi</h6>
     </div>
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered text-center text-gray-900" id="table_eselon" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>No.</th>
                         <th>Nama Instansi</th>
                         <th>Alamat</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>

                 <tbody>
                     <?php $no=1; ?>
                     <?php foreach ( $instansi as $key => $value ) : ?>
                     <tr>
                         <td><?= $no++; ?></td>
                         <td class="text-left"><?= $value['namains']; ?></td>
                         <td><?= $value['alamat']; ?></td>
                         <td>
                            <a href="index.php?page=instansi/editinstansi&id=<?= $value['id_instansi']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-wrench"></i></a>
                            <a onclick="return confirm('Apakah anda yakin ingin mengapus data?')" href="index.php?page=instansi/deleteinstansi&id=<?= $value['id_instansi']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                         </td>
                     </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>