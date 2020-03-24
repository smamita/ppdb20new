<?php
session_start();
include "../koneksi.php";
$data = mysql_query("select * from pembelian where nopendaftaran='" . $_GET['nopendaftaran'] . "'");
$a = mysql_fetch_array($data);
$data = mysql_query("select * from pendaftaran where nopendaftaran='" . $_GET['nopendaftaran'] . "'");
$b = mysql_fetch_array($data);
?>

 <script type="text/javascript">
   window.onload = function () {
     if (! localStorage.justOnce) {
         localStorage.setItem("justOnce", "true");
         window.location.reload();
     }
   }
 </script>



<style type="text/css">
@media print {
input.noPrint { display: none; }
}

table{font-family: Arial ;font-size: 9pt; }
table .khusus {
	font-family: Arial ;
	margin-left:0;
	font-size: 9pt;
	text-indent:3px;
	border-width:1px ;

	border-style: solid;
	border-color: #000;
	border-collapse: collapse;

}
.table1 {
	font-family:"Times New Roman";
	margin-left:0;
	font-size: 9pt;
	text-indent:3px;
	border-width:1.3pt ;

	border-style: solid;
	border-color: #000;
	border-collapse: collapse;

}

th{
	text-align:center;
	height:30px;
}
.raport th{ border:1px solid #000; }
.raport td{ border:1px solid #000;font-weight:normal; }
.khusus td{
	text-align:center;
	border:2px solid #000;
}
.khusus th{ border:2px solid #000; }
td{ height:30px;}
.pagebreak {
page-break-after: always;
}
.pagebreak {
page-break-after: always;
}
.header td{ padding:0px;height:25px; }
</style>

<script language="JavaScript" type="text/javascript">
<!--

function CngCol(obj,col){
if (obj.getAttribute('bgcolor')){ obj.bg=obj.getAttribute('bgcolor'); }
else { obj.bg=''; }
obj.style.backgroundColor=col;
obj.onmouseout=function(){ this.style.backgroundColor=this.bg; }
}
//-->
</script>
<form><input class="noPrint" type="button" value="Print" onclick="window.print()"></form>
<div style='width:550px;border:2px solid #000;padding:7px;'>
<div style='width:550px;font-family:arial;font-weight:bold;font-size:15pt;text-align:center;'>
PENERIMAAN PESERTA DIDIK BARU (PPDB) 2019/2020
</div>
<div style='width:550px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
SMA Muhammadiyah 1 Taman
</div>
<div style='width:550px;font-family:arial;font-size:9pt;text-align:center;'>
Jl Raya Ketegan No 35 Taman-Sepanjang Telp/Fax 031-7881550
</div>
<hr style='width:550px;height:3px;'><div style='margin-top:-7px;text-align:right;'>
<!--<a href='pdf_formulir_calon_pendaftar.php?nopendaftaran=<?php echo $a['nopendaftaran']; ?>' style='font-family:arial;text-decoration:none;font-weight:bold;color:blue;font-size:10pt;'>Download versi pdf</a></div><br>-->
<table cellpadding='5' cellspacing='0' style='font-family:arial;width:550px;font-size:11pt;'>
  <tr>
    <td style='width:180px;'>No Rekening Pembayaran</td>
	<td>:</td>
    <td style='font-weight:bold;font-size:12pt;'><?php echo $a['nopendaftaran']; ?> (Bank Muamalat)</td>
  </tr>
  <tr>
    <td style='width:180px;'>Nama Pembayaran</td>
	<td>:</td>
    <td style='font-weight:bold;font-size:12pt;'><?php echo $a['nama_alias']; ?></td>
  </tr>
  <tr>
    <td>Nama</td>
	<td>:</td>
    <td><?php echo $a['nama']; ?></td>
  </tr>
  <tr>
    <td style='width:180px;'>No Pendaftaran</td>
	<td>:</td>
    <td style='font-weight:bold;font-size:14pt;'><?php echo $a['nopendaftaran']; ?></td>
  </tr>
  <tr>
    <td>Email</td>
	<td>:</td>
    <td style='font-weight:bold;font-size:14pt;'><?php echo $a['email']; ?></td>
  </tr>
  <tr>
    <td>Password / NISN</td>
	<td>:</td>
    <td style='font-weight:bold;font-size:14pt;'><?php echo $a['password']; ?></td>
  </tr>
  <tr>
    <td>Asal Sekolah</td>
	<td>:</td>
    <td><?php echo $a['asal_sekolah']; ?></td>
  </tr>
  <tr>
    <td>Telepon</td>
	<td>:</td>
    <td><?php echo $a['telepon']; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
	<td>:</td>
    <td><?php echo $b['alamat']; ?></td>
  </tr>
  <tr>
    <td>Kelamin</td>
	<td>:</td>
    <td><?php echo $a['kelamin']; ?></td>
  </tr>
  <tr>
    <td>Peminatan</td>
	<td>:</td>
    <td><?php echo $a['peminatan']; ?></td>
  </tr>
  <tr>
    <td>Tanggal Pendaftaran</td>
	<td>:</td>
    <td><?php echo date('d-m-Y', strtotime($a['tanggal'])); ?></td>
  </tr>
  <tr>
    <td>Harga Formulir</td>
	<td>:</td>
    <td style='font-weight:bold;background:#000;color:#fff;text-align:right;font-size:14pt;'>Rp.<?php $harga_formulir = number_format($a['harga_formulir']);
                                                                                                echo $harga_formulir; ?>,-</td>
  </tr>
</table>
<br>
<table cellpadding='5' cellspacing='0' border="0"style='font-family:arial;width:550px;font-size:11pt;'>
  <tr>
    <td style='width:300px;'></td>
	<td>

  </td>
    <td style='font-weight:bold;font-size:10pt;align:center'>Taman, <?php echo date('d-m-Y', strtotime($a['tanggal'])); ?><br><br><br><br> Panitia PPDB 2018 SMAM1TA</td>
  </tr>
</table>
<br><br>
<div style='width:550px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
<i>Rekening di atas adalah Rekening Virtual Bank Muamalat. <br>
  Info lengkap
  <a target="_blank" href="http://ppdb.smam1ta.sch.id/">klik di sini.</a>
  <br>Setelah melakukan pembayaran, silahkan melengkapi identitas secara online pada website ppdb.smam1ta.sch.id</i>
</div>
</div>
