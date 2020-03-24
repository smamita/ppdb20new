<?php
   session_start();
   include "../koneksi/koneksi.php";
   $data=mysql_query("select * from pendaftaran where nopendaftaran='".$_GET['nopendaftaran']."'");
   $a=mysql_fetch_array($data);
   $exe=mysql_query("select * from jadwal where id_jadwal='$a[id_jadwal]'");
   $b=mysql_fetch_array($exe);
  // if($a[jalur]=='Prestasi'){
   //  $data_kejuaraan=mysql_query("select * from kejuaraan where nopendaftaran='".$_SESSION['user']."'");
	// $cek_data=mysql_num_rows($data_kejuaraan);
	// if($cek_data<1){ ?><!--<script>window.location='form-kejuaraan.html'</script>--><?php //}
   //}
?>
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
.prestasi{ font-size:12pt; }
.judul{ font-weight:bold;
padding-top:28px; }
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
<div style='width:700px;border:2px solid #000;padding:7px;'>
<div style='border:2px solid #000;padding:3px;width:200px;text-align:center;'>Untuk Panitia</div><br>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:15pt;text-align:center;'>
PENERIMAAN PESERTA DIDIK BARU (PPDB) 2018
</div>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
SMA Muhammadiyah 1 Taman
</div>
<div style='width:700px;font-family:arial;font-size:9pt;text-align:center;'>
Jl Raya Ketegan No 35 Taman-Sepanjang telp/fax 031-7881550
</div><hr style='width:700px;height:3px;margin-bottom:-10px;'>
<table cellpadding='3' cellspacing='0' style='font-family:arial;width:700px;font-size:11pt;'>
  <tr><td class='judul' colspan='3'>A. DATA DIRI CALON PESERTA DIDIK BARU </td></tr>
  <tr>
    <td>Jadwal Tes Peminatan</td>
	<td>:</td>
    <td><?php echo $b['nama_jadwal'];?></td>
  </tr>
  <tr>
    <td style='width:180px;'>Nomor Pendaftaran </td>
	<td>:</td>
    <td><?php echo $a['nopendaftaran']; ?></td>
  </tr>
  <tr>
    <td>NISN</td>
	<td>:</td>
    <td><?php echo $a['nisn']; ?></td>
  </tr>
  <tr>
    <td>Nama</td>
	<td>:</td>
    <td><?php echo $a['nama']; ?></td>
  </tr>
  <tr>
    <td>Kelamin</td>
	<td>:</td>
    <td><?php echo $a['kelamin']; ?></td>
  </tr>
  <tr>
    <td>Peminatan</td>
	<td>:</td>
    <td><?php echo $a['peminatan']; ?><span><i>-- data peminatan tidak dapat dirubah</i></span></td>
  </tr>
  <tr>
    <td>Tempat / Tanggal Lahir</td>
	<td>:</td>
    <td><?php echo $a['tmplahir']; ?> / <?php echo $a['tgllahir']; ?></td>
  </tr>
  <tr>
    <td>Alamat Siswa</td>
	<td>:</td>
    <td><?php echo $a['alamat']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td>:</td>
    <td>RT. <?php echo $a['rt']; ?> RW. <?php echo $a['rw']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td>:</td>
    <td>Dusun :  <?php echo $a['dusun']; ?> Desa : <?php echo $a['desa']; ?> Kodepos : <?php echo $a['kodepos']; ?></td>
  </tr>
  <tr>
    <td>Telepon</td>
	<td>:</td>
    <td><?php echo $a['telepon']; ?></td>
  </tr>
  <tr>
    <td>Email</td>
	<td>:</td>
    <td><?php echo $a['email']; ?></td>
  </tr>
  <tr>
    <td>Anak ke</td>
	<td>:</td>
    <td><?php echo $a['anakke']; ?></td>
  </tr>
  <tr>
    <td>Jumlah Saudara</td>
	<td>:</td>
    <td><?php echo $a['saudara']; ?></td>
  </tr>
  <tr>
    <td>Keberadaan anak</td>
	<td>:</td>
    <td><?php echo $a['keberadaan_anak']; ?></td>
  </tr>
  <tr>
    <td>Asal Sekolah</td>
	<td>:</td>
    <td><?php echo $a['asal_sekolah']; ?></td>
  </tr>
  <tr><td class='judul' colspan='3'>B. DATA DIRI ORANGTUA PESERTA DIDIK BARU </td></tr>
  <tr>
    <td>Nama Ayah</td>
	<td>:</td>
    <td><?php echo $a['namaayah']; ?></td>
  </tr>
  <tr>
    <td>Nama Ibu</td>
	<td>:</td>
    <td><?php echo $a['namaibu']; ?></td>
  </tr>
  <tr>
    <td>Alamat Orangtua</td>
	<td>:</td>
    <td><?php echo $a['alamatortu']; ?></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
	<td>:</td>
    <td>RT. <?php echo $a['rtortu']; ?> RW. <?php echo $a['rwortu']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td>:</td>
    <td>Dusun :  <?php echo $a['dusunortu']; ?> Desa : <?php echo $a['desaortu']; ?> Kodepos : <?php echo $a['kodeposortu']; ?></td>
  </tr>
  <tr>
    <td>Telepon Orangtua</td>
	<td>:</td>
    <td><?php echo $a['teleponortu']; ?></td>
  </tr>
  <tr>
    <td>Pekerjaan ayah</td>
	<td>:</td>
    <td><?php echo $a['kerjaayah']; ?></td>
  </tr>
  <tr>
    <td>Pekerjaan ibu</td>
	<td>:</td>
    <td><?php echo $a['kerjaibu']; ?></td>
  </tr>
  <tr>
    <td>Penghasilan ayah</td>
	<td>:</td>
    <td><?php echo $a['gajiayah'];?></td>
  </tr>
  <tr>
    <td>Penghasilan ibu</td>
	<td>:</td>
    <td><?php echo $a['gajiibu'];?></td>
  </tr>
  <tr>
    <td>Tahun Lahir Ayah</td>
	<td>:</td>
    <td><?php echo $a['thlahirayah']; ?></td>
  </tr>
  <tr>
    <td>Tahun Lahir Ibu</td>
	<td>:</td>
    <td><?php echo $a['thlahiribu']; ?></td>
  </tr>
  <tr>
    <td>Pendidikan Ayah</td>
	<td>:</td>
    <td><?php echo $a['pendidikanayah']; ?></td>
  </tr>
  <tr>
    <td>Pendidikan Ibu</td>
	<td>:</td>
    <td><?php echo $a['pendidikanibu']; ?></td>
  </tr>
  <tr><td class='judul' colspan='3'>C. DATA DIRI WALI PESERTA DIDIK BARU </td></tr>
  <tr>
    <td>Nama Wali</td>
	<td>:</td>
    <td><?php echo $a['namawali']; ?></td>
  </tr>
  <tr>
    <td>Alamat Wali</td>
	<td>:</td>
    <td><?php echo $a['alamatwali']; ?></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
	<td>:</td>
    <td>RT. <?php echo $a['rtwali']; ?> RW. <?php echo $a['rwwali']; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
	<td>:</td>
    <td>Dusun :  <?php echo $a['dusunwali']; ?> Desa : <?php echo $a['desawali']; ?> Kodepos : <?php echo $a['kodeposwali']; ?></td>
  </tr>
  <tr>
    <td>Telepon Wali</td>
	<td>:</td>
    <td><?php echo $a['teleponwali']; ?></td>
  </tr>
  <tr>
    <td>Pekerjaan wali</td>
	<td>:</td>
    <td><?php echo $a['kerjawali']; ?></td>
  </tr>
  <tr>
    <td>Penghasilan wali</td>
	<td>:</td>
    <td><?php echo $a['gajiwali'];?></td>
  </tr>
  <tr>
    <td>Tanggal Pendaftaran</td>
	<td>:</td>
    <td><?php echo $a['tanggal']; ?></td>
  </tr>
