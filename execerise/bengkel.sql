-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2015 at 01:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bengkel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kandungan`
--

CREATE TABLE IF NOT EXISTS `kandungan` (
  `id` int(100) NOT NULL,
  `kandungan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE IF NOT EXISTS `pelajar` (
`pelajar_id` int(100) NOT NULL,
  `pelajar_nama` varchar(1000) DEFAULT NULL,
  `pelajar_email` varchar(1000) DEFAULT NULL,
  `pelajar_notelefon` varchar(1000) DEFAULT NULL,
  `pelajar_alamat` varchar(1000) DEFAULT NULL,
  `pelajar_daerah` varchar(1000) DEFAULT NULL,
  `pelajar_poskod` varchar(1000) DEFAULT NULL,
  `pelajar_negeri` varchar(1000) DEFAULT NULL,
  `pelajar_username` varchar(1000) DEFAULT NULL,
  `pelajar_password` varchar(1000) DEFAULT NULL,
  `pelajar_gambar` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`pelajar_id`, `pelajar_nama`, `pelajar_email`, `pelajar_notelefon`, `pelajar_alamat`, `pelajar_daerah`, `pelajar_poskod`, `pelajar_negeri`, `pelajar_username`, `pelajar_password`, `pelajar_gambar`) VALUES
(1, 'Iwan ijok', 'iwan@gmail.com', '017-32813823', '3, Jalan Ijok, Taman Ijok, Ijok', 'Ijok', '45620', 'Ijok', 'Ijok', 'ijok1234', NULL),
(2, 'Aminah', 'aminah@gmail.com', '013923923', '3, Jln Damai, Taman Damai', 'Segamat', '32232', 'Johor', 'aminah', 'aminah1234', NULL),
(15, 'dsfsdf', 'gjhgbj', 'gjgbhjk', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pentadbir`
--

CREATE TABLE IF NOT EXISTS `pentadbir` (
`pentadbir_id` int(100) NOT NULL,
  `pentadbir_nama` varchar(1000) DEFAULT NULL,
  `pentadbir_username` varchar(1000) DEFAULT NULL,
  `pentadbir_password` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pentadbir`
--

INSERT INTO `pentadbir` (`pentadbir_id`, `pentadbir_nama`, `pentadbir_username`, `pentadbir_password`) VALUES
(1, 'admin', 'admin', 'admin1234'),
(2, 'Admin123', 'Admin123', 'Admin3456'),
(3, 'AdminAdmin', 'Adminadmin', 'admin7890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kandungan`
--
ALTER TABLE `kandungan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
 ADD PRIMARY KEY (`pelajar_id`);

--
-- Indexes for table `pentadbir`
--
ALTER TABLE `pentadbir`
 ADD PRIMARY KEY (`pentadbir_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
MODIFY `pelajar_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pentadbir`
--
ALTER TABLE `pentadbir`
MODIFY `pentadbir_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
