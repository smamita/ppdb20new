<?php
session_start();
include "../koneksi/koneksi.php";
  $tanggal = date("Y-m-d H:i:s");
	//jika tombol tambah benar di klik maka lanjut prosesnya
  //cek dahulu, jika tombol tambah di klik
if(isset($_POST['daftar'])){
  $nopendaftaran    = $_POST['nopendaftaran'];
  $namaalias    = $_POST['nama_alias'];
	$nama		          = $_POST['nama'];	//membuat variabel $nis dan datanya dari inputan NIS
	$asal_sekolah		  = $_POST['asal_sekolah'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
  $telepon		      = $_POST['telepon'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$email		        = $_POST['email'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
  $password	        = $_POST['password'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
  $kelamin	        = $_POST['kelamin'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	$peminatan	      = $_POST['peminatan'];	//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO pembelian VALUES('$nopendaftaran', '$namaalias','$nama', '$password', '$asal_sekolah', '$email','$telepon','$kelamin','$peminatan','$tanggal','200000')") or die(mysql_error());
  echo "<script>window.location='cetak.php?nopendaftaran=$nopendaftaran'</script>";

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}

?>
