<?php
session_start();
include "koneksi.php";


if (isset($_GET['nopendaftaran'])) {
	$no = $_GET['nopendaftaran'];
	mysql_query("DELETE FROM bayar WHERE nopendaftaran=$no");
	echo "<script>window.location='index.php'</script>";
}

?>
