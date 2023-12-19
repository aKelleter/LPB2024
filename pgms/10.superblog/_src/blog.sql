
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--
DROP DATABASE IF EXISTS `blog`;

CREATE DATABASE `blog`  
 DEFAULT CHARACTER SET utf8mb4  
 DEFAULT COLLATE utf8mb4_general_ci;

USE `blog`;
-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` longtext NOT NULL,
  `picture` varchar(250) DEFAULT NULL,
  `active` tinyint(3) UNSIGNED DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `picture`, `active`) VALUES
(1, 'L&#039;hiver est &agrave; nos portes', '&lt;p&gt;L&amp;rsquo;&amp;eacute;t&amp;eacute; nous apporte ses journ&amp;eacute;es ensoleill&amp;eacute;es et ses soir&amp;eacute;es dor&amp;eacute;es ; l&amp;rsquo;automne, le mouvement du vent et la coloration glorieuse du feuillage. Mais l&amp;rsquo;hiver ? Son doux manteau de neige, uniforme et &amp;eacute;pur&amp;eacute;, recouvre les asp&amp;eacute;rit&amp;eacute;s des paysages, leur permettant de prendre une pause pour mieux rena&amp;icirc;tre au printemps.&lt;/p&gt;', NULL, 1),
(2, 'Le soleil', 'Le Soleil est l’étoile autour de laquelle tournoient tous les objets qui constituent notre système solaire, à savoir les planètes, les comètes et autres astéroïdes.', NULL, 1),
(3, 'L\'intelligence artificielle', 'Souvent classée dans le groupe des mathématiques et des sciences cognitives, elle fait appel à la neurobiologie computationnelle (particulièrement aux réseaux neuronaux) et à la logique mathématique (partie des mathématiques et de la philosophie). ', NULL, 1),
(15, 'Article non publi&eacute;', '&lt;p&gt;...&lt;/p&gt;', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(150) NOT NULL,
  `passwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `passwd`) VALUES
(1, 'john@mail.com', '1234'),
(2, 'alain@mail.com', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
