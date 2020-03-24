<?php
session_start();
include "koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMAM1TA 2020/2021</title>


    <link rel="stylesheet" type="text/css" href="bootstrap/css/pastel-stream.css" />
    <link rel="shortcut icon" type="image/x-icon" href="daftarsmamita/panel/img/ppdblg.ico">

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">


        <!-- sample templates start -->

        <!-- Navbar -->
        <?php include 'menu2.php';?>

				<script type="text/javascript">
				// fungsi yang dipanggil ketika form di submit
				// lihat baris 5
				function validasi()
						{
								var nopendaftaran=document.forms["form1"]["nopendaftaran"].value;
								var password=document.forms["form1"]["password"].value;
								if (nopendaftaran==null || nopendaftaran=="")
											{
											alert("No pendaftaran tidak boleh kosong !");
											return false;
											};

								 if (password==null || password=="")
										{
										alert("password tidak boleh kosong !");
										return false;
										};
						 }
				</script>
            <div class="col-lg-6">
                <div class="well">
									<form class="form-horizontal" id="form1" action="./koneksi/cek_login.php" method="post" onsubmit='return validasi()' enctype="multipart/form-data">
                        <fieldset>
                            <legend>LOGIN ADMIN</legend>
                            <div class="form-group">
                                <label for="inputEmail" class="col-lg-4 control-label">USERNAME</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-4 control-label">PASSWORD</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-8 col-lg-offset-4">
                                    <button type="submit" class="btn btn-primary" name="masuk" id="masuk">Masuk</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
				<!--Berita-->
				<div class="col-lg-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Berita</h3>
                </div>
								<div class="panel-body">
                    Gelombang 1
                    <ul class="breadcrumb">
                        <li class="active">01 Desember 2019 - 30 Maret 2019</li>
                        <?php
$date = date("Ymd");
$tanggalbuka = "20191201";
$tanggaltutup = "20190330";
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
                        <li class="active"> 01 April 2020 - Pagu Terpenuhi</li>
                        <?php
$date = date("Ymd");
$tanggalbuka = "20200401";
$tanggaltutup = "20210817";
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
                        Pengumuman Peserta Lintas Minat Gelombang 1 <strong><a href="#" class="alert-link">.:Klik di sini:.</a> </strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
