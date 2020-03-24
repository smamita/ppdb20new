<?php
session_start();
include "../koneksi/koneksi.php";
$tanggal = date("Y-m-d H:i:s");
	//jika tombol tambah benar di klik maka lanjut prosesnya
  //cek dahulu, jika tombol tambah di klik
  $secret_key = "6Lc0ocUUAAAAAGA5vmLpT3j4gIgUFUlPdB_V92zM";
   $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
    $response = json_decode($verify);

    if($response->success){ // Jika proses validasi captcha berhasil
  


if (isset($_POST['simpan'])) {
  $tampilkan = "select * from pembelian order by nopendaftaran DESC LIMIT 0,1";
$data = mysql_query($tampilkan);
if ($data === false) {
  die(mysql_error());
}
while ($hasil = mysql_fetch_array($data)) {
// ID OTOMATIS//***************************************************
  $kodeawal = substr($hasil['nopendaftaran'], 13) + 1;
  if ($kodeawal < 10) {
    $kode = '769601201861000' . $kodeawal;
  } elseif ($kodeawal > 9 && $kodeawal <= 99) {
    $kode = '76960120186100' . $kodeawal;
  } else {
    $kode = '7696012018610' . $kodeawal;
  }

// ID OTOMATIS//***************************************************
  $alias = substr($hasil['nopendaftaran'], 12) + 1;
  if ($kodeawal < 10) {
    $al = 'Siswa Baru 0' . $alias;
  } elseif ($alias > 9 && $alias <= 99) {
    $al = 'Siswa Baru ' . $alias;
  } else {
    $al = 'Siswa Baru ' . $alias;
  }
}
  //data siswa
  $nopendaftaran = $kode;
  $nama_alias = $al;
  $nisn = $_POST['nisn'];
  $nama = addslashes($_POST['nama']);
  $kelamin = $_POST['kelamin'];
  $asal_sekolah = $_POST['asal_sekolah'];
  $peminatan = $_POST['peminatan'];
  $tmplahir = $_POST['tmplahir'];
  $tgllahir = $_POST['tgllahir'];
  $alamat = $_POST['alamat'];
  $email = $_POST['email'];
  $telepon = $_POST['telepon'];
  $anakke = $_POST['anakke'];
  $keberadaan_anak = $_POST['keberadaan_anak'];
  $saudara = $_POST['saudara'];
  $namaayah = addslashes($_POST['namaayah']);
  $namaibu = addslashes($_POST['namaibu']);
  $alamatortu = $_POST['alamatortu'];
  $teleponayah = $_POST['teleponayah'];
  $teleponibu = $_POST['teleponibu'];
  $kerjaayah = $_POST['kerjaayah'];
  $kerjaibu = $_POST['kerjaibu'];
  $gajiayah = $_POST['gajiayah'];
  $gajiibu = $_POST['gajiibu'];
  $pendidikanayah = $_POST['pendidikanayah'];
  $pendidikanibu = $_POST['pendidikanibu'];
  $thlahirayah = $_POST['thlahirayah'];
  $thlahiribu = $_POST['thlahiribu'];
  //$jadwal = $_POST['id_jadwal'];

  $arr = explode('/', $tgllahir);
  $newDate = $arr[2] . '-' . $arr[1] . '-' . $arr[0];

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
  $input = mysql_query("REPLACE INTO pendaftaran
                              VALUES ('$nopendaftaran',
                                      '$nisn',
                                      '$nama',
                                      '$kelamin',
                                      '$asal_sekolah',
                                      '$peminatan',
                                      '$tmplahir',
                                      '$newDate',
                                      '$alamat',
                                      '$email',
                                      '$telepon',
                                      '$anakke',
                                      '$keberadaan_anak',
                                      '$saudara',
                                      '$namaayah',
                                      '$namaibu',
                                      '$alamatortu',
                                      '$teleponayah',
                                      '$teleponibu',
                                      '$kerjaayah',
                                      '$kerjaibu',
                                      '$gajiayah',
                                      '$gajiibu',
                                      '$pendidikanayah',
                                      '$pendidikanibu',
                                      '$thlahirayah',
                                      '$thlahiribu',
                                      'oke',
                                      '0',
                                      '$tanggal')") or die(mysql_error());

  $input = mysql_query("REPLACE INTO pembelian
                                VALUES ('$nopendaftaran',
                                        '$nama_alias',
                                        '$nama',
                                        '$nisn',
                                        '$asal_sekolah',
                                        '$email',
                                        '$telepon',
                                        '$kelamin',
                                        '$peminatan',
                                        '$tanggal',
                                        '250000')") or die(mysql_error());



  echo "<script>window.location='cetak.php?nopendaftaran=$nopendaftaran'</script>";

} else {	//jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
  echo '<script>window.history.back()</script>';

}

   }else{ // Jika captcha tidak valid
      echo "<h2>Captcha Tidak Valid</h2>";
      echo "Ohh sorry, you're not human (Anda bukan manusia)<hr>";
      echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";
    }
?>
