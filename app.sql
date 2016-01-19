-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 19 Janvier 2016 à 09:53
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
-- Structure de la table `aide`
--

CREATE TABLE IF NOT EXISTS `aide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(254) NOT NULL,
  `reponse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `aide`
--

INSERT INTO `aide` (`id`, `question`, `reponse`) VALUES
(3, 'Je voudrais trouver un évènement', 'Utiliser la recherche rapide sur la page d''accueil ou la recherche avancée dans l''onglet concerné.'),
(4, 'Je voudrais créer un évènement', 'Si vous êtes connecté, il suffit d''aller dans l''onglet proposer un évènement.'),
(5, 'J''ai une autre question', 'Blabla');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'évènement'),
(2, 'Concerts');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL,
  `id_event` int(61) NOT NULL,
  `list_note` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `utilisateur`, `contenu`, `date`, `id_event`, `list_note`) VALUES
(1, 18, 'Cet événement est super ! ', '2016-01-08 11:18:16', 0, 8),
(2, 15, 'J''ai bien aimmé cet évenement mais il a été un peu long', '2016-01-13 06:16:14', 0, 6),
(3, 0, 'salut', '0000-00-00 00:00:00', 0, 6),
(4, 20, '', '0000-00-00 00:00:00', 37, 5),
(5, 8, 'salut', '2016-01-16 21:20:05', 37, 2),
(6, 20, 'salut', '2016-01-17 22:20:03', 37, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

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
(37, 20, 'test2', '', '', '', 'Paris', '', '', '', '', 0, 0, 0, '../vue/image/even/37.jpeg', ''),
(38, 28, 'test', '', '', '', '', '', '', '', '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `inscrit_even`
--

CREATE TABLE IF NOT EXISTS `inscrit_even` (
  `ID_utilisateur` int(50) NOT NULL,
  `ID_even` int(100) NOT NULL,
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `inscrit_even`
--

INSERT INTO `inscrit_even` (`ID_utilisateur`, `ID_even`, `ID`) VALUES
(20, 37, 1),
(8, 37, 2),
(20, 36, 3);

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

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE IF NOT EXISTS `sujet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(61) NOT NULL,
  `categorie` varchar(21) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `sujet`
--

INSERT INTO `sujet` (`id`, `name`, `categorie`) VALUES
(14, 'Mon premier sujet', 'Concerts'),
(15, 'Voici un autre sujet', 'Concerts'),
(16, 'Ceci est encore un sujet', 'ï¿½vï¿½nement'),
(17, 'Ceci est encore un sujet', 'ï¿½vï¿½nement'),
(20, 'Blablacadabra', 'Ã‰vÃ¨nement');

-- --------------------------------------------------------

--
-- Structure de la table `type_ev`
--

CREATE TABLE IF NOT EXISTS `type_ev` (
  `ID_type` int(11) NOT NULL AUTO_INCREMENT,
  `ID_createur` int(11) NOT NULL,
  `nom_type` varchar(100) NOT NULL,
  `photo_type` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `type_ev`
--

INSERT INTO `type_ev` (`ID_type`, `ID_createur`, `nom_type`, `photo_type`) VALUES
(1, 1, 'Concert', '../vue/image/concert.jpg'),
(2, 2, 'Soirée', '../vue/image/soiree.jpg'),
(3, 4, 'Pique-Nique', '../vue/image/picnic1.jpg'),
(4, 5, 'Exposition', '../vue/image/Exposition.jpg'),
(5, 6, 'Spectacle', '..vue/image/spectacle.jpg'),
(6, 7, 'Évènement sportif', '../vue/image/sport.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

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
(20, 'kylos@gmail.com', 'ea335aad029b41054de085d042d6bf4c012aa42b', 'robin', 'anakin', 'Kylos', '12/12/2015', '42 rue de la soif', 92130, 'Paris', 'Terre', 0, 1, '../vue/image/profil/20.jpg'),
(21, 'p@gmail.com', '47cea9280fde92638622c302e688a0df43ae5c70', 'paul', 'atreides', ' Muad Dib', '24/12/10186 ', 'dune', 0, 'Caladan', 'Arrakis', 0, 0, '../vue/image/profil/21.jpg'),
(25, 'c@gmail.com', '2b1fc0ee952f8b93cbadd420bb4124ed3ec1b590', 'robin', '', 'c', '', '', 0, '', '', 0, 0, ''),
(26, 'a@gmail.com', '6d9364d12e4b9b44e17a5f91c2471916416bac43', '', '', 'a', '', '', 0, '', '', 0, 0, '../vue/image/profil/26.jpeg'),
(27, 'b@gmail.com', 'b216116be179dd4d90953d05704813ecb18a43a7', 'robin', 'akira', 'kaamelott', '', '', 0, '', '', 0, 1, '../vue/image/profil/27.jpg'),
(28, 'herve.feller@gmail.com', '9968975ce7193bfe1fd157a631d0e6e1977c6854', 'feller', '', 'Feller', '', '', 0, '', '', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
