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
          <h3 class="panel-title">Daftar Peserta Bayar Formulir</h3>
      </div>
      <div class="panel-body">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>No</th>
                <th>Nomor Pendaftaran</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Telepon</th>
								<th>Tanggal</th>
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
$data = mysql_query("select * from  bayar where nopendaftaran");
while ($b = mysql_fetch_array($data)) {
    $exe = mysql_query("select * from pembelian where nopendaftaran='$b[nopendaftaran]'");
    $a = mysql_fetch_array($exe);

    $buka = mysql_query("select * from pendaftaran where nopendaftaran='$b[nopendaftaran]'");
    $bk = mysql_fetch_array($buka);
    $noo++;
    ?>

          <tr class="odd gradeX">
            <td><?php echo $noo; ?></td>
            <td ><?php echo $a['nopendaftaran']; ?></td>
            <td><?php echo $a['nama']; ?></td>
            <td><?php echo $a['asal_sekolah']; ?></td>
            <td><?php echo $a['telepon']; ?></td>
            <td><?php echo $a['tanggal']; ?></td>
						<td>
							<a type="button" class="btn btn-warning" href='identitas.html?nopendaftaran=<?php echo $b['nopendaftaran']; ?>'>UPDATE</a>
							<?php
if ($b['nopendaftaran'] == $bk['nopendaftaran']) {
        echo "<a type='button' class='btn btn-danger' href='modul/cetak_formulir_pendaftar.php?nopendaftaran=$b[nopendaftaran]' target='_blank'>Cetak Formulir</a>";
    } else {

    }
    ?>

							<a type="button" class="btn btn-primary" href='modul/cetak.php?nopendaftaran=<?php echo $b['nopendaftaran']; ?>' target='_blank'>Cetak Pembayaran</a>
						</td>
          </tr>
                      <?php

}
?>
        </tbody>
				<?php
echo '<div class="panel-body"><span class="glyphicon glyphicon-download-alt"></span> <a href="modul/export-to-excel.php">Download Excel</a></div>';
echo '<div class="panel-body"><span class="glyphicon glyphicon-download-alt"></span> <a href="modul/export-to-excel1.php">Download Excel Daftar Siswa</a></div>';
echo '<div class="panel-body"><span class="glyphicon glyphicon-download-alt"></span> <a href="modul/export-to-excel2.php">Download Excel Daftar Siswa Daftar Ulang</a></div>';
?>
	<div class="panel-body"> <a type="button" class="btn btn-warning" href='modul/cetak_va.php' target='_blank'>Cetak Pembayaran VA</a> </div>

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
