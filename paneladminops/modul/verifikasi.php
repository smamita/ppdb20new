<?php
session_start();
include "../koneksi/koneksi.php";

$data_pendaftaran = mysql_query("select * from sekolah where id_sekolah='".$_GET['id_sekolah']."'");
$a = mysql_fetch_array($data_pendaftaran);



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
</head>

<body>

	<div class="container">


		<!-- sample templates start -->

		<!-- Navbar -->
		<?php include '../menu.php';?>
	<div class="col-lg-6">
    <div class="panel-body">
        <form class="form-horizontal" id="form1" action="modul/aksiver.php" method="post" s enctype="multipart/form-data">
            <fieldset>
                <legend>VERIFIKASI SEKOLAH </legend>
                <ul class="breadcrumb">
                    <span class="label label-warning">A. SEKOLAH SMP / MTs</span>
                </ul> 
                <div class="form-group" hidden>
                    <label for="inputnama" class="col-lg-4 control-label">ID SEKOLAH</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="id_sekolah" id="id_sekolah" value="<?php echo $a['id_sekolah']; ?>"
                            placeholder="ID Sekolah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">NAMA SEKOLAH</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" value="<?php echo $a['nama_sekolah']; ?>"
                            placeholder="Nama Sekolah">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">PROVINSI</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="prop" id="prop" value="<?php echo $a['prop']; ?>"
                            placeholder="Nama Provinsi">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">KABUPATEN</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="kab" id="kab" value="<?php echo $a['kab']; ?>"
                            placeholder="Nama Kabupaten">
                    </div>
                </div>
				<div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">KECAMATAN</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="kec" id="kec" value="<?php echo $a['kec']; ?>"
                            placeholder="Nama Kecamatan">
                    </div>
                </div>
				<div class="form-group">
                    <label for="inputnama" class="col-lg-4 control-label">DESA</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="desa" id="desa" value="<?php echo $a['desa']; ?>"
                            placeholder="Nama Desa">
                    </div>
                </div>          
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary" onclick="javascript: return confirm ('Pastikan data yang anda masukkan benar dan valid,')"
                            name="simpan" id="simpan">SIMPAN</button>
                        <!--<button type="submit" class="btn btn-primary" name="simpan" id="simpan">SIMPAN</button>-->
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!--Cetak-->
		<!--Cetak-->
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">KETERANGAN</h3>
				</div>
				<div class="panel-body">
					CETAK FORMULIR
					<ul class="breadcrumb">
						Verifikator mohon dicek betul nama sekolah dan lokasi,  jika terdapat kesalahan diubah sebagaimana betulnya lalu klik tombol simpan
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</body>

</html>