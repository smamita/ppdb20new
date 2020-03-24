<?php
session_start();
include('../koneksi/koneksi.php');
date_default_timezone_set('asia/jakarta');
$date = date("Ymd");
$tanggalbuka = "20171101";
//$tanggalbuka="20161101";
if ($date >= $tanggalbuka) {
    $tampilkan = "select * from pembelian order by nopendaftaran DESC LIMIT 0,1";
    $data = mysql_query($tampilkan);
    if ($data === false) {
        die(mysql_error());
    }
    while ($hasil = mysql_fetch_array($data)) {
// ID OTOMATIS//***************************************************
        $kodeawal = substr($hasil['nopendaftaran'], 13) + 1;
        if ($kodeawal < 10) {
            $kode = '769601181861000' . $kodeawal;
        } elseif ($kodeawal > 9 && $kodeawal <= 99) {
            $kode = '76960118186100' . $kodeawal;
        } else {
            $kode = '7696011818610' . $kodeawal;
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
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMAM1TA 2018/2019</title>


    <link rel="stylesheet" type="text/css" href="../bootstrap/css/pastel-stream.css" />

    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">


        <!-- sample templates start -->

        <!-- Navbar -->
        <?php include('../menu.php'); ?>

        <div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Berita</h3>
                </div>
                <div class="panel-body">
                    Gelombang 1
                    <ul class="breadcrumb">
                        <li class="active">1 Nopember 2017 - 31 Maret 2018</li>
                        <?php
                        $date = date("Ymd");
                        $tanggalbuka = "20171101";
                        $tanggaltutup = "20180331";
                        if ($date <= $tanggalbuka) {
                            echo "<span class='label label-danger'>PPDB Gelombang 1 Belum Dibuka</span>";
                        } elseif ($date >= $tanggalbuka & $date <= $tanggaltutup) {
                            echo "<span class='label label-success'>PPDB Gelombang 1 Dibuka</span>";
                        } elseif ($date >= $tanggaltutup) {
                            echo "<span class='label label-danger'>PPDB Gelombang 1 Ditutup</span>";
                        } else {
                            echo "";
                        }
                        ?>
                    </ul>
                    Gelombang 2
                    <ul class="breadcrumb">
                        <li class="active"> 1 April 2018 - Pagu Terpenuhi</li>
                        <?php
                        $date = date("Ymd");
                        $tanggalbuka = "20180401";
                        $tanggaltutup = "20190817";
                        if ($date <= $tanggalbuka) {
                            echo "<span class='label label-danger'>PPDB Gelombang 2 Belum Dibuka</span>";
                        } elseif ($date >= $tanggalbuka & $date <= $tanggaltutup) {
                            echo "<span class='label label-success'>PPDB Gelombang 2 Dibuka</span>";
                        } elseif ($date >= $tanggaltutup) {
                            echo "<span class='label label-danger'>PPDB Gelombang 2 Ditutup</span>";
                        } else {
                            echo "";
                        }
                        ?>
                    </ul>

                    <div class="alert alert-danger alert-info" hidden="">
                        Pengumuman Peserta Lintas Minat Gelombang 1 <strong><a href="#" class="alert-link">.:Klik di
                                sini:.</a> </strong>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            // fungsi yang dipanggil ketika form di submit
            // lihat baris 5
            function validasi() {
                //        menangkap variabel nip dari form,
                //        my form adalah id dari form, lihat baris 5
                //        nip adalah id inputan, lihat baris 6

                var nama = document.forms["form1"]["nama"].value;
                var asal_sekolah = document.forms["form1"]["asal_sekolah"].value;
                var email = document.forms["form1"]["email"].value;
                var emailValid = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                var telepon = document.forms["form1"]["telepon"].value;
                var password = document.forms["form1"]["password"].value;
                var kelamin = document.forms["form1"]["kelamin"].value;
                var peminatan = document.forms["form1"]["peminatan"].value;

                if (nama == null || nama == "") {
                    alert("Nama tidak boleh kosong !");
                    return false;
                };

                if (asal_sekolah == null || asal_sekolah == "") {
                    alert("Asal SMP/MTs tidak boleh kosong !");
                    return false;
                };

                if (email == null || email == "") {
                    alert("Email tidak boleh kosong !");
                    return false;
                };

                if (email == "" || !email.match(emailValid)) {
                    alert("Format Email Salah !");
                    return false;
                };

                if (telepon == null || telepon == "") {
                    alert("No Telepon tidak boleh kosong !");
                    return false;
                };

                if (password == null || password == "") {
                    alert("password tidak boleh kosong !");
                    return false;
                };

                if (kelamin == null || kelamin == "") {
                    alert("Jenis Kelamin tidak boleh kosong !");
                    return false;
                };

                if (peminatan == null || peminatan == "") {
                    alert("Peminatan tidak boleh kosong !");
                    return false;
                };
            }
        </script>
        <SCRIPT language=Javascript>
            function isNumberKey(evt)
            {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
                return true;
            }
            </SCRIPT>

        <div class="col-lg-6">
            <div class="well">
                <form class="form-horizontal" id="form1" action="modul/aksipembeli.php" method="post" onsubmit='return validasi()'
                    enctype="multipart/form-data">
                    <fieldset>
                        <legend>FORMULIR PENDAFTARAN CALON PESERTA DIDIK</legend>
                        <div class="form-group" hidden="">
                            <label for="inputEmail" class="col-lg-4 control-label">No Pendaftaran</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="nopendaftaran" id="nopendaftaran" value="<?php echo $kode; ?>"
                                    placeholder="Nama Calon Pendaftar">
                            </div>
                        </div>
                        <div class="form-group" hidden="">
                            <label for="inputEmail" class="col-lg-4 control-label">Nama Alias</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="nama_alias" id="nama_alias" value="<?php echo $al; ?>"
                                    placeholder="Nama Calon Pendaftar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Nama</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Calon Pendaftar">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Asal Sekolah</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah"
                                    placeholder="Asal Sekolah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Email</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Handphone / WA</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" maxlength="12" name="telepon" id="telepon"
                                    placeholder="Nomor WA / HP yang bisa dihubungi" onkeypress="return isNumberKey(event)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-4 control-label">Password</label>
                            <div class="col-lg-8">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <span class="help-block">Isikan password sesuai keinginan, password digunakan unutk
                                    login setelah pembayaran</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Jenis Kelamin</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="kelamin" id="kelamin">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Peminatan</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="peminatan" id="peminatan">
                                    <option value="">-- Pilih Peminatan --</option>
                                    <option value="Matematika dan Ilmu Pengetahuan Alam (MIPA)">Matematika dan Ilmu
                                        Pengetahuan Alam (MIPA)</option>
                                    <option value="Ilmu Pengetahuan Sosial (IPS)">Ilmu Pengetahuan Sosial (IPS)</option>
                                </select>
                                <span class="help-block">Pilih Peminatan sesuai keinginan anda</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-8 col-lg-offset-4">
                                <button type="submit" class="btn btn-primary" name="daftar" id="daftar">Daftar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php

} else {
    echo "<div align='center'><b>Mohon Maaf Pendaftaran Peserta Didik Baru Tahun Pelajaran 2018/2019 belum dibuka, informasi lebih lanjut hubungi </b><br>
<span style='font-size:16pt;color:blue;font-weight:bold;'>SMA Muhammadiyah 1 Taman, 61257</span><br>
<span style='font-size:13pt;color:blue'>Jl. Raya Ketegan No 35 Taman Telp/Fax (031) 7881550 </span></div>";
} ?>