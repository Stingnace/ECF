-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 07 nov. 2022 à 10:43
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecf2`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_auteur` int(11) NOT NULL,
  `nom_auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `id_auteur`, `nom_auteur`, `prenom_auteur`, `image`, `titre`, `contenu`) VALUES
(6, 1, 'Da Fonseca', 'Anthony', '6368e14d48708.jpg', 'Congolexicomatisation', 'Mais c\'est clair ! '),
(3, 3, 'Jelul', 'Jeloul', '6368dea9f01c8.png', 'BONJOUR', 'La Jelule Magique'),
(4, 3, 'Jelul', 'Jeloul', '6368df4fbc42a.png', 'Titre 2', 'Contenu 2'),
(5, 4, 'Muh', 'Muuuuh', '6368e02967c21.png', 'Etre formateur en 2022', 'C\'est difficile ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `Nom`, `Prenom`, `email`, `password`) VALUES
(1, 'Da Fonseca', 'Anthony', 'anthonydafonseca@yahoo.fr', '$2y$10$KW5T8WQjmcQ8hIM64y3JZu5ZA2YrhHUPcya/7E6JZ6DIUhq.PJ.Lu'),
(2, 'a', 'a', 'a@a', '$2y$10$bw/aDxBvObbTxl4wgtAZnu5XUKFNp/2mGWzGc/9WjtflOFpk/MMrS'),
(3, 'Jelul', 'Jeloul', 'Jeloul@jelul.fr', '$2y$10$y.FXErgQhASbaDqAP2JmVeM5/fYWg1YzoGPEsaWqqwaD3noUl.VaO'),
(4, 'Muh', 'Muuuuh', 'Muh@muh', '$2y$10$v1yFrp.S5EDd6HmixJnj9eC9KlmnUcFzSvlXmQxW9L8cEtd233YPi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
