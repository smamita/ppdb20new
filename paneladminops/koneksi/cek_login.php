<?php
include "koneksi.php";
$login  = mysql_query("select * FROM admin WHERE username='$_POST[username]' AND password='$_POST[password]'");
$ketemu = mysql_num_rows($login);
// Apabila nopendaftaran dan password ditemukan
$izinkan='oke';
// Apabila nopendaftaran dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['username']		=$_POST['username'];
  $_SESSION['password']		=$_POST['password'];

			?><script>window.location='../list.html';</script>;<?php

}else{
  echo "<center>Login gagal! nomor pembayaran & password tidak benar<br>";
  echo "<a href='../login-admin.html'><b>ULANGI LAGI</b></a></center>";
}
?>
