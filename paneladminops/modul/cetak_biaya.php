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

    .gambar {
        background-image: url('img/ttd.png');
        padding: 10px 10px 70px 10px;
        margin-bottom: -10px;
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
    <div style='width:700px;font-family:arial;font-weight:bold;font-size:13pt;text-align:center;'>
        SURAT PERNYATAAN KESEDIAAN dan KESANGGUPAN MEMBAYAR BIAYA PENDIDIKAN
    </div>
    <div style='width:700px;font-family:arial;font-weight:bold;font-size:15pt;text-align:center;'>
        SMA MUHAMMADIYAH 1 TAMAN
    </div>
    <div style='width:700px;font-family:arial;font-weight:bold;font-size:12pt;text-align:center;'>
        TAHUN 2019/2020
    </div><br>
    <div style='font-family:arial;'>Yang bertanda tangan di bawah ini saya :</div>
    <table cellpadding='5' cellspacing='0' style='font-family:arial;width:700px;font-size:11pt;'>
        <tr>
            <td style='width:175px;'>Nama Lengkap</td>
            <td style='width:15px;'>:</td>
            <td style='border-bottom:2px dotted #000;'>
                <?php echo $a['namaayah']; ?>
            </td>
        </tr>
        <tr>
            <td style='width:175px;'>Pekerjaan</td>
            <td style='width:15px;'>:</td>
            <td style='border-bottom:2px dotted #000;'>
                <?php echo $a['kerjaayah']; ?>
            </td>
        </tr>
        <tr>
            <td style='width:175px;'>Alamat</td>
            <td style='width:15px;'>:</td>
            <td style='border-bottom:2px dotted #000;'>
                <?php echo $a['alamatortu']; ?>
            </td>
        </tr>
        <tr>
            <td style='width:175px;'>No Telepon</td>
            <td style='width:15px;'>:</td>
            <td style='border-bottom:2px dotted #000;'>
                <?php echo $a['teleponayah']; ?>
            </td>
        </tr>
    </table>
    <div style='font-family:arial;padding-top:10px;padding-bottom:10px;'>adalah Orang Tua/Wali dari siswa calon peserta
        didik baru SMA Muhammadiyah 1 Taman Tahun Pelajaran 2019/2020.</div>
    <table cellpadding='5' cellspacing='0' style='font-family:arial;width:700px;font-size:11pt;'>
        <tr>
            <td style='width:175px;'>Nama Lengkap</td>
            <td style='width:15px;'>:</td>
            <td style='border-bottom:2px dotted #000;'>
                <?php echo $a['nama']; ?>
            </td>
        </tr>
        <tr>
            <td style='width:175px;'>Asal Sekolah</td>
            <td style='width:15px;'>:</td>
            <td style='border-bottom:2px dotted #000;'>
                <?php echo $a['asal_sekolah']; ?>
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
            <td style='width:175px;'>Pilihan Peminatan</td>
            <td style='width:15px;'>:</td>
            <td style='border-bottom:2px dotted #000;'>
                <?php echo $a['peminatan']; ?>
            </td>
        </tr>
    </table>
    <div style='font-family:arial;font-weight:bold;text-align:justify;padding-top:10px;padding-bottom:10px;'>
        Menyatakan hal-hal sebagai berikut :
        <table cellpadding='5' cellspacing='0' style='font-family:arial;width:100%;font-size:10pt;text-align:justify;font-weight:bold;'>
            <tr>
                <td valign='top'>1. </td>
                <td>Jika siswa tersebut di atas diterima/lulus dalam seleksi Penerimaan Peserta Didik Baru SMA
                    Muhammadiyah 1 Taman tahun 2019, saya akan bertanggungjawab atas semua pembiayaan selama siswa
                    tersebut belajar di SMA Muhammadiyah 1 Taman. </td>
            </tr>
            <tr>
                <td valign='top'>2. </td>
                <td>Pada saat pendaftaran ulang saya bersedia membayar minimal:
            <tr>
                <td valign='top'> </td>
                <td>a. Dana Perawatan Pembangunan (DPP) sebesar 50% </td>
            </tr>
            <tr>
                <td valign='top'> </td>
                <td>b. Uang non DPP senilai Rp .............................................
                    (............................................................................)</td>
            </tr>
            <tr>
                <td valign='top'> </td>
                <td>c. Sanggup melunasi kekurangan selambat-lambatnya 3 bulan setelah siswa terdaftar sebagai siswa SMA
                    Muhammadiyah 1 Taman</td>
            </tr>
            <tr>
                <td valign='top'>3. </td>
                <td>Pernyataan ini dibuat atas kesadaran sendiri tanpa ada tekanan dari pihak manapun dan akan saya
                    penuhi sesuai dengan yang saya nyatakan. </td>
            </tr>
            <tr>
                <td valign='top'>4. </td>
                <td>Apabila anak saya mengundurkan diri setelah mendaftar ulang, maka biaya yang telah disetorkan tidak
                    akan diminta kembali.</td>
            </tr>

        </table>
    </div>
    <div style='font-family:arial;text-align:justify;padding-top:2px;padding-bottom:2px;'>
        Demikian, data dalam formulir ini telah saya isi dengan sebenar-benarnya. Jika pernyataan saya ini tidak benar
        atau pembayaran tidak dilaksanakan sesuai dengan data yang tercantum dalam formulir ini, maka siswa dengan nama
        calon siswa tersebut diatas sanggup menerima sanksi yang ditentukan oleh SMA Muhammadiyah 1 Taman.
    </div>
    <br>
    <div style='width:250px;font-family:arial;font-size:13pt;text-align:center;float:right;'>
        <?php echo "Taman, ...............................<br>Yang Membuat Pernyataan,<div style='margin-left:25px;height:50px;width:75px;'>Materai<br>6000</div><br>(..........................................)"; ?>
    </div><br><br><br><br><br><br><br>
</div>