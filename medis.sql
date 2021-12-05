-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkup`
--

CREATE TABLE `checkup` (
  `id` int(20) NOT NULL,
  `amannesa` varchar(225) NOT NULL,
  `diagnosa` varchar(225) NOT NULL,
  `pengobatan` varchar(255) NOT NULL,
  `kesadaran` varchar(255) NOT NULL,
  `td` varchar(255) NOT NULL,
  `hr` varchar(255) NOT NULL,
  `rr` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `id_pasien` int(20) NOT NULL,
  `tgl_periksa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkup`
--

INSERT INTO `checkup` (`id`, `amannesa`, `diagnosa`, `pengobatan`, `kesadaran`, `td`, `hr`, `rr`, `suhu`, `id_pasien`, `tgl_periksa`) VALUES
(8, 'wewewe', 'tftftf', 'drdtr', '2', 'asdas', '213', '2323', '2323', 6, '2021-06-12'),
(9, 'wewewe', 'asdas', 'drdtr', '2', 'asdas', '213', '2323', '2323', 5, '2021-06-12'),
(10, 'wewewe', 'www', 'www;drdtr;sdsd', '2', 'asdas', '213', '2323', '2323', 5, '2021-06-12'),
(11, 'wewewe;aaaaa', 'www;www', 'per;sdsd', '2', 'asdas', '213', '2323', '2323', 6, '2021-06-12'),
(12, 'kejang-kejang', 'bunuh diri', 'sakit jantung', 'hampir mati', '200/350', 'bukhari', '2323', '1000', 5, '2021-06-13'),
(13, 'keluhan bagian dibawah pusat nyerri pada saat dia datang dia lagi kurang ajaran, makanya dia kerja di KKP sebagai moocok-mocok', 'bunuh diri;bunuh diri;bunuh diri', 'sakit jantung', 'hampir mati', '200/350', '213', '4', '1', 12, '2021-06-14'),
(14, 'kejang-kejang', 'bunuh diri', 'sakit jantung', 'somnolen', '200/350', '213', '4', '1', 12, '2021-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(20) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tmpt_lahir` varchar(225) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_bpjs` int(20) NOT NULL,
  `jns_kelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `no_bpjs`, `jns_kelamin`) VALUES
(5, ' irvan munawir', 'Lhokseumawe', '1998-01-27', ' sfadfsafasf', 123, 'Laki-Laki'),
(6, ' asdasd', 'asdasd', '2021-06-08', ' asdasdasdasd', 32, 'Laki-Laki'),
(12, 'Aermando Kocok', 'Kupang', '2021-09-08', ' asasasas', 13, 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkup`
--
ALTER TABLE `checkup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_bpjs` (`no_bpjs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkup`
--
ALTER TABLE `checkup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
