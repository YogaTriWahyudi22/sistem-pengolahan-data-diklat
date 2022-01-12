<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
    <style>
        @media print {
            .sidebar, .footer, .header, .copyright, a {
                display: none;
            }
        }
    </style>
</head>
<body>
    <?php 
        $pejabat = $conn->query("SELECT * FROM tb_pejabat WHERE status ='Sudah Diklat' AND ket LIKE 'II__' ");
        $total = mysqli_num_rows($pejabat);
    ?>

    <h2 style="text-align: center;" class="text-gray-900">Laporan Data Pejabat yang Sudah Mengikuti Pelatihan Kepemimpinan Tingkat II</h2>
    <br> <a href="index.php?page=laporan/eselon2">&larr; Kembali</a>
    <br><br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-md text-gray-900" border="2" align="center">
                 <thead align="center">
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

                     <tr>
                        <td colspan="7" align="center"><b>Total</b></td>
                        <td align="center"><?= $total; ?></td>
                     </tr>
                 </tbody>
            </table>
        </div>


</body>
</html>
<script>
    window.print();
</script>