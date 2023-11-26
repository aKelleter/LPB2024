-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 26 nov. 2023 à 17:07
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `notes`
--
CREATE DATABASE IF NOT EXISTS `notes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `notes`;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT 0,
  `img` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `titre`, `contenu`, `private`, `img`, `date`) VALUES
(1, 'Mariage de John', 'Ne pas oublier de préparer mon discours et de faire un double de ses clés :) -DB', 1, 'mariage.jpg', '2023-06-12'),
(2, 'Vacances d\'été Août 2023', 'Quinze jour de vacances au bord de la mer au Bélize ! -DB', 1, 'vacances.jpg', '2023-08-01'),
(3, 'Livraison nouvelle voiture', 'Livraison de la nouvelle voiture, si les délais sont respectés ! -DB', 1, 'voiture.jpg', '2023-07-21'),
(4, 'Nouveau job', 'Entrée en fonction dans mon nouveau Job chez Apple USA ! -DB', 0, 'apple.jpg', '2023-06-14'),
(5, 'Livraison au client (Nike) de son nouveau site web', 'Rendez-vous chez Nike Belgique pour la livraison et la mise en production de leur nouveau site -DB ', 0, 'nike.jpg', '2023-06-01'),
(6, 'Prévoir achat d\'un nouvel ampli guitare', 'Avant le début de notre tournée en France prévoir l\'achat du nouvel ampli ! Yes ! -DB', 0, 'ampli.jpg', '2023-05-11');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `nom` varchar(120) DEFAULT NULL,
  `prenom` varchar(120) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'Doe', 'John', 'johndoe@mail.com', '12345');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
