<?php
session_start();
include '../koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SMAM1TA 2020/2021</title>


    <link rel="stylesheet" type="text/css" href="../bootstrap/css/pastel-stream.css" />
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    </head>
<body>

    <div class="container">


        <!-- sample templates start -->

        <!-- Navbar -->
        <?php include '../menu.php';?>

        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Alur Pendaftaran</h3>
                </div>
                <div class="panel-body">
                  <iframe src="../src/alur/alur2.html" width="100%" height="650" ></iframe>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
