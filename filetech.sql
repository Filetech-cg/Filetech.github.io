-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 04 oct. 2022 à 17:39
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `filetech`
--

-- --------------------------------------------------------

--
-- Structure de la table `dipbac`
--

DROP TABLE IF EXISTS `dipbac`;
CREATE TABLE IF NOT EXISTS `dipbac` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `Dnaissance` date NOT NULL,
  `netablissement` varchar(255) NOT NULL,
  `anneeobtention` varchar(255) NOT NULL,
  `src` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dipbac`
--

INSERT INTO `dipbac` (`id`, `nom`, `prenom`, `Dnaissance`, `netablissement`, `anneeobtention`, `src`) VALUES
(1, 'speudo ', 'alex', '2022-09-08', 'aaa', ' 2022', ''),
(2, 'speudo ', 'alex', '2022-09-08', 'aaa', ' 2022', ''),
(3, 'speudo ', 'alex', '2022-09-08', 'aaa', ' 2022', ''),
(4, 'ERR ZZZ ', 'yahn', '2022-09-03', 'aaa', ' 2022', ''),
(5, 'ERR ZZZ ', 'yahn', '2022-09-03', 'aaa', ' 2022', ''),
(6, 'ERR ZZZ ', 'nick mon tresor', '2022-09-17', 'aaa', ' 2022', ''),
(7, 'ERR ZZZ ', 'alex', '2022-09-15', 'aaa', ' 2022', ''),
(8, 'yahn ', 'yahn mon tresor', '2022-09-21', 'aaa', ' 2022', ''),
(9, 'email ', 'brade', '2022-09-22', 'aaa', ' 2022', ''),
(10, 'email ', 'nick mon tresor', '2022-09-23', 'aaa', ' 2022', ''),
(11, 'nick ', 'nick mon tresor', '2022-09-08', 'aaa', ' 2022', ''),
(12, 'yahn mondzila ', 'alex', '2022-09-14', 'aaa', ' 2022', ''),
(13, 'ERR ZZZ ', 'alex', '2022-09-17', 'aaa', ' 2022', ''),
(14, 'yahn ', 'ferand', '2022-09-22', 'aaa', ' 2022', ''),
(15, 'yahn mondzila ', 'yahn mon tresor', '2022-09-22', 'aaa', ' 2022', 'y.png'),
(16, 'email ', 'nick mon tresor', '2022-09-22', 'aaa', ' 2022', ''),
(17, 'email ', 'nick mon tresor', '2022-09-22', 'aaa', ' 2022', 'Yncreation .jpg'),
(18, 'yahn ', 'nick mon tresor', '2022-09-21', 'aaa', ' 2022', 'y.png'),
(19, 'yahn mondzila ', 'yahn', '2022-09-14', 'aaa', ' 2022', 'BUSNESS INTER.docx'),
(20, 'ERR ZZZ ', 'alex', '2022-10-07', 'aaa', ' 2022', 'Capture d’écran 2022-09-05 161319.png'),
(21, 'ERR ZZZ ', 'alex', '2022-10-07', 'aaa', ' 2022', 'Capture d’écran 2022-09-05 161319.png'),
(22, 'ERR ZZZ ', 'alex', '2022-10-07', 'aaa', ' 2022', 'Capture d’écran 2022-09-05 161319.png'),
(23, 'yahn mondzila ', 'alex', '2022-09-19', 'aaa', ' 2022', 'y.png'),
(24, 'speudo ', 'brade', '2022-09-10', 'aaa', ' 2022', 'Capture d’écran 2022-09-05 161319.png'),
(25, 'speudo ', 'brade', '2022-09-10', 'aaa', ' 2022', 'Capture d’écran 2022-09-05 161319.png'),
(26, 'prenom ', 'yahn', '2022-09-30', 'aaa', ' 2022', 'y.png'),
(27, 'Mondzila Martis ', 'nick mon tresor', '2022-09-01', 'cam', ' 2022', 'pngegg (12).png'),
(28, 'yahn mondzila ', 'alex', '2022-09-06', 'aaa', ' 2022', 'Fluo Rose et Sarcelle E-Sports Illustratif Jeu Jeu Logo (2).png'),
(29, 'yahn mondzila ', 'alex', '2022-09-06', 'aaa', ' 2022', 'Fluo Rose et Sarcelle E-Sports Illustratif Jeu Jeu Logo (2).png'),
(30, 'yahn mondzila ', 'alex', '2022-09-06', 'aaa', ' 2022', 'Fluo Rose et Sarcelle E-Sports Illustratif Jeu Jeu Logo (2).png'),
(31, 'yahn mondzila ', 'alex', '2022-09-06', 'aaa', ' 2022', 'Fluo Rose et Sarcelle E-Sports Illustratif Jeu Jeu Logo (2).png'),
(32, 'speudo ', 'yahn', '2022-08-29', 'aaa', ' 2022', 'YNCREATION3 (2).png'),
(33, 'Yahn Mon Tresor MONDZILA MARTIS ', 'brade', '2022-09-15', 'aaa', ' 2022', 'Rapport narratif KPH.pdf'),
(34, 'yahn ', 'yahn', '2022-09-02', 'aaa', ' 2022', 'y.png'),
(35, 'speudo ', 'nick mon tresor', '2022-09-07', 'aaa', ' 2022', 'WhatsApp Image 2022-09-05 at 16.49.11.jpeg'),
(36, 'yahn mondzila ', 'alex', '2022-09-01', 'aaa', ' 2022', '11B9CD42-68FA-450A-97EA-73D2A9D0C391.PNG'),
(37, 'yahn mondzila ', 'alex', '2022-10-19', 'aaa', ' 2022', 'png-clipart-afro-black-hair-mannequin-wig-afro-cosmetology-people.png');

-- --------------------------------------------------------

--
-- Structure de la table `dipbactechnique`
--

DROP TABLE IF EXISTS `dipbactechnique`;
CREATE TABLE IF NOT EXISTS `dipbactechnique` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `Dnaissance` date NOT NULL,
  `Netablissement` text NOT NULL,
  `Anneeobtention` varchar(25) NOT NULL,
  `src` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dipbactechnique`
