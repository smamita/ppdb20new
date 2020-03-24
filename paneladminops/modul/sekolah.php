<?php
session_start();
include "../koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>PPDB SMAM1TA 2020/2021</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../datatabel/bootstrap-combined.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/pastel-stream.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="../datatabel/jquery-1.11.1.min.js"></script>
    <script src="../datatabel/bootstrap.min.js"></script>
</head>
<body>
<link rel="stylesheet" href="../datatabel/bootstrap.min.css">
<div class="container">
  <?php include '../menu.php';?>
<div class="col-lg-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
          <h3 class="panel-title">Daftar SMP / MTs</h3>
      </div>
      <div class="panel-body">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>No</th>
                <th>Nama Sekolah</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
								<th>Desa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <!-- <tfoot>
            <tr>
              <th>No</th>
                <th>Nomor Pendaftaran</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Telepon</th>
								<th>Tanggal</th
                <th>Aksi</th>
            </tr>
        </tfoot> -->
        <tbody>
          <?php
$noo = 0;
$data = mysql_query("select * from  sekolah");
while ($b = mysql_fetch_array($data)) {
    $noo++;
    ?> 
          <tr class="odd gradeX">
            <td><?php echo $noo; ?></td>
            <td ><?php echo $b['nama_sekolah']; ?></td>
            <td><?php echo $b['prop']; ?></td>
            <td><?php echo $b['kab']; ?></td>
            <td><?php echo $b['kec']; ?></td>
            <td><?php echo $b['desa']; ?></td>
						<td>
							
							<?php
              if ($b['aktif'] == 0) {
        echo "<a type='button' class='btn btn-danger' href='verifikasi.html?id_sekolah=$b[id_sekolah]' target='_blank'>Verifikasi</a>";
    } else {
      echo "<a type='button' class='btn btn-primary' href='up_sekolah.html?id_sekolah=$b[id_sekolah]' target='_blank'>Update</a>";
      }
    ?>
    </td>
          </tr>
                      <?php

}
?>
        </tbody>

    </table>
  </div>
  </div>
</div>
</div>

<script src="../datatabel/jquery-latest.min.js" type="text/javascript"></script>
<script src="../datatabel/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="../datatabel/dataTables.bootstrap.min.js" type="text/javascript"></script>




<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>
