-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 09:29 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hidroponik`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `suhu` float NOT NULL,
  `ph` float NOT NULL,
  `nutrisi` float NOT NULL,
  `kedalaman` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `suhu`, `ph`, `nutrisi`, `kedalaman`, `timestamp`) VALUES
(1, 30, 7, 123, 40, '2019-09-20 14:09:23'),
(2, 12, 13, 123, 98, '2019-09-21 07:02:05'),
(3, 31.31, 0, 2.09, -3318, '2019-09-23 08:59:36'),
(4, 31.25, 0, 4.17, -3268, '2019-09-23 08:59:39'),
(5, 31.25, 0, 2.09, 40, '2019-09-24 07:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanaman`
--

CREATE TABLE `jenis_tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nama_tanaman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tanaman`
--

INSERT INTO `jenis_tanaman` (`id_tanaman`, `nama_tanaman`) VALUES
(8, 'Brokoli');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `id_jurusan`, `alamat`) VALUES
(1, 'A1316069', 'Muhammad Maulana', 1, 'JL. Perintis 2'),
(2, 'A1316078', 'Roji', 2, 'JL. Sawahan'),
(3, 'A1317878', 'Michael Jordan', 2, 'JL. Beramban'),
(4, 'A1319990', 'Malik', 0, 'JL.MJK'),
(5, 'A1316069', 'Maulana', 1, 'JL. Perintis'),
(6, 'a1316777', 'Maulanaa', 1, 'JL. Beramban'),
(7, '131231', 'adun', 1, 'Beramban raya');

-- --------------------------------------------------------

--
-- Table structure for table `prediksi`
--

CREATE TABLE `prediksi` (
  `id_prediksi` int(11) NOT NULL,
  `id_siklus` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_kg` int(11) NOT NULL,
  `harga_kg` float NOT NULL,
  `hasil_panen` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prediksi`
--

INSERT INTO `prediksi` (`id_prediksi`, `id_siklus`, `tanggal`, `total_kg`, `harga_kg`, `hasil_panen`) VALUES
(1, 1, '2019-09-24', 1, 23, 23);

-- --------------------------------------------------------

--
-- Table structure for table `prediksi_ekor`
--

CREATE TABLE `prediksi_ekor` (
  `id_prediksi` int(11) NOT NULL,
  `id_siklus` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_ekor` int(11) NOT NULL,
  `harga_ekor` float NOT NULL,
  `hasil_panen` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siklus`
--

CREATE TABLE `siklus` (
  `id_siklus` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `total_tebar` float NOT NULL,
  `tanggal_tebar` date NOT NULL,
  `umur_awal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siklus`
--

INSERT INTO `siklus` (`id_siklus`, `id_ikan`, `total_tebar`, `tanggal_tebar`, `umur_awal`) VALUES
(1, 8, 9, '2019-09-24', 3),
(2, 8, 139, '2019-09-25', 3);

-- --------------------------------------------------------

--
-- Table structure for table `siklus_perubahan`
--

CREATE TABLE `siklus_perubahan` (
  `id_sp` int(11) NOT NULL,
  `id_siklus` int(11) NOT NULL,
  `tgl_perubahan` date NOT NULL,
  `ikan_mati` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siklus_perubahan`
--

INSERT INTO `siklus_perubahan` (`id_sp`, `id_siklus`, `tgl_perubahan`, `ikan_mati`, `total`) VALUES
(7, 1, '2019-09-24', 2, 9),
(8, 2, '2019-09-24', 2, 139);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  ADD PRIMARY KEY (`id_tanaman`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `prediksi`
--
ALTER TABLE `prediksi`
  ADD PRIMARY KEY (`id_prediksi`);

--
-- Indexes for table `prediksi_ekor`
--
ALTER TABLE `prediksi_ekor`
  ADD PRIMARY KEY (`id_prediksi`);

--
-- Indexes for table `siklus`
--
ALTER TABLE `siklus`
  ADD PRIMARY KEY (`id_siklus`);

--
-- Indexes for table `siklus_perubahan`
--
ALTER TABLE `siklus_perubahan`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prediksi`
--
ALTER TABLE `prediksi`
  MODIFY `id_prediksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prediksi_ekor`
--
ALTER TABLE `prediksi_ekor`
  MODIFY `id_prediksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siklus`
--
ALTER TABLE `siklus`
  MODIFY `id_siklus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siklus_perubahan`
--
ALTER TABLE `siklus_perubahan`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
