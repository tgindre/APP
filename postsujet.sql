-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 05 Janvier 2016 à 14:45
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tutoforum`
--

-- --------------------------------------------------------

--
-- Structure de la table `postsujet`
--

CREATE TABLE IF NOT EXISTS `postsujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `propri` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL,
  `sujet` varchar(61) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `postsujet`
--

INSERT INTO `postsujet` (`id`, `propri`, `contenu`, `date`, `sujet`) VALUES
(15, 1, 'Ceci est mon premier post de mon premier sujet', '2016-01-04 22:43:51', 'Mon premier sujet'),
(16, 1, 'VoilÃ  mon deuxiÃ¨me post sur ce mÃªme premier sujet', '2016-01-04 22:44:18', 'Mon premier sujet'),
(17, 1, 'Avec un autre post !', '2016-01-04 22:48:00', 'Voici un autre sujet'),
(18, 9, 'Et voici le 1er troll !!!', '2016-01-04 22:50:03', 'Voici un autre sujet'),
(19, 1, 'Voici mon sujet de trop', '2016-01-04 22:58:29', 'Ceci est encore un sujet'),
(20, 1, 'Voici mon sujet de trop', '2016-01-04 23:04:10', 'Ceci est encore un sujet'),
(21, 1, 'Et encore un 3e...', '2016-01-04 23:16:54', 'Mon premier sujet'),
(25, 1, 'f,ff;ldffdlbdf', '2016-01-05 14:17:47', 'Blablacadabra'),
(26, 1, 'kgrglfg', '2016-01-05 14:18:04', 'Blablacadabra');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