</table>
</div>
<div class="pagebreak"> </div><br>



<div style='width:700px;border:2px solid #000;padding:7px;'>
<div style='border:2px solid #000;padding:3px;width:200px;text-align:center;'>Untuk Panitia</div><br>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:15pt;text-align:center;'>
PENERIMAAN PESERTA DIDIK BARU (PPDB) 2018
</div>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
SMA Muhammadiyah 1 Taman
</div>
<div style='width:700px;font-family:arial;font-size:9pt;text-align:center;'>
Jl Raya Ketegan No 35 Taman-Sepanjang telp/fax 031-7881550
</div><hr style='width:700px;height:3px;margin-bottom:-10px;'>
<?php
   $data=mysql_query("select * from rekapnilai where nopendaftaran='".$_GET['nopendaftaran']."'");
   $b=mysql_fetch_array($data);
?>
<div class='judul' style='font-family:arial;'>D. DATA NILAI RAPORT DAN HASIL UN SMP/MTs</div><br>
<table class='prestasi' cellspacing='0' cellpadding='5' border='1'>
<tr>
		<th rowspan='2'>NO</th>
		<th rowspan='2'>MATA PELAJARAN</th>
		<th colspan='5'>NILAI RAPORT SEMESTER</th>
		<th rowspan='2'>RATA2</th>
		<th rowspan='2'>NILAI<br>UN</th>
	</tr>
	<tr>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>5</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Bahasa Indonesia</td>
		<td><?php echo $b['bin1'];?></td>
		<td><?php echo $b['bin2'];?></td>
		<td><?php echo $b['bin3'];?></td>
		<td><?php echo $b['bin4'];?></td>
		<td><?php echo $b['bin5'];?></td>
		<td><?php echo $b['rata_bin'];?></td>
		<td><?php echo $b['bin_un'];?></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Bahasa Inggris</td>
		<td><?php echo $b['big1'];?></td>
		<td><?php echo $b['big2'];?></td>
		<td><?php echo $b['big3'];?></td>
		<td><?php echo $b['big4'];?></td>
		<td><?php echo $b['big5'];?></td>
		<td><?php echo $b['rata_big'];?></td>
		<td><?php echo $b['big_un'];?></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Matematika</td>
		<td><?php echo $b['mtk1'];?></td>
		<td><?php echo $b['mtk2'];?></td>
		<td><?php echo $b['mtk3'];?></td>
		<td><?php echo $b['mtk4'];?></td>
		<td><?php echo $b['mtk5'];?></td>
		<td><?php echo $b['rata_mtk'];?></td>
		<td><?php echo $b['mtk_un'];?></td>
	</tr>
	<tr>
		<td>4</td>
		<td>IPA</td>
		<td><?php echo $b['ipa1'];?></td>
		<td><?php echo $b['ipa2'];?></td>
		<td><?php echo $b['ipa3'];?></td>
		<td><?php echo $b['ipa4'];?></td>
		<td><?php echo $b['ipa5'];?></td>
		<td><?php echo $b['rata_ipa'];?></td>
		<td><?php echo $b['ipa_un'];?></td>
	</tr>
	<tr>
		<td>5</td>
		<td>IPS</td>
		<td><?php echo $b['ips1'];?></td>
		<td><?php echo $b['ips2'];?></td>
		<td><?php echo $b['ips3'];?></td>
		<td><?php echo $b['ips4'];?></td>
		<td><?php echo $b['ips5'];?></td>
		<td><?php echo $b['rata_ips'];?></td>
		<td><?php echo $b['ips_un'];?></td>
	</tr>
	<tr>
		<td colspan='7'>Total Average</td>
		<td><?php echo $b['rata_total'];?></td>
	</tr>
