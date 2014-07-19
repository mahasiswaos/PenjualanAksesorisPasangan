-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2014 at 03:20 PM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aksesoris`
--

-- --------------------------------------------------------

--
-- Table structure for table `accpria`
--

CREATE TABLE IF NOT EXISTS `accpria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_barang_UNIQUE` (`kode_barang`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `accpria`
--

INSERT INTO `accpria` (`id`, `kode_barang`, `nama_barang`, `jenis_barang`, `harga`) VALUES
(6, 'P004', 'Cawet Karatan', 'Celana Dalam', 45000),
(7, 'P005', 'Kolor Ijo', 'Celana Kolor', 1000),
(8, 'P006', 'Sabuk Kuno', 'Sabuk', 90000),
(9, 'P001', 'Stolen Shoe', 'Sepatu', 150000),
(10, 'P002', 'Slippers Stolen', 'Sandal', 10000),
(11, 'P003', 'Trend clothes stolen', 'Baju', 25000),
(12, 'P007', 'Sabuk Gaul', 'Sabuk', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `accwanita`
--

CREATE TABLE IF NOT EXISTS `accwanita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_barang_UNIQUE` (`kode_barang`),
  KEY `id` (`id`),
  KEY `kode_barang` (`kode_barang`),
  KEY `nama_barang` (`nama_barang`),
  KEY `nama_barang_2` (`nama_barang`),
  KEY `kode_barang_2` (`kode_barang`),
  KEY `kode_barangpria` (`kode_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `accwanita`
--

INSERT INTO `accwanita` (`id`, `kode_barang`, `nama_barang`, `jenis_barang`, `harga`) VALUES
(25, 'W003', 'Kutang Baja', 'BH', 45000),
(26, 'W004', 'Liontin Prasejarah', 'anting', 50000),
(27, 'W005', 'Kalung mak ijah', 'kalung', 30000),
(28, 'W001', 'plagiarism necklace', 'kalung', 2000000),
(29, 'W002', 'pickpocket wallet', 'dompet', 40000),
(30, 'W006', 'bracelet stolen', 'gelang', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(225) NOT NULL,
  `no_hp` int(45) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `accpria_id` int(11) NOT NULL,
  `accwanita_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode_barang` (`nama_pembeli`),
  KEY `id` (`id`),
  KEY `fk_pembelian_accpria_idx` (`accpria_id`),
  KEY `fk_pembelian_accwanita1_idx` (`accwanita_id`),
  KEY `kode_barang_2` (`nama_pembeli`),
  KEY `nama_pembeli` (`nama_pembeli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `nama_pembeli`, `no_hp`, `alamat`, `accpria_id`, `accwanita_id`) VALUES
(6, 'minah', 987654321, 'lombok barat', 8, 25),
(7, 'mahsun', 789634542, 'pagutan', 10, 30);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_accpria` FOREIGN KEY (`accpria_id`) REFERENCES `accpria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pembelian_accwanita1` FOREIGN KEY (`accwanita_id`) REFERENCES `accwanita` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
