-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 fév. 2019 à 08:48
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `imiesphere`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `introduction` varchar(100) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `corps_text` varchar(500) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `date_publication` varchar(10) DEFAULT NULL,
  `date_modification` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_membre` (`id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_membre`, `titre`, `introduction`, `image`, `corps_text`, `categorie`, `date_publication`, `date_modification`) VALUES
(1, 1, 'titre1', 'intro1', 'image', 'oui l\'article', 'categorie1', NULL, NULL),
(2, 1, 'aze', 'aze', 'aze', 'azeaze', 'evenement', NULL, NULL),
(3, 1, 'RE : Tresors: vos decouvertes, ventes, echanges...', 'aaa', 'aaa', 'azeazeazeaze', 'evenement', NULL, NULL),
(4, 1, 'vs', 'vs', 'https://pbs.twimg.com/profile_images/1039803275023994881/dgmAK2in_400x400.jpg', 'vfdvdé', 'evenement', NULL, NULL),
(5, 1, 'vsaa', 'vs', 'https://pbs.twimg.com/profile_images/1039803275023994881/dgmAK2in_400x400.jpg', 'éééééééééé', 'evenement', NULL, NULL),
(6, 1, 'vsaaazeaze', 'vs', '', 'azeazeaze', 'evenement', NULL, NULL),
(7, 1, 'article 42', 'article numero 42', 'oui', 'ouiiuuouiuiuoiuoiuoiuioi', 'evenement', NULL, NULL),
(8, 1, 'aazza', 'azaaaa', 'azeazeaze', 'azeazzae', 'evenement', NULL, NULL),
(9, 1, 'aazzaeee', 'azaaaa', 'azeazeaze', 'azeaze', 'evenement', NULL, NULL),
(10, 1, 'aazzaeeeazeaze', 'azaaaa', 'azeazeaze', 'azeaze', 'evenement', NULL, NULL),
(11, 1, 'Article 51', 'ceci est l\'article 51', 'https://images.ecosia.org/nnkTK7nQFjoJ2u5_iiQxOy1Lbwk=/0x390/smart/https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Ff%2Ff5%2FJournal_Le_Petit_Marseillais.jpg%2F1200px-Journal_Le_Petit_Marseillais.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'evenement', NULL, NULL),
(12, 1, 'Les pâtes, chez vous de nous', 'Les pâtes sont utiles à la consomation', 'https://images.ecosia.org/5nA1XAEwyszdixOrmXapaE_OEwA=/0x390/smart/http%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fa%2Fac%2FFarfalle_Pasta.JPG', 'aze', 'evenement', NULL, NULL),
(13, 1, 'Nicolas est alergique aux economes', 'En effet, le jeune nicolas, aussi appelé nicolas, est allergique a ce type d\'epucheur à lagumineuses', 'https://i2.cdscdn.com/pdt2/8/8/3/1/700x700/kyo4960664448883/rw/econome-ceramique-kyocera.jpg', 'aaaaaaaaaaaaaaaaaaaaaa', 'evenement', NULL, NULL),
(14, 1, 'Nicolas est azlergique aux economes', 'En effet, le jeune nicolas, aussi appelé nicolas, est allergique a ce type d\'epucheur à lagumineuses', 'https://i2.cdscdn.com/pdt2/8/8/3/1/700x700/kyo4960664448883/rw/econome-ceramique-kyocera.jpg', 'aze', 'evenement', NULL, NULL),
(15, 1, 'Nicolazs est azlergique aux economes', 'En effet, le jeune nicolas, aussi appelé nicolas, est allergique a ce type d\'epucheur à lagumineuses', 'https://i2.cdscdn.com/pdt2/8/8/3/1/700x700/kyo4960664448883/rw/econome-ceramique-kyocera.jpg', 'aze', 'evenement', NULL, NULL),
(16, 1, 'Nicolazsaze est azlergique aux economes', 'En effet, le jeune nicolas, aussi appelé nicolas, est allergique a ce type d\'epucheur à lagumineuses', 'https://i2.cdscdn.com/pdt2/8/8/3/1/700x700/kyo4960664448883/rw/econome-ceramique-kyocera.jpg', 'zaea', 'evenement', NULL, NULL),
(17, 1, 'Les loups', 'le truc de ouf', 'https://i2.cdscdn.com/pdt2/8/8/3/1/700x700/kyo4960664448883/rw/econome-ceramique-kyocera.jpg', 'azeaze', 'evenement', NULL, NULL),
(18, 1, 'eeeee', 'eeeee', 'ee', 'eeeee', 'evenement', NULL, NULL),
(19, 1, 'eeeeeee', 'eeeee', 'ee', 'eazezae', 'evenement', NULL, NULL),
(20, 1, 'eeeeeeeeza', 'eeeee', 'ee', 'ezaeza', 'evenement', NULL, NULL),
(21, 1, 'Je créé le meilleur article', 'C\'est defenitivement le meilleur article', '', 'Oio c\'ets vrai, c\'est le meilleur', 'evenement', NULL, NULL),
(22, 1, 'aaaaaaaaaaaaa', 'zzzzzz', '', 'azeazeazezae', 'evenement', NULL, NULL),
(23, 1, 'aaaaaaaaaaezaaaa', 'zzzzzz', 'ezaeza', 'zeaeaze', 'evenement', NULL, NULL),
(24, 1, 'aaaaaaaaaaezeaaaa', 'zzzzzz', 'ezaeza', 'eza', 'evenement', NULL, NULL),
(25, 1, 'aaaaaaaaaaezezaeaaaa', 'zzzzzz', 'ezaeza', 'azeaze', 'evenement', NULL, NULL),
(26, 1, 'aaaaaaaaaaezezaezaeaaaa', 'zzzzzz', 'ezaeza', 'ezaze', 'evenement', NULL, NULL),
(27, 1, 'ezaazeezazezae', 'eza', 'eza', 'eza', 'evenement', NULL, NULL),
(28, 1, 'Ouiaazzzzzzzzaaaa', 'En effet, le jeune nicolas, aussi appelé nicolas, est allergique a ce type d\'epucheur à lagumineuses', 'https://i2.cdscdn.com/pdt2/8/8/3/1/700x700/kyo4960664448883/rw/econome-ceramique-kyocera.jpg', 'aaaaaaaaaaaaaaaaaaa', 'campus', NULL, NULL),
(29, 1, 'COUCOU', 'fdsfdsfds', 'https://o.aolcdn.com/images/dims3/GLOB/crop/1440x720+0+94/resize/630x315!/format/jpg/quality/85/http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2F83e674380178bb87248e2d10444b75ad%2F206255671%2Fcloseup-portrait-of-bear-picture-id728878383', 'salut', 'dev', NULL, NULL),
(30, 1, 'COUCOUV3', 'fdsfdsfdshgfhfg', 'https://static.latribune.fr/full_width/777378/peter-gyongyosi-balabit-cybersecurite-intelligence-artificielle.jpg', 'saluttttt', 'ops', NULL, NULL),
(31, 1, 'COUCOUV4', 'fdsfdsfdshgfhfgluijkhlhijlihg', 'https://ressources.mynoors.com/files/pages/mini/2017/10/15/peluche-pingouin-aux-gros-yeux-6633.jpg', 'pingouin ouin ouin', 'digi', NULL, NULL),
(32, 1, 'COUCOUV5', 'fdsfdsfdshgfhfgluijkhlhijlihg', 'https://ih0.redbubble.net/image.358330511.4494/flat,550x550,075,f.jpg', 'rammussss', 'itstart', NULL, NULL),
(33, 1, 'gdfgd', 'gsdgdsf', 'https://i2.wp.com/boutique-lol.com/wp-content/uploads/2018/02/peluche-rammus.jpg', 'salut', 'dev', NULL, NULL),
(34, 1, 'Nico', 'Nicolas', 'https://yt3.ggpht.com/a-/ACSszfH8O5va2FiSh_xQzPv-D_3__JhIqXNyptX_DA=s900-mo-c-c0xffffffff-rj-k-no', 'le Nicolas est bon ', 'itstart', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `mail` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`mail`, `telephone`, `adresse`) VALUES
('nantes@imie.fr', '09 72 62 47 47', '213 route de Rennes 44700 ORVAULT');

-- --------------------------------------------------------

--
-- Structure de la table `espace_membre`
--

DROP TABLE IF EXISTS `espace_membre`;
CREATE TABLE IF NOT EXISTS `espace_membre` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  `campus` varchar(15) DEFAULT NULL,
  `role` varchar(25) DEFAULT NULL,
  `ville` text,
  `adresse` varchar(75) DEFAULT NULL,
  `codepostal` int(5) DEFAULT NULL,
  PRIMARY KEY (`id_membre`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `espace_membre`
--

INSERT INTO `espace_membre` (`id_membre`, `id_article`, `prenom`, `nom`, `mail`, `motdepasse`, `campus`, `role`, `ville`, `adresse`, `codepostal`) VALUES
(5, NULL, 'Nicolas', 'hamy', 'salut@imie.fr', '1bfbdf35b1359fc6b6f93893874cf23a50293de5', 'Nantes', 'Etudiant', 'Nantes', '19 boulevard mendes france', 44700);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_evenement` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `campus` varchar(20) DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id_evenement`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `id_membre`, `titre`, `campus`, `image`, `description`) VALUES
(1, NULL, 'JE SUIS LEVENEMENT', 'Nantes', NULL, 'vfdhtghjfdsdyuhgfujjffffhgffdshkuijhgfdtyhjdh'),
(2, NULL, '1343', 'Paris', NULL, NULL),
(3, NULL, 'gsfdgdsgds', 'Rennes', NULL, 'ADAGOUDOU'),
(4, NULL, 'je suis martin', 'Caen', NULL, 'je '),
(5, NULL, 'MARTIN', 'Angers', 'https://pbs.twimg.com/profile_images/1068121030529556480/XIgd5y1w.jpg', 'JE'),
(6, NULL, 'APEX NE AMRCHE PAS', 'nantes', 'https://parismatch.be/app/uploads/2018/04/Macaca_nigra_self-portrait_large-e1524567086123-1100x715.jpg', 'BONJOURRRR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
