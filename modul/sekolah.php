<?php
session_start();
include '../koneksi/koneksi.php';

?>


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PPDB SMAMITA 2020/2021</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/ppdblg.ico">
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font awesome CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.transitions.css">
  <!-- meanmenu CSS
		============================================ -->
  <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- bootstrap select CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">

  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- wave CSS
		============================================ -->
  <link rel="stylesheet" href="css/wave/waves.min.css">
  <link rel="stylesheet" href="css/wave/button.css">
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
  <!-- Notika icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/notika-custom-icon.css">
  <!-- Data Table JS
		============================================ -->
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css">
  <!-- datapicker CSS
		============================================ -->
  <link rel="stylesheet" href="css/datapicker/datepicker3.css">
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="style.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <!-- Start Header Top Area -->
  <div class="header-top-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div class="logo-area">
            <a href="#"><img src="img/ppdblg.png" alt="" width="55px" height="55px" /></a>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div class="header-top-menu">
            <ul class="nav navbar-nav notika-top-nav">
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                  class="nav-link dropdown-toggle">PPDB 2019/2020 SMA MUHAMMADIYAH 1 TAMAN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- End Header Top Area -->
  <!-- Main Menu area start-->
  <?php include '../menu.php';?>
  <!-- Main Menu area End-->
  <!-- Breadcomb area Start-->
  <div class="breadcomb-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcomb-list">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="breadcomb-wp">
                  <div class="breadcomb-icon">
                    <i class="notika-icon notika-edit"></i>
                  </div>
                  <div class="breadcomb-ctn">
                    <h2>TAMBAH MANUAL SEKOLAH SMP - MTs</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcomb area End-->
  <!-- Wizard area Start-->
  <div class="form-element-area">
    <div class="container">
      <form class="form-horizontal" id="form1" action="modul/aksisekolah.php" method="post">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-element-list">
              <ul class="breadcrumb">
                <span class="label label-warning">A. DATA SMP / MTs</span>
              </ul>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                      <i class="notika-icon notika-map"></i>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control" name="prop" placeholder="Provinsi" required>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                      <i class="notika-icon notika-map"></i>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control" name="kab" placeholder="Kabupaten" required>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                      <i class="notika-icon notika-map"></i>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control" name="kec" placeholder="Kecamatan" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                      <i class="notika-icon notika-map"></i>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control" name="desa" placeholder="Kelurahan / Desa" required>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                  <div class="form-group ic-cmp-int">
                    <div class="form-ic-cmp">
                      <i class="notika-icon notika-next"></i>
                    </div>
                    <div class="nk-int-st">
                      <input type="text" class="form-control" name="sekolah" placeholder="Nama Sekolah" required>
                    </div>
                  </div>
                </div>
              </div>


              <ul class="breadcrumb">
                <p align="left">Data ini diisikan jika tidak ada nama SMP/MTs pada
                  kolom pilihan sekolah, pengisian secara manual menunggu proses approve dari admin PPDB
                  atau menghubungi melalui aplikasi Whatsapp 083830872175-Roby Firmansyah untuk percepatan proses
                  approve</p>

                <div class="form-example-int mg-t-15">
                  <button type="submit" class="btn btn-danger notika-btn-danger" name="simpan"
                    id="simpan">BATAL</button>
                  <button type="submit" class="btn btn-success notika-btn-success" name="simpan"
                    id="simpan">SIMPAN</button>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </form>
    </div>

  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
										</div>
							</div>
  <div class="data-table-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="data-table-list">
            <div class="basic-tb-hd">
              <h2>List Data SMP / MTs</h2>
              <p></p>
            </div>
            <div class="table-responsive">
              <table id="data-table-basic" class="table table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Provinsi</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $noo = 0;
                  $data = mysql_query("select * from  sekolah where aktif in ('0','2')");
                  while ($b = mysql_fetch_array($data)) {
                      $noo++;
                      ?>
                  <tr>
                    <td><?php echo $noo; ?></td>
                    <td><?php echo $b['nama_sekolah'];?></td>
                    <td><?php echo $b['prop'];?></td>
                    <td><?php echo $b['kab'];?></td>
                    <td><?php echo $b['kec'];?></td>
                    <td><?php echo $b['desa'];?></td>
                    <td>
                    <?php

                                if ($b['aktif'] == 0) {

                                    echo "<a type='button' class='btn btn-danger'>Belum Di Verifikasi </a>";

                                } else {

                                  echo "<a type='button' class='btn btn-primary'>Sudah Di Approve</a>";

                                }

                                ?></td>
                  </tr>   
                  <?php }?>
                </tbody>
                <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama Sekolah</th>
                    <th>Provinsi</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Keterangan</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Wizard area End-->
  <!-- Start Footer area-->
  <div class="footer-copyright-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="footer-copy-right">
            <p>ICT SMAMITA © 2019</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer area-->
  <!-- jquery
		============================================ -->
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
		============================================ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- wow JS
		============================================ -->
  <script src="js/wow.min.js"></script>
  <!-- price-slider JS
		============================================ -->
  <script src="js/jquery-price-slider.js"></script>
  <!-- owl.carousel JS
		============================================ -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- scrollUp JS
		============================================ -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- meanmenu JS
		============================================ -->
  <script src="js/meanmenu/jquery.meanmenu.js"></script>
  <!-- bootstrap select JS
		============================================ -->
  <script src="js/bootstrap-select/bootstrap-select.js"></script>
  <!-- counterup JS
		============================================ -->
  <script src="js/counterup/jquery.counterup.min.js"></script>
  <script src="js/counterup/waypoints.min.js"></script>
  <script src="js/counterup/counterup-active.js"></script>
  <!-- mCustomScrollbar JS
		============================================ -->
  <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- sparkline JS
		============================================ -->
  <script src="js/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/sparkline/sparkline-active.js"></script>
  <!-- Input Mask JS
		============================================ -->
  <script src="js/jasny-bootstrap.min.js"></script>
  <!-- flot JS
		============================================ -->
  <script src="js/flot/jquery.flot.js"></script>
  <script src="js/flot/jquery.flot.resize.js"></script>
  <script src="js/flot/flot-active.js"></script>
  <!-- knob JS
		============================================ -->
  <script src="js/knob/jquery.knob.js"></script>
  <script src="js/knob/jquery.appear.js"></script>
  <script src="js/knob/knob-active.js"></script>
  <!-- icheck JS
		============================================ -->
  <script src="js/icheck/icheck.min.js"></script>
  <script src="js/icheck/icheck-active.js"></script>
  <!-- datapicker JS
		============================================ -->
  <script src="js/datapicker/bootstrap-datepicker.js"></script>
  <script src="js/datapicker/datepicker-active.js"></script>
  <!--  Chat JS
		============================================ -->
  <script src="js/chat/jquery.chat.js"></script>
  <!--  wizard JS
		============================================ -->
  <script src="js/wizard/jquery.bootstrap.wizard.min.js"></script>
  <script src="js/wizard/wizard-active.js"></script>
  <!--  todo JS
		============================================ -->
  <script src="js/todo/jquery.todo.js"></script>
  <!--  wave JS
		============================================ -->
  <script src="js/wave/waves.min.js"></script>
  <script src="js/wave/wave-active.js"></script>
  <!-- plugins JS
		============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
		============================================ -->
  <script src="js/main.js"></script>
  <!-- tawk chat JS
		============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>
</body>

</html>