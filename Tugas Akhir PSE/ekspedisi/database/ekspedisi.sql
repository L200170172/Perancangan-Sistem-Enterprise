-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 05:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekspedisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akuntan`
--

CREATE TABLE `akuntan` (
  `total_masuk` int(45) NOT NULL,
  `total_keluar` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `no_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `berat_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `distribusi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`no_barang`, `nama_barang`, `berat_barang`, `harga`, `distribusi`) VALUES
('12', 'hg', 89, 1000, 'solo');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `nip` int(10) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `alamat_pegawai` varchar(100) NOT NULL,
  `telp_pegawai` int(15) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `absensi` varchar(10) NOT NULL,
  `gaji` int(20) NOT NULL,
  `paydate` varchar(20) NOT NULL,
  `potongan` varchar(20) NOT NULL,
  `bonus` varchar(20) NOT NULL,
  `ket_gaji` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`nip`, `nama_pegawai`, `alamat_pegawai`, `telp_pegawai`, `jabatan`, `absensi`, `gaji`, `paydate`, `potongan`, `bonus`, `ket_gaji`) VALUES
(13579, 'Hastyana', 'Tasikmadu', 898762324, 'Direktur', '29', 8000000, '2020-Januari-25', '1000000', 'bonus', '');

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `kode_barang` int(100) NOT NULL,
  `kurir` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `status_pengiriman` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `invoice` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`kode_barang`, `kurir`, `nama_barang`, `tanggal_kirim`, `status_pengiriman`, `alamat`, `invoice`, `lokasi`) VALUES
(111, 'wqwq', 'wqwq', '2020-06-18', 'Sedang di proses', 'wqwq', 'wqwq', 'gumpang'),
(123, 'faizal', 'Milo', '2020-06-18', 'tiba', 'gumpang', NULL, 'gumpang');

-- --------------------------------------------------------

--
-- Table structure for table `purchasing`
--

CREATE TABLE `purchasing` (
  `kode_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL,
  `harga_satuan` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `diskon` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasing`
--

INSERT INTO `purchasing` (`kode_barang`, `nama_barang`, `jenis_barang`, `harga_satuan`, `jumlah_beli`, `total`, `diskon`, `total_bayar`, `bayar`, `kembalian`) VALUES
(20, 'lux', 'sabun', 100000, 2, 200000, 20000, 180000, 200000, 20000),
(28, 'MILO', 'susu', 2000, 10, 20000, 2000, 18000, 20000, 2000),
(35, 'MILO', 'susu', 2000, 100, 200000, 20000, 180000, 200000, 20000),
(36, 'CLEAR', 'shampoo', 2000, 200, 400000, 40000, 360000, 400000, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_no` int(10) NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `alamat_pengiriman` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tanggal_pengiriman` varchar(20) CHARACTER SET latin1 NOT NULL,
  `status_pengiriman` varchar(10) CHARACTER SET latin1 NOT NULL,
  `invoice` varchar(20) CHARACTER SET latin1 NOT NULL,
  `no_resi` int(10) NOT NULL,
  `total_harga` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_no`, `nama`, `alamat_pengiriman`, `tanggal_pengiriman`, `status_pengiriman`, `invoice`, `no_resi`, `total_harga`) VALUES
(121, 'Fiko', 'cok', '10-10-2020', 'proses', 'INV/20201010/I', 12345, 'RP. 500.000');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `nip` int(20) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `telp_pegawai` int(20) NOT NULL,
  `no_barang` varchar(20) NOT NULL,
  `nama_berang` varchar(200) NOT NULL,
  `berat_barang` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`no_barang`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
