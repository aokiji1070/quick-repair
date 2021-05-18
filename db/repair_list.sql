-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 18 mai 2021 à 22:18
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fix_and_go`
--

-- --------------------------------------------------------

--
-- Structure de la table `repair_list`
--

DROP TABLE IF EXISTS `repair_list`;
CREATE TABLE IF NOT EXISTS `repair_list` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) NOT NULL,
  `arriving` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `model` varchar(255) NOT NULL,
  `trouble` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `deposit` decimal(10,0) NOT NULL,
  `barcode` int DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `repair_list`
--

INSERT INTO `repair_list` (`ID`, `client_name`, `arriving`, `model`, `trouble`, `description`, `password`, `remarks`, `total_price`, `deposit`, `barcode`) VALUES
(32, '', '2021-05-17 06:05:15', '', '', '', '', '', '0', '0', 0),
(33, '', '2021-05-17 06:05:23', '', '', '', '', '', '0', '0', 0),
(34, '', '2021-05-17 06:30:18', '', '', '', '', '', '0', '0', 0),
(31, 'ABDEL', '2021-05-14 00:00:53', 's8plus', 'ecran éclaté', 'il l\'a fait tiomber dans l\'eau aussi ', '18opl', 'bienvu ', '235', '321', 51515151);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
