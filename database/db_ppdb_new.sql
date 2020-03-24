-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2020 at 05:24 AM
-- Server version: 10.3.22-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smamtasc_ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'ictsmamita');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `nopendaftaran` varchar(16) NOT NULL DEFAULT '0',
  `nama` varchar(60) NOT NULL,
  `bayar` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`nopendaftaran`, `nama`, `bayar`) VALUES
('7696012018610001', 'AZ ZAHRA BINAR BERLIANA', 250000),
('7696012018610002', 'MOCH ANANDA RIZKI', 250000),
('7696012018610010', 'Nurifaul Indriani', 250000),
('7696012018610008', 'AURA AZUHRA AMRULLAH', 250000),
('7696012018610009', 'AURELIA DHEA ARYANTO', 250000),
('7696012018610016', 'Amelia Prasasti Gunawan Putri', 250000),
('7696012018610020', 'Adhiya Riskitavani', 250000),
('7696012018610021', 'Wahyu Bintang Juni Sugiyatno', 250000),
('7696012018610022', 'Keisya Nauraluna Tyandi', 250000),
('7696012018610023', 'Carissa Putri Cellnathania', 250000),
('7696012018610015', 'Akbar Budi Pamungkas', 250000),
('7696012018610012', 'Zackyansyah Trisna Al-Fanorizkillah Faizin', 250000),
('7696012018610017', 'Farah Artika Selvia Rahma', 250000),
('7696012018610019', 'Dina Ayu Diana', 250000),
('7696012018610024', 'Diera Nadda', 250000),
('7696012018610025', 'Muhammad Reza Pahlevi A.', 250000),
('7696012018610027', 'Felan Rhesnandia Satgas Putra', 250000),
('7696012018610028', 'Arina Anindita ', 250000),
('7696012018610030', 'Efin Nurhabibah', 250000),
('7696012018610033', 'Niswah Rifda Sakinah', 250000),
('7696012018610035', 'Raffa Ardhana Putra', 250000),
('7696012018610036', 'Vira Dwi Ariyanti', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `daftarulang`
--

CREATE TABLE `daftarulang` (
  `nopendaftaran` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarulang`
--

INSERT INTO `daftarulang` (`nopendaftaran`, `nama`) VALUES
('7696012018610001', 'AZ ZAHRA BINAR BERLIANA'),
('7696012018610002', 'MOCH ANANDA RIZKI'),
('7696012018610016', 'Amelia Prasasti Gunawan Putri'),
('7696012018610010', 'Nurifaul Indriani'),
('7696012018610017', 'Farah Artika Selvia Rahma'),
('7696012018610022', 'Keisya Nauraluna Tyandi'),
('7696012018610023', 'Carissa Putri Cellnathania'),
('7696012018610027', 'Felan Rhesnandia Satgas Putra'),
('7696012018610028', 'Arina Anindita '),
('7696012018610033', 'Niswah Rifda Sakinah');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_jadwal` varchar(100) NOT NULL,
  `tgl_jadwal` date NOT NULL,
  `jam_jadwal` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_jadwal`, `tgl_jadwal`, `jam_jadwal`) VALUES
(1, 'Tahap 1 Tes Penjurusan : 26 Januari 2019 Jam 08.00 - 11.30', '2019-01-26', '08:00:00'),
(2, 'Tahap 2 Tes Penjurusan : 23 Februari 2019 Jam 08.00 - 11.30', '2019-02-23', '08:00:00'),
(3, 'Tahap 3 Tes Penjurusan : 30 Maret 2019 Jam 08.00 - 11.30', '2019-03-30', '08:00:00'),
(4, 'Tahap 4 Tes Penjurusan : 27 April 2019 Jam 08.00 - 11.30', '2019-04-27', '08:00:00'),
(5, 'Tahap 5 Tes Penjurusan : 25 Mei 2019 Jam 08.00 - 11.30', '2019-05-25', '08:00:00'),
(6, 'Tahap 6 Tes Penjurusan : 29 Juni 2019 Jam 08.00 - 11.30', '2019-06-29', '08:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_pendaftaran`
--

CREATE TABLE `log_pendaftaran` (
  `nopendaftaran` varchar(16) NOT NULL DEFAULT '0',
  `nama` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_pendaftaran`
--

INSERT INTO `log_pendaftaran` (`nopendaftaran`, `nama`) VALUES
('7696012018610020', 'Adhiya Riskitavani');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `nopendaftaran` varchar(16) NOT NULL,
  `nama_alias` varchar(60) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `asal_sekolah` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `peminatan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `harga_formulir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`nopendaftaran`, `nama_alias`, `nama`, `password`, `asal_sekolah`, `email`, `telepon`, `kelamin`, `peminatan`, `tanggal`, `harga_formulir`) VALUES
('', '', 'test', '001', 'test', 'aa@aa.com', '00000000', 'Laki-laki', '', '2019-12-03', 250000),
('7696012018610001', 'Siswa Baru 01', 'AZ ZAHRA BINAR BERLIANA', '0049607094', 'SMP ULUL ALBAB', 'sma.muhammadiyah1taman@gmail.com', '081241584925', 'Perempuan', 'IPA', '2019-12-03', 250000),
('7696012018610002', 'Siswa Baru 02', 'MOCH ANANDA RIZKI', '0000000000', 'SMP MUHAMMADIYAH 2 TAMAN', 'sma.muhammadiyah1taman@gmail.com', '082232862530', 'Laki-laki', 'IPA', '2019-12-03', 250000),
('7696012018610003', 'Siswa Baru 03', 'Bebebebb', '636Â³377', '1', 'exploit094@gmail.com', '7373833', 'Laki-laki', 'IPA', '2019-12-07', 250000),
('7696012018610004', 'Siswa Baru 04', 'Zahwa octviana rosyidin', '0044256853', '---PILIH ASAL SEKOLAH---', 'rosyidin.08@gmail.com', '087759229820', 'Perempuan', 'IPS', '2019-12-10', 250000),
('7696012018610005', 'Siswa Baru 05', 'Deanova Kesuma Ramadani', '00000004', '2', '-', '081332235336', 'Laki-laki', 'IPA', '2019-12-13', 250000),
('7696012018610006', 'Siswa Baru 06', 'Calyca Afnanda Ramadhini', '0048585541', 'SMP ULUL ALBAB TAMAN', 'sulistyani_erlina@yahoo.com', '082141612996', 'Perempuan', 'IPS', '2020-01-23', 250000),
('7696012018610007', 'Siswa Baru 07', 'Calyca Afnanda Ramadhini', '0048585541', '4', 'sulistyani_erlina@yahoo.com', '082141612996', 'Perempuan', 'IPS', '2019-12-16', 250000),
('7696012018610008', 'Siswa Baru 08', 'AURA AZUHRA AMRULLAH', '0043365161', 'SMP JATI AGUNG TAMAN', 'denrully77@gmail.com', '081252167371', 'Perempuan', 'IPS', '2019-12-26', 250000),
('7696012018610009', 'Siswa Baru 09', 'AURELIA DHEA ARYANTO', '12345678909', 'SMP Islam Terpadu At-Taqwa', 'aureliadheaaryanto@gmail.com', '082143482525', 'Perempuan', 'IPS', '2019-12-26', 250000),
('7696012018610010', 'Siswa Baru 10', 'Nurifaul Indriani', '0048169135', 'SMP JATI AGUNG TAMAN', 'ia6814394@gmail.com', '081334588923', 'Perempuan', 'IPS', '2019-12-26', 250000),
('7696012018610011', 'Siswa Baru 11', 'Amalia Prameswari Alvina', '0056594518', 'SMP NEGERI 1 SUKODONO', 'ismamanis1701@gmail.com', '081358423699', 'Perempuan', 'IPS', '2020-01-01', 250000),
('7696012018610012', 'Siswa Baru 12', 'Zackyansyah Trisna Al-Fanorizkillah Faizin', '0057041151', 'SMP MUHAMMADIYAH 2 TAMAN', 'Raflyansyah664@gmail.com', '081391181192', 'Laki-laki', 'IPA', '2020-01-06', 250000),
('7696012018610013', 'Siswa Baru 13', 'Maulidya Fatimatus Zahra', '0799', '---PILIH SEKOLAH---', 'maulidya210405@gmail.com', '089676179440', 'Perempuan', 'IPA', '2020-01-02', 250000),
('7696012018610014', 'Siswa Baru 14', 'NURINDRA RAYA AL ABRAR', '0044397190', 'SMP MUHAMMADIYAH 3 WARU', 'nurindraraya@gmail.com', '081939036871', 'Laki-laki', 'IPS', '2020-01-05', 250000),
('7696012018610015', 'Siswa Baru 15', 'Akbar Budi Pamungkas', '0047942203', '---PILIH SEKOLAH---', 'akbarbudipamungkas12@gmail.com', '082132225822', 'Laki-laki', 'IPS', '2020-01-06', 250000),
('7696012018610016', 'Siswa Baru 16', 'Amelia Prasasti Gunawan Putri', '0054289510', 'SMP ULUL ALBAB TAMAN', 'ameliaprasasti@yahoo.com', '082234441732', 'Perempuan', 'IPS', '2020-02-01', 250000),
('7696012018610017', 'Siswa Baru 17', 'Farah Artika Selvia Rahma', '123456789', 'SMP MUHAMMADIYAH 3 WARU', 'sma.muhammadiyah1taman@gmail.com', '087874815878', 'Perempuan', 'IPS', '2020-01-20', 250000),
('7696012018610018', 'Siswa Baru 18', 'Calyca Afnanda Ramadhini', '0048585541', 'SMP ULUL ALBAB TAMAN', 'sulistyani_erlina@yahoo.com', '082141612996', 'Laki-laki', 'IPS', '2020-01-21', 250000),
('7696012018610019', 'Siswa Baru 19', 'Dina Ayu Diana', '012345678919', 'SMP MUHAMMADIYAH 2 TAMAN', 'sma.muhammadiyah1taman@gmail.com', '0816234126', 'Perempuan', 'IPS', '2020-01-22', 250000),
('7696012018610020', 'Siswa Baru 20', 'Adhiya Riskitavani', '012345678920', 'SMP NEGERI 2 WARU', 'sma.muhammadiyah1taman@gmail.com', '087798162385', 'Laki-laki', 'IPA', '2020-01-23', 250000),
('7696012018610021', 'Siswa Baru 21', 'Wahyu Bintang Juni Sugiyatno', '012345678921', '---PILIH SEKOLAH---', 'maeel_73@yahoo.co.id', '082232544333', 'Laki-laki', 'IPA', '2020-01-23', 250000),
('7696012018610022', 'Siswa Baru 22', 'Keisya Nauraluna Tyandi', '0044666529', 'SMP NEGERI 3 KRIAN', 'sma.muhammadiyah1taman@gmail.com', '081216643736', 'Perempuan', 'IPA', '2020-01-23', 250000),
('7696012018610023', 'Siswa Baru 23', 'Carissa Putri Cellnathania', '012345678923', 'SMP ULUL ALBAB TAMAN', 'sma.muhammadiyah1taman@gmail.com', '081233893029', 'Perempuan', 'IPA', '2020-01-23', 250000),
('7696012018610024', 'Siswa Baru 24', 'Diera Nadda', '0054809022', 'SMP MUHAMMADIYAH 2 TAMAN', 'sma.muhammadiyah1taman@gmail.com', '082231197325', 'Perempuan', 'IPS', '2020-01-24', 250000),
('7696012018610025', 'Siswa Baru 25', 'Muhammad Reza Pahlevi A.', '012345678925', '---PILIH SEKOLAH---', 'sma.muhammadiyah1taman@gmail.com', '082330851730', 'Laki-laki', 'IPA', '2020-01-31', 250000),
('7696012018610026', 'Siswa Baru 26', 'Arsita Isyana Nadzira', '0047822393', 'SMP MUHAMMADIYAH 3 WARU', 'arsitaisyanan@gmail.com', '088228072594', 'Perempuan', 'IPA', '2020-01-31', 250000),
('7696012018610027', 'Siswa Baru 27', 'Felan Rhesnandia Satgas Putra', '012345678927', 'SMP IT DARUL FIKRI', 'sma.muhammadiyah1taman@gmail.com', '081327932888', 'Laki-laki', 'IPS', '2020-02-01', 250000),
('7696012018610028', 'Siswa Baru 28', 'Arina Anindita ', '01234567890', 'SMP Islam As- Sakinah', 'apri_unijoyo@yahoo.com', '08125261907', 'Perempuan', 'IPA', '2020-02-01', 250000),
('7696012018610029', 'Siswa Baru 29', 'Efin Nurhabibah', '12345678928', 'SMP MUHAMMADIYAH 2 TAMAN', 'sma.muhammadiyah1taman@gmail.com', '085235128475', 'Laki-laki', 'IPA', '2020-02-03', 250000),
('7696012018610030', 'Siswa Baru 30', 'Efin Nurhabibah', '12345678928', 'SMP MUHAMMADIYAH 2 TAMAN', 'sma.muhammadiyah1taman@gmail.com', '085235128475', 'Perempuan', 'IPA', '2020-02-03', 250000),
('7696012018610031', 'Siswa Baru 31', 'tes', '1234567891', '---PILIH SEKOLAH---', 'admin1@gmail.com', '081111111112', 'Laki-laki', 'IPA', '2020-02-04', 250000),
('7696012018610032', 'Siswa Baru 32', 'ronald FAkundes', '265464', 'SMP MUHAMMADIYAH 1 SIDOARJO', 'PERSIKKEDIRI@GMAIL.COM', '0857779976387', 'Laki-laki', 'IPA', '2020-02-04', 250000),
('7696012018610033', 'Siswa Baru 33', 'Niswah Rifda Sakinah', '00123456789', 'SMP AL-FATAH BUDURAN', 'sma.muhammadiyah1taman@gmail.com', '081226459706', 'Perempuan', 'IPA', '2020-02-06', 250000),
('7696012018610034', 'Siswa Baru 34', 'Ahnaf Athallah Nararya', '050127', 'SMP BILINGUAL KRIAN', 'agusjumanto89@gmail.com', '0895338277469', 'Laki-laki', 'IPS', '2020-02-06', 250000),
('7696012018610035', 'Siswa Baru 35', 'Raffa Ardhana Putra', '012345678935', 'SMP MUHAMMADIYAH 2 TAMAN', 'raffaardhana@gmail.com', '087816625953', 'Laki-laki', 'IPS', '2020-02-07', 250000),
('7696012018610036', 'Siswa Baru 36', 'Vira Dwi Ariyanti', '12345678936', 'SMP MUHAMMADIYAH 2 TAMAN', 'sma.muhammadiyah1taman@gmail.com', '081231256529', 'Perempuan', 'IPA', '2020-02-07', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nopendaftaran` varchar(16) NOT NULL,
  `nisn` varchar(13) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `asal_sekolah` varchar(60) NOT NULL,
  `peminatan` varchar(50) NOT NULL,
  `tmplahir` varchar(30) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `anakke` int(2) NOT NULL,
  `keberadaan_anak` varchar(30) NOT NULL,
  `saudara` int(2) NOT NULL,
  `namaayah` varchar(25) NOT NULL,
  `namaibu` varchar(25) NOT NULL,
  `alamatortu` text NOT NULL,
  `teleponayah` varchar(12) NOT NULL,
  `teleponibu` varchar(12) NOT NULL,
  `kerjaayah` varchar(23) NOT NULL,
  `kerjaibu` varchar(23) NOT NULL,
  `gajiayah` varchar(29) NOT NULL,
  `gajiibu` varchar(29) NOT NULL,
  `pendidikanayah` varchar(16) NOT NULL,
  `pendidikanibu` varchar(16) NOT NULL,
  `thlahirayah` int(4) NOT NULL,
  `thlahiribu` int(4) NOT NULL,
  `pernyataan` varchar(3) NOT NULL,
  `id_jadwal` int(12) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nopendaftaran`, `nisn`, `nama`, `kelamin`, `asal_sekolah`, `peminatan`, `tmplahir`, `tgllahir`, `alamat`, `email`, `telepon`, `anakke`, `keberadaan_anak`, `saudara`, `namaayah`, `namaibu`, `alamatortu`, `teleponayah`, `teleponibu`, `kerjaayah`, `kerjaibu`, `gajiayah`, `gajiibu`, `pendidikanayah`, `pendidikanibu`, `thlahirayah`, `thlahiribu`, `pernyataan`, `id_jadwal`, `tanggal`) VALUES
('', '001', 'test', 'Laki-laki', 'test', '', 'test', '2019-12-31', 'krian sidoarjo', 'aa@aa.com', '00000000', 1, 'Bersama Orang Tua', 1, 'aa', 'aa', 'aa', 'aa', 'aa', 'Karyawan Swasta', 'Karyawan Swasta', 'Lebih dari Rp 20.000.000', 'Lebih dari Rp 20.000.000', 'S3', 'S3', 0, 0, 'oke', 0, '2019-12-03'),
('7696012018610001', '0049607094', 'AZ ZAHRA BINAR BERLIANA', 'Perempuan', 'SMP ULUL ALBAB', 'IPA', 'SIDOARJO', '2004-08-24', 'BANTENGAN BARENG KRAJAN KRIAN', 'sma.muhammadiyah1taman@gmail.com', '081241584925', 1, 'Bersama Orang Tua', 1, 'GUNARSO', 'BINTI MAYSAROH', 'BANTENGAN BARENG KRAJAN KRIAN', '081232366976', '085231890372', 'Karyawan Swasta', 'Karyawan Swasta', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 1000.000 - Rp 1.999.999', 'D3', 'SMA / sederajat', 1973, 1978, 'oke', 0, '2019-12-03'),
('7696012018610002', '0000000000', 'MOCH ANANDA RIZKI', 'Laki-laki', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPA', 'SURABAYA', '2005-01-08', 'PAGESANGAN NO 61', 'sma.muhammadiyah1taman@gmail.com', '082232862530', 4, 'Bersama Orang Tua', 4, 'SOLIKIN', 'ENDANG SULISTYOWATI', 'PAGESANGAN NO 61', '082232862530', '082232862530', 'Pensiunan', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMA / sederajat', 1973, 1978, 'oke', 0, '2019-12-03'),
('7696012018610003', '636Â³377', 'Bebebebb', 'Laki-laki', '1', 'IPA', 'Ghhhbb', '2019-12-24', 'Bbxbxbxbxbb', 'exploit094@gmail.com', '7373833', 1, 'Bersama Orang Tua', 1, 'Zbbzzbbb', 'Bdbdhdhh', 'Rbbrb', '672727', '637227', 'Buruh', 'Buruh', 'Rp 500.000 - Rp 999.999', 'Rp 500.000 - Rp 999.999', 'SMP / sederajat', 'D2', 19, 19, 'oke', 0, '2019-12-07'),
('7696012018610004', '0044256853', 'Zahwa octviana rosyidin', 'Perempuan', '5', 'IPS', 'Sidoarjo', '2004-10-04', 'Jl.yos sudarso No.83 rt.09 rw.03 Medaeng.waru.SDA', 'rosyidin.08@gmail.com', '087759229820', 1, 'Bersama Orang Tua', 2, 'mochammad Rosyidin', 'Elok evianti', 'jl.yos sudarso No.83 rt.09 rw.03 Medaeng.waru.SDA', '087759229820', '082140188218', 'Karyawan Swasta', 'Karyawan Swasta', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'SMA / sederajat', 'SMA / sederajat', 1981, 1983, 'oke', 0, '2019-12-10'),
('7696012018610005', '00000004', 'Deanova Kesuma Ramadani', 'Laki-laki', '2', 'IPA', 'Sidoarjo', '2004-11-02', 'Jl Satria CTN1/55 Ketegan RT.08 RW.02 Taman', '-', '081332235336', 3, 'Bersama Orang Tua', 3, 'Ahmad Santoso', 'Eni Astuti', 'Jl Satria CTN1/55 Ketegan RT.08 RW.02 Taman', '081332235336', '081336739003', 'Karyawan Swasta', 'Tidak Bekerja', 'Rp 5.000.000 - Rp 20.000.000', 'Tidak Berpenghasilan', 'S2', 'SMA / sederajat', 1961, 1967, 'oke', 0, '2019-12-13'),
('7696012018610006', '0048585541', 'Calyca Afnanda Ramadhini', 'Perempuan', 'SMP ULUL ALBAB TAMAN', 'IPS', 'Surabaya', '2004-10-25', 'Griya Bhayangkara G2 / 17 Masangan Kulon Sukodono Sidoarjo', 'sulistyani_erlina@yahoo.com', '082141612996', 2, 'Bersama Orang Tua', 2, 'Joko Mulyanto', 'Erlina Sulistyani', 'Griya Bhayangkara G2 / 17 Masangan Kulon, Sukodono, Sidoarjo', '081252440017', '082141612996', 'Karyawan Swasta', 'Karyawan Swasta', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'D3', 'D3', 1970, 1971, 'oke', 1, '2020-01-23'),
('7696012018610007', '0048585541', 'Calyca Afnanda Ramadhini', 'Perempuan', '4', 'IPS', 'Surabaya', '2004-10-25', 'Griya Bhayangkara G2 / 17 Masangan Kulon Sukodono Sidoarjo', 'sulistyani_erlina@yahoo.com', '082141612996', 2, 'Bersama Orang Tua', 2, 'Joko Mulyanto', 'Erlina Sulistyani', 'Griya Bhayangkara G2 / 17 Masangan Kulon, Sukodono, Sidoarjo', '081252440017', '082141612996', 'Karyawan Swasta', 'Karyawan Swasta', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'D3', 'D3', 13, 22, 'oke', 0, '2019-12-16'),
('7696012018610008', '0043365161', 'AURA AZUHRA AMRULLAH', 'Perempuan', 'SMP JATI AGUNG TAMAN', 'IPS', 'SURABAYA', '0000-00-00', 'KAVLING BOHAR LESTARI NO. A24 WAGE, SIDOARJO', 'denrully77@gmail.com', '081252167371', 2, 'Bersama Orang Tua', 1, 'RULLY AMRULLAH', 'NIEKE SAURIN SIREGAR', 'KAVLING BOHAR LESTARI NO. A24 WAGE, SIDOARJO', '08113207345', '08113217345', 'Lainnya', 'Lainnya', 'Rp 5.000.000 - Rp 20.000.000', 'Tidak Berpenghasilan', 'S1', 'D3', 1977, 1974, 'oke', 1, '2019-12-26'),
('7696012018610009', '12345678909', 'AURELIA DHEA ARYANTO', 'Perempuan', 'SMP Islam Terpadu At-Taqwa', 'IPS', 'LUMAJANG', '0000-00-00', 'Jl. Mutiara 1 No 22 Driyorejo', 'aureliadheaaryanto@gmail.com', '082143482525', 1, 'Bersama Orang Tua', 3, 'SULIYANTO', 'NANIK SUSANTI', 'Jl. Mutiara 1 No 22 Driyorejo', '081334405050', '082143482525', 'Wirausaha', 'Tidak Bekerja', 'Lebih dari Rp 20.000.000', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMP / sederajat', 1980, 1984, 'oke', 1, '2019-12-26'),
('7696012018610010', '0048169135', 'Nurifaul Indriani', 'Perempuan', 'SMP JATI AGUNG TAMAN', 'IPS', 'Kediri', '2004-08-09', 'Bohar Timur RT.13 RW.07', 'ia6814394@gmail.com', '081334588923', 2, 'Bersama Orang Tua', 2, 'Kamsiadi', 'Eni Kustini', 'Bohar Timur RT.13 RW.07', '081331735355', '081331949968', 'Karyawan Swasta', 'Karyawan Swasta', 'Tidak Berpenghasilan', 'Tidak Berpenghasilan', 'SMP / sederajat', 'SMP / sederajat', 20, 5, 'oke', 0, '2019-12-26'),
('7696012018610011', '0056594518', 'Amalia Prameswari Alvina', 'Perempuan', 'SMP NEGERI 1 SUKODONO', 'IPS', 'Sidoarjo', '2005-11-18', 'Patar Lor Rt 09 Rw 02 Ngaresrejo', 'ismamanis1701@gmail.com', '081358423699', 1, 'Bersama Orang Tua', 1, 'Agus Romadi', 'Ismawati', 'Patar Lor Rt 09 Rw 02 Ngaresreji', '-', '08563535664', 'Wirausaha', 'Lainnya', 'Tidak Berpenghasilan', 'Rp 2.000.000 - Rp 4.999.999', 'SMA / sederajat', 'S1', 1979, 1983, 'oke', 0, '2020-01-01'),
('7696012018610012', '0057041151', 'Zackyansyah Trisna Al-Fanorizkillah Faizin', 'Laki-laki', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPA', 'Surabaya', '2005-10-07', 'Kalijaten Selatan RT 22 RW 03 No. 145 Taman - Sidoarjo ', 'Raflyansyah664@gmail.com', '081391181192', 2, 'Bersama Orang Tua', 2, 'Faizin', 'Yayuk', 'Kalijaten Selatan RT 22 RW 03 No. 145 Taman - Sidoarjo', '081330627493', '08123156155', 'PNS/TNI/POLRI', 'PNS/TNI/POLRI', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'SMA / sederajat', 'S1', 4, 17, 'oke', 1, '2020-01-06'),
('7696012018610013', '0799', 'Maulidya Fatimatus Zahra', 'Perempuan', '---PILIH SEKOLAH---', 'IPA', 'sidoarjo', '0000-00-00', 'graha asri sukodono jl.melon no. ad-29', 'maulidya210405@gmail.com', '089676179440', 3, 'Bersama Orang Tua', 3, 'Zainal Arifin', 'Maisyaroh', 'Graha Asri Sukodono jl. melon nom ad-29', '08121616082', '081263163562', 'Karyawan Swasta', 'Sudah Meninggal', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMA / sederajat', 1962, 1968, 'oke', 0, '2020-01-02'),
('7696012018610014', '0044397190', 'NURINDRA RAYA AL ABRAR', 'Laki-laki', 'SMP MUHAMMADIYAH 3 WARU', 'IPS', 'SURABAYA', '2004-12-30', 'PERUM.DELTA MANDALA I NO.97 SEMAMBUNG GEDANGAN SIDOARJO', 'nurindraraya@gmail.com', '081939036871', 1, 'Bersama Orang Tua', 2, 'ACHMAD RASYAD INDRA', 'NHORISK HARDIYANI', 'PERUM.DELTA MANDALA I NO.97 SEMAMBUNG GEDANGAN SIDOARJO', '081230130818', '087851719788', 'Karyawan Swasta', 'Tidak Bekerja', 'Rp 5.000.000 - Rp 20.000.000', 'Tidak Berpenghasilan', 'S1', 'S1', 1978, 1978, 'oke', 0, '2020-01-05'),
('7696012018610015', '0047942203', 'Akbar Budi Pamungkas', 'Laki-laki', '---PILIH SEKOLAH---', 'IPS', 'Sidoarjo', '0000-00-00', 'Bareng Krajan RT 01 RW 01 Krian - SIdoarjo', 'akbarbudipamungkas12@gmail.com', '082132225822', 3, 'Bersama Orang Tua', 3, 'Suraji Budi Martono', 'Susana Mulyani', 'Bareng Krajan RT 01 RW 01 Krian - SIdoarjo', '081249858399', '082132225822', 'Karyawan Swasta', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'D3', 'SMA / sederajat', 1969, 1966, 'oke', 0, '2020-01-06'),
('7696012018610016', '0054289510', 'Amelia Prasasti Gunawan Putri', 'Perempuan', 'SMP ULUL ALBAB TAMAN', 'IPS', 'Surabaya', '2005-06-03', 'Perum Taman Pondok Jati BJ - 15', 'ameliaprasasti@yahoo.com', '082234441732', 2, 'Bersama Orang Tua', 4, 'Gunawan Tri Utomo', 'NAluri Endah Prastiyawati', 'Perum Taman Pondok Jati BJ - 15', '082244447943', '081249021374', 'PNS/TNI/POLRI', 'Tidak Bekerja', 'Rp 5.000.000 - Rp 20.000.000', 'Tidak Berpenghasilan', 'S1', 'S1', 1976, 1976, 'oke', 1, '2020-02-01'),
('7696012018610017', '123456789', 'Farah Artika Selvia Rahma', 'Perempuan', 'SMP MUHAMMADIYAH 3 WARU', 'IPS', 'Sidoarjo', '2005-06-01', 'Ambeng Ambeng Rt 10 21 a Rw 03 Ngingas Waru', 'sma.muhammadiyah1taman@gmail.com', '087874815878', 3, 'Bersama Orang Tua', 2, 'Drs. Sukron', 'Dra. Maslicha Ita Wahyuni', 'Ambeng Ambeng Rt 10 21 a Rw 03 Ngingas Waru', '081330228239', '082245280694', 'Karyawan Swasta', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'S1', 'S1', 1965, 1967, 'oke', 0, '2020-01-20'),
('7696012018610018', '0048585541', 'Calyca Afnanda Ramadhini', 'Laki-laki', 'SMP ULUL ALBAB TAMAN', 'IPS', 'Surabaya', '2004-10-25', 'Griya Bhayangkara G2/17 Masangan Kulon, Sukodono Sidoarjo', 'sulistyani_erlina@yahoo.com', '082141612996', 2, 'Bersama Orang Tua', 2, 'Joko Mulynto', 'Erlina Sulistyani', 'Griya Bhayangkara G2/17 Masangan Kulon, Sukodono, Sidoarjo', '081252440017', '082141612996', 'Karyawan Swasta', 'Karyawan Swasta', 'Rp 5.000.000 - Rp 20.000.000', 'Rp 5.000.000 - Rp 20.000.000', 'D3', 'D3', 1970, 1971, 'oke', 0, '2020-01-21'),
('7696012018610019', '012345678919', 'Dina Ayu Diana', 'Perempuan', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPS', 'Sidoarjo', '2005-03-27', 'Ketegan Barat gang 2 RT 04 RW 01', 'sma.muhammadiyah1taman@gmail.com', '0816234126', 2, 'Bersama Orang Tua', 2, 'Saiful', 'Siti Rohaniah', 'Ketegan Barat gang 2 RT 04 RW 01', '081234654544', '081217132446', 'Karyawan Swasta', 'Tidak Bekerja', 'Rp 1000.000 - Rp 1.999.999', 'Tidak Berpenghasilan', 'SMP / sederajat', 'SMP / sederajat', 1975, 1974, 'oke', 0, '2020-01-22'),
('7696012018610020', '012345678920', 'Adhiya Riskitavani', 'Laki-laki', 'SMP NEGERI 2 WARU', 'IPA', 'Sidoarjo', '0000-00-00', 'Taman Aloha B-2 A/10 RT 36 RW 09 Suko, Sukodono', 'sma.muhammadiyah1taman@gmail.com', '087798162385', 2, 'Bersama Orang Tua', 2, 'Budi Cahyono, S.Sos', 'Titin Sumarni, S.Sos', 'Taman Aloha B-2 A/10 RT 36 RW 09 Suko, Sukodono', '081999414439', '081335691620', 'Karyawan Swasta', 'Wiraswasta', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'S1', 'S1', 1971, 1970, 'oke', 1, '2020-01-23'),
('7696012018610021', '012345678921', 'Wahyu Bintang Juni Sugiyatno', 'Laki-laki', '---PILIH SEKOLAH---', 'IPA', 'Sidoarjo', '0000-00-00', 'Perum Wage Permai D-16 Taman, Sidoarjo', 'maeel_73@yahoo.co.id', '082232544333', 2, 'Bersama Orang Tua', 3, 'Mail Sugiyatno, ST', 'Indah Wahyu Ningsih', 'Perum Wage Permai D-16 Taman, Sidoarjo', '081357251881', '082232544333', 'Wiraswasta', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'S1', 'SMA / sederajat', 1973, 1974, 'oke', 0, '2020-01-23'),
('7696012018610022', '0044666529', 'Keisya Nauraluna Tyandi', 'Perempuan', 'SMP NEGERI 3 KRIAN', 'IPA', 'Kediri', '0000-00-00', 'Perum Taman Sidorejo M / 29 Krian Sidoarjo', 'sma.muhammadiyah1taman@gmail.com', '081216643736', 1, 'Bersama Orang Tua', 1, 'Andi Sulistiyono ', 'Emi Kustiarsih', 'Perum Taman Sidorejo M / 29 Krian Sidoarjo', '081216643736', '081330218870', 'PNS/TNI/POLRI', 'PNS/TNI/POLRI', 'Rp 5.000.000 - Rp 20.000.000', 'Rp 5.000.000 - Rp 20.000.000', 'SMA / sederajat', 'SMA / sederajat', 1974, 1975, 'oke', 0, '2020-01-23'),
('7696012018610023', '012345678923', 'Carissa Putri Cellnathania', 'Perempuan', 'SMP ULUL ALBAB TAMAN', 'IPA', 'Surabaya', '0000-00-00', 'Taman Sidorejo Blok N-10 Krian, Sidoarjo', 'sma.muhammadiyah1taman@gmail.com', '081233893029', 1, 'Bersama Orang Tua', 1, 'Marianto', 'Ririn Yumiati', 'Taman Sidorejo Blok N-10 Krian, Sidoarjo (Manukan Kerto - KK)', '082245577621', '087855791045', 'Wiraswasta', 'Tidak Bekerja', 'Rp 5.000.000 - Rp 20.000.000', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMA / sederajat', 1982, 1973, 'oke', 0, '2020-01-23'),
('7696012018610024', '0054809022', 'Diera Nadda', 'Perempuan', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPS', 'Surabaya', '2005-08-17', 'Taman Pondok Jati 2 - 11', 'sma.muhammadiyah1taman@gmail.com', '082231197325', 2, 'Bersama Orang Tua', 2, 'JAcob Niky Setio M', 'Nisdatin', 'Taman Pondok Jati 2 - 11', '085730197004', '082264468400', 'Karyawan Swasta', 'Tidak dapat diterapkan', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'SMA / sederajat', 'S1', 1972, 1971, 'oke', 0, '2020-01-24'),
('7696012018610025', '012345678925', 'Muhammad Reza Pahlevi A.', 'Laki-laki', '---PILIH SEKOLAH---', 'IPA', 'Kediri', '0000-00-00', 'Griya Taman Asri HI 08, Taman, Sidoarjo', 'sma.muhammadiyah1taman@gmail.com', '082330851730', 2, 'Bersama Orang Tua', 3, 'Anwar Sanusi', 'Runi Haryati', 'Griya Taman Asri HI 08, Taman, Sidoarjo', '082330851730', '082330851730', 'Wiraswasta', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'D3', 'SMA / sederajat', 1974, 1976, 'oke', 0, '2020-01-31'),
('7696012018610026', '0047822393', 'Arsita Isyana Nadzira', 'Perempuan', 'SMP MUHAMMADIYAH 3 WARU', 'IPA', 'Jakarta', '2004-08-31', 'Jl. Kolonel Sugiono no. 25 Rt.02 Rw. 01 Waru, Sidoarjo', 'arsitaisyanan@gmail.com', '088228072594', 2, 'Bersama Orang Tua', 2, 'Eddy Priyano (alm)', 'Ummu Nihayah', 'Jl. Kolonel Sugiono no. 25 Rt. 02 Rw. 01 Waru, Sidoarjo', '-', '088228049741', 'Sudah Meninggal', 'Lainnya', 'Tidak Berpenghasilan', 'Rp 1000.000 - Rp 1.999.999', 'SMA / sederajat', 'S2', 1963, 1969, 'oke', 0, '2020-01-31'),
('7696012018610027', '012345678927', 'Felan Rhesnandia Satgas Putra', 'Laki-laki', 'SMP IT DARUL FIKRI', 'IPS', 'Purbalingga', '0000-00-00', 'Perum Griya Samudra Asri Blok C3/05 Kramat Jegu - Taman', 'sma.muhammadiyah1taman@gmail.com', '081327932888', 1, 'Bersama Orang Tua', 1, 'Hatwan Maliana', 'Diah Susiani', 'Perum Griya Samudra Asri Blok C3/05 Kramat Jegu - Taman', '082132733445', '081327932888', 'PNS/TNI/POLRI', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMA / sederajat', 1976, 1981, 'oke', 0, '2020-02-01'),
('7696012018610028', '01234567890', 'Arina Anindita ', 'Perempuan', 'SMP Islam As- Sakinah', 'IPA', 'Karang Anyar', '2004-09-05', 'Perum Permata Sukodono Raya Blok E4-24', 'apri_unijoyo@yahoo.com', '08125261907', 1, 'Bersama Orang Tua', 2, 'Dr. Apri Arisandi, S.Pi, ', 'Siti Rokhmaniati, S.Pi', 'Perum Permata Sukodono Raya Blok E4-24', '08125261907', '081330136812', 'PNS/TNI/POLRI', 'PNS/TNI/POLRI', 'Rp 5.000.000 - Rp 20.000.000', 'Rp 5.000.000 - Rp 20.000.000', 'S3', 'S1', 1976, 1977, 'oke', 0, '2020-02-01'),
('7696012018610029', '12345678928', 'Efin Nurhabibah', 'Laki-laki', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPA', 'Sidoarjo', '2005-05-05', 'Mangunan gg tembusan No 11A Rt 01 Rw 02', 'sma.muhammadiyah1taman@gmail.com', '085235128475', 2, 'Bersama Orang Tua', 2, 'M. Imron', 'Tunik Afridah', 'Mangunan gg tembusan No 11A Rt 01 Rw 02', '085235128475', '085235128475', 'Tidak Bekerja', 'Lainnya', 'Tidak Berpenghasilan', 'Kurang dari Rp 500.000', 'SMA / sederajat', 'SMA / sederajat', 1965, 1968, 'oke', 0, '2020-02-03'),
('7696012018610030', '12345678928', 'Efin Nurhabibah', 'Perempuan', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPA', 'Sidoarjo', '2005-05-05', 'Mangunan gg tembusan No 11A Rt 01 Rw 02', 'sma.muhammadiyah1taman@gmail.com', '085235128475', 2, 'Bersama Orang Tua', 2, 'M. Imron', 'Tunik Afridah', 'Mangunan gg tembusan No 11A Rt 01 Rw 02', '085235128475', '085235128475', 'Tidak Bekerja', 'Lainnya', 'Tidak Berpenghasilan', 'Kurang dari Rp 500.000', 'SMA / sederajat', 'SMA / sederajat', 1965, 1968, 'oke', 0, '2020-02-03'),
('7696012018610031', '1234567891', 'tes', 'Laki-laki', '---PILIH SEKOLAH---', 'IPA', 'asd', '2020-02-25', 'u', 'admin1@gmail.com', '081111111112', 4, 'Bersama Orang Tua', 4, '9', '9', '9', '9', '9', 'Lainnya', 'Karyawan Swasta', 'Kurang dari Rp 500.000', 'Kurang dari Rp 500.000', '	Tidak sekolah', 'PAUD', 9, 9, 'oke', 0, '2020-02-04'),
('7696012018610032', '265464', 'ronald FAkundes', 'Laki-laki', 'SMP MUHAMMADIYAH 1 SIDOARJO', 'IPA', 'kediri', '2020-02-12', 'jl mojohit 666b', 'PERSIKKEDIRI@GMAIL.COM', '0857779976387', 1, 'Bersama Orang Tua', 1, 'SAMSUL HADI', 'ZUBAIDAH', 'jl mojohit 666b', '08889999933', '08889999933', 'Karyawan Swasta', 'Karyawan Swasta', 'Kurang dari Rp 500.000', 'Rp 2.000.000 - Rp 4.999.999', 'PAUD', 'PAUD', 1963, 1963, 'oke', 0, '2020-02-04'),
('7696012018610033', '00123456789', 'Niswah Rifda Sakinah', 'Perempuan', 'SMP AL-FATAH BUDURAN', 'IPA', 'Sidoarjo', '2005-01-30', 'Jl Satria No 06 Rt 9 Rw 02 Ketegan', 'sma.muhammadiyah1taman@gmail.com', '081226459706', 2, 'Bersama Orang Tua', 3, 'M Arif', 'Ninik Fauziah', 'Jl Satria No 06 Rt 9 Rw 02 Ketegan', '081226459706', '081226459706', 'Lainnya', 'Lainnya', 'Rp 1000.000 - Rp 1.999.999', 'Rp 500.000 - Rp 999.999', 'S1', 'S1', 1966, 1979, 'oke', 0, '2020-02-06'),
('7696012018610034', '050127', 'Ahnaf Athallah Nararya', 'Laki-laki', 'SMP BILINGUAL KRIAN', 'IPS', 'Banyumas', '0000-00-00', 'Perumahan Griya Samudra Asri Blok C3 no 04', 'agusjumanto89@gmail.com', '0895338277469', 1, 'Asrama', 2, 'Agus Jumanto', 'Sri Mainah', 'Perumahan Griya Samudra Asri Blok C3 no 4', '085231679198', '087854205939', 'PNS/TNI/POLRI', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMA / sederajat', 1975, 1982, 'oke', 0, '2020-02-06'),
('7696012018610035', '012345678935', 'Raffa Ardhana Putra', 'Laki-laki', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPS', 'Depok', '0000-00-00', 'Jl. Semeru No. 25 RT 04 RW 02 Bambe', 'raffaardhana@gmail.com', '087816625953', 2, 'Bersama Orang Tua', 1, 'Sukirno', 'Windari', 'Jl. Semeru No. 25 RT 04 RW 02 Bambe', '089528608535', '087816625953', 'Karyawan Swasta', 'Tidak Bekerja', 'Rp 2.000.000 - Rp 4.999.999', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMA / sederajat', 1972, 1973, 'oke', 0, '2020-02-07'),
('7696012018610036', '12345678936', 'Vira Dwi Ariyanti', 'Perempuan', 'SMP MUHAMMADIYAH 2 TAMAN', 'IPA', 'Surabaya', '2005-04-15', 'Perum GTCK Jl. Anggrek KAv 8A Rt 16/09 Bohar Taman Sidoarjo', 'sma.muhammadiyah1taman@gmail.com', '081231256529', 2, 'Bersama Orang Tua', 1, 'Totok Hariyanto', 'Sri Hartini', 'Perum GTCK Jl. Anggrek KAv 8A Rt 16/09 Bohar Taman Sidoarjo', '081231256259', '081231256259', 'PNS/TNI/POLRI', 'Tidak Bekerja', 'Rp 5.000.000 - Rp 20.000.000', 'Tidak Berpenghasilan', 'SMA / sederajat', 'SMA / sederajat', 1976, 1976, 'oke', 0, '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `rekapnilai`
--

CREATE TABLE `rekapnilai` (
  `nopendaftaran` varchar(16) NOT NULL,
  `bin1` double NOT NULL,
  `bin2` double NOT NULL,
  `bin3` double NOT NULL,
  `bin4` double NOT NULL,
  `bin5` double NOT NULL,
  `rata_bin` double NOT NULL,
  `bin_un` double NOT NULL,
  `big1` double NOT NULL,
  `big2` double NOT NULL,
  `big3` double NOT NULL,
  `big4` double NOT NULL,
  `big5` double NOT NULL,
  `rata_big` double NOT NULL,
  `big_un` double NOT NULL,
  `mtk1` double NOT NULL,
  `mtk2` double NOT NULL,
  `mtk3` double NOT NULL,
  `mtk4` double NOT NULL,
  `mtk5` double NOT NULL,
  `rata_mtk` double NOT NULL,
  `mtk_un` double NOT NULL,
  `ipa1` double NOT NULL,
  `ipa2` double NOT NULL,
  `ipa3` double NOT NULL,
  `ipa4` double NOT NULL,
  `ipa5` double NOT NULL,
  `rata_ipa` double NOT NULL,
  `ipa_un` double NOT NULL,
  `ips1` double NOT NULL,
  `ips2` double NOT NULL,
  `ips3` double NOT NULL,
  `ips4` double NOT NULL,
  `ips5` double NOT NULL,
  `rata_ips` double NOT NULL,
  `ips_un` double NOT NULL,
  `rata_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekapnilai`
--

INSERT INTO `rekapnilai` (`nopendaftaran`, `bin1`, `bin2`, `bin3`, `bin4`, `bin5`, `rata_bin`, `bin_un`, `big1`, `big2`, `big3`, `big4`, `big5`, `rata_big`, `big_un`, `mtk1`, `mtk2`, `mtk3`, `mtk4`, `mtk5`, `rata_mtk`, `mtk_un`, `ipa1`, `ipa2`, `ipa3`, `ipa4`, `ipa5`, `rata_ipa`, `ipa_un`, `ips1`, `ips2`, `ips3`, `ips4`, `ips5`, `rata_ips`, `ips_un`, `rata_total`) VALUES
('7696012018610006', 83.5, 87.5, 85.5, 91, 87.5, 87, 0, 85, 86.5, 87, 92, 85, 87.1, 0, 78.5, 81, 84.5, 82.5, 79.5, 81.2, 0, 82, 82, 82, 81, 81.5, 81.7, 0, 84.5, 86, 80, 87.5, 90, 85.6, 0, 84.52),
('7696012018610008', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('7696012018610009', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('7696012018610012', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('7696012018610016', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('7696012018610020', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(1) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `prop` varchar(100) NOT NULL,
  `kab` varchar(100) NOT NULL,
  `kec` varchar(100) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `prop`, `kab`, `kec`, `desa`, `tanggal`, `aktif`) VALUES
(5, 'MTS WALI SONGO BALONGBENDO', '', '', '', '', '2019-12-13', 1),
(4, 'MTS NURUL HUDA BALONGBENDO', '', '', '', '', '2019-12-13', 1),
(6, 'SMP DHARMA WANITA 10 BALONGBENDO', '', '', '', '', '2019-12-13', 1),
(7, 'SMP PROKLAMASI BALONGBENDO', '', '', '', '', '2019-12-13', 1),
(8, 'SMP RADEN RAHMAT BALONGBENDO', '', '', '', '', '2019-12-13', 1),
(9, 'SMPN 1 BALONGBENDO', '', '', '', '', '2019-12-13', 1),
(10, 'SMPN 2 BALONGBENDO', '', '', '', '', '2019-12-13', 1),
(11, 'MTS  AL KHOZINY BUDURAN', '', '', '', '', '2019-12-13', 1),
(12, 'MTS DARUL HIKMAH BUDURAN', '', '', '', '', '2019-12-13', 1),
(13, 'MTS FAQIH HASYIM BUDURAN', '', '', '', '', '2019-12-13', 1),
(14, 'SMP AL-FATAH BUDURAN', '', '', '', '', '2019-12-13', 1),
(15, 'SMP PGRI 1 BUDURAN', '', '', '', '', '2019-12-13', 1),
(16, 'SMP SEPULUH NOPEMBER SIDOARJO', '', '', '', '', '2019-12-13', 1),
(17, 'SMP UNGGULAN AL-FALLAH BUDURAN', '', '', '', '', '2019-12-13', 1),
(18, 'SMP WACHID HASYIM 11 BUDURAN', '', '', '', '', '2019-12-13', 1),
(19, 'SMPLB SITI HAJAR BUDURAN', '', '', '', '', '2019-12-13', 1),
(20, 'SMP NEGERI 1 BUDURAN', '', '', '', '', '2019-12-13', 1),
(21, 'SMP NEGERI 2 BUDURAN', '', '', '', '', '2019-12-13', 1),
(22, 'SMP NEGERI SATU ATAP BUDURAN', '', '', '', '', '2019-12-13', 1),
(23, 'MTS AL MU`AWANAH CANDI', '', '', '', '', '2019-12-13', 1),
(24, 'MTS MA`ARIF CANDI', '', '', '', '', '2019-12-13', 1),
(25, 'MTS NAHDLATUL ULAMA CANDI', '', '', '', '', '2019-12-13', 1),
(26, 'MTS PLUS NURUL IKHLAS CANDI', '', '', '', '', '2019-12-13', 1),
(27, 'SMP AL-AZIZIYAH CANDI', '', '', '', '', '2019-12-13', 1),
(28, 'SMP HANG TUAH 5 CANDI', '', '', '', '', '2019-12-13', 1),
(29, 'SMP PGRI 10 CANDI', '', '', '', '', '2019-12-13', 1),
(30, 'SMP TERBUKA CANDI', '', '', '', '', '2019-12-13', 1),
(31, 'SMPLB C DHARMA PENDIDIKAN CANDI', '', '', '', '', '2019-12-13', 1),
(32, 'SMP NEGERI 1 CANDI', '', '', '', '', '2019-12-13', 1),
(33, 'SMP NEGERI 2 CANDI', '', '', '', '', '2019-12-13', 1),
(34, 'SMP NEGERI 3 CANDI', '', '', '', '', '2019-12-13', 1),
(35, 'MTS BI`RUL ULUM GEDANGAN', '', '', '', '', '2019-12-13', 1),
(36, 'MTS HASANUDDIN GEDANGAN', '', '', '', '', '2019-12-13', 1),
(37, 'MTS NURUS SYAFI`I GEDANGAN', '', '', '', '', '2019-12-13', 1),
(38, 'SMP DHARMA WANITA 1 GEDANGAN', '', '', '', '', '2019-12-13', 1),
(39, 'SMP ITABA GEDANGAN', '', '', '', '', '2019-12-13', 1),
(40, 'SMPLB GEDANGAN', '', '', '', '', '2019-12-13', 1),
(41, 'SMP TAMAN HARAPAN GEDANGAN', '', '', '', '', '2019-12-13', 1),
(42, 'SMP TAMAN PENDIDIKAN ISLAM GEDANGAN', '', '', '', '', '2019-12-13', 1),
(43, 'SMP TERBUKA GEDANGAN', '', '', '', '', '2019-12-13', 1),
(44, 'SMPLB HARMONI GEDANGAN', '', '', '', '', '2019-12-13', 1),
(45, 'SMPLB NEGERI GEDANGAN', '', '', '', '', '2019-12-13', 1),
(46, 'SMP NEGERI 1 GEDANGAN', '', '', '', '', '2019-12-13', 1),
(47, 'SMP NEGERI 2 GEDANGAN', '', '', '', '', '2019-12-13', 1),
(48, 'MTS AL FATAH JABON', '', '', '', '', '2019-12-13', 1),
(49, 'MTS DARUL HUDA JABON', '', '', '', '', '2019-12-13', 1),
(50, 'MTS JAWAHIRUL ULUM JABON', '', '', '', '', '2019-12-13', 1),
(51, 'MTS MAMBAUL HUDA JABON', '', '', '', '', '2019-12-13', 1),
(52, 'SMP AL-KAHFI JABON', '', '', '', '', '2019-12-13', 1),
(53, 'SMP AVISENA JABON', '', '', '', '', '2019-12-13', 1),
(54, 'SMP ISLAM MH AL MUBAROK JABON', '', '', '', '', '2019-12-13', 1),
(55, 'SMP MIFTAHUL ULUM JABON', '', '', '', '', '2019-12-13', 1),
(56, 'SMP TERBUKA JABON', '', '', '', '', '2019-12-13', 1),
(57, 'SMP NEGERI 1 JABON', '', '', '', '', '2019-12-13', 1),
(58, 'SMP NEGERI 2 JABON', '', '', '', '', '2019-12-13', 1),
(59, 'SMP NEGERI SATU ATAP JABON', '', '', '', '', '2019-12-13', 1),
(60, 'MTS PLUS BURHANUL HIDAYAH KREMBUNG', '', '', '', '', '2019-12-13', 1),
(61, 'SMP DHARMA WANITA 13 KREMBUNG', '', '', '', '', '2019-12-13', 1),
(62, 'SMP ISLAM KREMBUNG', '', '', '', '', '2019-12-13', 1),
(63, 'SMP PERSATUAN KREMBUNG', '', '', '', '', '2019-12-13', 1),
(64, 'SMP NEGERI 1 KREMBUNG', '', '', '', '', '2019-12-13', 1),
(65, 'SMP NEGERI 2 KREMBUNG', '', '', '', '', '2019-12-13', 1),
(66, 'MTS NEGERI KRIAN', '', '', '', '', '2019-12-13', 1),
(67, 'MTS AL AMIN KRIAN', '', '', '', '', '2019-12-13', 1),
(68, 'MTS AL IHSAN KRIAN', '', '', '', '', '2019-12-13', 1),
(69, 'MTS NURUL HIDAYAH KRIAN', '', '', '', '', '2019-12-13', 1),
(70, 'SMP AL-AHMAD KRIAN', '', '', '', '', '2019-12-13', 1),
(71, 'SMP AL-ISLAM KRIAN', '', '', '', '', '2019-12-13', 1),
(72, 'SMP BILINGUAL KRIAN', '', '', '', '', '2019-12-13', 1),
(73, 'SMP DHARMA WANITA 5 KRIAN', '', '', '', '', '2019-12-13', 1),
(74, 'SMP MUHAMMADIYAH 6 KRIAN', '', '', '', '', '2019-12-13', 1),
(75, 'SMP NUSANTARA KRIAN', '', '', '', '', '2019-12-13', 1),
(76, 'SMP PANCASILA KRIAN', '', '', '', '', '2019-12-13', 1),
(77, 'SMP PGRI 13 KRIAN', '', '', '', '', '2019-12-13', 1),
(78, 'SMP ST YUSTINUS DE YACOBIS KRIAN', '', '', '', '', '2019-12-13', 1),
(79, 'SMP WACHID HASYIM KRIAN', '', '', '', '', '2019-12-13', 1),
(80, 'SMPLB AISIYAH KRIAN', '', '', '', '', '2019-12-13', 1),
(81, 'SMP NEGERI 1 KRIAN', '', '', '', '', '2019-12-13', 1),
(82, 'SMP NEGERI 2 KRIAN', '', '', '', '', '2019-12-13', 1),
(83, 'SMP NEGERI 3 KRIAN', '', '', '', '', '2019-12-13', 1),
(84, 'MTS ABIL HASAN ASY SYADZILY PORONG', '', '', '', '', '2019-12-13', 1),
(85, 'MTS AL FUDLOLA PORONG', '', '', '', '', '2019-12-13', 1),
(86, 'MTS KHOLID BIN WALID PORONG', '', '', '', '', '2019-12-13', 1),
(87, 'MTS MA`ARIF PAMOTAN PORONG', '', '', '', '', '2019-12-13', 1),
(88, 'MTS SABILIL KHOIR PORONG', '', '', '', '', '2019-12-13', 1),
(89, 'SMP DHARMA WANITA 11 PORONG', '', '', '', '', '2019-12-13', 1),
(90, 'SMP KEMALA BHAYANGKARI PORONG', '', '', '', '', '2019-12-13', 1),
(91, 'SMP MUHAMMADIYAH 4 PORONG', '', '', '', '', '2019-12-13', 1),
(92, 'SMP NURUL HUDA PORONG', '', '', '', '', '2019-12-13', 1),
(93, 'SMP PGRI 2 PORONG', '', '', '', '', '2019-12-13', 1),
(94, 'SMP SUNAN AMPEL PORONG', '', '', '', '', '2019-12-13', 1),
(95, 'SMP TAMAN PEMDIDIKAN ISLAM', '', '', '', '', '2019-12-13', 1),
(96, 'SMP TERPADU AL MUBAROKAH', '', '', '', '', '2019-12-13', 1),
(97, 'SMPLB AISYIYAH PORONG', '', '', '', '', '2019-12-13', 1),
(98, 'SMP NEGERI 1 PORONG', '', '', '', '', '2019-12-13', 1),
(99, 'SMP NEGERI 2 PORONG', '', '', '', '', '2019-12-13', 1),
(100, 'SMP NEGERI 3 PORONG', '', '', '', '', '2019-12-13', 1),
(101, 'MTS ARROSYAD PRAMBON', '', '', '', '', '2019-12-13', 1),
(102, 'MTS DARUSSALAM PRAMBON', '', '', '', '', '2019-12-13', 1),
(103, 'MTS SABILUNNAJAH PRAMBON', '', '', '', '', '2019-12-13', 1),
(104, 'SMP BUDI UTOMO PRAMBON', '', '', '', '', '2019-12-13', 1),
(105, 'SMP DHARMA WANITA 14 PRAMBON', '', '', '', '', '2019-12-13', 1),
(106, 'SMP PERJUANGAN PRAMBON', '', '', '', '', '2019-12-13', 1),
(107, 'SMP PGRI 3 PRAMBON', '', '', '', '', '2019-12-13', 1),
(108, 'SMP WACHID HASYIM 10 PRAMBON', '', '', '', '', '2019-12-13', 1),
(109, 'SMP NEGERI 1 PRAMBON', '', '', '', '', '2019-12-13', 1),
(110, 'MTS NURUL HUDA SEDATI', '', '', '', '', '2019-12-13', 1),
(111, 'SMP DHARMA WANITA 3 SEDATI', '', '', '', '', '2019-12-13', 1),
(112, 'SMP PGRI 7 SEDATI SEDATI', '', '', '', '', '2019-12-13', 1),
(113, 'SMP WACHID HASJIM 9 SEDATI', '', '', '', '', '2019-12-13', 1),
(114, 'SMP NEGERI 1 SEDATI', '', '', '', '', '2019-12-13', 1),
(115, 'SMP NEGERI 2 SEDATI', '', '', '', '', '2019-12-13', 1),
(116, 'MTS NEGERI SIDOARJO', '', '', '', '', '2019-12-13', 1),
(117, 'MTS AL-ABROR SIDOARJO', '', '', '', '', '2019-12-13', 1),
(118, 'MTS NU SIDOARJO', '', '', '', '', '2019-12-13', 1),
(119, 'MTS SOBILUR ROSYAD SIDOARJO', '', '', '', '', '2019-12-13', 1),
(120, 'MTS YPM 2 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(121, 'SMP CENDEKIA SIDOARJO', '', '', '', '', '2019-12-13', 1),
(122, 'SMP ISLAM SIDOARJO', '', '', '', '', '2019-12-13', 1),
(123, 'SMP MUHAMMADIYAH 1 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(124, 'SMP MUTIARA BUNDA SIDOARJO', '', '', '', '', '2019-12-13', 1),
(125, 'SMP PGRI 16 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(126, 'SMP PGRI 8 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(127, 'SMP PGRI 9 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(128, 'SMP PLUS SABILUR ROSYAD SIDOARJO', '', '', '', '', '2019-12-13', 1),
(129, 'SMP SANTAMARIA 2 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(130, 'SMP YOS SUDARSO SIDOARJO', '', '', '', '', '2019-12-13', 1),
(131, 'SMP YPM 7 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(132, 'SMPK PETRA 4 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(133, 'SMPK UNTUNG SUROPATI SIDOARJO', '', '', '', '', '2019-12-13', 1),
(134, 'SMPLB A-C DHARMA WANITA SIDOARJO', '', '', '', '', '2019-12-13', 1),
(135, 'SMPLB B DHARMA WANITA SIDOARJO', '', '', '', '', '2019-12-13', 1),
(136, 'SMPLB C LEBO SIDOARJO', '', '', '', '', '2019-12-13', 1),
(137, 'SMP NEGERI 1 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(138, 'SMP NEGERI 2 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(139, 'SMP NEGERI 3 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(140, 'SMP NEGERI 4 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(141, 'SMP NEGERI 5 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(142, 'SMP NEGERI 6 SIDOARJO', '', '', '', '', '2019-12-13', 1),
(143, 'MTS HASYIM ASY`ARI SUKODONO', '', '', '', '', '2019-12-13', 1),
(144, 'SMP WIJAYA SUKODONO', '', '', '', '', '2019-12-13', 1),
(145, 'SMP YPM 2 SUKODONO', '', '', '', '', '2019-12-13', 1),
(146, 'SMPLB AL CHUSAINAI SUKODONO', '', '', '', '', '2019-12-13', 1),
(147, 'SMP NEGERI 1 SUKODONO', '', '', '', '', '2019-12-13', 1),
(148, 'SMP NEGERI 2 SUKODONO', '', '', '', '', '2019-12-13', 1),
(149, 'MTS DARUSSALAM TAMAN', '', '', '', '', '2019-12-13', 1),
(150, 'MTS JABAL NOER TAMAN', '', '', '', '', '2019-12-13', 1),
(151, 'MTS MUHAMMADIYAH 1 TAMAN', '', '', '', '', '2019-12-13', 1),
(152, 'MTS ROUDLATUL BANAT TAMAN', '', '', '', '', '2019-12-13', 1),
(153, 'SMP AL-ISLAM TAMAN', '', '', '', '', '2019-12-13', 1),
(154, 'SMP BAHAUDDIN TAMAN', '', '', '', '', '2019-12-13', 1),
(155, 'SMP DARUL MUTA`ALIMIN TAMAN', '', '', '', '', '2019-12-13', 1),
(156, 'SMP DHARMA WANITA 9 TAMAN', '', '', '', '', '2019-12-13', 1),
(157, 'SMP JATI AGUNG TAMAN', '', '', '', '', '2019-12-13', 1),
(158, 'SMP KARTINI TAMAN', '', '', '', '', '2019-12-13', 1),
(159, 'SMP MUHAMMADIYAH 2 TAMAN', '', '', '', '', '2019-12-13', 1),
(160, 'SMP NIDHOMUDDIN TAMAN', '', '', '', '', '2019-12-13', 1),
(161, 'SMP PGRI 5 TAMAN', '', '', '', '', '2019-12-13', 1),
(162, 'SMP TERBUKA TAMAN', '', '', '', '', '2019-12-13', 1),
(163, 'SMP ULUL ALBAB TAMAN', '', '', '', '', '2019-12-13', 1),
(164, 'SMP YAYASAN TAMAN', '', '', '', '', '2019-12-13', 1),
(165, 'SMP YPM 1 TAMAN', '', '', '', '', '2019-12-13', 1),
(166, 'SMP YPM 3 TAMAN', '', '', '', '', '2019-12-13', 1),
(167, 'SMP YPM 4 BOHAR TAMAN', '', '', '', '', '2019-12-13', 1),
(168, 'SMPLB BINA BANGSA TAMAN', '', '', '', '', '2019-12-13', 1),
(169, 'SMPLB DEWI SARTIKA TAMAN', '', '', '', '', '2019-12-13', 1),
(170, 'SMP NEGERI 1 TAMAN', '', '', '', '', '2019-12-13', 1),
(171, 'SMP NEGERI 2 TAMAN', '', '', '', '', '2019-12-13', 1),
(172, 'SMP NEGERI 3 TAMAN', '', '', '', '', '2019-12-13', 1),
(173, 'MTS AL HIKMAH TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(174, 'MTS ASY-SYAFI`IYAH TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(175, 'MTS ISLAMIYAH TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(176, 'MTS MANBA`UL HIKAM TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(177, 'MTS MA`ARIF KETEGAN TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(178, 'MTS MA`ARIF NGABAN TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(179, 'MTS SALAFIYAH TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(180, 'SMP AL-ISLAMIYAH TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(181, 'SMP DHARMA WANITA 7 TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(182, 'SMP DHARMA WIRAWAN 3 TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(183, 'SMP MUHAMMADIYAH 8 TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(184, 'SMP TRI BHAKTI TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(185, 'SMPLB DELTA SEJAHTERA TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(186, 'SMP NEGERI 1 TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(187, 'SMP NEGERI 2 TANGGULANGIN', '', '', '', '', '2019-12-13', 1),
(188, 'MTS NEGERI TARIK', '', '', '', '', '2019-12-13', 1),
(189, 'MTS DARUL HIKMAH TARIK', '', '', '', '', '2019-12-13', 1),
(190, 'MTS SINGOGALIH TARIK', '', '', '', '', '2019-12-13', 1),
(191, 'SMP ISLAM TERPADU AL KAHFI TARIK', '', '', '', '', '2019-12-13', 1),
(192, 'SMP PGRI 11 TARIK', '', '', '', '', '2019-12-13', 1),
(193, 'SMP YPM 6 TARIK', '', '', '', '', '2019-12-13', 1),
(194, 'SMPLB PUTRA MANDIRI TARIK', '', '', '', '', '2019-12-13', 1),
(195, 'SMP NEGERI 1 TARIK', '', '', '', '', '2019-12-13', 1),
(196, 'SMP NEGERI 2 TARIK', '', '', '', '', '2019-12-13', 1),
(197, 'MTS NEGERI TLASIH TULANGAN', '', '', '', '', '2019-12-13', 1),
(198, 'MTS DARUNNAJAH TULANGAN', '', '', '', '', '2019-12-13', 1),
(199, 'SMP DWI TUNGGAL TULANGAN', '', '', '', '', '2019-12-13', 1),
(200, 'SMP HARAPAN TULANGAN', '', '', '', '', '2019-12-13', 1),
(201, 'SMP HASYIM ASY`ARI TULANGAN', '', '', '', '', '2019-12-13', 1),
(202, 'SMP MUHAMMADIYAH 5 TULANGAN', '', '', '', '', '2019-12-13', 1),
(203, 'SMP NURUL HUDA TULANGAN', '', '', '', '', '2019-12-13', 1),
(204, 'SMP PUTRA DELTA TULANGAN', '', '', '', '', '2019-12-13', 1),
(205, 'SMPLB AISIYAH TULANGAN', '', '', '', '', '2019-12-13', 1),
(206, 'SMP NEGERI 1 TULANGAN', '', '', '', '', '2019-12-13', 1),
(207, 'MTS BANU HASYIM WARU', '', '', '', '', '2019-12-13', 1),
(208, 'MTS DARUL ULUM', '', '', '', '', '2019-12-13', 1),
(209, 'MTS FADLLILLAH WARU', '', '', '', '', '2019-12-13', 1),
(210, 'MTS NU BERBEK WARU', '', '', '', '', '2019-12-13', 1),
(211, 'MTS TANADA WARU', '', '', '', '', '2019-12-13', 1),
(212, 'SMP AL MUSLIM WARU', '', '', '', '', '2019-12-13', 1),
(213, 'SMP AL-FALAH DELTASARI WARU', '', '', '', '', '2019-12-13', 1),
(214, 'SMP AL-FALAH TROPODO WARU', '', '', '', '', '2019-12-13', 1),
(215, 'SMP ARDITAMA WARU', '', '', '', '', '2019-12-13', 1),
(216, 'SMP BUANA WARU', '', '', '', '', '2019-12-13', 1),
(217, 'SMP DARUL ULUM WARU', '', '', '', '', '2019-12-13', 1),
(218, 'SMP DHARMA WANITA 8 WARU', '', '', '', '', '2019-12-13', 1),
(219, 'SMP ISLAM PARLAUNGAN WARU', '', '', '', '', '2019-12-13', 1),
(220, 'SMP KEMALA BHAYANGKARI WARU', '', '', '', '', '2019-12-13', 1),
(221, 'SMP MUHAMMADIYAH 3 WARU', '', '', '', '', '2019-12-13', 1),
(222, 'SMP PGRI 4 WARU', '', '', '', '', '2019-12-13', 1),
(223, 'SMP SANTO YUSUP WARU', '', '', '', '', '2019-12-13', 1),
(224, 'SMP WAHID HASYIM 8 WARU', '', '', '', '', '2019-12-13', 1),
(225, 'SMP ZAINUDDIN WARU', '', '', '', '', '2019-12-13', 1),
(226, 'SMPLB B-C AL-AZHAR WARU', '', '', '', '', '2019-12-13', 1),
(227, 'SMP NEGERI 1 WARU', '', '', '', '', '2019-12-13', 1),
(228, 'SMP NEGERI 2 WARU', '', '', '', '', '2019-12-13', 1),
(229, 'SMP NEGERI 3 WARU', '', '', '', '', '2019-12-13', 1),
(230, 'SMP NEGERI 4 WARU', '', '', '', '', '2019-12-13', 1),
(231, 'MTS YPM 1 WONOAYU', '', '', '', '', '2019-12-13', 1),
(232, 'SMP BAHRUL ULUM WONOAYU', '', '', '', '', '2019-12-13', 1),
(233, 'SMP DHARMA WANITA 17 WONOAYU', '', '', '', '', '2019-12-13', 1),
(234, 'SMP PANCA BHAKTI WONOAYU', '', '', '', '', '2019-12-13', 1),
(235, 'SMPLB VETERAN WONOAYU', '', '', '', '', '2019-12-13', 1),
(236, 'SMP NEGERI 1 WONOAYU', '', '', '', '', '2019-12-13', 1),
(237, 'SMP NEGERI 2 WONOAYU', '', '', '', '', '2019-12-13', 1),
(238, 'SMP Islam Terpadu At-Taqwa', 'Jawa Timur', 'Kota Surabaya', 'Lakarsantri', 'Bankingan', '2019-12-26', 2),
(239, 'SMP IT AtTaqwa', 'Jawa Timur', 'Surabaya', 'Lakarsantri', 'Bankingan', '2019-12-26', 0),
(240, 'SMP Muhammadiyah 17 Surabaya', 'Jawa Timur', 'Surabaya', 'Wiyung', 'Jajar Tunggal', '2020-01-02', 2),
(241, 'SMPN 1 SUKODONO', 'Jawa Timur', 'Sidoarjo', 'Sukodono', 'Anggaswangi', '2020-01-01', 0),
(242, 'smp muhammadiyah 17 surabaya', 'Jawa timur', 'surabaya', 'wiyung', 'Jajar tunggal', '2020-01-01', 0),
(243, 'SMP Negeri 3 Taman', 'Jawa timur', 'Sidoarjo', 'Taman', 'Sawunggaling', '2020-01-06', 0),
(244, 'Smp 3 taman', 'Jawa timur', 'Sidoarjo', 'Taman', 'Sawunggaling', '2020-01-04', 0),
(245, 'Smp 3 taman', 'Jawa timur', 'Sidoarjo', 'Taman', 'Sawunggaling', '2020-01-04', 0),
(246, 'SMP Negeri 2 Taman', 'Jawa Timur', 'Sidoarjo', 'Taman', 'Jemundo', '2020-01-06', 0),
(247, 'SMP Alam Al-Izzah', 'Jawa Timur', 'Sidoarjo', 'Krian', 'Kemasan', '2020-01-06', 0),
(248, 'SMP IT DARUL FIKRI', 'Jawa Timur', 'Sidoarjo', 'Sidoarjo', 'Sarirogo', '2020-02-01', 2),
(249, 'SMP Islam As- Sakinah', 'Jawa Timur', 'Sidoarjo', 'Sidoarjo', 'Suko', '2020-02-01', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`nopendaftaran`);

--
-- Indexes for table `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD PRIMARY KEY (`nopendaftaran`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `log_pendaftaran`
--
ALTER TABLE `log_pendaftaran`
  ADD PRIMARY KEY (`nopendaftaran`),
  ADD KEY `nopendaftaran` (`nopendaftaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`nopendaftaran`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nopendaftaran`);

--
-- Indexes for table `rekapnilai`
--
ALTER TABLE `rekapnilai`
  ADD PRIMARY KEY (`nopendaftaran`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
