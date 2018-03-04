-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 03:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualannew`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('dc004c3eb9ed787e8fc4e7e24ffca274', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36', 1513780149, 'a:7:{s:9:"user_data";s:0:"";s:2:"ID";s:5:"K-001";s:8:"USERNAME";s:5:"admin";s:4:"PASS";s:32:"21232f297a57a5a743894a0e4a801fc3";s:4:"NAME";s:4:"Arif";s:5:"LEVEL";s:5:"admin";s:12:"login_status";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `kd_barang` varchar(10) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(15) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_kirim` int(11) NOT NULL,
  `sisa_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`kd_barang`, `nm_barang`, `ukuran`, `quality`, `type`, `stok`, `harga`, `qty`, `total_kirim`, `sisa_kirim`) VALUES
('0001', 'Box Hadad Canada 76C648-023-BA', '46 x 24 x 17', 'K150/M125x4', 'A1-G', 4, 9500, 0, 30, 10),
('0002', 'Box GU 60227F047E', '34 x 56 x 76', 'K170/M125x4', 'B-L1', 471, 4500, 0, 0, 0),
('0003', 'Box GU 60227F047E', '46 x 24 x 17', 'K150/M125x4', 'A1-G', 2, 9500, 0, 0, 0),
('0004', 'Box GU 60227F047E', '34 x 56 x 76', 'K170/M125x4', 'B-L1', 878, 4500, 0, 0, 0),
('0005', 'Box CB Jaydu (MG15569)', '34 x 56 x 76', 'K150/M125x4', 'A1-G', 900, 9500, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `owner` varchar(30) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `nama`, `alamat`, `telp`, `email`, `website`, `owner`, `desc`) VALUES
(1, 'PT. Setya Utomo Karton', 'Demak', '08123456789', 'info@sukabox.com', 'sukabox.com', 'Teguh Sapto', 'Converting Corrugated Carton Box');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `kd_pegawai` varchar(5) NOT NULL DEFAULT '0',
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `level` enum('pegawai','admin') DEFAULT 'pegawai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`kd_pegawai`, `username`, `password`, `nama`, `level`) VALUES
('K-001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Arif', 'admin'),
('K-002', 'gilang', 'd85e336d61f5344395c42126fac239bc', 'User Pegawai', 'pegawai'),
('K-003', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ari', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `kd_pelanggan` varchar(8) NOT NULL,
  `nm_pelanggan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`kd_pelanggan`, `nm_pelanggan`, `alamat`, `email`) VALUES