</table>
<br>
<div style='
		-moz-border-radius:4px;
		-webkit-border-radius:4px;
		border-radius:4px;
		font-size:10.5pt;
		font-family:arial;
		padding:10px;
		background:#dedede;
		border:1px solid #000;
		width:95%;'>
Calon peserta didik baru menyerahkan dokumen pendaftaran kepada panitia :
<ul>
  <li><span dir="ltr"> </span>Surat Rekomendasi Guru BK SMP/MTs tentang Peminatan IPA / IPS</li>
  <li><span dir="ltr"> </span>Fotokopi Akta Kelahiran | 1  lembar. </li>
  <li><span dir="ltr"> </span>Fotokopi Kartu Keluarga | 1 Lembar</li>
  <li><span dir="ltr"> </span>Menyerahkan pas  foto 3x4 berwarna | 3 lembar </li>
  <li><span dir="ltr"> </span>Fotokopi SKHUN / Surat Keterangan HAsil Ujian SMP/MTs | 1 Lembar </li>
  <li><span dir="ltr"> </span>Fotokopi Ijazah (yang dilegalisir) / Surat Keterangan Lulus SMP/MTs | 1 Lembar</li>

</ul>
</div>
<br>
<div style='width:260px;font-family:arial;font-size:11pt;text-align:center;float:right;'>
<?php
  $tgl = date("Y-m-d H:i:s");
	echo "<div style='width:100%;text-align:left;'>Taman, ..................................<br>Calon Peserta Didik<br><br><br><br><br>...................................................</div>";
