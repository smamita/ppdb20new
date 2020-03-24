<?php
session_start();
include "../koneksi/koneksi.php";

$data_pendaftaran = mysql_query("select * from pendaftaran where nopendaftaran='" . $_GET['nopendaftaran'] . "'");
$a = mysql_fetch_array($data_pendaftaran);

$data_pembelian = mysql_query("select * from pembelian where nopendaftaran='" . $_GET['nopendaftaran'] . "'");
$x = mysql_fetch_array($data_pembelian);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PPDB SMAM1TA 2020/2021</title>


	<link rel="stylesheet" type="text/css" href="bootstrap/css/pastel-stream.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datepicker.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-datepicker.min.css" />
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootbox.min.js"></script>
	<style media="screen">
		.scroll{
						width: 550px;
						overflow: scroll;
						height: 550px;

						/*script tambahan khusus untuk IE */
						scrollbar-face-color: #CE7E00;
						scrollbar-shadow-color: #FFFFFF;
						scrollbar-highlight-color: #6F4709;
						scrollbar-3dlight-color: #11111;
						scrollbar-darkshadow-color: #6F4709;
						scrollbar-track-color: #FFE8C1;
						scrollbar-arrow-color: #6F4709;
						}
		</style>
	<script type="text/javascript">
		$(function () {
			$(".datepicker").datepicker({
				format: 'yyyy-mm-dd',
				autoclose: true,
				todayHighlight: true,
			});
		});
	</script>
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

	<div class="container">


		<!-- sample templates start -->

		<!-- Navbar -->
		<?php include '../menu.php';?>
		<script type="text/javascript">
			// fungsi yang dipanggil ketika form di submit
			// lihat baris 5
			function validasi() {
				//        menangkap variabel nip dari form,
				//        my form adalah id dari form, lihat baris 5
				//        nip adalah id inputan, lihat baris 6

				var nopendaftaran = document.forms["form1"]["nopendaftaran"].value;
				var nama = document.forms["form1"]["nama"].value;
				var kelamin = document.forms["form1"]["kelamin"].value;
				var asal_sekolah = document.forms["form1"]["asal_sekolah"].value;
				var peminatan = document.forms["form1"]["peminatan"].value;
				var thlahir
				var email = document.forms["form1"]["email"].value;
				var emailValid = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
				var telepon = document.forms["form1"]["telepon"].value;
				var password = document.forms["form1"]["password"].value;



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
		<?php
if ($x['nopendaftaran'] == $a['nopendaftaran']) {
    include '../modul/formulir.php';
} else {
    include '../modul/formulir2.php';
}

?>
		<!--Cetak-->
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">CETAK FORMULIR & PAKTA INTEGRITAS</h3>
				</div>
				<div class="panel-body">
					CETAK FORMULIR
					<ul class="breadcrumb">
						<li class="active"><a type="button" class="btn btn-warning" href='modul/cetak_formulir.php?nopendaftaran=<?php echo $x['nopendaftaran']; ?>' target='_blank'>CETAK FORMULIR</a></li>
					</ul>
					CETAK PAKTA INTEGRITAS
					<ul class="breadcrumb">
						<li class="active"><a type="button" class="btn btn-warning" href='modul/cetak_pakta.php?nopendaftaran=<?php echo $x['nopendaftaran']; ?>' target='_blank'>CETAK PAKTA INTEGRITAS</a></li>
					</ul>
					CETAK PERNYATAAN BIAYA
					<ul class="breadcrumb">
						<li class="active"><a type="button" class="btn btn-warning" href='modul/cetak_biaya.php?nopendaftaran=<?php echo $x['nopendaftaran']; ?>' target='_blank'>CETAK PAKTA INTEGRITAS</a></li>
					</ul>
					CETAK PEMBAYARAN
					<ul class="breadcrumb">
						<li class="active"><a type="button" class="btn btn-warning" href='modul/cetak.php?nopendaftaran=<?php echo $x['nopendaftaran']; ?>' target='_blank'>CETAK AKUN </a></li>
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