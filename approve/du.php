<?php
session_start();
include "koneksi.php";


if (isset($_GET['nopendaftaran'])) {
    $no = $_GET['nopendaftaran'];
    $exe = mysql_query("select * from pembelian where nopendaftaran='$no'");
    $a = mysql_fetch_array($exe);
    $no = $_GET['nopendaftaran'];
    mysql_query("REPLACE into daftarulang values('$no','$a[nama]')");
    echo "<script>window.location='index.php'</script>";
}

?>