?>
</div><div style='width:260px;font-family:arial;font-size:11pt;text-align:center;'>
<?php echo "Panitia PPDB 2018 SMAM1TA<br><br><br><br><br><br>(..........................................)";?><br>
</div><br><br>
</div>
<div class="pagebreak"> </div><br>



<div style='width:700px;border:2px solid #000;padding:7px;padding:16px;'>
<div style='border:2px solid #000;padding:3px;width:200px;text-align:center;'>Untuk Panitia</div><br>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:16pt;text-align:center;'>
PAKTA INTEGRITAS (SURAT PERNYATAAN SISWA BARU)
</div>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
SMA MUHAMMADIYAH 1 TAMAN
</div>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
TAHUN 2018/2019
</div><br>
<div style='font-family:arial;'>Yang bertanda tangan di bawah ini saya :</div>
<table cellpadding='5' cellspacing='0' style='font-family:arial;width:700px;font-size:13pt;'>
  <tr>
    <td style='width:175px;'>Nomor Pendaftaran</td>
	<td>:</td>
    <td style='border-bottom:2px dotted #000;'><?php echo $a['nopendaftaran']; ?></td>
  </tr>
  <tr>
    <td style='width:175px;'>Nama Lengkap</td>
	<td style='width:15px;'>:</td>
    <td style='border-bottom:2px dotted #000;'><?php echo $a['nama']; ?></td>
  </tr>
  <tr>
    <td style='width:175px;'>Tempat / Tgl Lahir</td>
	<td style='width:15px;'>:</td>
    <td style='border-bottom:2px dotted #000;'><?php echo $a['tmplahir']; ?> / <?php echo $a['tgllahir']; ?></td>
  </tr>
  <tr>
    <td style='width:175px;'>Nama Orang Tua</td>
	<td style='width:15px;'>:</td>
    <td style='border-bottom:2px dotted #000;'><?php echo $a['namaayah']; ?></td>
  </tr>
  <tr>
    <td style='width:175px;'>Alamat</td>
	<td style='width:15px;'>:</td>
    <td style='border-bottom:2px dotted #000;'><?php echo $a['alamat']; ?> RT <?php echo $a['rt']; ?>- RW<?php echo $a['rw']; ?></td>
  </tr>
  <tr>
    <td style='width:175px;'></td>
	<td style='width:15px;'>:</td>
    <td style='border-bottom:2px dotted #000;'><?php echo $a['kodepos']; ?><?php echo $a['dusun']; ?>-<?php echo $a['desa']; ?></td>
  </tr>
  <tr>
    <td style='width:175px;'>No Telepon</td>
	<td style='width:15px;'>:</td>
    <td style='border-bottom:2px dotted #000;'><?php echo $a['telepon']; ?> / <?php echo $a['teleponortu']; ?></td>
  </tr>
