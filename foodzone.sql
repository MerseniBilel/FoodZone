-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 04, 2019 at 10:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `chariot`
--

DROP TABLE IF EXISTS `chariot`;
CREATE TABLE IF NOT EXISTS `chariot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(250) NOT NULL,
  `status` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `adresse` text NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`cid`, `name`, `email`, `pwd`, `phonenumber`, `adresse`, `img`) VALUES
(7, 'ghazi', 'test@live.fr', '$2y$10$1MIVQ1gYAcABkz8f9sAtfOPspw0lUBwAjUB6sxZlDjId3FiQV03W.', 99758599, 'dqsdq', 'profilpic/1575452683_wallhaven-953pgd.jpg'),
(8, 'test', 'rhouma@gmail.com', '$2y$10$Ad2vctsY1XgaUwj306xpdOrEuqvRJsr/55RrJWZFAheOJXdBkBCce', 24935414, 'test', 'profilpic/1575453533_wallhaven-nkx9r7.jpg'),
(9, 'bilel', 'bilel@test.com', '$2y$10$MJRf3vS63j.hwum4c.dgJ.eGfgHDeseGCz1Daxuj14MSfdwg2trJO', 26248366, 'bilel', 'profilpic/1575453615_default-avatar.jpg'),
(10, 'Sayeh Ghazi', 'ghazisayeh01@gmail.com', '$2y$10$HybYaWwE10ChUKP7HHUJMOZsF369LGsdHR9jA8KKnhCHofsRqfNGe', 99758599, 'Carthage Byrsa', 'profilpic/1575453717_IMG_4682.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `employé`
--

DROP TABLE IF EXISTS `employé`;
CREATE TABLE IF NOT EXISTS `employé` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phno` int(15) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ordre`
--

DROP TABLE IF EXISTS `ordre`;
CREATE TABLE IF NOT EXISTS `ordre` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `quantity-p` int(25) NOT NULL,
  `quantity-c` int(11) NOT NULL,
  `odate` datetime NOT NULL,
  `delivery-status` tinyint(1) NOT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `pid` (`pid`),
  KEY `cid` (`cid`),
  KEY `vid` (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` double(10,5) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `véhicule`
--

DROP TABLE IF EXISTS `véhicule`;
CREATE TABLE IF NOT EXISTS `véhicule` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `vehiculenumber` varchar(30) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chariot`
--
ALTER TABLE `chariot`
  ADD CONSTRAINT `chariot_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `clients` (`cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chariot_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `produits` (`pid`) ON UPDATE CASCADE;

--
-- Constraints for table `ordre`
--
ALTER TABLE `ordre`
  ADD CONSTRAINT `ordre_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `produits` (`pid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ordre_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `clients` (`cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ordre_ibfk_3` FOREIGN KEY (`vid`) REFERENCES `véhicule` (`vid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
