-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 02:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prak4`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(20) NOT NULL,
  `komen` text NOT NULL,
  `jk` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`nama`, `email`, `website`, `komen`, `jk`) VALUES
('Muhammad Fakhri Nashruddin', 'fakhri@gmail.com', 'alooo', 'Greate', 'L'),
('Seto Adi', 'lkfag@gmail.com', '', '', 'L');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
