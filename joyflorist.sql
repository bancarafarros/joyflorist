-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 11:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joyflorist`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `kategori` varchar(250) NOT NULL,
  `harga` int(250) NOT NULL,
  `stok` int(250) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `deskripsi`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Bunga Mawar', 'Buket bunga mawar', 'Buket Bunga', 10000, 138, 'mawar.jpg'),
(2, 'Anyelir', 'Buket bunga anyelir', 'Buket Bunga', 100000, 41, 'anyelir.jpg'),
(3, 'Baby\'s Breath', 'Buket bunga baby\'s breath', 'Buket Bunga', 14000, 11, 'babys_breath.jpg'),
(4, 'Hydrangea', 'Buket bunga hydrangea', 'Buket Bunga', 12000, 19, 'hydrangea.jpg'),
(5, 'Ragam Mawar', 'Buket bunga berisi aneka mawar', 'Buket Bunga', 500000, 18, 'ragam mawar.jpg'),
(6, 'Tulip', 'Buket bunga tulip', 'Buket Bunga', 30000, 11, 'tulip.jpg'),
(7, 'Buket Snack Campuran', 'Buket snack yang berisi aneka ragam snack ', 'Buket Snack', 70000, 56, 'buket_snack_campuran.jpg'),
(8, 'Buket Snack Coklat', 'Buket snack berisi snack berwarna coklat', 'Buket Snack', 65000, 456, 'buket_snack_coklat.jpg'),
(9, 'Buket Snack Hijau', 'Buket snack berisi snack berwarna hijau', 'Buket Snack', 74000, 54, 'buket_snack_hijau.jpg'),
(10, 'Buket Snack Merah Jambu', 'Buket snack berisi snack berwarna merah jambu', 'Buket Snack', 66000, 87, 'buket_snack_merah_jambu.jpg'),
(11, 'Buket Snack Merah', 'Buket snack berisi snack berwarna merah', 'Buket Snack', 85000, 55, 'buket_snack_merah.jpg'),
(12, 'Buket Uang Rp5.000', 'Buket berisi uang pecahan Rp5.000', 'Buket Uang', 80000, 33, 'buket_uang_5_ribu.jpg'),
(13, 'Buket Uang Rp10.000', 'Buket berisi uang pecahan Rp10.000', 'Buket Uang', 74000, 87, 'buket_uang_10_ribu.jpg'),
(14, 'Buket Uang Rp20.000', 'Buket berisi uang pecahan Rp20.000', 'Buket Uang', 99000, 75, 'buket_uang_20_ribu.jpg'),
(15, 'Buket Uang Rp50.000', 'Buket berisi uang pecahan Rp50.000', 'Buket Uang', 200000, 88, 'buket_uang_50_ribu.jpg'),
(16, 'Buket Uang Rp100.000', 'Buket berisi uang pecahan Rp100.000', 'Buket Uang', 1000000, 62, 'buket_uang_100_ribu.jpg'),
(17, 'Hampers Biskuit', 'Hampers berisi aneka biskuit', 'Hampers', 58000, 34, 'hampers_biskuit.jpg'),
(18, 'Hampers Grooming', 'Hampers berisi aneka barang perawatan tubuh dan muka', 'Hampers', 404000, 54, 'hampers_grooming.jpg'),
(19, 'Hampers Lebaran', 'Hampers berisi aneka barang yang cocok dengan suasana lebaran', 'Hampers', 500000, 66, 'hampers_lebaran.jpg'),
(20, 'Hampers Mini', 'Hampers dengan isian yang tidak terlalu banyak cocok untuk hadiah di momen yang tidak terlalu serius ', 'Hampers', 100000, 89, 'hampers_mini.jpg'),
(21, 'Hampers Natal', 'Hampers dengan isian aneka barang yang cocok dengan suasan natal', 'Hampers', 200000, 76, 'hampers_natal.jpg'),
(22, 'Karangan Bunga Duka Cita', 'Karangan bunga yang dikhususkan untuk ucapan bela sungkawa', 'Karangan Bunga', 500000, 11, 'duka_cita.jpg'),
(23, 'Karangan Bunga Happy Wedding', 'Karangan bunga yang dikhususkan untuk ucapan pernikahan', 'Karangan Bunga', 500000, 87, 'happy_wedding.jpg'),
(24, 'Karangan Bunga Selamat/Sukses', 'Karangan bunga yang dikhususkan untuk ucapan selamat', 'Karangan Bunga', 500000, 45, 'selamat_sukses.jpg'),
(25, 'Karangan Bunga Selamat Ulang Tahun', 'Karangan bunga yang dikhususkan untuk ucapan berulang tahun', 'Karangan Bunga', 500000, 87, 'selamat_ulang_tahun.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `batas_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `nama`, `alamat`, `tanggal_pesan`, `batas_bayar`) VALUES
(1, 'Yuhuu', 'Tetew', '2022-07-13', '2022-07-14'),
(2, '', '', '2022-07-13', '2022-07-14'),
(3, '', '', '2022-07-13', '2022-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'okoJ', 'meledax', 'ahayy', 1),
(2, 'Prapto', 'prapp', 'uhuyy', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_invoice` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_invoice`, `id`, `nama`, `jumlah`, `harga`) VALUES
(1, 0, 'Yuhuu', 1, 1),
(2, 1, 'Bunga Mawar', 1, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
