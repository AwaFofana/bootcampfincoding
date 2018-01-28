-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 28 Janvier 2018 à 21:21
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

CREATE TABLE IF NOT EXISTS `codeuses` (
  `id_codeuse` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `date_naissance` varchar(50) NOT NULL,
  `image` varchar(250) NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_codeuse`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `codeuses`
--

INSERT INTO `codeuses` (`id_codeuse`, `nom`, `prenoms`, `date_naissance`, `image`, `specialisation`, `email`, `mdp`, `description`) VALUES
(2, 'toure', 'adja', '234563', '2017-11-23-15-25-28-532.jpg', 'CODEUSE', 'nanou@email.com', '9a741f0ad60975ae15d3d83a769442a1', 'Developpeuse debutante jaime creer des aplications web et jaimerais plutard creer des applications mobiles android....geek mode '),
(3, 'toure', 'adja', '2003/12/12', 'FB_IMG_1499612121389.jpg', 'CODEUSE', 'nanou@email.com', '7a48932b26f04fccb55f0409ba3451fc', 'Developpeuse debutante jaime creer des aplications web et jaimerais plutard creer des applications mobiles android....geek mode '),
(4, 'sylla', 'massere', '28/12/1997', 'IMG_20170506_143101.jpg', 'community m', 'massere@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Developpeuse debutante jaime creer des aplications web et jaimerais plutard creer des applications mobiles android....geek mode '),
(5, 'diaby', 'anna', '23/11/1996', 'IMG_20170808_171623.jpg', 'coding', 'anna@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Developpeuse debutante jaime creer des aplications web et jaimerais plutard creer des applications mobiles android....geek mode '),
(6, 'fofana', 'awa', '27/12/1995', 'Snapchat-1759466558.jpg', 'Developpement Web', 'awafof@yahoo.fr', '48b364ba33c7f5cf1e6776b9f1320d0e', 'Developpeuse debutante jaime creer des aplications web et jaimerais plutard creer des applications mobiles android....geek mode ');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(30) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `github` varchar(30) NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE IF NOT EXISTS `diplomes` (
  `id_dip` int(11) NOT NULL AUTO_INCREMENT,
  `anneeobtention` year(4) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `ecole` varchar(50) NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id_dip`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `diplomes`
--

INSERT INTO `diplomes` (`id_dip`, `anneeobtention`, `libelle`, `ecole`, `id_codeuse`) VALUES
(1, 2012, 'bac', 'pingouins', 5),
(2, 2017, 'bts', 'cestia2ep', 5),
(3, 2010, 'licence', 'asttc', 5);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE IF NOT EXISTS `experiences` (
  `id_exp` int(11) NOT NULL AUTO_INCREMENT,
  `titreposte` varchar(100) NOT NULL,
  `datedebut` varchar(15) NOT NULL,
  `datefin` varchar(15) NOT NULL,
  `entreprise` varchar(50) NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id_exp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `experiences`
--

INSERT INTO `experiences` (`id_exp`, `titreposte`, `datedebut`, `datefin`, `entreprise`, `id_codeuse`) VALUES
(2, 'assistante', '12/12/2012', '24/12/2012', 'yoomee', 5),
(3, 'codeuse', '12/12/2017', '24/12/2018', 'coullandwifi', 5),
(4, 'codeuse', '6/06/2016', '24/12/2017', 'cie', 5),
(5, 'secretaire', '12/03/2006', '11/12/2009', 'sidam', 4);

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE IF NOT EXISTS `interets` (
  `id_int` int(11) NOT NULL AUTO_INCREMENT,
  `descriptionint` varchar(100) NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id_int`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `interets`
--

INSERT INTO `interets` (`id_int`, `descriptionint`, `id_codeuse`) VALUES
(1, 'lecture', 0),
(2, 'lecture', 0),
(3, 'developpeuse', 0),
(4, 'lecture', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
