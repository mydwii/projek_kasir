-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 04:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `categori`
--

CREATE TABLE `categori` (
  `id_categori` int(11) NOT NULL,
  `categori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categori`
--

INSERT INTO `categori` (`id_categori`, `categori`) VALUES
(1, 'makanan'),
(3, 'Fashion'),
(4, 'obat-obatan'),
(5, 'bahan dapur'),
(6, 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_detail_penjualan` int(11) NOT NULL,
  `kode_penjualan` varchar(40) NOT NULL,
  `id_produk` varchar(40) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_detail_penjualan`, `kode_penjualan`, `id_produk`, `jumlah`, `sub_total`, `id_user`) VALUES
(15, '2402052', '1', 1, '89990', 0),
(16, '2402052', '6', 1, '30000', 0),
(17, '2402053', '1', 1, '89990', 0),
(18, '2402074', '1', 1, '89990', 0),
(19, '2402074', '4', 2, '40000', 0),
(20, '2402095', '1', 2, '179980', 0),
(21, '2402093', '1', 10, '899900', 0),
(22, '2402274', '6', 23, '690000', 0),
(23, '2402274', '6', 2, '60000', 0),
(24, '2402275', '1', 2, '179980', 0),
(25, '2402275', '6', 2, '60000', 0),
(26, '2403061', '5', 5, '100000', 0),
(27, '2403061', '4', 2, '40000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id_item` int(11) NOT NULL,
  `kode_produk` varchar(40) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `stok` int(10) DEFAULT NULL,
  `id_unit` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_categori` int(11) NOT NULL,
  `images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id_item`, `kode_produk`, `nama`, `stok`, `id_unit`, `harga`, `id_categori`, `images`) VALUES
(1, '88889', 'Kopi Cup', 15, 2, 89990, 6, 'download_(7).jpeg'),
(4, 'A334', 'Sosis', 20, 3, 20000, 1, 'download_(1).jpeg'),
(5, 'A5444', 'Mie Goyeng Nyemek', 36, 2, 20000, 1, 'default1.jpg'),
(6, 'qyyiw', 'Paracetamol', 6, 3, 30000, 4, 'ARION___DANGEROUS_HUSBAND.jpeg'),
(7, '67875', 'kue lapis', 76, 1, 67000, 5, 'download_(8).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`) VALUES
(1, 'Fauzan Fadil Kurniawan', 'Karanglo, Tawangmangu, Karanganyar', '087698765678'),
(3, 'Bagas Mahardika Budiharto', 'Padangan, Jungke, Karanganyar', '084445672345'),
(5, 'Faliq Faza Asnawi', 'Pojok, Delingan, Karanganyar', '088798736473'),
(6, 'Bukan Pelanggan', 'Unknown', '0');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `kode_penjualan` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `total_harga` int(15) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `kode_penjualan`, `tanggal`, `total_harga`, `id_pelanggan`, `id_user`) VALUES
(1, '2402051', '2024-02-05', 209980, 5, 2),
(2, '2402052', '2024-01-17', 119990, 5, 1),
(3, '2402053', '2024-02-05', 89990, 1, 1),
(4, '2402074', '2023-11-22', 129990, 3, 1),
(5, '2402095', '2023-12-09', 179980, 1, 1),
(6, '2402093', '2024-02-09', 899900, 3, 1),
(7, '2402274', '2024-02-27', 60000, 3, 1),
(8, '2402275', '2024-02-27', 239980, 5, 1),
(9, '2403061', '2024-03-06', 140000, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id_stok` int(11) NOT NULL,
  `kode_produk` varchar(40) NOT NULL,
  `type` enum('in','out') NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_supplier` varchar(40) NOT NULL,
  `detail` varchar(120) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id_stok`, `kode_produk`, `type`, `jumlah`, `tanggal`, `kode_supplier`, `detail`, `id_user`) VALUES
(15, 'A5444', 'in', 5, '2024-01-30', '240117A', 'madang', 1),
(18, 'A334', 'out', 2, '2024-01-30', '240117A', 'rusak', 1),
(19, 'A334', 'in', 13, '2024-01-31', '240117A', 'kulakan', 1),
(20, 'A5444', 'out', 4, '2024-01-31', '', 'expired', 1),
(21, 'qyyiw', 'in', 6, '2024-01-31', '240117A', 'kulakan', 1),
(22, 'A5444', 'in', 1, '2024-02-07', '240117A', 'nambah stok', 1),
(23, '88889', 'in', 30, '2024-02-07', '240117A', 'nambah stok', 1),
(42, 'A334', 'in', 10, '2024-02-28', 'A33467', 'kulakan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suara_18`
--

CREATE TABLE `suara_18` (
  `id_suara_18` int(11) NOT NULL,
  `total_18` int(40) NOT NULL,
  `total_sah_18` int(40) NOT NULL,
  `total_tidaksah_18` int(40) NOT NULL,
  `no1_18` int(40) NOT NULL,
  `no2_18` int(40) NOT NULL,
  `no3_18` int(40) NOT NULL,
  `nama_tps_18` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suara_18`
--

INSERT INTO `suara_18` (`id_suara_18`, `total_18`, `total_sah_18`, `total_tidaksah_18`, `no1_18`, `no2_18`, `no3_18`, `nama_tps_18`) VALUES
(1, 100, 40, 70, 0, 0, 0, 'smkn 2 karanganyar'),
(2, 100, 70, 30, 20, 30, 20, 'smkn1'),
(3, 100, 80, 20, 25, 40, 15, 'pulerejo'),
(4, 90, 90, 0, 30, 30, 30, 'fghjklkjhg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `kode_supplier` varchar(40) NOT NULL,
  `telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama`, `kode_supplier`, `telp`) VALUES
(1, 'Toko Buah', '240117A', '087796853497'),
(3, 'Toko Roti', 'A33467', '0889745897678');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id_temp` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `unit`) VALUES
(1, 'buah'),
(2, 'lusin'),
(3, 'packs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `level` enum('Kasir','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(1, 'yoo', '827ccb0eea8a706c4c34a16891f84e7b', 'filip', 'Admin'),
(2, 'jeje', '827ccb0eea8a706c4c34a16891f84e7b', 'jeffery jung', 'Kasir'),
(3, 'rin', '827ccb0eea8a706c4c34a16891f84e7b', 'karina yoo', 'Kasir'),
(4, 'nana', '827ccb0eea8a706c4c34a16891f84e7b', 'irana', 'Kasir'),
(5, 'story.bagas', '827ccb0eea8a706c4c34a16891f84e7b', 'Bagas', 'Kasir'),
(6, 'Luta', '827ccb0eea8a706c4c34a16891f84e7b', 'faliq', 'Kasir'),
(7, 'dinda', '827ccb0eea8a706c4c34a16891f84e7b', 'dinda', 'Kasir'),
(9, 'ahmad', '827ccb0eea8a706c4c34a16891f84e7b', 'zaid', 'Kasir'),
(11, 'fauzan', '827ccb0eea8a706c4c34a16891f84e7b', 'padil', 'Kasir'),
(12, 'orvill', '827ccb0eea8a706c4c34a16891f84e7b', 'nadiv', 'Kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categori`
--
ALTER TABLE `categori`
  ADD PRIMARY KEY (`id_categori`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_detail_penjualan`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id_stok`);

--
-- Indexes for table `suara_18`
--
ALTER TABLE `suara_18`
  ADD PRIMARY KEY (`id_suara_18`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categori`
--
ALTER TABLE `categori`
  MODIFY `id_categori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_detail_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `suara_18`
--
ALTER TABLE `suara_18`
  MODIFY `id_suara_18` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