--

INSERT INTO `dipbactechnique` (`id`, `nom`, `prenom`, `Dnaissance`, `Netablissement`, `Anneeobtention`, `src`) VALUES
(1, 'yahn ', 'nick mon tresor', '2022-09-22', 'aaa', ' 2022', 'WhatsApp Image 2022-09-05 at 16.49.11.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `dipbepc`
--

DROP TABLE IF EXISTS `dipbepc`;
CREATE TABLE IF NOT EXISTS `dipbepc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `Dnaissance` date NOT NULL,
  `Netablissement` text NOT NULL,
  `Anneeobtention` varchar(22) NOT NULL,
  `src` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dipbepc`
--

INSERT INTO `dipbepc` (`id`, `nom`, `prenom`, `Dnaissance`, `Netablissement`, `Anneeobtention`, `src`) VALUES
(1, 'yahn ', 'yahn', '2022-09-08', 'aaa', ' 2022', 'WhatsApp Image 2022-09-05 at 16.49.11.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `dipbet`
--

DROP TABLE IF EXISTS `dipbet`;
CREATE TABLE IF NOT EXISTS `dipbet` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `Dnaissance` date NOT NULL,
  `Netablissement` text NOT NULL,
  `Anneeobtention` varchar(255) NOT NULL,
  `src` text NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dipbet`
--

INSERT INTO `dipbet` (`nom`, `prenom`, `Dnaissance`, `Netablissement`, `Anneeobtention`, `src`, `id`) VALUES
('email ', 'yahn', '2022-09-14', 'aaa', ' 2022', 'y.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dipcepe`
--

DROP TABLE IF EXISTS `dipcepe`;
CREATE TABLE IF NOT EXISTS `dipcepe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `Dnaissance` date NOT NULL,
  `Netablissement` text NOT NULL,
  `Anneeobtention` varchar(25) NOT NULL,
  `src` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dipcepe`
--

INSERT INTO `dipcepe` (`id`, `nom`, `prenom`, `Dnaissance`, `Netablissement`, `Anneeobtention`, `src`) VALUES
(1, 'email ', 'nick mon tresor', '2022-09-13', 'aaa', ' 2022', 'WhatsApp Image 2022-09-05 at 16.49.11.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `netablissement` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `anneeobtention` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `date_de_naissance`, `netablissement`, `anneeobtention`) VALUES
(6, 'mondzila martis ', 'yahn mon tresor', '2001-06-01', 'brazzaville ', ' +242068377672'),
(18, 'rode ', 'rode', '2022-08-01', 'owando ', ' 065655365'),
(17, 'soki ', 'ferand', '2022-08-11', 'point noire ', ' +242068377672'),
(16, 'bitsimi ', 'brade', '2022-09-03', 'brazzaville ', ' 065655365'),
(15, 'Mounka  ', 'alex', '2022-08-31', 'brazzaville ', ' +33068377672'),
(14, 'monzila martis ', 'nick mon tresor', '2022-01-04', 'brazzaville ', ' +242068377672'),
(20, 'speudo ', 'alex', '2022-09-08', 'aaa', ' 2022');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL,
  `image` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `log` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `log`, `email`, `mdp`) VALUES
(19, 'yahn', 'mmyahne@gmail.com', '$2y$10$Q9BYpayBbuQvA0NvzsW3L.bFoSUidRITJaxrcFyad/tUo9TYJRz2q'),
(18, 'root', 'mmyhn@gmail.com', '$2y$10$44EYvM2zgtDbPbl9aPqkGuwEH8ZYXHj/f53JhwPSridkYuQ.k2p66'),
(17, 'admin', 'mmyahn@gmail.com', '$2y$10$BuLNrApkOZkT8jBPv.XSS.7tCN2nbUZy1mGACNqZtO6Gd4/h27wH2'),
(21, 'ss', 'kallykann@gmail.com', '$2y$10$tgWyt9qYxigGQdR6uye6eOJ683jVXg1e66Rv40WbqvVzN6.IVbsMi'),
(22, 'Q', 'mmartisc@gmail.com', '$2y$10$e7DCiruvEVOrC8CN7NcJZOIBUuspi8iQt3XzLGtAdrsFOaa/j7Vta'),
(23, 'nelan', 'nelan@gmail.com', '$2y$10$Ro5YplFYB85S3ACdaSXI3.KhOkvK8LWXgGD3yz6t9uvlHTZZJF28e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
