<?php
session_start();
include "../koneksi/koneksi.php";
  $tanggal = date("Y-m-d H:i:s");
	//jika tombol tambah benar di klik maka lanjut prosesnya
  //cek dahulu, jika tombol tambah di klik

if(isset($_POST['simpan'])){
  //data siswa
  $nopendaftaran    = $_POST['nopendaftaran'];
	$nama		          = $_POST['nama'];
  $kelamin	        = $_POST['kelamin'];
	$asal_sekolah		  = $_POST['asal_sekolah'];
  $peminatan	      = $_POST['peminatan'];
  $tmplahir	        = $_POST['tmplahir'];
  $tgllahir	        = $_POST['tgllahir'];
  $alamat	          = $_POST['alamat'];
  $rt	              = $_POST['rt'];
  $rw	              = $_POST['rw'];
  $kodepos	        = $_POST['kodepos'];
  $dusun	          = $_POST['dusun'];
  $desa	            = $_POST['desa'];
  $email		        = $_POST['email'];
  $telepon		      = $_POST['telepon'];
  $anakke	          = $_POST['anakke'];
  $saudara	        = $_POST['saudara'];
  //data ortu
  $namaayah	            = $_POST['namaayah'];
  $namaibu	            = $_POST['namaibu'];
  $alamatortu	          = $_POST['alamatortu'];
  $rtortu	              = $_POST['rtortu'];
  $rwortu	              = $_POST['rwortu'];
  $kodeposortu	        = $_POST['kodeposortu'];
  $dusunortu	          = $_POST['dusunortu'];
  $desaortu 	          = $_POST['desaortu'];
  $teleponortu 	          = $_POST['teleponortu'];
  $kerjaayah	          = $_POST['kerjaayah'];
  $kerjaibu	            = $_POST['kerjaibu'];
  $gajiayah	            = $_POST['gajiayah'];
  $gajiibu	            = $_POST['gajiibu'];
  $pendidikanayah	      = $_POST['pendidikanayah'];
  $pendidikanibu	      = $_POST['pendidikanibu'];
  $thlahirayah	        = $_POST['thlahirayah'];
  $thlahiribu	          = $_POST['thlahiribu'];
  //data wali
  $namawali	          = $_POST['namawali'];
  $alamatwali	        = $_POST['alamatwali'];
  $rtwali	            = $_POST['rtwali'];
  $rwwali	            = $_POST['rwwali'];
  $kodeposwali	      = $_POST['kodeposwali'];
  $dusunwali	        = $_POST['dusunwali'];
  $desawali	          = $_POST['desawali'];
  $teleponwali	      = $_POST['teleponwali'];
  $kerjawali	        = $_POST['kerjawali'];
  $gajiwali	          = $_POST['gajiwali'];
  $pendidikanwali	     = $_POST['pendidikanwali'];
  $thlahirwali	      = $_POST['thlahirwali'];
  //Lainnya
  $pernyataan	      = $_POST['pernyataan'];
  $jadwal	          = $_POST['jadwal'];
  //rekapnilai
  $bin1                   = $_POST['bin1'];
  $bin2                   = $_POST['bin2'];
  $bin3                   = $_POST['bin3'];
  $bin4                   = $_POST['bin4'];
  $bin5                   = $_POST['bin5'];
  $rata_bin               = $_POST['averageBox'];
  $bin_un                 = $_POST['bin_un'];
  $big1                   = $_POST['big1'];
  $big2                   = $_POST['big2'];
  $big3                   = $_POST['big3'];
  $big4                   = $_POST['big4'];
  $big5                   = $_POST['big5'];
  $rata_big               = $_POST['averageBox2'];
  $big_un                 = $_POST['big_un'];
  $mtk1                   = $_POST['mtk1'];
  $mtk2                   = $_POST['mtk2'];
  $mtk3                   = $_POST['mtk3'];
  $mtk4                   = $_POST['mtk4'];
  $mtk5                   = $_POST['mtk5'];
  $rata_mtk               = $_POST['averageBox3'];
  $mtk_un                 = $_POST['mtk_un'];
  $ipa1                   = $_POST['ipa1'];
  $ipa2                   = $_POST['ipa2'];
  $ipa3                   = $_POST['ipa3'];
  $ipa4                   = $_POST['ipa4'];
  $ipa5                   = $_POST['ipa5'];
  $rata_ipa               = $_POST['averageBox4'];
  $ipa_un                 = $_POST['ipa_un'];
  $ips1                   = $_POST['ips1'];
  $ips2                   = $_POST['ips2'];
  $ips3                   = $_POST['ips3'];
  $ips4                   = $_POST['ips4'];
  $ips5                   = $_POST['ips5'];
  $rata_ips               = $_POST['averageBox5'];
  $ips_un                 = $_POST['ips_un'];
  $rata_total             = $_POST['averageBox_total'];


	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("REPLACE INTO pendaftaran
                              VALUES ('$nopendaftaran',
                                      '$nama',
                                      '$kelamin',
                                      '$asal_sekolah',
                                      '$peminatan',
                                      '$tmplahir',
                                      '$tgllahir',
                                      '$alamat',
                                      '$rt',
                                      '$rw',
                                      '$kodepos',
                                      '$dusun',
                                      '$desa',
                                      '$email',
                                      '$telepon',
                                      '$anakke',
                                      '$saudara',
                                      '$namaayah',
                                      '$namaibu',
                                      '$alamatortu',
                                      '$rtortu',
                                      '$rwortu',
                                      '$kodeposortu',
                                      '$dusunortu',
                                      '$desaortu',
                                      '$kerjaayah',
                                      '$kerjaibu',
                                      '$gajiayah',
                                      '$gajiibu',
                                      '$pendidikanayah',
                                      '$pendidikanibu',
                                      '$thlahirayah',
                                      '$thlahiribu',
                                      '$namawali',
                                      '$alamatwali',
                                      '$rtwali',
                                      '$rwwali',
                                      '$kodeposwali',
                                      '$dusunwali',
                                      '$desawali',
                                      '$teleponwali',
                                      '$kerjawali',
                                      '$gajiwali',
                                      '$pendidikanwali',
                                      '$thlahirwali',
                                      '$pernyataan',
                                      '$jadwal',
                                      '$tanggal')") or die(mysql_error());
  $nilai = mysql_query("REPLACE INTO rekapnilai
                              VALUES ('$nopendaftaran',
                                      '$bin1',
                                      '$bin2',
                                      '$bin3',
                                      '$bin4',
                                      '$bin5',
                                      '$rata_bin',
                                      '$bin_un',
                                      '$big1',
                                      '$big2',
                                      '$big3',
                                      '$big4',
                                      '$big5',
                                      '$rata_big',
                                      '$big_un',
                                      '$mtk1',
                                      '$mtk2',
                                      '$mtk3',
                                      '$mtk4',
                                      '$mtk5',
                                      '$rata_mtk',
                                      '$mtk_un',
                                      '$ipa1',
                                      '$ipa2',
                                      '$ipa3',
                                      '$ipa4',
                                      '$ipa5',
                                      '$rata_ipa',
                                      '$ipa_un',
                                      '$ips1',
                                      '$ips2',
                                      '$ips3',
                                      '$ips4',
                                      '$ips5',
                                      '$rata_ips',
                                      '$ips_un',
                                      '$rata_total')") or die(mysql_error());

  echo "<script>window.location='identitas.html'</script>";

}else{	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>
