<?php 
$pejabat = $conn->query("SELECT * FROM tb_pejabat WHERE ket = 'IV.a' OR ket = 'IV.b' ");
?>
 
 
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-900">Pelatihan Kepemimpinan Pengawas</h1>
 <a href="index.php?page=cetak/cetaksudah4" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank">
    <i class="fas fa-download fa-sm text-white-50"></i> 
        Laporan Sudah Diklat
 </a>
 <a href="index.php?page=cetak/cetakbelum4" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
    <i class="fas fa-download fa-sm text-white-50"></i> 
        Laporan Belum Diklat
 </a>

 <br><br>

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Data Pejabat Eselon IV</h6>
     </div>
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered text-center text-gray-900" id="table_eselon" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>NAMA</th>
                         <th>NIP</th>
                         <th>GOL/RUANG</th>
                         <th>JABATAN</th>
                         <th>INSTANSI</th>
                         <th>KET</th>
                         <th>STATUS</th>
                     </tr>
                 </thead>

                 <tbody>
                     <?php $no=1; ?>
                     <?php foreach ( $pejabat as $key => $value ) : ?>
                     <tr>
                         <td><?= $no++; ?></td>
                         <td class="text-left"><?= $value['namapjb']; ?></td>
                         <td><?= $value['nip']; ?></td>
                         <td><?= $value['gol']; ?></td>
                         <td><?= $value['jabatan']; ?></td>
                         <td><?= $value['namains']; ?></td>
                         <td><?= $value['ket']; ?></td>
                         <td><?= $value['status']; ?></td>
                     </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>