('CFF', 'PT. COUNTRY FORM FURNITURE', 'Jl. Raya Semarang - Kendal KM 12 (KI Wijaya Kusuma) Randugarut, Tugu Semarang', '01.997.212.4-511.000'),
('CTN', 'PT. CARTINI LINGERIE INDONESIA', 'Dukuh Tegalsari RT.001 RW.004 Randusari Teras Boyolali - Jawa Tengah', '01.082.182.5-511.000'),
('DAF', 'PT. DIAN ADI FURNI', 'Jl. Raya Batealit KM 20 RT.004 RW.002 Batealit, Jepara - Jawa tengah', '01.863.993.0-516.000'),
('DWB', 'PT. DAIWABO GARMENT INDONESIA', 'Jl. Raya Comal - Pemalang KM 15 Ujung Gede Ampel Gading Kab, Pemalang - Jawa Tengah', '31.289.320.9-502.000'),
('GIS 1', 'PT. GLORY INDUSTRIAL SEMARANG', 'Jl. Soekarno - Hatta KM 9 Desa Secang RT.01 RW.01 Desa Samban - Bawen', '02.192.905.4.057.000'),
('GIS 2', 'PT. GLORY INDUSTRIAL SEMARANG', 'Jl. Coaster No.8 Kawasan Berikat Tanjung Emas Exsport Processing Zone Blok Semarang', '02.192.905.4.057.000'),
('GIS 3', 'PT. GLORY INDUSTRIAL SEMARANG', 'Jl. Coaster No.8 Kawasan Berikat Tanjung Emas Exsport Processing Zone Blok Semarang', '02.192.905.4.057.000'),
('GIS 4', 'PT. GLORY INDUSTRIAL SEMARANG', 'Jl. Coaster No.8 Kawasan Berikat Tanjung Emas Exsport Processing Zone Blok Semarang', '02.192.905.4.057.000'),
('GLD', 'PT. GLORY INDUSTRIAL SEMARANG', 'Jl. Raya Semarang Demak KM 18 Ds. Dukun Kec. Karang Tengah Kab. Demak', '02.192.905.4.057.000'),
('HPL', 'PT. HOP LUN INDONESIA', 'Dusun Kemasan RT.009 RW.005 Klepu - Pringapus Kabupaten Semarang - Jawa Tengah', '02.899.452.3-505.000'),
('KBK', 'PT. KOBEKS', 'Jl. Raya Ngabul - Batealit KM 4 Mindahan Batealit - Jepara', '01.864.104.3-052.000'),
('NYT', 'PT. NAYATI INDONESIA', 'Jl. Raya Terboyo No.19 Kawasan Terboyo Megah', '02.204.503.2-165.000'),
('PLA', 'PT. PLOSS INDONESIA', 'Jl. Semarang Kendal KM 12 Blok B.6-8 Randugarut Kawasan Berikat Rukti Mukti Bawana, Semarang', '02.026.714.2-052.000'),
('RCU', 'PT. RESTOMART CIPTA USAHA', 'Jl. Raya Terboyo No. 15 Terboyo Wetan Genuk - Semarang', '01.812.261.4-511.000'),
('RPJ', 'PT. RODEO PRIMA JAYA', 'Jl. Raya Kaligawe KM 7.7 Semarang', '01.287.910.2-518.000'),
('SB', 'CV. SABHA', 'Jl. Raya Rembang - Blora KM 12 DK Winong', '02.948.097.7-507.000'),
('SCE', 'PT. S.C. ENTERPRISE', 'Jl. Raya Petitenget No.7 A, Kerobokan Badung, Bali 80361', '02.152.228.9-904.000'),
('SKN', 'RINDHO WARTONO', 'Desa Gondosari Gebog - Kudus', '04.073.106.9-506.000'),
('SKU', 'PT. SAS KREASINDO UTAMA', 'Jl. Maribaya KM 10.5 RT.05 RW.01 Maribaya Kec. Kramat Kab. Tegal', '01.993.892.7-501.000'),
('SMT', 'PT. SMART TECHTEX', 'Jl. Raya Cirebon - Tegal KM 13.5 Blok Wage RT.003 RW.004 Kel. Rawaurip Kec. Pengenan', '31.585.887.8-426.000'),
('STL', 'PT. STARLIGHT GARMENT SEMARANG', 'Jl. Tegal Panas - Jimbran Dusun Secang Samban - Bawen Kab. Semarnag', '02.253.880.5-505-001'),
('TKI', 'PT. TOKAI KAGU INDONESIA', 'Kawasan Industri East Jakarta Plot Blok K No. 9', '01.084.729.1-057.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_detail`
--

CREATE TABLE `tbl_penjualan_detail` (
  `kode` int(11) NOT NULL,
  `kd_penjualan` varchar(8) NOT NULL,
  `kd_barang` varchar(10) NOT NULL,
  `nm_barang` varchar(255) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `kualitas` varchar(100) NOT NULL,
  `type` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `qty` int(10) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `kirim` int(11) NOT NULL,
  `sisa_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan_detail`
--

INSERT INTO `tbl_penjualan_detail` (`kode`, `kd_penjualan`, `kd_barang`, `nm_barang`, `ukuran`, `kualitas`, `type`, `harga`, `qty`, `subtotal`, `kirim`, `sisa_kirim`) VALUES
(1, '001', '0001', 'Box Hadad Canada 76C648-023-BA', '46 x 24 x 17', 'K150/M125x4', 'A1-G', 9500, 1, 9500, 0, 0),
(2, '001', '0002', 'Box GU 60227F047E', '34 x 56 x 76', 'K170/M125x4', 'B-L1', 4500, 12, 54000, 0, 0),
(3, '001', '0003', 'Box GU 60227F047E', '46 x 24 x 17', 'K150/M125x4', 'A1-G', 9500, 2, 19000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan_header`
--

CREATE TABLE `tbl_penjualan_header` (
  `kd_penjualan` varchar(8) NOT NULL,
  `kd_pelanggan` varchar(10) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `po` varchar(100) NOT NULL,
  `sj` varchar(100) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `nm_sales` varchar(50) NOT NULL,
  `kd_pegawai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan_header`
--

INSERT INTO `tbl_penjualan_header` (`kd_penjualan`, `kd_pelanggan`, `invoice`, `po`, `sj`, `total_harga`, `tanggal_penjualan`, `tanggal_kirim`, `nm_sales`, `kd_pegawai`) VALUES
('001', 'GIS 3', '', '12414124', '', 82500, '2017-12-19', '2017-12-27', 'eko', 'K-001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`kd_pegawai`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`kd_pelanggan`);

--
-- Indexes for table `tbl_penjualan_detail`
--
ALTER TABLE `tbl_penjualan_detail`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tbl_penjualan_header`
--
ALTER TABLE `tbl_penjualan_header`
  ADD PRIMARY KEY (`kd_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_penjualan_detail`
--
ALTER TABLE `tbl_penjualan_detail`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
