<?php
session_start();
include "../koneksi/koneksi.php";

if (isset($_GET['nopendaftaran'])) {
    $no = $_GET['nopendaftaran'];
    $exe = mysql_query("select * from pembelian where nopendaftaran='$no'");
    $a = mysql_fetch_array($exe);
    mysql_query("REPLACE into bayar values('$no','$a[nama]','250000')");
    echo "<script>window.location='list.html'</script>";
}

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
          <h3 class="panel-title">Daftar Calon Peserta</h3>
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
                <th>Broadcast Bayar Form</th>
                <th>Broadcast Daftar Ulang</th>
                <th>Broadcast Isi identitas</th>
                <th>Broadcast Tes</th>
                <th>Broadcast Selamat</th>
                <th>Broadcast Fortasi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nomor Pendaftaran</th>
                <th>Nama</th>
                <th>Asal Sekolah</th>
                <th>Telepon</th>
                <th>Tanggal</th>
                <th>Broadcast Bayar Form</th>
                <th>Broadcast Daftar Ulang</th>
                <th>Broadcast Isi identitas</th>
                <th>Broadcast Tes</th>
                <th>Broadcast Selamat</th>
                <th>Broadcast Fortasi</th>
              </tr>
            </tfoot>
            <tbody>
              <?php
$noo = 0;
$data = mysql_query("select * from  pembelian where nopendaftaran limit 1555");
while ($b = mysql_fetch_array($data)) {
    $exe = mysql_query("select * from bayar where nopendaftaran='$b[nopendaftaran]'");
    $a = mysql_fetch_array($exe);

    $buka = mysql_query("select * from log_pendaftaran where nopendaftaran='$b[nopendaftaran]'");
    $bk = mysql_fetch_array($buka);

    $exe = mysql_query("select * from daftarulang where nopendaftaran='$b[nopendaftaran]'");
    $du = mysql_fetch_array($exe);

    $daftar = mysql_query("select * from pendaftaran where nopendaftaran='$b[nopendaftaran]'");
    $df = mysql_fetch_array($daftar);

    $jadwal = mysql_query("select * from jadwal where id_jadwal='$df[id_jadwal]'");
    $jwl = mysql_fetch_array($jadwal);
    $noo++;

    $telp = substr($b['telepon'], 1);
    $nama = $b['nama'];
    $jadwal = $jwl['nama_jadwal'];
    ?>

              <tr class="odd gradeX">
                <td>
                  <?php echo $noo; ?>
                </td>
                <td>
                  <?php echo $b['nopendaftaran']; ?>
                </td>
                <td>
                  <?php echo $b['nama']; ?>
                </td>
                <td>
                  <?php echo $b['asal_sekolah']; ?>
                </td>
                <td>
                  <?php echo $b['telepon']; ?>
                </td>
                <td>
                  <?php echo $b['tanggal']; ?>
                </td>
                <td>
                  <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20Saudara/i%20$nama,%20Mohon%20segera%20melakukan%20pembayaran%20formulir%20sebesar%20Rp%20250.000%20untuk%20dapat%20mendaftar%20sebagai%20siswa%20SMAM1TA,%20Pembayaran%20bisa%20dilakukan%20di%20Bank%20Muamalat,%20ATM%20Bersama%20atau%20kampus%20SMAM1TA%20' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA ke Calon Siswa ?')\">BC Bayar Form<br></a>"; ?>
                </td>
                <td>
                    <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20Saudara/i%20$nama,%20Mohon%20segera%20melakukan%20pembayaran%20Daftar%20Ulang%20untuk%20dapat%20terdaftar%20sebagai%20siswa%20di%20SMAM1TA,%20Pembayaran%20dilakukan%20di%20SMAM1TA%20Tower%20' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA ke Calon Siswa ?')\">BC DAFTAR ULANG<br></a>"; ?>
                </td>
                <td>
                    <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20Saudara/i%20$nama,%20Terima%20Kasih%20sudah%20mendaftar%20di%20SMAM1TA%20silahkan%20login%20di%20https://daftar.smam1ta.sch.id/login.html%20untuk%20pengisian%20data%20selanjutnya' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA ke Calon Siswa ?')\">BC ISI IDENTITAS<br></a>"; ?>
                </td>
                <td>
                    <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20mengingatkan%20kepada%20saudara/i%20$nama,%20untuk%20mengikuti%20Tes%20Peminatan%20$jadwal%20terdiri%20dari%20TES%20TPA%20-%20MATEMATIKA,%20IPA,%20IPS.%20dan%20TES%20PSIKOLOGI,%20memakai%20seragam%20SMP%20di%20Kampus%20SMA%20Muhammadiyah%201%20Taman,%20Terima%20Kasih' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA ke Calon Siswa ?')\">BC Tes Peminatan<br></a>"; ?>
                </td>
                <td>
                    <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb.%20Selamat%20kepada%20$nama,%20Anda%20telah%20diterima%20di%20SMA%20Muhammadiyah%201%20Taman%20TA%202019/2020.%20Siswa/i%20$nama%20bisa%20mengambil%20seragam%20di%20Koperasi%20SMAM1TA%20pada%20hari%20Senin%20-%20Jum`at%20Pukul%2007.00%20-%2014.00.%20Terima%20Kasih' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA ke Calon Siswa ?')\">BC SELAMAT<br></a>"; ?>
                </td>
                <td>
                    <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb,%20Diberitahukan%20kepada%20Siswa/i%20Kelas%20X%20SMAM1TA,%20Bahwa%20Sabtu%20Tanggal%20..............%20...........%20........%20Pukul%20.......%20-%20........%20WIB%20Ada%20Kegiatan%20FORTAS%20(Forum%20Taaruf%20dan%20Masa%20Orientasi%20Siswa)%20kemudian%20dilanjutkan%20Placement%20Test%20Mengaji%20(memakai%20seragam%20SMP)%20-%20Awal%20Masuk%20Tahun%20Pelajaran%202020/2021%20pada%20Tanggal%20......%20.....%20........%20Pukul%20........%20Terima%20Kasih' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA ke Calon Siswa ?')\">BC FORTASI<br></a>"; ?>
                </td>
              </tr>
              <?php

}
?>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="../datatabel/jquery-latest.min.js" type="text/javascript"></script>
  <script src="../datatabel/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="../datatabel/dataTables.bootstrap.min.js" type="text/javascript"></script>




  <script type="text/javascript">
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
</body>

</html>