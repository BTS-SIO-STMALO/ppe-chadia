-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 18 mai 2021 à 09:07
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
-- Base de données :  `pousybook`
--

-- --------------------------------------------------------

--
-- Structure de la table `emprunt`
--

DROP TABLE IF EXISTS `emprunt`;
CREATE TABLE IF NOT EXISTS `emprunt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_emprunt` date NOT NULL,
  `id_inscrit` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_inscrit` (`id_inscrit`,`id_livre`),
  KEY `id_livre` (`id_livre`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`id`, `date_emprunt`, `id_inscrit`, `id_livre`) VALUES
(28, '2021-05-03', 2, 2),
(29, '2021-05-07', 34, 2),
(30, '2021-05-07', 34, 15);

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
CREATE TABLE IF NOT EXISTS `inscrit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `date_naissance` date NOT NULL,
  `nom_rue` varchar(250) NOT NULL,
  `ville` varchar(150) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tel` varchar(150) NOT NULL,
  `mot_de_passe` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscrit`
--

INSERT INTO `inscrit` (`id`, `nom`, `prenom`, `date_naissance`, `nom_rue`, `ville`, `code_postal`, `email`, `tel`, `mot_de_passe`) VALUES
(2, 'michel', 'francois', '2001-01-01', 'mail mitterand', 'pousy-mesangy', 21000, 'robert@boob.com', '063221455', '111111'),
(32, 'camille', 'poulain', '1991-01-20', 'rue saint malo', 'pousy', 58, 'camille.poulain@gmail.com', '0258746932', '123123'),
(33, 'nina', 'soso', '1998-02-05', 'njcqnj', 'pousy', 25000, 'nina@so.com', '02369875', '1'),
(34, 'fabien', 'richart', '1992-07-01', 'louis boulanger', 'pousy-mesangy', 25000, 'fabien@richart.com', '11', '11');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(150) NOT NULL,
  `anne_edition` year(4) NOT NULL,
  `langue` varchar(150) NOT NULL,
  `auteur` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `titre`, `anne_edition`, `langue`, `auteur`) VALUES
(1, 'La chronique des Bridgerton', 2021, 'francais', 'Julia Quinn'),
(2, 'Soupes de printemps', 2021, 'Francais', 'Guy savoy'),
(3, 'Idées de génies', 2021, 'francais', 'Etienne Klein'),
(8, 'Nomade des mers', 2018, 'Francais', 'Nina fascieux'),
(12, 'Nos résiliences', 2021, 'Francais', 'Agnès Martin-Lugand '),
(14, 'J\'ai failli te manquer', 2021, 'Francais', 'Lorraine Fouchet '),
(15, 'C\'est arrivé la nuit\r\n', 2021, 'Francais', 'Marc Levy '),
(21, 'Le Bal des folles', 2021, 'Francais', 'Victoria Mas ');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunt`
--
ALTER TABLE `emprunt`
  ADD CONSTRAINT `emprunt_ibfk_1` FOREIGN KEY (`id_inscrit`) REFERENCES `inscrit` (`id`),
  ADD CONSTRAINT `emprunt_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
