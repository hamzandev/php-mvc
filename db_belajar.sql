-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2022 at 04:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nid` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nid`, `fakultas`, `email`, `gambar`) VALUES
(1, 'Moh.Yasin', '19031997', 'Fakultas Teknologi Informatika', 'mohyasin@gmail.com', '1.jpeg'),
(2, 'Ardi Yunandar', '12121998', 'Fakultas Pertanian', 'aldi123@gmail.com', '3.jpeg'),
(3, 'Nisa Safitri', '03071998', 'Fakultas Teknik Mesin', 'nisafitri03@gmail.com', '2.jpeg'),
(4, 'Putra Dinata', '98943834', 'Ekonomi', 'euehrufh@gmail.com', '4.jpeg'),
(5, 'Muhammad Ali', '98757762', 'Hukum', 'ifyudfgtte@gmail.com', '5.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nrp` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `jurusan`, `email`, `gambar`) VALUES
(1, 'Hamzan Wahyudi', '01234567', 'Teknik Infromatika', 'hamzanwahyu@gmail.com', 'senja.jpg'),
(15, 'Muhammad Helmi', '1288127', 'Teknik Informatika', 'helmi@gmail.com', '4.jpeg'),
(17, 'Fikro Najiah', '0977845', 'Teknik Sipil', 'fikro@gmail.com', '2.jpeg'),
(21, 'Rahmat Waluyo Tahaluuu', '01111101', 'Teknik Sipil', 'rahmatzz@gmail.com', '3.jpeg'),
(26, 'Manda Eka Kurniawan', '07766346', 'Teknik Mesin', 'hasghafsdg@gmail.com', '8.jpeg'),
(27, 'Haya Skin Oren', '0987636', 'Aliansi Ninja', 'haya@montod.com', 'haya.jpg'),
(28, 'Putri Handayani', '0872667', 'Teknik Informatika', 'putt@gmail.com', '10.jpg'),
(29, 'Muhammad Aldi Saputra', '0521768', 'Teknik Sipil', 'mhdAldi@gmail.com', '9.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
