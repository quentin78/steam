-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Janvier 2017 à 07:47
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `steam`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `age` varchar(11) COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL,
  `video` varchar(255) COLLATE utf8_bin NOT NULL,
  `telechargement` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `plateforme_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `games`
--

INSERT INTO `games` (`id`, `nom`, `description`, `age`, `photo`, `video`, `telechargement`, `category_id`, `plateforme_id`) VALUES
(1, 'The Legend of Zelda : The Wind Waker', 'The Legend of Zelda : The Wind Waker est un jeu d\'action/aventure sur Gamecube. La légende raconte qu\'à chaque fois où le mal est apparu, un héros nommé Link a surgi pour le combattre.', '7+', 'img/games/zdgcgc0f.jpg', ' ', 0, 0, 0),
(2, 'Super Smash Bros. for Wii U', 'Super Smash Bros. for Wii U est un jeu de combat en arènes dans lesquelles s’affrontent un grand nombre de personnages issus de l’univers de Nintendo, tels que Pikachu, Link, Mario, Samus, ou encore Donkey...', '7+', 'img/games/1420752618-5579-jaquette-avant.jpg', ' ', 0, 0, 0),
(3, 'Minecraft', 'Jeu bac à sable indépendant et pixelisé dont le monde infini est généré aléatoirement, Minecraft permet au joueur de récolter divers matériaux, d\'élever des animaux et de modifier le terrain selon ses...', '7+', 'img/games/1482845269-1018-jaquette-avant.jpg', ' ', 0, 0, 0),
(4, 'The Last of Us Remastered', 'The Last of Us Remastered est un survival action sur PS4 qui raconte l\'histoire de Joel et d\'Ellie qui vont devoir s\'entraider pour survivre face à une mystérieuse peste qui a décimé les Etats-Unis', '18+', 'img/games/jaquette-the-last-of-us-remastered-playstation-4-ps4-cover-avant-g-1397063678.jpg', ' ', 0, 0, 0),
(5, 'The Witcher 3 : Wild Hunt', 'The Witcher 3 : Wild Hunt est un Action-RPG se déroulant dans un monde ouvert. Troisième épisode de la série du même nom, inspirée des livres du polonais Andrzej Sapkowski, cet opus relate la fin de l\'histoire...', '18+', 'img/games/1422469608-7141-jaquette-avant.jpg', ' ', 0, 0, 0),
(6, 'Uncharted 4 : A Thief\'s End', 'Quatrième opus de la série de jeu d\'action/aventure à succès de Naughty Dog, Uncharted 4 A Thief\'s End vous permet d\'incarner Nathan Drake pour la première fois sur PS4. Le célèbre explorateur devra révéler...', '16+', 'img/games/1462807289-2712-jaquette-avant.jpg', ' ', 0, 0, 0),
(7, 'Xenoblade Chronicles X', 'Xenoblade Chronicles X est un jeu de rôle sur Wii U. Dans ce gigantesque monde ouvert et fantastique, les joueurs peuvent se déplacer et se battre à bord de robots volants baptisés Skells.', '12+', 'img/games/1482942298-5380-jaquette-avant.jpeg', ' ', 0, 0, 0),
(8, 'The Legend of Zelda : The Wind Waker HD', 'The Legend of Zelda : The Wind Waker HD sur Wii U est le remake du jeu éponyme sorti sur GameCube. Cette version propose une refonte graphique en HD avec un affichage en 1080p ...', '7+', 'img/games/jaquette-the-legend-of-zelda-the-wind-waker-hd-wii-u-wiiu-cover-avant-g-1378885621.jpg', ' ', 0, 0, 0),
(9, 'The Legend of Zelda : Twilight Princess', 'The legend of Zelda : Twilight Princess est un jeu d\'aventure se déroulant dans le monde d\'Hyrule. La dimension des ombres menace d\'envahir le royaume et le héros, Link, changé en loup, devra affronter...', '7+', 'img/games/1455869746-6381-jaquette-avant.jpg', ' ', 0, 0, 0),
(10, 'Batman Arkham City', 'Batman Arkham City est un jeu d\'aventure/action dans lequel Batman doit de nouveau affronter son ennemi juré, le Joker, dans un Arkham toujours plus sombre et vaste. De nombreuses quêtes annexes permettent...', '16+', 'img/games/jaquette-batman-arkham-city-pc-cover-avant-g-1315230527.jpg', ' ', 0, 0, 0),
(11, 'Dishonored', 'Dishonored est un jeu d\'infiltration et d\'action dans lequel le joueur incarne Corvo, un ancien garde du corps. Celui-ci est mis en prison, accusé du meurtre de l\'impératrice qu\'il protégeait, et doit...', '18+', 'img/games/jaquette-dishonored-pc-cover-avant-g-1336660429.jpg', ' ', 0, 0, 0),
(12, 'Bioshock Infinite', 'Troisième épisode de la série Bioshock, Bioshock Infinite est un jeu d\'aventure dont l\'action se passe en 1912, dans la cité flottante de Colombia. Le joueur accompagne Booker DeWitt, un détective chargé...\r\n', '18+', 'img/games/jaquette-bioshock-infinite-pc-cover-avant-g-1354632827.jpg', ' ', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(24) COLLATE utf8_bin NOT NULL,
  `nom` varchar(24) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(24) COLLATE utf8_bin NOT NULL,
  `mail` varchar(32) COLLATE utf8_bin NOT NULL,
  `pass` varchar(24) COLLATE utf8_bin NOT NULL,
  `naissance` date NOT NULL,
  `adresse` varchar(50) COLLATE utf8_bin NOT NULL,
  `ville` varchar(50) COLLATE utf8_bin NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `nom`, `prenom`, `mail`, `pass`, `naissance`, `adresse`, `ville`, `telephone`) VALUES
(2, 'Guyzzi', 'ARISTOR', 'GUY', 'G-aristor@hotmail.fr', '91350', '1996-05-09', '12 RUE DES ENCLOS', 'GRIGNY', 689760804);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
