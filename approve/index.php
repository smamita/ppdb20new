<?php
session_start();
include "koneksi.php";

if (isset($_GET['nopendaftaran'])) {
    $no = $_GET['nopendaftaran'];
    $exe = mysql_query("select * from pembelian where nopendaftaran='$no'");
    $a = mysql_fetch_array($exe);
    mysql_query("REPLACE into bayar values('$no','$a[nama]','250000')");
    echo "<script>window.location='index.php'</script>";
    echo "<div class='alert alert-success'> alert</div>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>PPDB SMAM1TA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin-top: 2%
        }
    </style>
    <script src="jquery/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
</head>



<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <form action="#" method="get">
                    <div class="input-group">
                        <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
                        <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    </div>
                </form>
                Versi 3.1 database 02 tahun 2019
            </div>

            <div class="col-md-9">

                <table class="table table-list-search">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Nomor Pendaftaran</th>

                            <th>Nama</th>

                            <th>Asal Sekolah</th>

                            <th>Cetak Formulir Pembayaran</th>

                            <!--

                            <th>WA Info Bayar</th>

                            <th>WA Info Daftar Ulang</th>

                            <th>WA Info Identitas</th>

                            <th>WA Info Tes</th>

                            <th>WA Info </th>

                            <th>WA Selamat </th>-->

                            <th>WA MOS </th>

                            <th>Tanggal</th>

                            <th>Aksi Formulir</th>

                            <th>Aksi DU</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php
                        $noo = 0;
                        $data = mysql_query("select * from  pembelian where nopendaftaran limit 0,800");
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

                        <tr>

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
                                <?php echo "<a type='button' class='btn btn-info' href='modul/cetak_formulir.php?nopendaftaran=$b[nopendaftaran]' target='_blank' onclick=\"javascript: return confirm ('Anda Yakin Cetak Formulir ?')\">PRINT<br></a>"; ?>
                            </td>
                            <!--
                            <td>
                                <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20Saudara/i%20$nama,%20Mohon%20segera%20melakukan%20pembayaran%20formulir%20sebesar%20Rp%20250.000%20untuk%20dapat%20mendaftar%20sebagai%20siswa%20SMAM1TA,%20Pembayaran%20bisa%20dilakukan%20di%20Bank%20Muamalat,%20ATM%20Bersama%20atau%20kampus%20SMAM1TA%20' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA Calon Siswa ?')\">WA INFO BAYAR<br></a>"; ?>                            </td>

                            <td>

                                <?php echo "<a type='button' class='btn btn-warning' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20Saudara/i%20$nama,%20Mohon%20segera%20melakukan%20pembayaran%20Daftar%20Ulang%20untuk%20dapat%20terdaftar%20sebagai%20siswa%20SMAM1TA,%20Pembayaran%20dilakukan%20di%20kampus%20SMAM1TA%20' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA Calon Siswa ?')\">WA INFO DAFTAR ULANG<br></a>"; ?>

                            </td>

                            <td>
                                <?php echo "<a type='button' class='btn btn-success' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20Saudara/i%20$nama,%20Terima%20Kasih%20sudah%20mendaftar%20di%20SMAM1TA%20silahkan%20login%20di%20https://daftar.smam1ta.sch.id/login.html%20untuk%20pengisian%20data%20selanjutnya' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA Calon Siswa ?')\">WA INFO IDENTITAS<br></a>"; ?>                            </td>                            <td>

                                <?php echo "<a type='button' class='btn btn-danger' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20mengingatkan%20kepada%20saudara/i%20$nama,%20untuk%20mengikuti%20Tes%20Peminatan%20$jadwal%20terdiri%20dari%20TES%20TPA%20-%20MATEMATIKA,%20IPA,%20IPS.%20dan%20TES%20PSIKOLOGI,%20memakai%20seragam%20SMP%20di%20Kampus%20SMA%20Muhammadiyah%201%20Taman,%20Terima%20Kasih' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA Calon Siswa ?')\">WA Tes Peminatan<br></a>"; ?>

                            </td>

                            <td>

                                <?php echo "<a type='button' class='btn btn-danger' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb%20Hati%20-%20Hati%20MODUS%20PENIPUAN%20yang%20mengatasnamakan%20SMA%20MUHAMMADIYAH%201%20TAMAN%20(SMAM1TA).%20segala%20macam%20pembayaran%20siswa%20hanya%20melalui%20Bank%20MUAMALAT%20A/N%20SMA%20MUHAMMADIYAH%201%20TAMAN%20untuk%20informasi%20lebih%20lanjut%20dapat%20menghubungi%20kampus%20SMAM1TA%200317881550%20atau%20M%20Nashiruddin%20-%20085736236667%20/%20Irma%20Rusdiana%20-%20081337549015%20Terima%20Kasih' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA Calon Siswa ?')\">WA Berita<br></a>"; ?>

                            </td>

                            <td>

                                <?php echo "<a type='button' class='btn btn-info' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb.%20Selamat%20kepada%20$nama,%20Anda%20telah%20diterima%20di%20SMA%20Muhammadiyah%201%20Taman%20TA%202019/2020.%20Siswa/i%20$nama%20bisa%20mengambil%20seragam%20di%20Koperasi%20SMAM1TA%20pada%20hari%20Senin%20-%20Jum`at%20Pukul%2007.00%20-%2014.00.%20Terima%20Kasih' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA Calon Siswa ?')\">WA INFO SELAMAT<br></a>"; ?>

                            </td>-->

                            <td>

                                <?php echo "<a type='button' class='btn btn-success' href='https://api.whatsapp.com/send?phone=62$telp&amp;text=Assalamualaikum%20Wr%20Wb,%20Diberitahukan%20kepada%20Siswa/i%20Kelas%20X%20SMAM1TA,%20Bahwa%20Sabtu%20Tanggal%2013%20Juli%202019%20Pukul%2007.00%20-%2012.00%20WIB%20Ada%20Kegiatan%20MPLS%20(Masa%20Pengenalan%20Lingkungan%20Sekolah)%20dan%20dilanjutkan%20Placement%20Test%20Mengaji%20(memakai%20seragam%20SMP)%20-%20Awal%20Masuk%20Tahun%20Pelajaran%202019/2020%20pada%20Tanggal%2015%20Juli%202019%20Pukul%2006.30%20Terima%20Kasih' onclick=\"javascript: return confirm ('Anda Yakin kirim Pesan WA Calon Siswa ?')\">WA FORTASI<br></a>"; ?>

                            </td>

                            <td>

                                <?php echo $b['tanggal']; ?>

                            </td>

                            <td>

                                <!--<a type="button" class="btn btn-warning" href='modul/identitas.php?nopendaftaran=<?php echo $b['nopendaftaran']; ?>'>UPDATE</a>-->

                                <?php

                                if ($b['nopendaftaran'] == $bk['nopendaftaran']) {

                                    echo "<a type='button' class='btn btn-primary' href='buka.php?nopendaftaran=$b[nopendaftaran]' onclick=\"javascript: return confirm ('Anda Yakin Buka Kunci ?')\">BUKA LOG </a>";

                                } else {



                                }

                                ?>

                                <?php

                                if ($b['nopendaftaran'] == $a['nopendaftaran']) {

                                    echo "<a type='button' class='btn btn-danger' href='cancel.php?nopendaftaran=$b[nopendaftaran]' onclick=\"javascript: return confirm ('Anda Yakin CANCEL ?')\">CANCEL</a>";

                                } else {

                                    echo "<a type='button' class='btn btn-primary' href='index.php?nopendaftaran=$b[nopendaftaran]' onclick=\"javascript: return confirm ('Anda Yakin APPROVE ?')\">APPROVE</a>

															";

                                }

                                ?>

                            </td>

                            <td>

                                <?php

                                if ($b['nopendaftaran'] == $du['nopendaftaran']) {

                                    echo "<a type='button' class='btn btn-danger' href='ducancel.php?nopendaftaran=$b[nopendaftaran]' onclick=\"javascript: return confirm ('Anda Yakin CANCEL ?')\">CANCEL</a>";

                                } else {

                                    echo "<a type='button' class='btn btn-primary' href='du.php?nopendaftaran=$b[nopendaftaran]' onclick=\"javascript: return confirm ('Anda Yakin DU ?')\">DU</a>";

                                }

                                ?>

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

    <script type="text/javascript">
        $(document).ready(function () {

            var activeSystemClass = $('.list-group-item.active');



            //something is entered in search form

            $('#system-search').keyup(function () {

                var that = this;

                // affect all table rows on in systems table

                var tableBody = $('.table-list-search tbody');

                var tableRowsClass = $('.table-list-search tbody tr');

                $('.search-sf').remove();

                tableRowsClass.each(function (i, val) {



                    //Lower text for case insensitive

                    var rowText = $(val).text().toLowerCase();

                    var inputText = $(that).val().toLowerCase();

                    if (inputText != '') {

                        $('.search-query-sf').remove();

                        tableBody.prepend(

                            '<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "' +

                            $(that).val() +

                            '"</strong></td></tr>');

                    } else {

                        $('.search-query-sf').remove();

                    }



                    if (rowText.indexOf(inputText) == -1) {

                        //hide rows

                        tableRowsClass.eq(i).hide();



                    } else {

                        $('.search-sf').remove();

                        tableRowsClass.eq(i).show();

                    }

                });

                //all tr elements are hidden

                if (tableRowsClass.children(':visible').length == 0) {

                    tableBody.append(

                        '<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>'

                    );

                }

            });

        });
    </script>

</body>



</html>