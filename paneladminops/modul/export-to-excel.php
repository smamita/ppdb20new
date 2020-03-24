<?php
//memanggil fungsi
include 'fungsi.php';

//koneksi ke database dan jalankan query
include "../koneksi/koneksi.php";

$result = mysql_query("select b.nopendaftaran, b.nama, b.asal_sekolah, b.telepon, b.peminatan,b.tanggal
			from bayar s left join pembelian b on b.nopendaftaran=s.nopendaftaran
			group by b.nopendaftaran order by b.nopendaftaran asc");
!$result?die(mysql_error()):'';

//pengaturan nama file
$namaFile = "Laporan-Rekap-Bayar-Formulir.xls";
//pengaturan judul data
$judul = "DAFTAR SISWA BELI FORMULIR";
//baris berapa header tabel di tulis
$tablehead = 2;
//baris berapa data mulai di tulis
$tablebody = 3;
//no urut data
$nourut = 1;

//penulisan header
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=".$namaFile."");
header("Content-Transfer-Encoding: binary ");
header("Pragma: no-cache");



xlsBOF();

xlsWriteLabel(0,0,$judul);

$kolomhead = 0;
xlsWriteLabel($tablehead,$kolomhead++,"NO URUT");
xlsWriteLabel($tablehead,$kolomhead++,"No Pendaftaran");
xlsWriteLabel($tablehead,$kolomhead++,"Nama");
xlsWriteLabel($tablehead,$kolomhead++,"Asal Sekolah");
xlsWriteLabel($tablehead,$kolomhead++,"Telepon");
xlsWriteLabel($tablehead,$kolomhead++,"Peminatan");
xlsWriteLabel($tablehead,$kolomhead++,"Tanggal");

while ($data = mysql_fetch_array($result))
{
$kolombody = 0;

//gunakan xlsWriteNumber untuk penulisan nomor dan xlsWriteLabel untuk penulisan string
xlsWriteNumber($tablebody,$kolombody++,$nourut);
xlsWriteLabel($tablebody,$kolombody++,$data['nopendaftaran']);
xlsWriteLabel($tablebody,$kolombody++,$data['nama']);
xlsWriteLabel($tablebody,$kolombody++,$data['asal_sekolah']);
xlsWriteLabel($tablebody,$kolombody++,$data['telepon']);
xlsWriteLabel($tablebody,$kolombody++,$data['peminatan']);
xlsWriteLabel($tablebody,$kolombody++,$data['tanggal']);

$tablebody++;
$nourut++;
}

xlsEOF();
exit();
?>
