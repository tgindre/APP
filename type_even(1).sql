-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 04:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `type_even`
--

CREATE TABLE IF NOT EXISTS `type_even` (
  `ID_type` int(11) NOT NULL AUTO_INCREMENT,
  `ID_createur` int(11) NOT NULL,
  `nom_type` varchar(100) NOT NULL,
  `photo_type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `type_even`
--

INSERT INTO `type_even` (`ID_type`, `ID_createur`, `nom_type`, `photo_type`) VALUES
(1, 1, 'Concert', '../vue/image/concert.jpg'),
(2, 2, 'Soirée', '../vue/image/soiree.jpg'),
(3, 4, 'Pique-Nique', '../vue/image/picnic1.jpg'),
(4, 5, 'Exposition', '../vue/image/Exposition.jpg'),
(5, 6, 'Spectacle', '..vue/image/spectacle.jpg'),
(6, 7, 'Évènement sportif', '../vue/image/sport.jpg'),
(7, 8, 'Évènement culturel', '../vue/image/culture.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
