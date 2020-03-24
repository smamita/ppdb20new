<?php
session_start();
include "../koneksi/koneksi.php";
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
<?php
$data = mysql_query("select * from  bayar where nopendaftaran order by nopendaftaran asc");
          while ($b = mysql_fetch_array($data)) {
            $exe = mysql_query("select * from pembelian where nopendaftaran='$b[nopendaftaran]'");
            $a = mysql_fetch_array($exe);

            $buka = mysql_query("select * from pendaftaran where nopendaftaran='$b[nopendaftaran]'");
            $bk = mysql_fetch_array($buka);
			
			$a1 =substr($a['nopendaftaran'], 0,-15);
			$a2 =substr($a['nopendaftaran'], 1,-14);
			$a3 =substr($a['nopendaftaran'], 2,-13);
			$a4 =substr($a['nopendaftaran'], 3,-12);
			$a5 =substr($a['nopendaftaran'], 4,-11);
			$a6 =substr($a['nopendaftaran'], 5,-10);
			$a7 =substr($a['nopendaftaran'], 6,-9);
			$a8 =substr($a['nopendaftaran'], 7,-8);
			$a9 =substr($a['nopendaftaran'], 8,-7);
			$a10 =substr($a['nopendaftaran'], 9,-6);
			$a11 =substr($a['nopendaftaran'], 10,-5);
			$a12 =substr($a['nopendaftaran'], 11,-4);
			$a13 =substr($a['nopendaftaran'], 12,-3);
			$a14 =substr($a['nopendaftaran'], 13,-2);
			$a15 =substr($a['nopendaftaran'], 14,-1);
			$a16 =substr($a['nopendaftaran'], 15,15);
?>
<div class='wrapper'>
<div style='width:800px;border:2px solid #000;padding:7px;'>
<div style='width:800px;font-family:arial;font-weight:bold;font-size:15pt;text-align:left;'>
PEMBAYARAN VIRTUAL ACCOUNT 
</div>
<div  style='width:800px;font-family:arial;font-weight:bold;font-size:12pt;text-align:right;'>
<img src="../img/bank.jpg" alt="Smiley face" width="190" height="42">
</div>
<hr style='width:800px;height:3px;'><div style='margin-top:-7px;text-align:right;'>
<!--<a href='pdf_formulir_calon_pendaftar.php?nopendaftaran=<?php echo $a['nopendaftaran']; ?>' style='font-family:arial;text-decoration:none;font-weight:bold;color:blue;font-size:10pt;'>Download versi pdf</a></div><br>-->
<table cellpadding='5' border="0" cellspacing='0' style='font-family:arial;width:800px;font-size:11pt;'>
  <tr>
    <td style='width:180px;'>No Rekening Pembayaran</td>
	<td style='width:10px;'>:</td>
    <td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a1; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a2; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a3; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a4; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a5; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a6; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a7; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a8; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a9; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a10; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a11; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a12; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a13; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a14; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a15; ?></td>
	<td style='font-weight:bold;font-size:12pt;width:3px;height:3px;border-style:solid;border-width: 1px;'><?php echo $a16; ?></td>
  </tr>
  
  <tr>
    <td style='width:180px;'>Nominal</td>
	<td>:</td>
    <td colspan='16' style='font-weight:bold;font-size:12pt;' >Rp.<?php $harga_formulir = number_format($a['harga_formulir']);
                                                                                                echo $harga_formulir; ?>,-</td>
  </tr>
  <tr>
    <td style='width:180px;'>Jenis Pembayaran</td>
	<td>:</td>
    <td  colspan='16' style='font-weight:bold;font-size:12pt;'>Formulir Pendaftaran PPDB TA 2019/2020</td>
  </tr>
  <tr>
    <td>Atas Nama</td>
	<td>:</td>
    <td colspan='16' style='font-weight:bold;font-size:12pt;'><?php echo $a['nama']; ?></td>
  </tr>
  
  <tr>
    <td>Penyetor / Telp</td>
	<td>:</td>
  </tr>
    <td  colspan='16' style='font-weight:bold;font-size:12pt;'></td>
</table>
</div>
</div>
<br>
<?php
}
?>
