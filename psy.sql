-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 10 jan. 2025 à 22:43
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `psy`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(4) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `phone`, `message`) VALUES
(3, 'attempt3', 608780210, '1ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd255'),
(5, '', 0, 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff');

-- --------------------------------------------------------

--
-- Structure de la table `getconsultation`
--

CREATE TABLE `getconsultation` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `date` date NOT NULL,
  `therapy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `getconsultation`
--

INSERT INTO `getconsultation` (`id`, `name`, `phone`, `date`, `therapy`) VALUES
(12, 'mama', 2147483647, '2025-01-10', 'Relationships'),
(15, 'ilham', 2147483647, '2025-01-24', 'Depression Therapy'),
(16, 'zghoudi', 708039910, '2025-02-09', 'Depression Therapy'),
(17, '', 0, '0000-00-00', 'Sélectionner la thér'),
(18, '', 0, '0000-00-00', ''),
(19, 's', 0, '0000-00-00', 'Sélectionner la thér'),
(20, '', 0, '0000-00-00', 'Sélectionner la thér'),
(21, '', 0, '0000-00-00', 'Sélectionner la thér');

-- --------------------------------------------------------

--
-- Structure de la table `navbar`
--

CREATE TABLE `navbar` (
  `id` int(4) NOT NULL,
  `nav` varchar(30) NOT NULL,
  `refer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `navbar`
--

INSERT INTO `navbar` (`id`, `nav`, `refer`) VALUES
(23, 'Acceuil', 'index.php'),
(24, 'Contact', 'contact.php'),
(25, 'Equipe', 'team.php'),
(26, 'Gallery', 'gallery.php'),
(27, 'Service', 'service.php');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `getconsultation`
--
ALTER TABLE `getconsultation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `getconsultation`
--
ALTER TABLE `getconsultation`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
