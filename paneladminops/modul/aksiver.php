<?php
session_start();
include "../koneksi/koneksi.php";
$tanggal = date("Y-m-d H:i:s");
	//jika tombol tambah benar di klik maka lanjut prosesnya
  //cek dahulu, jika tombol tambah di klik

if (isset($_POST['simpan'])) {
  //data siswa
  $id_sekolah = $_POST['id_sekolah'];
  $nama_sekolah = $_POST['nama_sekolah'];
  $prop = $_POST['prop'];
  $kab = $_POST['kab'];
  $kec = $_POST['kec'];
  $desa = $_POST['desa'];
  $tanggal = date("Y-m-d H:i:s");


	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
  $input = mysql_query("REPLACE INTO sekolah
                              VALUES ('$id_sekolah',
                                      '$nama_sekolah',
                                      '$prop',
                                      '$kab',
                                      '$kec',
                                      '$desa',
                                      '$tanggal',
                                      '2')") or die(mysql_error());

  echo "<script>window.location='../sekolah.html'</script>";

} elseif (isset($_POST['update'])) {
  $id_sekolah = $_POST['id_sekolah'];
  $nama_sekolah = $_POST['nama_sekolah'];
  $prop = $_POST['prop'];
  $kab = $_POST['kab'];
  $kec = $_POST['kec'];
  $desa = $_POST['desa'];
  $tanggal = date("Y-m-d H:i:s");
  $aktif = $_POST['aktif'];


	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
  $input = mysql_query("REPLACE INTO sekolah
                              VALUES ('$id_sekolah',
                                      '$nama_sekolah',
                                      '$prop',
                                      '$kab',
                                      '$kec',
                                      '$desa',
                                      '$tanggal',
                                      '1')") or die(mysql_error());

  echo "<script>window.location='../sekolah.html'</script>";
} else {	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
  echo '<script>window.history.back()</script>';

}
?>