</table>
<div style='font-family:arial;font-weight:bold;text-align:justify;padding-top:20px;padding-bottom:10px;'>
Setelah diterima di SMA Muhammadiyah 1 Taman, saya berjanji dengan sungguh - sungguh untuk :
<table cellpadding='5' cellspacing='0' style='font-family:arial;width:100%;font-size:11pt;text-align:justify;font-weight:bold;'>
  <tr>
    <td valign='top'>1. </td>
    <td>Belajar dengan rajin.</td>
  </tr>
  <tr>
    <td valign='top'>2. </td>
    <td>Hormat dan patuh terhadap orang tua, guru dan karyawan di SMA Muhammadiyah 1 Taman.</td>
  </tr>
  <tr>
    <td valign='top'>3. </td>
    <td>Rajin beribadah menurut tuntunan agama Islam</td>
  </tr>
  <tr>
    <td valign='top'>4. </td>
    <td>Melaksanakan tugas dengan sebaik-baiknya sebagai peserta didik sesuai dengan yang tercantum dalam Janji Pelajar Muhammadiyah</td>
  </tr>
  <tr>
    <td valign='top'>5. </td>
    <td>Mematuhi tata krama dan tata tertib peserta didik SMA Muhammadiyah 1 Taman.</td>
  </tr>
  <tr>
    <td valign='top'>6. </td>
    <td>Sanggup diberikan pembinaan atas pelanggaran yang kami perbuat berupa :</td>
  </tr>
  <tr>
    <td valign='top'> </td>
    <td>a. Terguran</td>
  </tr>
  <tr>
    <td valign='top'> </td>
    <td>b. Peringatan</td>
  </tr>
  <tr>
    <td valign='top'> </td>
    <td>c. Pembinaan</td>
  </tr>
  <tr>
    <td valign='top'> </td>
    <td>d. Dikembalikan ke Wali Murid</td>
  </tr>
  <tr>
    <td valign='top'>7. </td>
    <td>Tidak pernah dan tidak akan menggunakan NAPZA dan terlibat NAPZA dalam bentuk apapun</td>
  </tr>
</table>
</div>
<div style='font-family:arial;text-align:justify;padding-top:5px;padding-bottom:5px;'>
Demikian surat pernyataan ini kami buat dengan sebenar-benarnya.
</div>
<br>
<div style='width:250px;font-family:arial;font-size:13pt;text-align:center;float:right;'>
<?php echo "Taman, ...............................<br>Peserta Didik,<div style='margin-left:25px;height:50px;width:75px;'>Materai<br>6000</div>(..........................................)";?>
</div><br><br><br><br><br><br><br>
<div style='font-family:arial;text-align:center;'>
Mengetahui
</div>
<div style='width:260px;font-family:arial;font-size:11pt;text-align:center;float:right;'>
<?php
  $tgl = date("Y-m-d H:i:s");
	echo "<div style='width:100%;text-align:left;'>Orang Tua Siswa<br><br><br><br><br>...................................................</div>";
?>
</div><div style='width:260px;font-family:arial;font-size:11pt;text-align:center;'>
<?php echo "Kepala SMA Muhammadiyah 1 Taman<br><br><br><br><br>Drs Zainal Arif Fakhrudi<br>NBM. 767.792";?><br>
</div><br><br>
</div>

<div class="pagebreak"> </div><br>
<br><br>
<div style='width:700px;border:2px solid #000;padding:7px;font-family:arial;font-size:11pt;'>
<div style='border:2px solid #000;padding:3px;width:200px;text-align:center;'>Untuk Calon Peserta Didik</div><br><?php include '../modul/pembayaran2.php';?>
</div>
<!--
<div class="pagebreak"> </div><br>
<br><br>

<div style='width:600px;border:2px solid #000;padding:7px;font-family:arial;font-size:11pt;'>
<div style='border:2px solid #000;padding:3px;width:200px;text-align:center;'>Untuk Calon Peserta Didik</div><br>
  <img src="../modul/jadwal2.jpg" width="100%">
</div>-->
