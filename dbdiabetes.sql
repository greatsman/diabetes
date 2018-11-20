-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2018 at 04:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdiabetes`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `aktivitas` varchar(25) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`aktivitas`, `nilai`) VALUES
('Berat', 4),
('Istirahat', 1),
('Ringan', 2),
('Sangat Berat', 5),
('Sedang', 3);

-- --------------------------------------------------------

--
-- Table structure for table `golongan1`
--

CREATE TABLE `golongan1` (
  `nama_makanan` varchar(225) NOT NULL,
  `nilai_urt` decimal(10,2) NOT NULL,
  `urt` varchar(225) NOT NULL,
  `nilai_berat` int(10) NOT NULL,
  `berat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan1`
--

INSERT INTO `golongan1` (`nama_makanan`, `nilai_urt`, `urt`, `nilai_berat`, `berat`) VALUES
('bihun', '0.50', 'gls', 50, 'g'),
('biskuit', '4.00', 'bh bsr', 40, 'g'),
('bubur beras', '2.00', 'gls', 400, 'g'),
('havermout', '5.50', 'sdm', 45, 'g'),
('kentang', '2.00', 'bj sdg', 210, 'g'),
('krakers', '5.00', 'bh bsr', 50, 'g'),
('makaroni', '0.50', 'gls', 50, 'g'),
('mi basah', '2.00', 'gls', 200, 'g'),
('mi kering', '1.00', 'gls', 50, 'g'),
('nasi', '0.75', 'gls', 100, 'g'),
('nasi tim', '1.00', 'gls', 200, 'g'),
('roti putih', '3.00', 'ptg sdg', 70, 'g'),
('singkong', '1.00', 'ptg', 120, 'g'),
('talas', '1.00', 'ptg', 125, 'g'),
('tepung beras', '8.00', 'sdm', 50, 'g'),
('tepung hunkwe', '10.00', 'sdm', 50, 'g'),
('tepung maizena', '10.00', 'sdm', 50, 'g'),
('tepung sagu', '8.00', 'sdm', 50, 'g'),
('tepung terigu', '5.00', 'sdm', 50, 'g'),
('ubi', '1.00', 'bj sdg', 135, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `golongan2`
--

CREATE TABLE `golongan2` (
  `nama_makanan` varchar(225) NOT NULL,
  `nilai_urt` int(10) NOT NULL,
  `urt` varchar(225) NOT NULL,
  `nilai_berat` decimal(10,1) NOT NULL,
  `berat` varchar(225) NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan2`
--

INSERT INTO `golongan2` (`nama_makanan`, `nilai_urt`, `urt`, `nilai_berat`, `berat`, `jenis`) VALUES
('ayam dengan kulit', 1, 'ptg sdg', '55.0', 'g', 'tinggi lemak'),
('ayam tanpa kulit', 1, 'ptg sdg', '40.0', 'g', 'rendah lemak'),
('babat', 1, 'ptg sdg', '40.0', 'g', 'rendah lemak'),
('bakso', 10, 'bj sdg', '170.0', 'g', 'lemak sedang'),
('bebek', 1, 'ptg sdg', '45.0', 'g', 'tinggi lemak'),
('corned beef', 2, 'sdm', '45.0', 'g', 'rendah tinggi'),
('daging babi', 1, 'ptg sdg', '50.0', 'g', 'tinggi lemak'),
('daging kambing', 1, 'ptg sdg', '40.0', 'g', 'lemak sedang'),
('daging kerbau', 1, 'ptg sdg', '35.0', 'g', 'rendah lemak'),
('daging sapi', 1, 'ptg sdg', '35.0', 'g', 'lemak sedang'),
('dideh sapi ', 1, 'ptg sdg', '35.0', 'g', 'rendah lemak'),
('hati ayam', 1, 'bh sdg', '30.0', 'g', 'lemak sedang'),
('hati sapi', 1, 'bh sdg', '35.0', 'g', 'lemak sedang'),
('ikan', 1, 'ptg sdg', '40.0', 'g', 'rendah lemak'),
('ikan asin', 1, 'ptg kcl', '15.0', 'g', 'rendah lemak'),
('kuning telur ayam', 4, 'btr', '45.0', 'g', 'tinggi lemak'),
('otak', 1, 'ptg bsr', '60.0', 'g', 'lemak sedang'),
('telur ayam', 1, 'btr', '55.0', 'g', 'lemak sedang'),
('telur bebek', 1, 'btr', '55.0', 'g', 'lemak sedang'),
('teri kering', 1, 'sdm', '15.0', 'g', 'rendah lemak'),
('udang segar', 5, 'ekor sdg', '35.0', 'g', 'rendah lemak'),
('usus sapi', 1, 'ptg bsr', '50.0', 'g', 'lemak sedang');

-- --------------------------------------------------------

--
-- Table structure for table `golongan3`
--

