-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 05:40 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bengkel`
--
CREATE DATABASE IF NOT EXISTS `bengkel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bengkel`;

-- --------------------------------------------------------

--
-- Table structure for table `kandungan`
--

CREATE TABLE IF NOT EXISTS `kandungan` (
  `id` int(100) NOT NULL,
  `kandungan` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE IF NOT EXISTS `pelajar` (
  `pelajar_id` int(100) NOT NULL AUTO_INCREMENT,
  `pelajar_nama` varchar(1000) DEFAULT NULL,
  `pelajar_email` varchar(1000) DEFAULT NULL,
  `pelajar_notelefon` varchar(1000) DEFAULT NULL,
  `pelajar_alamat` varchar(1000) DEFAULT NULL,
  `pelajar_daerah` varchar(1000) DEFAULT NULL,
  `pelajar_poskod` varchar(1000) DEFAULT NULL,
  `pelajar_negeri` varchar(1000) DEFAULT NULL,
  `pelajar_username` varchar(1000) DEFAULT NULL,
  `pelajar_password` varchar(1000) DEFAULT NULL,
  `pelajar_gambar` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`pelajar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pentadbir`
--

CREATE TABLE IF NOT EXISTS `pentadbir` (
  `pentadbir_id` int(100) NOT NULL AUTO_INCREMENT,
  `pentadbir_nama` varchar(1000) DEFAULT NULL,
  `pentadbir_username` varchar(1000) DEFAULT NULL,
  `pentadbir_password` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`pentadbir_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pentadbir`
--

INSERT INTO `pentadbir` (`pentadbir_id`, `pentadbir_nama`, `pentadbir_username`, `pentadbir_password`) VALUES
(1, 'admin', 'zainas', 'zainas90'),
(2, 'admin', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
