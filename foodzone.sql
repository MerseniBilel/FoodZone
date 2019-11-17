-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 17 nov. 2019 à 11:21
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `foodzone`
--

-- --------------------------------------------------------

--
-- Structure de la table `chariot`
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
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `adresse` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employé`
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
-- Structure de la table `ordre`
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
-- Structure de la table `produits`
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
-- Structure de la table `véhicule`
--

DROP TABLE IF EXISTS `véhicule`;
CREATE TABLE IF NOT EXISTS `véhicule` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `vehiculenumber` varchar(30) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chariot`
--
ALTER TABLE `chariot`
  ADD CONSTRAINT `chariot_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `clients` (`cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chariot_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `produits` (`pid`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `ordre`
--
ALTER TABLE `ordre`
  ADD CONSTRAINT `ordre_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `produits` (`pid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ordre_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `clients` (`cid`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ordre_ibfk_3` FOREIGN KEY (`vid`) REFERENCES `véhicule` (`vid`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
