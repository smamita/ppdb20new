<?php
session_start();
include "../koneksi/koneksi.php";
$data = mysql_query("select * from pendaftaran where nopendaftaran='" . $_GET['nopendaftaran'] . "'");
$a = mysql_fetch_array($data);
$exe = mysql_query("select * from jadwal where id_jadwal='$a[id_jadwal]'");
$b = mysql_fetch_array($exe);
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
.judul{ font-weight:bold;padding-top:15px; }
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
PENERIMAAN PESERTA DIDIK BARU (PPDB) T.A 2019/2020
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
    <td><?php echo $b['nama_jadwal']; ?></td>
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
    <td>Telepon Ayah</td>
	<td>:</td>
    <td><?php echo $a['teleponayah']; ?></td>
  </tr>
  <tr>
    <td>Telepon Ibu</td>
	<td>:</td>
    <td><?php echo $a['teleponibu']; ?></td>
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
    <td><?php echo $a['gajiayah']; ?></td>
  </tr>
  <tr>
    <td>Penghasilan ibu</td>
	<td>:</td>
    <td><?php echo $a['gajiibu']; ?></td>
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
PENERIMAAN PESERTA DIDIK BARU (PPDB) T.A 2019/2020
</div>
<div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
SMA Muhammadiyah 1 Taman
</div>
<div style='width:700px;font-family:arial;font-size:9pt;text-align:center;'>
Jl Raya Ketegan No 35 Taman-Sepanjang telp/fax 031-7881550
</div><hr style='width:700px;height:3px;margin-bottom:-10px;'>
<?php
$data = mysql_query("select * from rekapnilai where nopendaftaran='" . $_GET['nopendaftaran'] . "'");
$b = mysql_fetch_array($data);
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
		<td><?php echo $b['bin1']; ?></td>
		<td><?php echo $b['bin2']; ?></td>
		<td><?php echo $b['bin3']; ?></td>
		<td><?php echo $b['bin4']; ?></td>
		<td><?php echo $b['bin5']; ?></td>
		<td><?php echo $b['rata_bin']; ?></td>
		<td><?php echo $b['bin_un']; ?></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Bahasa Inggris</td>
		<td><?php echo $b['big1']; ?></td>
		<td><?php echo $b['big2']; ?></td>
		<td><?php echo $b['big3']; ?></td>
		<td><?php echo $b['big4']; ?></td>
		<td><?php echo $b['big5']; ?></td>
		<td><?php echo $b['rata_big']; ?></td>
		<td><?php echo $b['big_un']; ?></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Matematika</td>
		<td><?php echo $b['mtk1']; ?></td>
		<td><?php echo $b['mtk2']; ?></td>
		<td><?php echo $b['mtk3']; ?></td>
		<td><?php echo $b['mtk4']; ?></td>
		<td><?php echo $b['mtk5']; ?></td>
		<td><?php echo $b['rata_mtk']; ?></td>
		<td><?php echo $b['mtk_un']; ?></td>
	</tr>
	<tr>
		<td>4</td>
		<td>IPA</td>
		<td><?php echo $b['ipa1']; ?></td>
		<td><?php echo $b['ipa2']; ?></td>
		<td><?php echo $b['ipa3']; ?></td>
		<td><?php echo $b['ipa4']; ?></td>
		<td><?php echo $b['ipa5']; ?></td>
		<td><?php echo $b['rata_ipa']; ?></td>
		<td><?php echo $b['ipa_un']; ?></td>
	</tr>
	<tr>
		<td>5</td>
		<td>IPS</td>
		<td><?php echo $b['ips1']; ?></td>
		<td><?php echo $b['ips2']; ?></td>
		<td><?php echo $b['ips3']; ?></td>
		<td><?php echo $b['ips4']; ?></td>
		<td><?php echo $b['ips5']; ?></td>
		<td><?php echo $b['rata_ips']; ?></td>
		<td><?php echo $b['ips_un']; ?></td>
	</tr>
	<tr>
		<td colspan='7'>Total Average</td>
		<td><?php echo $b['rata_total']; ?></td>
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
Calon peserta didik baru menyerahkan dokumen pendaftaran kepada panitia ketika daftar ulang :
<ul>
  <li><span dir="ltr"> </span>Surat Rekomendasi Guru BP/BK SMP/MTS Tentang Peminatan IPA/IPS</li>
  <li><span dir="ltr"> </span>Surat Pernyataan/Pakta Integritas orang tua dan calon peserta didik bermeterai (cetak online pada system)</li>
  <li><span dir="ltr"> </span>Fotokopi Akta Kelahiran | 1  lembar. </li>
  <li><span dir="ltr"> </span>Fotokopi Kartu Keluarga | 1 Lembar</li>
  <li><span dir="ltr"> </span>pas  foto 3x4 berwarna | 3 lembar </li>
  <li><span dir="ltr"> </span>Fotokopi SKHUN / Surat Keterangan HAsil Ujian SMP/MTs | 1 Lembar </li>
  <li><span dir="ltr"> </span>Fotokopi Ijazah (yang dilegalisir) / Surat Keterangan Lulus SMP/MTs | 1 Lembar</li>
  <li><span dir="ltr"> </span>Fotokopi Hasil Tes Psikologi SMP/MTS | 1 Lembar</li>
  <li><span dir="ltr"> </span>Fotokopi Rapor Kelas 7,8,9 (Semester 1-5) | 1 Bandel</li>
</ul>
</div>
<br>
<div style='width:260px;font-family:arial;font-size:11pt;text-align:center;float:right;'>
<?php
$tgl = date("Y-m-d H:i:s");
echo "<div style='width:100%;text-align:left;'>Taman, ..................................<br>Calon Peserta Didik<br><br><br><br><br>...................................................</div>";
?>
</div><div style='width:260px;font-family:arial;font-size:11pt;text-align:center;'>
<?php echo "Panitia PPDB 2018 SMAM1TA<br><br><br><br><br><br>(..........................................)"; ?><br>
</div><br><br>
</div>



