<?php
session_start();
include('../koneksi/koneksi.php');

$data_pendaftaran = mysql_query("select * from pendaftaran where nopendaftaran='" . $_SESSION['nopendaftaran'] . "'");
$a = mysql_fetch_array($data_pendaftaran);

$data_pembelian = mysql_query("select * from pembelian where nopendaftaran='" . $_SESSION['nopendaftaran'] . "'");
$x = mysql_fetch_array($data_pembelian);

$arr = explode('-', $a['tgllahir']);
$newDate = $arr[2] . '/' . $arr[1] . '/' . $arr[0];
?>


<!doctype html>
<html class="no-js" lang="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>PPDB SMAMITA 2019/2020</title>
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
  <script type="text/javascript">
		<!-- Begin
		function startCalc() {
			interval = setInterval("calc()", 1);
		}

		function calc() {
			abin1 = document.autoSumForm.bin1.value;
			abin2 = document.autoSumForm.bin2.value;
			abin3 = document.autoSumForm.bin3.value;
			abin4 = document.autoSumForm.bin4.value;
			abin5 = document.autoSumForm.bin5.value;
			rata = document.autoSumForm.averageBox.value;

			abig1 = document.autoSumForm.big1.value;
			abig2 = document.autoSumForm.big2.value;
			abig3 = document.autoSumForm.big3.value;
			abig4 = document.autoSumForm.big4.value;
			abig5 = document.autoSumForm.big5.value;
			rata2 = document.autoSumForm.averageBox2.value;

			amtk1 = document.autoSumForm.mtk1.value;
			amtk2 = document.autoSumForm.mtk2.value;
			amtk3 = document.autoSumForm.mtk3.value;
			amtk4 = document.autoSumForm.mtk4.value;
			amtk5 = document.autoSumForm.mtk5.value;
			rata3 = document.autoSumForm.averageBox3.value;

			aipa1 = document.autoSumForm.ipa1.value;
			aipa2 = document.autoSumForm.ipa2.value;
			aipa3 = document.autoSumForm.ipa3.value;
			aipa4 = document.autoSumForm.ipa4.value;
			aipa5 = document.autoSumForm.ipa5.value;
			rata4 = document.autoSumForm.averageBox4.value;

			aips1 = document.autoSumForm.ips1.value;
			aips2 = document.autoSumForm.ips2.value;
			aips3 = document.autoSumForm.ips3.value;
			aips4 = document.autoSumForm.ips4.value;
			aips5 = document.autoSumForm.ips5.value;
			rata5 = document.autoSumForm.averageBox5.value;

			ratax = document.autoSumForm.averageBox_total.value;

			pembagi = 0;
			if (abin1 != '') {
				pembagi = pembagi + 1;
			}
			if (abin2 != '') {
				pembagi = pembagi + 1;
			}
			if (abin3 != '') {
				pembagi = pembagi + 1;
			}
			if (abin4 != '') {
				pembagi = pembagi + 1;
			}
			if (abin5 != '') {
				pembagi = pembagi + 1;
			}

			pembagi2 = 0;
			if (abig1 != '') {
				pembagi2 = pembagi2 + 1;
			}
			if (abig2 != '') {
				pembagi2 = pembagi2 + 1;
			}
			if (abig3 != '') {
				pembagi2 = pembagi2 + 1;
			}
			if (abig4 != '') {
				pembagi2 = pembagi2 + 1;
			}
			if (abig5 != '') {
				pembagi2 = pembagi2 + 1;
			}

			pembagi3 = 0;
			if (amtk1 != '') {
				pembagi3 = pembagi3 + 1;
			}
			if (amtk2 != '') {
				pembagi3 = pembagi3 + 1;
			}
			if (amtk3 != '') {
				pembagi3 = pembagi3 + 1;
			}
			if (amtk4 != '') {
				pembagi3 = pembagi3 + 1;
			}
			if (amtk5 != '') {
				pembagi3 = pembagi3 + 1;
			}

			pembagi4 = 0;
			if (aipa1 != '') {
				pembagi4 = pembagi4 + 1;
			}
			if (aipa2 != '') {
				pembagi4 = pembagi4 + 1;
			}
			if (aipa3 != '') {
				pembagi4 = pembagi4 + 1;
			}
			if (aipa4 != '') {
				pembagi4 = pembagi4 + 1;
			}
			if (aipa5 != '') {
				pembagi4 = pembagi4 + 1;
			}

			pembagi5 = 0;
			if (aips1 != '') {
				pembagi5 = pembagi5 + 1;
			}
			if (aips2 != '') {
				pembagi5 = pembagi5 + 1;
			}
			if (aips3 != '') {
				pembagi5 = pembagi5 + 1;
			}
			if (aips4 != '') {
				pembagi5 = pembagi5 + 1;
			}
			if (aips5 != '') {
				pembagi5 = pembagi5 + 1;
			}

			pembagi_total = 0;
			if (rata != '') {
				pembagi_total = pembagi_total + 1;
			}
			if (rata2 != '') {
				pembagi_total = pembagi_total + 1;
			}
			if (rata3 != '') {
				pembagi_total = pembagi_total + 1;
			}
			if (rata4 != '') {
				pembagi_total = pembagi_total + 1;
			}
			if (rata5 != '') {
				pembagi_total = pembagi_total + 1;
			}

			//BIN
			hasil1 = ((abin1 * 1) + (abin2 * 1) + (abin3 * 1) + (abin4 * 1) + (abin5 * 1)) / pembagi;
			hasil1_fix = Math.round(hasil1 * 100) / 100;
			if (hasil1_fix > 0) {
				document.autoSumForm.averageBox.value = hasil1_fix;
			} else {
				document.autoSumForm.averageBox.value = '';
			}

			//BIG
			hasil2 = ((abig1 * 1) + (abig2 * 1) + (abig3 * 1) + (abig4 * 1) + (abig5 * 1)) / pembagi2;
			hasil2_fix = Math.round(hasil2 * 100) / 100;
			//document.autoSumForm.averageBox2.value = hasil2_fix;
			if (hasil2_fix > 0) {
				document.autoSumForm.averageBox2.value = hasil2_fix;
			} else {
				document.autoSumForm.averageBox2.value = '';
			}

			//MTK
			hasil3 = ((amtk1 * 1) + (amtk2 * 1) + (amtk3 * 1) + (amtk4 * 1) + (amtk5 * 1)) / pembagi3;
			hasil3_fix = Math.round(hasil3 * 100) / 100;
			//document.autoSumForm.averageBox3.value = hasil3_fix;
			if (hasil3_fix > 0) {
				document.autoSumForm.averageBox3.value = hasil3_fix;
			} else {
				document.autoSumForm.averageBox3.value = '';
			}

			//IPA
			hasil4 = ((aipa1 * 1) + (aipa2 * 1) + (aipa3 * 1) + (aipa4 * 1) + (aipa5 * 1)) / pembagi4;
			hasil4_fix = Math.round(hasil4 * 100) / 100;
			//document.autoSumForm.averageBox4.value = hasil4_fix;
			if (hasil4_fix > 0) {
				document.autoSumForm.averageBox4.value = hasil4_fix;
			} else {
				document.autoSumForm.averageBox4.value = '';
			}

			//IPS
			hasil5 = ((aips1 * 1) + (aips2 * 1) + (aips3 * 1) + (aips4 * 1) + (aips5 * 1)) / pembagi5;
			hasil5_fix = Math.round(hasil5 * 100) / 100;
			//document.autoSumForm.averageBox5.value = hasil5_fix;
			if (hasil5_fix > 0) {
				document.autoSumForm.averageBox5.value = hasil5_fix;
			} else {
				document.autoSumForm.averageBox5.value = '';
			}

			//hasil total
			total = ((rata * 1) + (rata2 * 1) + (rata3 * 1) + (rata4 * 1) + (rata5 * 1)) / pembagi_total;
			hasil_total = Math.round(total * 100) / 100;
			document.autoSumForm.averageBox_total.value = hasil_total;

		}

		function stopCalc() {
			clearInterval(interval);
		}
		//  End -->
	</script>
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
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Header Top Area -->
  <!-- Main Menu area start-->
  <?php include('../menu2.php'); ?>
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
                    <h2>IDENTITAS</h2>
                  </div>                  
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-3 col-xs-3">
								<div class="breadcomb-report">
									<a type="button" data-placement="left" class="btn" href='modul/cetak_formulir.php?nopendaftaran=<?php echo $a['nopendaftaran']; ?>' target='_blank'><i></i>Cetak Formulir</a> |
									<a type="button" data-placement="left" class="btn" href='modul/cetak_pakta.php?nopendaftaran=<?php echo $a['nopendaftaran']; ?>' target='_blank'><i></i>Cetak Pakta Integritas</a> |
									<a type="button" data-placement="left" class="btn" href='modul/cetak_biaya.php?nopendaftaran=<?php echo $a['nopendaftaran']; ?>' target='_blank'><i></i>Cetak Pernyataan Biaya</a> |
									<a type="button" data-placement="left" class="btn" href='modul/cetak.php?nopendaftaran=<?php echo $a['nopendaftaran']; ?>' target='_blank'><i></i>Cetak Akun</a>
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
  <?php include('form2.php'); ?>
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

</body>

</html>