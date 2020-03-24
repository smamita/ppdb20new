<?php
session_start();
include('../koneksi/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMAM1TA 2018/2019</title>


    <link rel="stylesheet" type="text/css" href="bootstrap/css/pastel-stream.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
<body>

    <div class="container">


        <!-- sample templates start -->

        <!-- Navbar -->
        <?php include('../menu.php'); ?>

        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Panduan</h3>
                </div>
                <div class="panel-body">
                    Download Panduan PPDB 2018-2019

                    <ul class="breadcrumb">
                        <li class="active"><a type="button" class="btn btn-warning" href='../carapembayaran/Tata Cara Pembayaran VA Muamalatbaru.pptx' target='_blank'>PANDUAN PEMBAYARAN VIRTUAL ACCOUNT PPDB 2018/2019</a></li>
                    </ul>
                    <ul class="breadcrumb">
                        <li class="active"><a type="button" class="btn btn-warning" href='../carapembayaran/PANDUAN PPDB 2018-2019.pdf' target='_blank'>PANDUAN PPDB 2018/2019</a></li>
                    </ul>
                    <ul class="breadcrumb">
                        <li class="active"><a type="button" class="btn btn-warning" href='../carapembayaran/TATA CARA PPPDB ONLINE 2018.pdf' target='_blank'>TATA CARA PPDB ONLINE 2018/2019</a></li>
                    </ul>

                    <div class="alert alert-danger alert-info" hidden="">
                        Pengumuman Peserta Lintas Minat Gelombang 1 <strong><a href="#" class="alert-link">.:Klik di sini:.</a> </strong>
                    </div>
                </div>
                <div class="panel-body">
                  <iframe src="../src/PANDUAN_PPDB_2018_2019/index.html" width="100%" height="650" ></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
