-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 04 mars 2019 à 12:58
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
  `corps_text` varchar(10000) DEFAULT NULL,
  `categorie` varchar(255) DEFAULT NULL,
  `date_publication` varchar(10) DEFAULT NULL,
  `date_modification` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_membre` (`id_membre`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `id_membre`, `titre`, `introduction`, `image`, `corps_text`, `categorie`, `date_publication`, `date_modification`) VALUES
(45, 8, 'Le casque VR Quest n\'accueillera que les jeux validés par Oculus', 'Un contrôle du contenu en plus de la qualité', 'https://dyw7ncnq1en5l.cloudfront.net/optim/news/84/84461/oculus-quest-inside.jpg', 'Le prochain casque de réalité virtuelle autonome d\'Oculus VR, le Quest, n\'accueillera pas forcément autant de jeux que les autres modèles de la marque. La filiale de Facebook souhaite en effet juger de l\'intérêt et de la qualité de chaque titre avant de l\'autoriser ou non.\r\n\r\nÀ contre-courant de la plupart des autres boutiques de jeux vidéo en ligne qui cherchent bien souvent à proposer le catalogue le plus riche possible, l\'Oculus Quest Store n\'accueillera que des titres validés au préalable par sa société mère Oculus VR. Les intentions de la société sont précisées dans un billet de blog à l\'attention des développeurs. On y apprend ainsi qu\'Oculus VR se sent \"fortement responsable de la réussite de l\'écosystème de contenu VR du Quest, tant pour les développeurs que pour les joueurs\". L\'expérience acquise avec l\'écosystème du Rift, premier casque de l\'entreprise, révèle en effet que les joueurs plébiscitent les titres les plus soignés et profonds, qu\'ils soient signés d\'un studio indépendant ou d\'un spécialiste des jeux AAA. Cela justifie la volonté d\'Oculus VR de privilégier la qualité pour les applications proposées sur la boutique de son Quest, afin d\'encourager les développeurs à travailler sur des titres innovants au développement potentiellement onéreux : \"Les développeurs ont besoin de savoir qu\'ils intégreront un écosystème générant un retour sur investissement.\" De quoi assurer au passage une certaine qualité également aux acheteurs, sachant que selon Oculus VR, un certain nombre d\'entre eux vivront avec le Quest leur première expérience de réalité virtuelle. Il ne s\'agit donc pas de les décevoir avec des applications trop peu convaincantes.\r\nUne validation du projet avant même son développement\r\nPour atteindre cet objectif, Oculus VR a donc choisi d\'imposer aux développeurs une prévalidation de leurs applications. Ces derniers devront ainsi fournir dans un premier temps un document présentant le concept de leur projet. Si Oculus VR y trouve \"des preuves de la qualité et du succès probable du marché, et de l\'alignement sur nos directives de contenu pour développeurs Oculus\", alors l\'accord sera donné — sous 10 jours — pour engager le développement sur l\'Oculus Quest. L\'application devra passer par une validation finale, mais avec cette première étape, Oculus VR s\'assure une prévalidation potentiellement plus rapide et évite dans le même temps à des développeurs de travailler sur un projet qui n\'aurait aucune chance de voir le jour si Oculus VR décidait de lui refuser l\'accès à la boutique du Quest. Seul ce dernier est d\'ailleurs concerné par cette politique plus stricte, puisque l\'Oculus Rift et l\'Oculus Go gardent un système de validation plus souple et moins exigeant. Oculus VR précise par ailleurs que les outils de développement du Quest en eux-mêmes seront très proches des outils déjà existants pour ses autres casques.\r\nLa recherche d\'expériences taillées sur mesure pour les spécificités du Quest\r\nReste à savoir si les critères de sélection d\'Oculus VR seront réellement plus sévères que ceux appliqués aux Rift et Go, et si cette démarche suffira à réellement assurer une meilleure qualité générale pour les applications de réalité virtuelle utilisables avec le Quest. Oculus VR entend en tout cas privilégier \"les expériences profondes, surprenantes, délicieuses et émouvantes possibles en réalité virtuelle et qui sont conçues sur mesure pour les offres d\'immersion sans attaches du Quest\". Rappelons en effet que l\'Oculus Quest se caractérise par son fonctionnement entièrement sans fil, comme l\'Oculus Go, mais cette fois avec la possibilité de se déplacer dans l\'espace et d\'utiliser des contrôleurs à six degrés de liberté. Une cinquantaine de jeux sont attendus pour la sortie du Quest au printemps prochain, pour la plupart déjà disponibles sur d\'autres casques VR. Il reste encore un peu de temps aux développeurs pour plancher sur d\'autres projets plus novateurs, à condition que ceux-ci parviennent à séduire Oculus VR.\r\n', 'itstart', NULL, NULL),
(46, 8, 'Suisse : l\'opérateur Sunrise croque UPC pour 5,5 milliards d\'euros', 'Le prix d\'un réseau câble dans 60 % des foyers', 'https://dyw7ncnq1en5l.cloudfront.net/optim/news/84/84477/upc_suisse_logo.jpg', 'Alors qu\'en France, les rumeurs de rapprochement entre opérateurs se sont de nouveau calmées ces derniers mois, la tendance à la consolidation que connaît l\'Europe vient de passer par la Suisse. Sunrise va en effet sortir son chéquier pour s\'offrir le réseau câble d\'UPC.\r\n\r\nIl y a un peu plus d\'un an, nous vous rapportions que le groupe américain Liberty Global, spécialisé dans le câble, avait trouvé un acheteur (Deutsche Telekom) pour sa filiale autrichienne (UPC) et qu\'il ne tarderait sans doute pas à faire de même pour sa filiale suisse. Cette semaine, le câblo-opérateur UPC Suisse a effectivement trouvé preneur. C\'est Sunrise, deuxième acteur sur le front du mobile dans le pays derrière Swisscom, qui a accepté de mettre la main à la poche. La transaction valorise UPC Suisse à 6,3 milliards de francs suisses (5,5 milliards d\'euros), sachant que cela comprend une importante dette. Assez curieusement, dans les communiqués, Liberty Global évoque un trou de 3,7 milliards CHF, tandis que Sunrise n\'annonce que 3,6 milliards. Le reste (2,6 à 2,7 milliards) sera réglé en cash.\r\n\r\nPour ce prix, Sunrise s\'offre en fait un réseau câble raccordé à 2,3 millions de foyers, soit quelque 60 % du marché suisse. L\'opérateur va en outre récupérer 1,1 million de clients, \"dont 1,1 million d\'abonnés vidéo, 0,7 million d\'abonnés à Internet haut débit et 0,5 million d\'abonnés à la téléphonie et 0,1 million d\'abonnés mobile (au 31 décembre 2018)\". Cela permettra à Sunrise de devenir également la deuxième force en présence du côté du fixe (là aussi derrière Swisscom), avec une part de marché de l\'ordre de 30 %. Comme toujours, ou presque, il est question de synergies financières, tandis que Sunrise espère pouvoir partir à la conquête de nouveaux abonnés grâce de nouvelles offres groupées (quadruple play).\r\n\r\nRappelons qu\'au printemps 2018, les groupes Vodafone et Liberty Global ont enfin initié la transaction qui était dans les tuyaux de longue date, le premier offrant 21,8 milliards de dollars (19,2 milliards d\'euros) pour croquer l\'essentiel des actifs européens du second. La cession d\'UPC Suisse, tout comme celle d\'UPC en Autriche, s\'inscrit dans cette stratégie, Liberty Global se débarrassant de ses filiales sur le Vieux Continent non concernées par son deal. En décembre dernier, toutefois, Bruxelles a ouvert une enquête approfondie au sujet de l\'opération avec Vodafone, la Commission s\'interrogeant sur les conséquences pour la concurrence dans plusieurs pays, et notamment en Allemagne.\r\nSource : Sunrise', 'ops', NULL, NULL);

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
  `linkedin` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_membre`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `espace_membre`
