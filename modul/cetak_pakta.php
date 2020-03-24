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
	// if($cek_data<1){ ?>
<!--<script>window.location='form-kejuaraan.html'</script>-->
<?php //}
   //}
?>
<style type="text/css">
  @media print {
    input.noPrint {
      display: none;
    }
  }

  .gambar{
background-image: url('img/ttd.png');
padding: 10px 10px 70px 10px;
margin-bottom:-10px;
background-repeat: no-repeat, repeat;

}

  table {
    font-family: Arial;
    font-size: 9pt;
  }

  table .khusus {
    font-family: Arial;
    margin-left: 0;
    font-size: 9pt;
    text-indent: 3px;
    border-width: 1px;

    border-style: solid;
    border-color: #000;
    border-collapse: collapse;

  }

  .table1 {
    font-family: "Times New Roman";
    margin-left: 0;
    font-size: 9pt;
    text-indent: 3px;
    border-width: 1.3pt;

    border-style: solid;
    border-color: #000;
    border-collapse: collapse;

  }

  th {
    text-align: center;
    height: 30px;
  }

  .raport th {
    border: 1px solid #000;
  }

  .raport td {
    border: 1px solid #000;
    font-weight: normal;
  }

  .khusus td {
    text-align: center;
    border: 2px solid #000;
  }

  .khusus th {
    border: 2px solid #000;
  }

  td {
    height: 30px;
  }

  .pagebreak {
    page-break-after: always;
  }

  .pagebreak {
    page-break-after: always;
  }

  .header td {
    padding: 0px;
    height: 25px;
  }

  .prestasi {
    font-size: 12pt;
  }

  .judul {
    font-weight: bold;
    padding-top: 28px;
  }
</style>

<script language="JavaScript" type="text/javascript">
  <!--

  function CngCol(obj, col) {
    if (obj.getAttribute('bgcolor')) {
      obj.bg = obj.getAttribute('bgcolor');
    } else {
      obj.bg = '';
    }
    obj.style.backgroundColor = col;
    obj.onmouseout = function () {
      this.style.backgroundColor = this.bg;
    }
  }
  //-->
</script>
<form><input class="noPrint" type="button" value="Print" onclick="window.print()"></form>
<div style='width:700px;border:2px solid #000;padding:7px;padding:16px;'>
  <div style='border:2px solid #000;padding:3px;width:200px;text-align:center;'>Untuk Panitia</div><br>
  <div style='width:700px;font-family:arial;font-weight:bold;font-size:16pt;text-align:center;'>
    PAKTA INTEGRITAS (SURAT PERNYATAAN SISWA BARU)
  </div>
  <div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
    SMA MUHAMMADIYAH 1 TAMAN
  </div>
  <div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
    TAHUN 2020/2021
  </div><br>
  <div style='font-family:arial;'>Yang bertanda tangan di bawah ini saya :</div>
  <table cellpadding='5' cellspacing='0' style='font-family:arial;width:700px;font-size:13pt;'>
    <tr>
      <td style='width:175px;'>Nomor Pendaftaran</td>
      <td>:</td>
      <td style='border-bottom:2px dotted #000;'>
        <?php echo $a['nopendaftaran']; ?>
      </td>
    </tr>
    <tr>
      <td style='width:175px;'>Nama Lengkap</td>
      <td style='width:15px;'>:</td>
      <td style='border-bottom:2px dotted #000;'>
        <?php echo $a['nama']; ?>
      </td>
    </tr>
    <tr>
      <td style='width:175px;'>Tempat / Tgl Lahir</td>
      <td style='width:15px;'>:</td>
      <td style='border-bottom:2px dotted #000;'>
        <?php echo $a['tmplahir']; ?> /
        <?php echo $a['tgllahir']; ?>
      </td>
    </tr>
    <tr>
      <td style='width:175px;'>Nama Orang Tua</td>
      <td style='width:15px;'>:</td>
      <td style='border-bottom:2px dotted #000;'>
        <?php echo $a['namaayah']; ?>
      </td>
    </tr>
    <tr>
      <td style='width:175px;'>Alamat</td>
      <td style='width:15px;'>:</td>
      <td style='border-bottom:2px dotted #000;'>
        <?php echo $a['alamat']; ?>
      </td>
    </tr>
    <tr>
      <td style='width:175px;'>No Telepon</td>
      <td style='width:15px;'>:</td>
      <td style='border-bottom:2px dotted #000;'>
        <?php echo $a['telepon']; ?> /
        <?php echo $a['teleponayah']; ?>
      </td>
    </tr>
  </table>
  <div style='font-family:arial;font-weight:bold;text-align:justify;padding-top:10px;padding-bottom:10px;'>
    Setelah diterima di SMA Muhammadiyah 1 Taman, saya berjanji dengan sungguh - sungguh untuk :
    <table cellpadding='5' cellspacing='0' style='font-family:arial;width:100%;font-size:10pt;text-align:justify;font-weight:bold;'>
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
        <td>Melaksanakan tugas dengan sebaik-baiknya sebagai peserta didik sesuai dengan yang tercantum dalam Janji
          Pelajar Muhammadiyah</td>
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
  <div style='font-family:arial;text-align:justify;padding-top:2px;padding-bottom:2px;'>
    Demikian surat pernyataan ini kami buat dengan sebenar-benarnya.
  </div>
  <br>
  <div style='width:250px;font-family:arial;font-size:13pt;text-align:center;float:right;'>
    <?php echo "Taman, ...............................<br>Peserta Didik,<div style='margin-left:25px;height:50px;width:75px;'>Materai<br>6000</div>(..........................................)"; ?>
  </div><br><br><br><br><br><br><br>
  <div style='font-family:arial;text-align:center;'>
    Mengetahui
  </div>
  <div style='width:260px;font-family:arial;font-size:11pt;text-align:center;float:right;'>
    <?php
    echo "<div style='width:100%;text-align:left;'>Orang Tua Siswa<br><br><br><br><br>...................................................</div>";
    ?>
  </div>
  <div style='width:260px;font-family:arial;font-size:11pt;text-align:center;'>
    <?php echo "Kepala SMA Muhammadiyah 1 Taman<br><div class='gambar'></div>Drs Zainal Arif Fakhrudi<br>NBM. 767.792"; ?><br>
  </div>
</div>