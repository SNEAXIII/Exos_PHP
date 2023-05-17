-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 17 mai 2023 à 14:03
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aerisbtp`
--

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE `contenu` (
  `id_devis` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contenu`
--

INSERT INTO `contenu` (`id_devis`, `id_service`, `prix`) VALUES
(1, 1, 5000),
(1, 2, 3000),
(1, 4, 10000);

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id_devis` int(11) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `adresse_client` varchar(50) NOT NULL,
  `codepostal_client` varchar(10) NOT NULL,
  `date_devis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id_devis`, `nom_client`, `prenom_client`, `adresse_client`, `codepostal_client`, `date_devis`) VALUES
(1, 'Bassignot', 'Alexis', '13 rue de la mort', '25000', '2023-05-01');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `nom_service` varchar(30) NOT NULL,
  `photo_service` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `nom_service`, `photo_service`, `description`) VALUES
(1, 'Maison individuelle', 'src/image/maison_individuelle.', 'Maison individuelle de 50 m²'),
(2, 'Route communale 1km', 'src/image/route.jfif', 'Routes communale avec barrière et marquage au sol inclus'),
(3, 'Route départemantale 1km', 'src/image/route.jfif', 'Routes départemantale avec barrière et marquage au sol inclus'),
(4, 'Route nationale 1km', 'src/image/route.jfif', 'Routes nationale avec barrière et marquage au sol inclus'),
(5, 'Route communale 1km', 'src/image/route.jfif', 'Routes communale avec barrière et marquage au sol inclus'),
(6, 'Route communale 1km', 'src/image/route.jfif', 'Routes communale avec barrière et marquage au sol inclus');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`id_devis`,`id_service`),
  ADD KEY `FK_service` (`id_service`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id_devis`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id_devis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contenu`
--
ALTER TABLE `contenu`
  ADD CONSTRAINT `FK_contenu_devis` FOREIGN KEY (`id_devis`) REFERENCES `devis` (`id_devis`),
  ADD CONSTRAINT `FK_service` FOREIGN KEY (`id_service`) REFERENCES `service` (`id_service`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
