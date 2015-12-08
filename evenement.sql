-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Décembre 2015 à 22:41
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
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `ID_even` int(11) NOT NULL AUTO_INCREMENT,
  `ID_createur` int(11) NOT NULL,
  `nom_even` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `adresse_even` varchar(255) NOT NULL,
  `ville_even` varchar(255) NOT NULL,
  `type_public` varchar(255) NOT NULL,
  `date_debut` varchar(20) NOT NULL,
  `date_fin` varchar(20) NOT NULL,
  `horaire` varchar(255) NOT NULL,
  `tarif_min` int(11) NOT NULL,
  `tarif_max` int(11) NOT NULL,
  `nb_participants` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_even`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`ID_even`, `ID_createur`, `nom_even`, `description`, `adresse_even`, `ville_even`, `type_public`, `date_debut`, `date_fin`, `horaire`, `tarif_min`, `tarif_max`, `nb_participants`, `image`, `lien`) VALUES
(1, 4, 'Grande Réponse', 'Pensée profonde donne la réponse à la Question sur la vie l''univers, et le reste', '', 'Terre', 'Tous', '0000-00-00', '0000-00-00', '19h30-20h', 0, 0, 2147483647, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
