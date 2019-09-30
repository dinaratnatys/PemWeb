-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 09:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas5`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `NPM` varchar(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Goldar` varchar(3) NOT NULL,
  `Jeiskel` varchar(1) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `TL` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`NPM`, `Nama`, `Alamat`, `Goldar`, `Jeiskel`, `Status`, `Agama`, `TL`, `Email`, `Telp`) VALUES
('17081010043', 'Guntur Adhi P', 'Pasuruan', 'A', 'L', 'Belum Menikah', 'Islam', '06-02-1999', 'gunturadhip@gmail.com', '0895377128113'),
('17081010044', 'Muh Idham F', 'Bangah', 'A', 'L', 'Belum Menikah', 'Islam', '15-04-1999', 'king.idham@gmail.com', '0895377128112'),
('17081010045', 'Sunu Ilham Pradika', 'Sidoarjo', 'A', 'L', 'Belum Menikah', 'Islam', '06-01-1999', 'sunudika@gmail.com', '0895377128111'),
('17081010075', 'FERDIKO', 'SURABAYA', 'O', 'L', 'Belum Menikah', 'Islam', '15-01-1994', 'fauziedina@gmail.com', '083832940145');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`NPM`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
