-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2019 at 06:17 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `idcar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` int(2) NOT NULL,
  `vehiculenumber` varchar(50) NOT NULL,
  PRIMARY KEY (`idcar`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chariot`
--

DROP TABLE IF EXISTS `chariot`;
CREATE TABLE IF NOT EXISTS `chariot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(250) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`cid`, `name`, `email`, `pwd`, `phonenumber`, `adresse`, `img`) VALUES
(1, 'houcem', 'nlus040815@gmail.com', '$2y$10$LdebVs8yLck6.CMPyNT8xeL81QuAvFrAysvQH4dYxnLgzb4g1kPsm', 26248366, 'el alia', 'profilpic/1575574781_chef-2.jpg'),
(2, 'bilel', 'bilelmerseni7016@gmail.com', '$2y$10$yKE/py71fQ12ivGhGVikuOITG.Jvo59L.0tPYdxtFyWWKjtYEjeMa', 26248366, 'el alia bizerte 7016', 'profilpic/1575632563_chef-3.jpg'),
(3, 'bilel', 'test@testest.com', '$2y$10$KLQebJQlKmWQMIpVvwCMquKZS2LBPLPMiChBzu83e4UrCjHgbiBE6', 26248366, 'bizerte', 'profilpic/1575719736_32.jpg'),
(4, 'mokhtar', 'mokhtar@test.com', '$2y$10$2shlcwaEggL3JVqVbv9JiO7pOquK1635foHo8z/s.woGqOnzltc8S', 26248366, 'el alia', 'profilpic/default-avatar.jpg');

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
  `password` varchar(120) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employé`
--

INSERT INTO `employé` (`eid`, `name`, `phno`, `email`, `password`, `type`) VALUES
(1, 'admin', 26248366, 'admin@food.com', '$2y$10$bhZgfD5jh22aUimjxwvkZue8BsM2SVgCAvJmJFARKfp16XVcA2UnK', 'admin'),
(2, 'ghazi', 26248366, 'ghazi@empl.com', '$2y$10$bhZgfD5jh22aUimjxwvkZue8BsM2SVgCAvJmJFARKfp16XVcA2UnK', 'employe');

-- --------------------------------------------------------

--
-- Table structure for table `ordre`
--

DROP TABLE IF EXISTS `ordre`;
CREATE TABLE IF NOT EXISTS `ordre` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `qty` int(25) NOT NULL,
  `status` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `pid` (`pid`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  `file` text NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`pid`, `name`, `description`, `price`, `file`, `type`) VALUES
(25, 'bilel', 'roti de veau , cafe de fond de veau, soupe de herbes de Provence', 55, '1575672841_63.jpg', 'breakfast'),
(26, 'quick breakfast', 'coffee, juice, eggs, steak, pancakes', 100, '1575673264_47.jpg', 'breakfast'),
(27, 'healthy morning', 'tea, fruit, jambon, bread,cheese, lettuce', 80, '1575673319_25.jpg', 'breakfast'),
(28, 'love bowl', 'ice,white chocolate, dark chocolate,chocolate piece', 100, '1575673361_61.jpg', 'lunch'),
(29, 'PLATEAU DE FRUIT', ' Huitre , buccin onde, homard, langoustines , Crevette,  coquillage', 180, '1575673417_62.jpg', 'lunch'),
(31, 'ROTI DE VEAU SAUCE', 'ricotta, smoked salmon, egg, dill, fresh cream, parmesan', 100, '1575673511_63.jpg', 'lunch'),
(32, 'bilelmerseniqq', 'Ground beef, Gruyere grated, crushed tomatoes', 111, '1575673945_42.jfif', 'breakfast'),
(33, 'bilel merseni', 'Ground beef, Gruyere grated, crushed tomatoes', 300, '1575673983_42.jfif', 'breakfast');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chariot`
--
ALTER TABLE `chariot`
  ADD CONSTRAINT `chariot_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `clients` (`cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chariot_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `produits` (`pid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