CREATE TABLE `golongan3` (
  `nama_makanan` varchar(225) NOT NULL,
  `nilai_urt` decimal(10,1) NOT NULL,
  `urt` varchar(225) NOT NULL,
  `nilai_berat` int(10) NOT NULL,
  `berat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan3`
--

INSERT INTO `golongan3` (`nama_makanan`, `nilai_urt`, `urt`, `nilai_berat`, `berat`) VALUES
('kacang hijau', '2.0', 'sdm', 20, 'g'),
('kacang kedelai', '2.0', 'sdm', 25, 'g'),
('kacang merah segar', '2.0', 'sdm', 20, 'g'),
('kacang tanah', '2.0', 'sdm', 15, 'g'),
('kacang tolo', '2.0', 'sdm', 20, 'g'),
('keju kacang tanah', '1.0', 'sdm', 15, 'g'),
('oncom', '2.0', 'ptg kcl', 40, 'g'),
('susu kedelai bubuk', '2.0', 'sdm', 25, 'g'),
('tahu', '1.0', 'bj bsr', 110, 'g'),
('tempe', '2.0', 'ptg sdg', 50, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `golongan4`
--

CREATE TABLE `golongan4` (
  `nama_makanan` varchar(225) NOT NULL,
  `nilai_urt` decimal(10,1) NOT NULL,
  `urt` varchar(225) NOT NULL,
  `nilai_berat` int(10) NOT NULL,
  `berat` varchar(225) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan4`
--

INSERT INTO `golongan4` (`nama_makanan`, `nilai_urt`, `urt`, `nilai_berat`, `berat`, `keterangan`) VALUES
('baligo', '1.0', 'gls', 100, 'g', ''),
('bayam', '1.0', 'gls', 100, 'g', ''),
('bayam merah', '1.0', 'gls', 100, 'g', ''),
('bit', '1.0', 'gls', 100, 'g', ''),
('brokoli', '1.0', 'gls', 100, 'g', ''),
('buncis', '1.0', 'gls', 100, 'g', ''),
('caisim', '1.0', 'gls', 100, 'g', ''),
('daun katuk', '1.0', 'gls', 100, 'g', ''),
('daun melinjo', '1.0', 'gls', 100, 'g', ''),
('daun pakis', '1.0', 'gls', 100, 'g', ''),
('daun pepaya', '1.0', 'gls', 100, 'g', ''),
('daun singkong', '1.0', 'gls', 100, 'g', ''),
('daun talas', '1.0', 'gls', 100, 'g', ''),
('daun wuluh', '1.0', 'gls', 100, 'g', ''),
('gambas', '1.0', 'gls', 100, 'g', ''),
('genjer', '1.0', 'gls', 100, 'g', ''),
('jagung muda', '1.0', 'gls', 100, 'g', ''),
('jantung pisang', '1.0', 'gls', 100, 'g', ''),
('kacang kapri', '1.0', 'gls', 100, 'g', ''),
('kacang panjang', '1.0', 'gls', 100, 'g', ''),
('kangkung', '1.0', 'gls', 100, 'g', ''),
('kapri muda', '1.0', 'gls', 100, 'g', ''),
('kecipir', '1.0', 'gls', 100, 'g', ''),
('kembang kol', '1.0', 'gls', 100, 'g', ''),
('ketimun', '1.0', 'gls', 100, 'g', ''),
('kluwih', '1.0', 'gls', 100, 'g', ''),
('kol', '1.0', 'gls', 100, 'g', ''),
('kucai', '1.0', 'gls', 100, 'g', ''),
('labu air', '1.0', 'gls', 100, 'g', ''),
('labu siam', '1.0', 'gls', 100, 'g', ''),
('labu wuluh', '1.0', 'gls', 100, 'g', ''),
('lobak', '1.0', 'gls', 100, 'g', ''),
('melinjo', '1.0', 'gls', 100, 'g', ''),
('nangka muda', '1.0', 'gls', 100, 'g', ''),
('pare', '1.0', 'gls', 100, 'g', ''),
('pepaya muda', '1.0', 'gls', 100, 'g', ''),
('rebung', '1.0', 'gls', 100, 'g', ''),
('sawi', '1.0', 'gls', 100, 'g', ''),
('slada', '1.0', 'gls', 100, 'g', ''),
('slada air', '1.0', 'gls', 100, 'g', ''),
('tauge kacang hijau', '1.0', 'gls', 100, 'g', ''),
('tauge kacang kedelai', '1.0', 'gls', 100, 'g', ''),
('terong', '1.0', 'gls', 100, 'g', ''),
('tomat', '1.0', 'gls', 100, 'g', ''),
('wortel', '1.0', 'gls', 100, 'g', '');

-- --------------------------------------------------------

--
-- Table structure for table `golongan5`
--

CREATE TABLE `golongan5` (
  `nama_makanan` varchar(225) NOT NULL,
  `nilai_urt` decimal(10,2) NOT NULL,
  `urt` varchar(225) NOT NULL,
  `nilai_berat` int(10) NOT NULL,
  `berat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan5`
--

INSERT INTO `golongan5` (`nama_makanan`, `nilai_urt`, `urt`, `nilai_berat`, `berat`) VALUES
('anggur', '20.00', 'bh sdg', 165, 'g'),
('apel', '1.00', 'bh', 85, 'g'),
('belimbing', '1.00', 'bh bsr', 140, 'g'),
('blewah', '1.00', 'ptg sdg', 70, 'g'),
('duku', '9.00', 'bh', 80, 'g'),
('durian', '2.00', 'bj bsr', 35, 'g'),
('gula pasir', '1.00', 'sdm', 13, 'g'),
('jambu air', '2.00', 'bh bsr', 110, 'g'),
('jambu biji', '1.00', 'bh bsr', 100, 'g'),
('jambu bol', '1.00', 'bh kcl', 90, 'g'),
('jeruk manis', '2.00', 'bh', 110, 'g'),
('kedondong', '2.00', 'bh sdg', 120, 'g'),
('kemang', '1.00', 'bh bsr', 105, 'g'),
('kolang kaling', '5.00', 'bh sdg', 25, 'g'),
('kurma', '3.00', 'bh', 15, 'g'),
('lecbee', '10.00', 'bh', 75, 'g'),
('madu', '1.00', 'sdm', 15, 'g'),
('mangga', '0.75', 'bh bsr', 90, 'g'),
('melon', '1.00', 'ptg bsr', 190, 'g'),
('nanas', '0.25', 'bh sdg', 65, 'g'),
('nangka masak', '3.00', 'bj sdg', 45, 'g'),
('peach', '1.00', 'bh kcl', 115, 'g'),
('pepaya', '1.00', 'ptg bsr', 110, 'g'),
('pisang', '1.00', 'bh', 50, 'g'),
('rambutan', '8.00', 'bh', 75, 'g'),
('salak', '2.00', 'bh sdg', 65, 'g'),
('sawo', '1.00', 'bh sdg', 55, 'g'),
('semangka', '1.00', 'ptg bsr', 180, 'g'),
('sirsak', '0.50', 'gls', 60, 'g');

-- --------------------------------------------------------

--
-- Table structure for table `golongan6`
--

CREATE TABLE `golongan6` (
  `nama_makanan` varchar(225) NOT NULL,
  `nilai_urt` decimal(10,2) NOT NULL,
  `urt` varchar(225) NOT NULL,
  `nilai_berat` int(10) NOT NULL,
  `berat` varchar(225) NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan6`
--

INSERT INTO `golongan6` (`nama_makanan`, `nilai_urt`, `urt`, `nilai_berat`, `berat`, `jenis`) VALUES
('keju', '1.00', 'ptg kcl', 35, 'g', 'rendah lemak'),
('susu kambing', '0.80', 'gls', 165, 'g', 'rendah lemak'),
('susu kental tak manis', '0.50', 'gls', 100, 'g', 'rendah lemak'),
('susu kerbau', '0.50', 'gls', 100, 'g', 'tinggi lemak'),
('susu penuh bubuk', '6.00', 'sdm', 30, 'g', 'tinggi lemak'),
('susu sapi', '1.00', 'gls', 200, 'g', 'rendah lemak'),
('susu skim bubuk', '4.00', 'sdm', 20, 'g', 'tanpa lemak'),
('susu skim cair', '1.00', 'gls', 200, 'g', 'tanpa lemak'),
('yogurt non fat', '0.75', 'gls', 120, 'g', 'tanpa lemak'),
('yogurt susu penuh', '1.00', 'gls', 200, 'g', 'rendah lemak');

-- --------------------------------------------------------

--
-- Table structure for table `golongan7`
--

CREATE TABLE `golongan7` (
  `nama_makanan` varchar(225) NOT NULL,
  `nilai_urt` decimal(10,1) NOT NULL,
  `urt` varchar(225) NOT NULL,
  `nilai_berat` int(10) NOT NULL,
  `berat` varchar(225) NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan7`
--

INSERT INTO `golongan7` (`nama_makanan`, `nilai_urt`, `urt`, `nilai_berat`, `berat`, `jenis`) VALUES
('avokad', '0.5', 'bh bsr', 60, 'g', 'tidak jenuh'),
('kacang almon', '7.0', 'bh', 10, 'g', 'tidak jenuh'),
('kelapa', '1.0', 'ptg kcl', 15, 'g', 'jenuh'),
('kelapa parut', '2.5', 'sdm', 15, 'g', 'jenuh'),
('lemak babi/sapi', '1.0', 'ptg kcl', 5, 'g', 'jenuh'),
('margarin jagung', '1.0', 'sdt', 5, 'g', 'tidak jenuh'),
('mentega', '1.0', 'sdt', 5, 'g', 'jenuh'),
('minyak bunga matahari', '1.0', 'sdt', 5, 'g', 'tidak jenuh'),
('minyak inti kelapa sawit', '1.0', 'sdt', 5, 'g', 'jenuh'),
('minyak jagung', '1.0', 'sdt', 5, 'g', 'tidak jenuh'),
('minyak kedelai', '1.0', 'sdt', 5, 'g', 'tidak jenuh'),
('minyak kelapa', '1.0', 'sdt', 5, 'g', 'jenuh'),
('santan', '0.3', 'gls', 40, 'g', 'jenuh');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(10) NOT NULL,
  `nama_menu` varchar(25) NOT NULL,
  `p1` varchar(25) NOT NULL,
  `p1_nilai` decimal(10,2) NOT NULL,
  `p1_berat` int(10) NOT NULL,
  `p2` varchar(25) NOT NULL,
  `p2_nilai` decimal(10,2) NOT NULL,
  `p2_berat` int(10) NOT NULL,
  `p3` varchar(25) NOT NULL,
  `p3_nilai` decimal(10,2) NOT NULL,
  `p3_berat` int(10) NOT NULL,
  `p4` varchar(25) NOT NULL,
  `p4_nilai` decimal(10,2) NOT NULL,
  `p4_berat` int(10) NOT NULL,
  `p5` varchar(25) NOT NULL,
  `p5_nilai` decimal(10,2) NOT NULL,
  `p5_berat` int(10) NOT NULL,
  `p101` varchar(25) NOT NULL,
  `p101_nilai` decimal(10,2) NOT NULL,
  `p101_berat` int(10) NOT NULL,
  `p102` varchar(25) NOT NULL,
  `p102_nilai` decimal(10,2) NOT NULL,
  `p102_berat` int(10) NOT NULL,
  `p103` varchar(25) NOT NULL,
  `p103_nilai` decimal(10,2) NOT NULL,
  `p103_berat` int(10) NOT NULL,
  `p104` varchar(25) NOT NULL,
  `p104_nilai` decimal(10,2) NOT NULL,
  `p104_berat` int(10) NOT NULL,
  `s1` varchar(25) NOT NULL,
  `s1_nilai` decimal(10,2) NOT NULL,
  `s1_berat` int(10) NOT NULL,
  `s2` varchar(25) NOT NULL,
  `s2_nilai` decimal(10,2) NOT NULL,
  `s2_berat` int(10) NOT NULL,
  `s3` varchar(25) NOT NULL,
  `s3_nilai` decimal(10,2) NOT NULL,
  `s3_berat` int(10) NOT NULL,
  `s4` varchar(25) NOT NULL,
  `s4_nilai` decimal(10,2) NOT NULL,
  `s4_berat` int(10) NOT NULL,
  `s5` varchar(25) NOT NULL,
  `s5_nilai` decimal(10,2) NOT NULL,
  `s5_berat` int(10) NOT NULL,
  `p161` varchar(25) NOT NULL,
  `p161_nilai` decimal(10,2) NOT NULL,
  `p161_berat` int(10) NOT NULL,
  `p162` varchar(25) NOT NULL,
  `p162_nilai` decimal(10,2) NOT NULL,
  `p162_berat` int(10) NOT NULL,
  `p163` varchar(25) NOT NULL,
  `p163_nilai` decimal(10,2) NOT NULL,
  `p163_berat` int(10) NOT NULL,
  `p164` varchar(25) NOT NULL,
  `p164_nilai` decimal(10,2) NOT NULL,
  `p164_berat` int(10) NOT NULL,
  `p165` varchar(25) NOT NULL,
  `p165_nilai` decimal(10,2) NOT NULL,
  `p165_berat` int(10) NOT NULL,
  `m1` varchar(25) NOT NULL,
  `m1_nilai` decimal(10,2) NOT NULL,
  `m1_berat` int(10) NOT NULL,
  `m2` varchar(25) NOT NULL,
  `m2_nilai` decimal(10,2) NOT NULL,
  `m2_berat` int(10) NOT NULL,
  `m3` varchar(25) NOT NULL,
  `m3_nilai` decimal(10,2) NOT NULL,
  `m3_berat` int(10) NOT NULL,
  `m4` varchar(25) NOT NULL,
  `m4_nilai` decimal(10,2) NOT NULL,
  `m4_berat` int(10) NOT NULL,
  `m5` varchar(25) NOT NULL,
  `m5_nilai` decimal(10,2) NOT NULL,
  `m5_berat` int(10) NOT NULL,
  `m6` varchar(25) NOT NULL,
  `m6_nilai` decimal(10,2) NOT NULL,
  `m6_berat` int(10) NOT NULL,
  `pengguna` int(25) NOT NULL,
  `catatan` varchar(30) DEFAULT NULL,
  `tanggal_buat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `p1`, `p1_nilai`, `p1_berat`, `p2`, `p2_nilai`, `p2_berat`, `p3`, `p3_nilai`, `p3_berat`, `p4`, `p4_nilai`, `p4_berat`, `p5`, `p5_nilai`, `p5_berat`, `p101`, `p101_nilai`, `p101_berat`, `p102`, `p102_nilai`, `p102_berat`, `p103`, `p103_nilai`, `p103_berat`, `p104`, `p104_nilai`, `p104_berat`, `s1`, `s1_nilai`, `s1_berat`, `s2`, `s2_nilai`, `s2_berat`, `s3`, `s3_nilai`, `s3_berat`, `s4`, `s4_nilai`, `s4_berat`, `s5`, `s5_nilai`, `s5_berat`, `p161`, `p161_nilai`, `p161_berat`, `p162`, `p162_nilai`, `p162_berat`, `p163`, `p163_nilai`, `p163_berat`, `p164`, `p164_nilai`, `p164_berat`, `p165`, `p165_nilai`, `p165_berat`, `m1`, `m1_nilai`, `m1_berat`, `m2`, `m2_nilai`, `m2_berat`, `m3`, `m3_nilai`, `m3_berat`, `m4`, `m4_nilai`, `m4_berat`, `m5`, `m5_nilai`, `m5_berat`, `m6`, `m6_nilai`, `m6_berat`, `pengguna`, `catatan`, `tanggal_buat`) VALUES
(1, 'Ahmad Fathoni', 'bihun', '0.50', 50, 'ayam dengan kulit', '0.50', 28, 'baligo', '0.50', 50, 'avokad', '1.00', 120, 'keju', '0.00', 0, 'anggur', '40.00', 330, 'anggur', '20.00', 165, 'bihun', '1.00', 100, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'anggur', '40.00', 330, 'anggur', '40.00', 330, 'bihun', '0.00', 0, 'bihun', '0.50', 50, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'keju', '0.00', 0, 13, '1234', '2018-06-20'),
(2, 'Ahmad Fathoni', 'bihun', '0.50', 50, 'ayam dengan kulit', '0.50', 28, 'baligo', '0.50', 50, 'avokad', '1.00', 120, 'keju', '0.00', 0, 'anggur', '40.00', 330, 'anggur', '20.00', 165, 'bihun', '0.50', 50, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'anggur', '40.00', 330, 'anggur', '40.00', 330, 'bihun', '0.00', 0, 'bihun', '0.50', 50, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'keju', '0.00', 0, 23, '', '2018-07-12'),
(3, 'Ahmad Fathoni', 'bihun', '0.50', 50, 'ayam dengan kulit', '0.50', 28, 'baligo', '0.50', 50, 'avokad', '0.50', 60, 'keju', '0.00', 0, 'anggur', '40.00', 330, 'anggur', '20.00', 165, 'bihun', '0.25', 25, 'avokad', '0.00', 0, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'anggur', '40.00', 330, 'anggur', '40.00', 330, 'bihun', '0.25', 25, 'bihun', '0.00', 0, 'avokad', '0.00', 0, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'keju', '0.00', 0, 25, '', '2018-07-12'),
(4, 'Diet hari ini', 'havermout', '5.50', 45, 'babat', '0.50', 20, 'bit', '0.50', 50, 'avokad', '1.00', 120, 'keju', '0.00', 0, 'belimbing', '2.00', 280, 'anggur', '20.00', 165, 'kentang', '2.00', 210, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'anggur', '40.00', 330, 'anggur', '40.00', 330, 'bihun', '0.00', 0, 'bihun', '0.50', 50, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'keju', '0.00', 0, 28, 'menu ku', '2018-07-13'),
(5, 'Ahmad Fathoni', 'bihun', '0.50', 50, 'ayam tanpa kulit', '0.50', 20, 'baligo', '0.50', 50, 'avokad', '1.00', 120, 'keju', '0.00', 0, 'anggur', '40.00', 330, 'anggur', '20.00', 165, 'bihun', '0.50', 50, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'anggur', '40.00', 330, 'anggur', '40.00', 330, 'bihun', '0.00', 0, 'bihun', '0.50', 50, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'keju', '0.00', 0, 36, '', '2018-07-18'),
(6, '', 'biskuit', '4.00', 40, 'ayam dengan kulit', '0.50', 28, 'baligo', '0.50', 50, 'avokad', '1.00', 120, 'keju', '0.00', 0, 'anggur', '40.00', 330, 'anggur', '20.00', 165, 'bihun', '1.00', 100, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'anggur', '40.00', 330, 'anggur', '40.00', 330, 'bihun', '0.00', 0, 'bihun', '0.50', 50, 'avokad', '0.50', 60, 'bihun', '0.50', 50, 'ayam dengan kulit', '1.00', 55, 'baligo', '0.50', 50, 'anggur', '40.00', 330, 'avokad', '1.00', 120, 'keju', '0.00', 0, 37, '', '2018-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(25) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `berat` int(3) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `umur` int(3) NOT NULL,
  `nilai_aktivitas` int(1) NOT NULL,
  `k_aktivitas` decimal(10,1) NOT NULL,
  `k_umur` decimal(10,1) NOT NULL,
  `k_tubuh` decimal(10,1) NOT NULL,
  `BBI` decimal(10,1) NOT NULL,
  `BMR` decimal(10,1) NOT NULL,
  `energi` decimal(10,1) NOT NULL,
  `protein` decimal(10,1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `tinggi`, `berat`, `jenis`, `umur`, `nilai_aktivitas`, `k_aktivitas`, `k_umur`, `k_tubuh`, `BBI`, `BMR`, `energi`, `protein`, `email`, `password`) VALUES
(13, 'Ahmad Fathoni', 145, 76, 'Laki-laki', 27, 2, '270.0', '0.0', '-270.0', '45.0', '1350.0', '1350.0', '60.8', 'ahmad.fathoni63@gmail.com', '12345'),
(23, 'Ahmad Fathoni', 170, 70, 'Laki-laki', 28, 3, '567.0', '0.0', '-378.0', '63.0', '1890.0', '2079.0', '56.0', 'ahmad.fathoni77@gmail.com', '12345'),
(24, 'Ahmad Fathoni', 170, 75, 'Perempuan', 23, 1, '126.0', '0.0', '-252.0', '63.0', '1260.0', '1134.0', '60.0', 'ahmad.fathoni995@gmail.com', '12345'),
(25, 'Ahmad Fathoni', 145, 56, 'Laki-laki', 45, 5, '675.0', '67.5', '-270.0', '45.0', '1350.0', '1687.5', '44.8', 'ahmad66@gmail.com', '12345'),
(26, 'Ahmad Fathoni', 176, 65, 'Laki-laki', 22, 3, '615.6', '0.0', '0.0', '68.4', '2052.0', '2667.6', '52.0', 'ahmad.fathoni0@gmail.com', '12345'),
(27, 'Ahmad Fathoni', 175, 65, 'Laki-laki', 24, 5, '1012.5', '0.0', '0.0', '67.5', '2025.0', '3037.5', '52.0', 'doni@ums.ac.id', '12345'),
(28, 'Ahmad', 176, 77, 'Laki-laki', 29, 2, '410.4', '0.0', '-410.4', '68.4', '2052.0', '2052.0', '61.6', 'ahmad.fathoni3@gmail.com', '12345'),
(29, 'Mifta Putri', 165, 60, 'Perempuan', 22, 3, '351.0', '0.0', '0.0', '58.5', '1170.0', '1521.0', '48.0', 'mifta@gmail.com', '12345'),
(30, 'Ahmad Fathoni', 175, 65, 'Laki-laki', 23, 3, '607.5', '0.0', '0.0', '67.5', '2025.0', '2632.5', '52.0', 'ahmad.fathoni@gmail.com', '12345'),
(31, 'Lisa Yuliani', 164, 61, 'Perempuan', 27, 4, '460.8', '0.0', '0.0', '57.6', '1152.0', '1612.8', '48.8', 'lisayuliani@gmail.com', '12345'),
(32, 'Andiyan', 178, 60, 'Laki-laki', 23, 3, '631.8', '0.0', '0.0', '70.2', '2106.0', '2737.8', '48.0', 'andya@gmail.com', '12345'),
(33, 'Yahmi', 155, 50, 'Perempuan', 55, 5, '495.0', '49.5', '0.0', '49.5', '990.0', '1435.5', '40.0', 'yahmi@gmail.com', '12345'),
(34, 'Khudlori', 165, 55, 'Laki-laki', 62, 5, '877.5', '175.5', '0.0', '58.5', '1755.0', '2457.0', '44.0', 'khudlori@gmail.com', '12345'),
(35, 'IMAM MUSTAQIM', 170, 65, 'Laki-laki', 35, 4, '756.0', '0.0', '0.0', '63.0', '1890.0', '2646.0', '52.0', 'imammustaqim@gmail.com', '12345'),
(36, 'dimas', 175, 80, 'Laki-laki', 23, 2, '405.0', '0.0', '-405.0', '67.5', '2025.0', '2025.0', '64.0', 'dimas_maldini@yahoo.com', 'yulianaasmi'),
(37, 'Ferdi', 160, 49, 'Laki-laki', 23, 3, '540.0', '0.0', '0.0', '60.0', '1800.0', '2340.0', '39.2', 'ferdi.blog1505@gmail.com', 'ferdiyan');

-- --------------------------------------------------------

--
-- Table structure for table `protein30`
--

CREATE TABLE `protein30` (
  `kalori` int(4) NOT NULL,
  `p1` decimal(10,1) NOT NULL,
  `p2` decimal(10,1) NOT NULL,
  `p3` decimal(10,1) NOT NULL,
  `p4` decimal(10,1) NOT NULL,
  `p5` decimal(10,1) NOT NULL,
  `p101` decimal(10,1) NOT NULL,
  `p102` decimal(10,1) NOT NULL,
  `p103` decimal(10,1) NOT NULL,
  `p104` decimal(10,1) NOT NULL,
  `s1` decimal(10,1) NOT NULL,
  `s2` decimal(10,1) NOT NULL,
  `s3` decimal(10,1) NOT NULL,
  `s4` decimal(10,1) NOT NULL,
  `s5` decimal(10,1) NOT NULL,
  `p161` decimal(10,1) NOT NULL,
  `p162` decimal(10,1) NOT NULL,
  `p163` decimal(10,1) NOT NULL,
  `p164` decimal(10,1) NOT NULL,
  `p165` decimal(10,1) NOT NULL,
  `m1` decimal(10,1) NOT NULL,
  `m2` decimal(10,1) NOT NULL,
  `m3` decimal(10,1) NOT NULL,
  `m4` decimal(10,1) NOT NULL,
  `m5` decimal(10,1) NOT NULL,
  `m6` decimal(10,1) NOT NULL,
  `energi` int(5) NOT NULL,
  `protein` int(5) NOT NULL,
  `lemak` int(5) NOT NULL,
  `karbohidrat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `protein30`
--

INSERT INTO `protein30` (`kalori`, `p1`, `p2`, `p3`, `p4`, `p5`, `p101`, `p102`, `p103`, `p104`, `s1`, `s2`, `s3`, `s4`, `s5`, `p161`, `p162`, `p163`, `p164`, `p165`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `energi`, `protein`, `lemak`, `karbohidrat`) VALUES
(1100, '1.0', '0.5', '0.5', '1.0', '0.0', '1.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '1.0', '1.0', '1.0', '0.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '1.0', '1.0', '0.0', 1075, 31, 25, 176),
(1300, '1.0', '0.5', '0.5', '1.0', '0.0', '1.0', '1.0', '0.0', '0.0', '1.0', '1.0', '0.5', '2.0', '1.0', '2.0', '1.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '1.0', '1.0', '0.0', 1275, 31, 25, 224),
(1500, '1.0', '0.5', '0.5', '1.0', '0.0', '1.0', '1.0', '0.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '1.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 1475, 31, 35, 248),
(1700, '1.0', '0.5', '0.5', '1.0', '0.0', '2.0', '1.0', '0.5', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.5', '0.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 1700, 31, 35, 320),
(1900, '1.0', '0.5', '0.5', '2.0', '0.0', '2.0', '1.0', '1.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.0', '0.5', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 1887, 31, 45, 320),
(2100, '1.0', '0.5', '0.5', '2.0', '0.0', '2.0', '1.0', '1.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.0', '1.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 2075, 31, 50, 340),
(2300, '1.0', '0.5', '0.5', '2.0', '0.0', '2.0', '1.0', '2.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.0', '1.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 2250, 31, 50, 392),
(2500, '1.0', '0.5', '0.5', '2.0', '0.0', '2.0', '1.0', '2.0', '1.0', '1.0', '1.0', '0.5', '2.0', '3.0', '2.0', '2.0', '0.0', '2.0', '2.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 2475, 31, 55, 432);

-- --------------------------------------------------------

--
-- Table structure for table `protein40`
--

CREATE TABLE `protein40` (
  `kalori` int(4) NOT NULL,
  `p1` decimal(10,1) NOT NULL,
  `p2` decimal(10,1) NOT NULL,
  `p3` decimal(10,1) NOT NULL,
  `p4` decimal(10,1) NOT NULL,
  `p5` decimal(10,1) NOT NULL,
  `p101` decimal(10,1) NOT NULL,
  `p102` decimal(10,1) NOT NULL,
  `p103` decimal(10,1) NOT NULL,
  `p104` decimal(10,1) NOT NULL,
  `s1` decimal(10,1) NOT NULL,
  `s2` decimal(10,1) NOT NULL,
  `s3` decimal(10,1) NOT NULL,
  `s4` decimal(10,1) NOT NULL,
  `s5` decimal(10,1) NOT NULL,
  `p161` decimal(10,1) NOT NULL,
  `p162` decimal(10,1) NOT NULL,
  `p163` decimal(10,1) NOT NULL,
  `p164` decimal(10,1) NOT NULL,
  `p165` decimal(10,1) NOT NULL,
  `m1` decimal(10,1) NOT NULL,
  `m2` decimal(10,1) NOT NULL,
  `m3` decimal(10,1) NOT NULL,
  `m4` decimal(10,1) NOT NULL,
  `m5` decimal(10,1) NOT NULL,
  `m6` decimal(10,1) NOT NULL,
  `energi` int(5) NOT NULL,
  `protein` int(5) NOT NULL,
  `lemak` int(5) NOT NULL,
  `karbohidrat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `protein40`
--

INSERT INTO `protein40` (`kalori`, `p1`, `p2`, `p3`, `p4`, `p5`, `p101`, `p102`, `p103`, `p104`, `s1`, `s2`, `s3`, `s4`, `s5`, `p161`, `p162`, `p163`, `p164`, `p165`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `energi`, `protein`, `lemak`, `karbohidrat`) VALUES
(1100, '1.0', '0.5', '0.5', '0.0', '1.0', '0.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '1.0', '1.0', '1.0', '0.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '0.0', '1.0', '0.0', 1100, 42, 28, 162),
(1300, '1.0', '0.5', '0.5', '1.0', '1.0', '1.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '1.0', '1.0', '1.0', '0.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '1.0', '1.0', '0.0', 1300, 42, 33, 186),
(1500, '1.0', '0.5', '0.5', '1.0', '1.0', '1.0', '1.0', '0.0', '0.0', '1.0', '1.0', '0.5', '1.0', '1.0', '2.0', '1.0', '0.0', '0.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 1500, 42, 43, 222),
(1700, '1.0', '0.5', '0.5', '1.0', '1.0', '2.0', '1.0', '0.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.5', '0.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 1738, 42, 43, 266),
(1900, '1.0', '0.5', '0.5', '2.0', '1.0', '2.0', '2.0', '0.5', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.0', '0.5', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 1925, 42, 53, 298),
(2100, '1.0', '0.5', '0.5', '2.0', '1.0', '2.0', '2.0', '0.5', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.0', '0.5', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 2100, 42, 58, 298),
(2300, '1.0', '0.5', '0.5', '2.0', '1.0', '2.0', '2.0', '1.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '2.0', '2.0', '0.0', '1.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 2288, 42, 58, 338),
(2500, '1.0', '0.5', '0.5', '2.0', '1.0', '2.0', '2.0', '2.0', '1.0', '1.0', '1.0', '0.5', '2.0', '3.0', '2.0', '2.0', '0.0', '1.0', '2.0', '1.0', '1.0', '0.5', '2.0', '2.0', '0.0', 2513, 42, 68, 378);

-- --------------------------------------------------------

--
-- Table structure for table `protein50`
--

CREATE TABLE `protein50` (
  `kalori` int(4) NOT NULL,
  `p1` decimal(10,1) NOT NULL,
  `p2` decimal(10,1) NOT NULL,
  `p3` decimal(10,1) NOT NULL,
  `p4` decimal(10,1) NOT NULL,
  `p5` decimal(10,1) NOT NULL,
  `p101` decimal(10,1) NOT NULL,
  `p102` decimal(10,1) NOT NULL,
  `p103` decimal(10,1) NOT NULL,
  `p104` decimal(10,1) NOT NULL,
  `s1` decimal(10,1) NOT NULL,
  `s2` decimal(10,1) NOT NULL,
  `s3` decimal(10,1) NOT NULL,
  `s4` decimal(10,1) NOT NULL,
  `s5` decimal(10,1) NOT NULL,
  `p161` decimal(10,1) NOT NULL,
  `p162` decimal(10,1) NOT NULL,
  `p163` decimal(10,1) NOT NULL,
  `p164` decimal(10,1) NOT NULL,
  `p165` decimal(10,1) NOT NULL,
  `m1` decimal(10,1) NOT NULL,
  `m2` decimal(10,1) NOT NULL,
  `m3` decimal(10,1) NOT NULL,
  `m4` decimal(10,1) NOT NULL,
  `m5` decimal(10,1) NOT NULL,
  `m6` decimal(10,1) NOT NULL,
  `energi` int(5) NOT NULL,
  `protein` int(5) NOT NULL,
  `lemak` int(5) NOT NULL,
  `karbohidrat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `protein50`
--

INSERT INTO `protein50` (`kalori`, `p1`, `p2`, `p3`, `p4`, `p5`, `p101`, `p102`, `p103`, `p104`, `s1`, `s2`, `s3`, `s4`, `s5`, `p161`, `p162`, `p163`, `p164`, `p165`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `energi`, `protein`, `lemak`, `karbohidrat`) VALUES
(2100, '1.0', '0.5', '0.5', '2.0', '1.0', '2.0', '2.0', '1.0', '0.0', '1.0', '1.0', '0.5', '2.0', '2.0', '1.0', '2.0', '0.0', '0.5', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '1.0', 2075, 50, 31, 440),
(2300, '1.0', '0.5', '0.5', '2.0', '1.0', '2.0', '2.0', '1.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '1.0', '2.0', '0.0', '1.0', '1.0', '1.0', '1.0', '0.5', '2.0', '2.0', '1.0', 2250, 50, 31, 392),
(2500, '1.0', '0.5', '0.5', '2.0', '1.0', '2.0', '2.0', '1.0', '2.0', '1.0', '1.0', '0.5', '2.0', '2.0', '1.0', '2.0', '0.5', '2.0', '2.0', '1.0', '1.0', '0.5', '2.0', '2.0', '1.0', 24475, 55, 33, 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`aktivitas`);

--
-- Indexes for table `golongan1`
--
ALTER TABLE `golongan1`
  ADD PRIMARY KEY (`nama_makanan`);

--
-- Indexes for table `golongan2`
--
ALTER TABLE `golongan2`
  ADD PRIMARY KEY (`nama_makanan`);

--
-- Indexes for table `golongan3`
--
ALTER TABLE `golongan3`
  ADD PRIMARY KEY (`nama_makanan`);

--
-- Indexes for table `golongan4`
--
ALTER TABLE `golongan4`
  ADD PRIMARY KEY (`nama_makanan`);

--
-- Indexes for table `golongan5`
--
ALTER TABLE `golongan5`
  ADD PRIMARY KEY (`nama_makanan`);

--
-- Indexes for table `golongan6`
--
ALTER TABLE `golongan6`
  ADD PRIMARY KEY (`nama_makanan`);

--
-- Indexes for table `golongan7`
--
ALTER TABLE `golongan7`
  ADD PRIMARY KEY (`nama_makanan`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `pengguna` (`pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `protein30`
--
ALTER TABLE `protein30`
  ADD PRIMARY KEY (`kalori`);

--
-- Indexes for table `protein40`
--
ALTER TABLE `protein40`
  ADD PRIMARY KEY (`kalori`);

--
-- Indexes for table `protein50`
--
ALTER TABLE `protein50`
  ADD PRIMARY KEY (`kalori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
