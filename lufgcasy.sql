-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 12 juin 2022 à 17:47
-- Version du serveur :  5.7.24
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lufgcasy`
--
CREATE DATABASE IF NOT EXISTS `lufgcasy` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lufgcasy`;

-- --------------------------------------------------------

--
-- Structure de la table `title_1`
--

CREATE TABLE `title_1` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `title_1`
--

INSERT INTO `title_1` (`id`, `title`, `display`) VALUES
(1, 'TITRE ELEMENT 1', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `title_2`
--

CREATE TABLE `title_2` (
  `id` int(11) NOT NULL,
  `title` text,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `title_2`
--

INSERT INTO `title_2` (`id`, `title`, `display`) VALUES
(1, 'TITRE ELEMENT 2 AVEC DU TEXTE TRES LONG DE OUF', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `title_3`
--

CREATE TABLE `title_3` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `display` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `title_3`
--

INSERT INTO `title_3` (`id`, `title`, `display`) VALUES
(1, 'TITLE ELEMENT 3', 'true');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `title_1`
--
ALTER TABLE `title_1`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `title_2`
--
ALTER TABLE `title_2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `title_3`
--
ALTER TABLE `title_3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `title_1`
--
ALTER TABLE `title_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `title_2`
--
ALTER TABLE `title_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `title_3`
--
ALTER TABLE `title_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