--

INSERT INTO `espace_membre` (`id_membre`, `id_article`, `prenom`, `nom`, `mail`, `motdepasse`, `linkedin`) VALUES
(8, NULL, 'Nicolas', 'HAMY', 'test@imie.fr', '9cf95dacd226dcf43da376cdb6cbba7035218921', 'https://www.linkedin.com/in/nicolas-hamy-b2a186172/'),
(9, NULL, 'Nicolas', 'hamy', 'nico@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'https://www.linkedin.com/in/nicolas-hamy-b2a186172/'),
(11, NULL, 'Arthur', 'Rolland', 'arthur@imie.fr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'https://www.linkedin.com/in/fwawrzyniak/');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `id_membre`, `titre`, `campus`, `image`, `description`) VALUES
(7, NULL, 'Porte Ouverte 08 Mars ', 'Nantes', 'https://www.imie.fr/wp-content/uploads/2019/01/JPO-Caen-1080x675.jpg', 'Venez rejoindre les équipes de l’IMIE pour la journée Portes Ouvertes de Caen, le 9 mars 2019, de 10h à 16h.  Une conférence est prévue à 10h30 puis à 14h30.  Les étudiant(e)s et les équipes répondront à vos questions et vous feront découvrir nos filières.  A bientôt sur le campus.'),
(11, NULL, 'GOODBYE FX Prodction', 'nantes', 'https://cdn.discordapp.com/attachments/502110247549140993/552070921653977102/francois.jpg', 'Départ de notre cher formateur François-Xavier Wawrzyniak'),
(10, NULL, 'Journée porte ouverte', 'Caen', 'https://www.imie.fr/wp-content/uploads/2019/01/JPO-Caen-1080x675.jpg', 'Venez rejoindre les équipes de l’IMIE pour la journée Portes Ouvertes de Caen, le 9 mars 2019, de 10h à 16h.\r\n\r\nUne conférence est prévue à 10h30 puis à 14h30.\r\n\r\nLes étudiant(e)s et les équipes répondront à vos questions et vous feront découvrir nos filières.\r\n\r\nA bientôt sur le campus.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
