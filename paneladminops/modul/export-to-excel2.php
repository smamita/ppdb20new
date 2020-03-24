<?php
//memanggil fungsi
include 'fungsi.php';

//koneksi ke database dan jalankan query
include "../koneksi/koneksi.php";

$result = mysql_query("select b.nopendaftaran, b.nama, b.kelamin, b.asal_sekolah, b.peminatan, b.tmplahir, b.tgllahir, b.alamat, b.email, b.telepon, b.anakke, b.keberadaan_anak, b.saudara, b.namaayah, b.namaibu, b.alamatortu, b.teleponayah, b.teleponibu, b.kerjaayah, b.kerjaibu, b.gajiayah, b.gajiibu, b.pendidikanayah, b.pendidikanibu, b.thlahirayah, b.thlahiribu, b.Pernyataan, b.id_jadwal, b.tanggal
			from daftarulang s left join pendaftaran b on b.nopendaftaran=s.nopendaftaran
			group by b.nopendaftaran order by b.nopendaftaran asc");
!$result?die(mysql_error()):'';

//pengaturan nama file
$namaFile = "Laporan-Data-Siswa.xls";
//pengaturan judul data
$judul = "DAFTAR SISWA ";
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
xlsWriteLabel($tablehead,$kolomhead++,"Kelamin");
xlsWriteLabel($tablehead,$kolomhead++,"Asal Sekolah");
xlsWriteLabel($tablehead,$kolomhead++,"Peminatan");
xlsWriteLabel($tablehead,$kolomhead++,"Tempat Lahir");
xlsWriteLabel($tablehead,$kolomhead++,"Tanggal Lahir");
xlsWriteLabel($tablehead,$kolomhead++,"Alamat");
xlsWriteLabel($tablehead,$kolomhead++,"Email");
xlsWriteLabel($tablehead,$kolomhead++,"Telepon");
xlsWriteLabel($tablehead,$kolomhead++,"Anak-ke");
xlsWriteLabel($tablehead,$kolomhead++,"Tinggal");
xlsWriteLabel($tablehead,$kolomhead++,"Jumlah Saudara");
xlsWriteLabel($tablehead,$kolomhead++,"Nama Ayah");
xlsWriteLabel($tablehead,$kolomhead++,"Nama Ibu");
xlsWriteLabel($tablehead,$kolomhead++,"ALamat Ortu");
xlsWriteLabel($tablehead,$kolomhead++,"Telepon Ayah");
xlsWriteLabel($tablehead,$kolomhead++,"Telepon Ibu");
xlsWriteLabel($tablehead,$kolomhead++,"Kerja Ayah");
xlsWriteLabel($tablehead,$kolomhead++,"Kerja Ibu");
xlsWriteLabel($tablehead,$kolomhead++,"Gaji Ayah");
xlsWriteLabel($tablehead,$kolomhead++,"Gaji Ibu");
xlsWriteLabel($tablehead,$kolomhead++,"Pendidikan Ayah");
xlsWriteLabel($tablehead,$kolomhead++,"Pendidikan Ibu");
xlsWriteLabel($tablehead,$kolomhead++,"Tahun Lahir Ayah");
xlsWriteLabel($tablehead,$kolomhead++,"Tahun Lahir Ibu");
xlsWriteLabel($tablehead,$kolomhead++,"Tanggal");


while ($data = mysql_fetch_array($result))
{
$kolombody = 0;

//gunakan xlsWriteNumber untuk penulisan nomor dan xlsWriteLabel untuk penulisan string
xlsWriteNumber($tablebody,$kolombody++,$nourut);
xlsWriteLabel($tablebody,$kolombody++,$data['nopendaftaran']);
xlsWriteLabel($tablebody,$kolombody++,$data['nama']);
xlsWriteLabel($tablebody,$kolombody++,$data['kelamin']);
xlsWriteLabel($tablebody,$kolombody++,$data['asal_sekolah']);
xlsWriteLabel($tablebody,$kolombody++,$data['peminatan']);
xlsWriteLabel($tablebody,$kolombody++,$data['tmplahir']);
xlsWriteLabel($tablebody,$kolombody++,$data['tgllahir']);
xlsWriteLabel($tablebody,$kolombody++,$data['alamat']);
xlsWriteLabel($tablebody,$kolombody++,$data['email']);
xlsWriteLabel($tablebody,$kolombody++,$data['telepon']);
xlsWriteLabel($tablebody,$kolombody++,$data['anakke']);
xlsWriteLabel($tablebody,$kolombody++,$data['keberadaan_anak']);
xlsWriteLabel($tablebody,$kolombody++,$data['saudara']);
xlsWriteLabel($tablebody,$kolombody++,$data['namaayah']);
xlsWriteLabel($tablebody,$kolombody++,$data['namaibu']);
xlsWriteLabel($tablebody,$kolombody++,$data['alamatortu']);
xlsWriteLabel($tablebody,$kolombody++,$data['teleponayah']);
xlsWriteLabel($tablebody,$kolombody++,$data['teleponibu']);
xlsWriteLabel($tablebody,$kolombody++,$data['kerjaayah']);
xlsWriteLabel($tablebody,$kolombody++,$data['kerjaibu']);
xlsWriteLabel($tablebody,$kolombody++,$data['gajiayah']);
xlsWriteLabel($tablebody,$kolombody++,$data['gajiibu']);
xlsWriteLabel($tablebody,$kolombody++,$data['pendidikanayah']);
xlsWriteLabel($tablebody,$kolombody++,$data['pendidikanibu']);
xlsWriteLabel($tablebody,$kolombody++,$data['thlahirayah']);
xlsWriteLabel($tablebody,$kolombody++,$data['thlahiribu']);
xlsWriteLabel($tablebody,$kolombody++,$data['tanggal']);

$tablebody++;
$nourut++;
}

xlsEOF();
exit();
?>
