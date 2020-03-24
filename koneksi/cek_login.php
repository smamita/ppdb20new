<?php

use PhpParser\Node\Expr\Isset_;

include "koneksi.php";
$login = mysql_query("select * FROM pembelian WHERE nopendaftaran='$_POST[nopendaftaran]' AND password='$_POST[password]'");
$ketemu = mysql_num_rows($login);
$r = mysql_fetch_array($login);
$cekdata = mysql_query("select * FROM log_pendaftaran WHERE nopendaftaran='$_POST[nopendaftaran]'");
$ketemu2 = mysql_num_rows($cekdata);
$cekpembayaran = mysql_query("select * FROM bayar WHERE nopendaftaran='$_POST[nopendaftaran]' and bayar='250000'");
$ketemu3 = mysql_num_rows($cekpembayaran);
// Apabila nopendaftaran dan password ditemukan
$izinkan = 'oke';
// Apabila nopendaftaran dan password ditemukan

$secret_key = "6LfKjzQUAAAAALW-jFcpq1pK9-dlUj6u9aKxX5kQ";
// $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
  // $response = json_decode($verify);

  // if($response->success){ // Jika proses validasi captcha berhasil


if ($ketemu > 0) {
  session_start();
  $_SESSION['nopendaftaran'] = $r['nopendaftaran'];
  $_SESSION['password'] = $r['password'];
  $_SESSION['level'] = $r['harga_formulir'];
  if ($ketemu3 > 0) {
    if ($izinkan == "oke") {
      if ($ketemu2 > 0) {
        echo "<br><br><div style='width:800px;text-align:center;margin:10px auto;'>Mohon maaf, data Anda tidak bisa diperbaiki,
			untuk melakukan perbaikan data silahkan menghubungi panitia melalui Chat Whatssapp untuk membuka data akses atau pada saat penyerahan formulir dan berkas lainnya, terimakasih.";
        echo "<div class='col-lg-12 col-md-12 col-sm-3 col-xs-3'>
        <div class='breadcomb-report'>
          <a type='button' data-placement='left' class='btn' href='../modul/cetak_formulir.php?nopendaftaran=$r[nopendaftaran]' target='_blank'><i></i>Cetak Formulir</a> |
          <a type='button' data-placement='left' class='btn' href='../modul/cetak_pakta.php?nopendaftaran=$r[nopendaftaran]' target='_blank'><i></i>Cetak Pakta Integritas</a> |
          <a type='button' data-placement='left' class='btn' href='../modul/cetak_biaya.php?nopendaftaran=$r[nopendaftaran]' target='_blank'><i></i>Cetak Pernyataan Biaya</a> |
          <a type='button' data-placement='left' class='btn' href='../modul/cetak.php?nopendaftaran=$r[nopendaftaran]' target='_blank'><i></i>Cetak Akun</a>
        </div>
        </div>";
      } else {
        ?>
<script>
  window.location = './identitas.html';
</script>;
<?php

}
} else {
  echo $warning;
}
} else {
  echo "<center>Login gagal! Anda belum melakukan pembayaran formulir<br>
	    Pembayaran bisa dilakukan melalui Teller Bank Muamalat, Net Banking, ATM Bersama<br>
		<table>
		  <tr><td>1.</td><td><a href='../carapembayaran/Tata Cara Pembayaran VA Muamalatbaru 2019.pptx'>Panduan pembayaran melalui Teller Bank Muamalat, ATM Bersama, Net Banking</a></td></tr>
		</table>";
  echo "<a href='../login.html'><b>ULANGI LAGI</b></a></center>";
}
} else {
  echo "<center>Login gagal! nomor pembayaran & password tidak benar<br>";
  echo "<a href='../login.html'><b>ULANGI LAGI</b></a></center>";
}
// }else{ // Jika captcha tidak valid
  // echo "<h2>Captcha Tidak Valid</h2>";
  // echo "Ohh sorry, you're not human (Anda bukan manusia)<hr>";
  // echo "Silahkan klik kotak I'm not robot (reCaptcha) untuk verifikasi";
// }
?>