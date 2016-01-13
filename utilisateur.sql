-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 13 Janvier 2016 à 10:55
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_utilisateur`, `mail`, `pass`, `nom`, `prenom`, `pseudo`, `date_n`, `adresse`, `code_postal`, `ville`, `pays`, `sexe`, `administrateur`, `photo`) VALUES
(3, 'marie.laplusmignonne@gmail.com', '33', 'zhao', 'yue', 'marie', '0000-00-00', '', 0, '', '', 0, 0, '../vue/image/profil/3.jpg'),
(8, 'loup@gmail.com', '7dd31c3941a04e5f02807370fc874e499a4ccc83', 'robin', 'jean-loup', 'loup1000', '', '', 0, '', '', 0, 0, '../vue/image/profil/8.jpg'),
(15, 'H2G2@gmail.com', '7dd31c3941a04e5f02807370fc874e499a4ccc83', 'Dent', 'Arthur', 'Le voyageur', '04/02/1988', '', 0, '', '', 0, 0, '../vue/image/profil/15.jpg'),
(16, 'Ban@gmail.com', '22', 'Mido', 'Ban', 'L''homme au jagan', '10/04/1995', '', 0, '', '', 0, 0, ''),
(17, 'tg@isep.fr', '77', 'Robot', 'Arthur', '', '10/04/1995', '', 0, '', '', 0, 0, ''),
(18, 'loup@gmail.com', '7dd31c3941a04e5f02807370fc874e499a4ccc83', 'robin', 'jean-loup', 'loup', '', '', 0, '', '', 0, 0, ''),
(19, 'w@gmail.com', '09f1a00e7abc100fa1b5cea39822ef78d44836d4', '', '', 'waylander', '', '', 0, '', '', 0, 0, ''),
(20, 'kylos@gmail.com', 'ea335aad029b41054de085d042d6bf4c012aa42b', '', 'anakin', 'Kylos', '12/12/2015', '42 rue de la soif', 92130, 'Paris', 'Terre', 0, 1, '../vue/image/profil/20.jpg'),
(21, 'p@gmail.com', '47cea9280fde92638622c302e688a0df43ae5c70', 'paul', 'atreides', ' Muad Dib', '24/12/10186 ', 'dune', 0, 'Caladan', 'Arrakis', 0, 0, '../vue/image/profil/21.jpg'),
(25, 'c@gmail.com', '2b1fc0ee952f8b93cbadd420bb4124ed3ec1b590', '', '', 'c', '', '', 0, '', '', 0, 0, ''),
(26, 'a@gmail.com', '6d9364d12e4b9b44e17a5f91c2471916416bac43', '', '', 'a', '', '', 0, '', '', 0, 0, '../vue/image/profil/26.jpeg'),
(27, 'b@gmail.com', 'b216116be179dd4d90953d05704813ecb18a43a7', '', '', 'b', '', '', 0, '', '', 0, 0, '../vue/image/profil/27.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
