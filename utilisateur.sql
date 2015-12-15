-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Décembre 2015 à 14:53
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `date_n` varchar(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `administrateur` tinyint(1) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_utilisateur`, `mail`, `pass`, `nom`, `prenom`, `pseudo`, `date_n`, `adresse`, `code_postal`, `ville`, `pays`, `sexe`, `administrateur`, `photo`) VALUES
(3, 'marie.laplusmignonne@gmail.com', '33', 'zhao', 'yue', 'marie', '0000-00-00', '', 0, '', '', 0, 0, ''),
(8, 'loup@gmail.com', '42', 'Dent', 'aimery', 'loup1000', '', '', 0, '', '', 0, 0, '../vue/image/profil/8.jpg'),
(15, 'H2G2@gmail.com', '42', 'Dent', 'Arthur', 'Le voyageur', '04/02/1988', '', 0, '', '', 0, 0, '../vue/image/profil/15.jpg'),
(16, 'Ban@gmail.com', '22', 'Mido', 'Ban', 'L''homme au jagan', '10/04/1995', '', 0, '', '', 0, 0, ''),
(17, 'tg@isep.fr', '77', 'Robot', 'Arthur', '', '10/04/1995', '', 0, '', '', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
