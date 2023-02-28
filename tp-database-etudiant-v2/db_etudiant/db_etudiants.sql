-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 fév. 2023 à 10:00
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
-- Base de données : `db_etudiants`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etudiant` int(11) NOT NULL,
  `prenom_etudiant` varchar(60) NOT NULL,
  `nom_etudiant` varchar(60) NOT NULL,
  `email_etudiant` varchar(80) NOT NULL,
  `date_naissance_etudiant` date NOT NULL,
  `adresse_etudiant` varchar(50) NOT NULL,
  `tel_etudiant` varchar(12) NOT NULL,
  `photo_etudiant` varchar(30) NOT NULL,
  `id_promotion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `prenom_etudiant`, `nom_etudiant`, `email_etudiant`, `date_naissance_etudiant`, `adresse_etudiant`, `tel_etudiant`, `photo_etudiant`, `id_promotion`) VALUES
(6, 'Python', 'Man', 'misterbalise2@gmail.com', '2004-07-05', '13 rue de la saucisse', '+33641528820', '63f5538f7bdc5.jpg', 1),
(9, 'Esteban', 'Racine', 'esteban.racineecole@gmail.com', '2004-01-08', '13 rue de la merguez', '+33333333333', '63f5538f7bdc5.jpg', 2),
(10, 'Odin', 'Viennet', 'odin.viennet@pm.me', '2006-05-17', '15 rue des chipolata', '+33333333333', '63f5538f7bdc5.jpg', 1),
(15, 'nadine', 'saucisse', '', '2000-05-06', '16 rue de la saucisse', '', '63f5dbf4c6fa0.jpg', 2),
(16, 'nadine', 'saucisse', '', '2000-05-06', '16 rue de la saucisse', '', '63f5dc1d2bdbb.jpg', 2),
(17, 'nadine', 'saucisse', '', '2000-05-06', '16 rue de la saucisse', '', '63f5dd239acc4.jpg', 1),
(18, 'nadine', 'saucisse', '', '2004-06-16', '16 rue de la saucisse', '', '63f606256f34a.jpg', NULL),
(19, 'nadine', 'saucisse', '', '2023-02-11', '16 rue de la saucisse', '', '63f606908e43f.jpg', NULL),
(20, 'nadine', 'saucisse', '', '1997-06-04', '16 rue de la saucisse', '', '63f60a8e742fe.jpg', NULL),
(21, 'nadine', 'dupont', '', '2000-02-23', '16 rue de la route', '', '63f6402f75d3a.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id_promotion` int(11) NOT NULL,
  `intitule_promotion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promotion`, `intitule_promotion`) VALUES
(1, 'SIO_1'),
(2, 'SIO_2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etudiant`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promotion`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
