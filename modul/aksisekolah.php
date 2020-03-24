<?php
session_start();
include "../koneksi/koneksi.php";
$tanggal = date("Y-m-d H:i:s");


  //data siswa
  $prop = addslashes($_POST['prop']);
  $kab = addslashes($_POST['kab']);
  $kec = addslashes($_POST['kec']);
  $desa = addslashes($_POST['desa']);
  $sekolah = addslashes($_POST['sekolah']);


	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
  $input = mysql_query("REPLACE INTO sekolah
                              VALUES ('',
                                      '$sekolah',
                                      '$prop',
                                      '$kab',
                                      '$kec',
                                      '$desa',
                                      '$tanggal','0')") or die(mysql_error());

  echo "<script>window.location='../sekolah.html'</script>";



?>
