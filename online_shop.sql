-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 11:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tlpn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `alamat`, `tlpn`) VALUES
(6, 'putri', '123', 'winongan', '085671526233');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `tarif` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id`, `nama_kota`, `tarif`) VALUES
(1, 'jakarta', '15000'),
(2, 'surabaya', '10000'),
(3, 'semarang', '20000'),
(4, 'palembang', '35000');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_customer`, `id_ongkir`, `tgl_pembelian`, `total`) VALUES
(1, 6, 1, '2021-06-15', '20015000'),
(2, 6, 2, '2021-06-15', '20010000'),
(3, 6, 1, '2021-06-15', '20015000'),
(4, 6, 1, '2021-06-15', '20015000'),
(5, 6, 2, '2021-06-15', '20010000'),
(6, 6, 2, '2021-06-15', '20010000'),
(7, 6, 0, '2021-06-15', '20000000'),
(8, 6, 0, '2021-06-15', '20000000'),
(9, 6, 0, '2021-06-15', '20000000'),
(10, 6, 1, '2021-06-15', '20015000'),
(11, 6, 0, '2021-06-15', '20000000'),
(12, 6, 1, '2021-06-15', '20015000'),
(13, 6, 4, '2021-06-15', '20035000'),
(14, 6, 2, '2021-06-15', '20010000'),
(15, 6, 2, '2021-06-15', '20010000'),
(16, 6, 2, '2021-06-15', '20010000'),
(17, 6, 1, '2021-06-15', '20015000'),
(18, 6, 1, '2021-06-15', '20015000'),
(19, 6, 2, '2021-06-15', '20010000'),
(20, 6, 1, '2021-06-15', '20015000'),
(21, 6, 2, '2021-06-15', '20010000'),
(22, 6, 2, '2021-06-15', '20010000'),
(23, 6, 1, '2021-06-15', '85015000');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jmlh_barang` int(11) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_pembelian`, `username`, `alamat`, `no_tlp`, `nama_barang`, `jmlh_barang`, `harga`) VALUES
(1, 1, 'putri', 'winongan', '085671526233', 'tv', 1, '200'),
(2, 2, 'putri', 'winongan', '085671526233', 'ac', 1, '40000000'),
(3, 3, 'putri', 'winongan', '085671526233', 'ac', 1, '20000000'),
(4, 4, 'putri', 'winongan', '085671526233', 'ac', 1, '20015000'),
(5, 5, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(6, 6, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(7, 7, 'putri', 'winongan', '085671526233', 'ac', 1, '20000000'),
(8, 8, 'putri', 'winongan', '085671526233', 'ac', 1, '20000000'),
(9, 9, 'putri', 'winongan', '085671526233', 'ac', 1, '20000000'),
(10, 10, 'putri', 'winongan', '085671526233', 'ac', 1, '20015000'),
(11, 11, 'putri', 'winongan', '085671526233', 'ac', 1, '20000000'),
(12, 12, 'putri', 'winongan', '085671526233', 'ac', 1, '20015000'),
(13, 13, 'putri', 'winongan', '085671526233', 'ac', 1, '20035000'),
(14, 14, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(15, 15, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(16, 16, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(17, 17, 'putri', 'winongan', '085671526233', 'ac', 1, '20015000'),
(18, 18, 'putri', 'winongan', '085671526233', 'ac', 1, '20015000'),
(19, 19, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(20, 20, 'putri', 'winongan', '085671526233', 'ac', 1, '20015000'),
(21, 21, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(22, 22, 'putri', 'winongan', '085671526233', 'ac', 1, '20010000'),
(23, 23, 'putri', 'winongan', '085671526233', 'Laptop', 1, '85015000'),
(24, 23, 'putri', 'winongan', '085671526233', 'Laptop', 1, '85015000'),
(25, 23, 'putri', 'winongan', '085671526233', 'Laptop', 1, '85015000');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `gambar`, `harga`, `deskripsi`) VALUES
(1, 'Televisi', 'tv.jpg', '25000000', 'Televesi Terbaru Dengan Kualitas Nomor 1'),
(2, 'Laptop', 'laptop.jpg', '40000000', 'Laptop Terbaru dan Terbaik'),
(3, 'ac', 'ac.jpg', '20000000', 'AC Terbaik dan Terpopuler di Indonesia'),
(4, 'kulkas', 'kulkas.jpg', '35000000', 'Kulkas Elegan dengan Kapasitas Besar\r\n'),
(5, 'Televisi', 'ac.jpg', '25000000', 'vghbh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
