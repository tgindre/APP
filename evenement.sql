-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 13 Janvier 2016 à 10:59
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
  `type_even` varchar(255) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`ID_even`, `ID_createur`, `nom_even`, `description`, `type_even`, `adresse_even`, `ville_even`, `type_public`, `date_debut`, `date_fin`, `horaire`, `tarif_min`, `tarif_max`, `nb_participants`, `image`, `lien`) VALUES
(1, 4, 'Grande Réponse', 'Pensée profonde donne la réponse à la Question sur la vie l''univers, et le reste', '', '', 'Terre', 'Tous', '0000-00-00', '0000-00-00', '19h30-20h', 0, 0, 2147483647, '../vue/image/even/1.jpg', ''),
(7, 15, 'Iron squid', 'Tournoi de SC2', '', '6 Passage Thiéré', 'Paris', 'Tous', '12/12/2015', '14/12/2015', '19h30-20h', 0, 0, 0, '../vue/image/even/7.jpg', ''),
(9, 8, 'Iron squid', '', '', '', '', '', '', '', '', 0, 0, 0, '../vue/image/even/9.jpg', ''),
(10, 8, 'la nuit des longs couteaux', 'révolution', '', 'la bastille', 'Paris', 'Tous', '', '', '', 0, 0, 0, '../vue/image/even/10.jpg', ''),
(11, 15, 'kayak', 'Sortie en kayak et pique-nique sur une ile', '', '', 'Lannion', 'Tous', '', '', '', 0, 0, 0, '../vue/image/even/11.jpg', ''),
(13, 20, 'noel2', 'offre de cadeaux', 'fetes', 'Terre', 'terre', 'Tous', '24/12/2015', '25/12/2015', '', 0, 0, 0, '', ''),
(14, 21, 'revolte', 'Destruction des Harkonnen', 'moment historique', '', 'Arrakeen', 'Tous', '', '', '', 0, 0, 0, '../vue/image/even/14.jpg', ''),
(15, 20, 'nouvelle an', '', 'fetes', '', 'Paris', '', '', '', '', 0, 0, 0, '../vue/image/even/15.png', ''),
(22, 15, 'test', '', '', '', '', '', '', '', '', 0, 0, 0, '../vue/image/even/22.jpg', ''),
(34, 20, 'Paris', '', '', '', 'Paris', '3-8 ans', '', '', '', 0, 0, 0, '../vue/image/even/34.jpg', ''),
(36, 20, 'test', '', '', '', 'Paris', '3-8 ans', '', '', '', 0, 0, 0, '../vue/image/even/36.jpg', ''),
(37, 20, 'test2', '', '', '', 'Paris', '', '', '', '', 0, 0, 0, '../vue/image/even/37.jpeg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
