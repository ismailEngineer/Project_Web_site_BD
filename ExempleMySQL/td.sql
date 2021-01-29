-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 21 Octobre 2016 à 10:54
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `td`
--
CREATE DATABASE IF NOT EXISTS `td` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `td`;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `NSS` bigint(14) NOT NULL DEFAULT '0',
  `nom` char(35) DEFAULT NULL,
  `prenom` char(30) DEFAULT NULL,
  `service` char(6) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `salaire` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personnel`
--

INSERT INTO `personnel` (`NSS`, `nom`, `prenom`, `service`, `sexe`, `salaire`) VALUES
(17405679768, 'Lambert', 'Fred', 'MAI', 'M', 21000),
(270868122006, 'Castagliola', 'Carole', 'ADM', 'F', 200000),
(1365012897515, 'Poitrenaud', 'Philippe', 'ADM', 'M', 40000),
(1420344186255, 'Rodriguez', 'Gerard', 'ADM', 'M', 40000),
(1520275983547, 'Pelous', 'Fabien', 'ADM', 'M', 23000),
(1600398553269, 'Chabal', 'Sébastien', 'ADM', 'M', 34000),
(1780534054697, 'Poitrenaud', 'Clément', 'SEC', 'M', 23000),
(2430485967758, 'Ibanez', 'Caroline', 'ADM', 'F', 30000),
(2431116256987, 'Dominici', 'Chantal', 'ADM', 'F', 57000),
(2630547895521, 'Chabal', 'Samantha', 'ADM', 'F', 35000);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` char(6) NOT NULL DEFAULT '',
  `Nom` char(30) DEFAULT NULL,
  `batiment` char(15) DEFAULT NULL,
  `budget` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id`, `Nom`, `batiment`, `budget`) VALUES
('ADM', 'Administration', 'Nord', 2000000),
('DVT', 'Developpement', 'Nord', 3000000),
('MAI', 'Maintenance', 'Sud', 6000000),
('SEC', 'Securite', 'Est', 1000000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`NSS`),
  ADD KEY `service` (`service`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`service`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;