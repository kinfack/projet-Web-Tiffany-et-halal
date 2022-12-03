-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 déc. 2022 à 21:44
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `amac_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `Mail` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `MotDePasse` varchar(50) DEFAULT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`Mail`, `Nom`, `Prenom`, `MotDePasse`, `Type`) VALUES
('jule@gmail.com', 'alexandre', 'jule', '9d79055988c580b807d84ff33ff58def', 'structure'),
('tiffanyedith08@gmail.com', 'Tiffany Edith', 'Kinfack', '210dc1fd8cb4e4e43cb4961b28fac275', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `IdAnnonce` varchar(50) NOT NULL,
  `Titre` varchar(50) DEFAULT NULL,
  `Texte` varchar(250) DEFAULT NULL,
  `Lieu` varchar(50) DEFAULT NULL,
  `Photo1` varchar(50) DEFAULT NULL,
  `Photo2` varchar(50) DEFAULT NULL,
  `Photo3` varchar(50) DEFAULT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Texte_1` varchar(50) NOT NULL,
  `Nom_1` varchar(50) NOT NULL,
  `CodePostal` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`IdAnnonce`, `Titre`, `Texte`, `Lieu`, `Photo1`, `Photo2`, `Photo3`, `Nom`, `Texte_1`, `Nom_1`, `CodePostal`, `Ville`, `Mail`) VALUES
('annonce 4', 'Titre 4', 'In lacinia diam nisi, sed volutpat orci scelerisque facilisis. Praesent feugiat dui luctus interdum pellentesque. Quisque vulputate lorem nibh, non mattis metus sodales sed. Quisque quis dolor eget risus placerat placerat. Maecenas luctus dolor felis', 'Limoges', 'img7.jpg', 'img4.jpg', 'img2.jpg', 'violon', 'intermediaire', 'instrument', '87000', 'Limoges', 'tiffanyedith08@gmail.com'),
('annonce1', 'La danse néoclassique', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed cursus lectus lorem, a ornare purus elementum vitae. In tempor mauris vel tempor eleifend. Cras quis justo ligula. Aenean placerat ut felis et rhoncus. Cras lobortis ante eu porttitor dapib', 'Toulouse', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'guitare', 'pro', 'Diffusion', '31000', 'Toulouse', 'tiffanyedith08@gmail.com'),
('annonce2', 'titre1', 'Cras rutrum elit dolor, at pellentesque felis vulputate vel. Nunc dignissim eleifend erat, dapibus tristique orci dictum tincidunt. Aliquam ex nulla, pulvinar non odio at, eleifend dictum sapien. Praesent mollis eu nibh nec aliquet. In vestibulum, se', 'Rodez', 'img3.jpg', 'img4.jpg', 'img2.jpg', 'piano', 'pro', 'Pratique', '12000', 'Rodez', 'tiffany@gmail.com'),
('annonce3', 'Titre3', 'Nam dapibus velit commodo ultrices vulputate. Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque posuere magna tellus, non maximus tortor pretium in. Ut tincidunt quis tortor eget lobo', 'lyon', 'img6.jpg', 'img4.jpg', 'img2.jpg', 'Arcordeon', 'debutant', 'Accompagnement', '12000', 'Rodez', 'tiffany@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

CREATE TABLE `avoir` (
  `Mail` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avoir`
--

INSERT INTO `avoir` (`Mail`, `Nom`) VALUES
('structure2@gmail.com', 'Éveil musical'),
('structure4@gmail.com', 'Accompagnement'),
('tiffany@gmail.com', 'Pratique'),
('tiffanyedith08@gmail.com', 'Diffusion'),
('toto@gmail.com', 'instrument');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`Type`) VALUES
('admin'),
('structure');

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

CREATE TABLE `instrument` (
  `Nom` varchar(50) NOT NULL,
  `Nom_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrument`
--

INSERT INTO `instrument` (`Nom`, `Nom_1`) VALUES
('Arcordeon', 'Accompagnement'),
('guitare', 'Diffusion'),
('Tam-Tam', 'Éveil musical'),
('violon', 'instrument'),
('piano', 'Pratique');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `CodePostal` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`CodePostal`, `Ville`) VALUES
('12000', 'Rodez'),
('31000', 'Toulouse'),
('69000', 'Lyon'),
('87000', 'Limoges');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `Texte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`Texte`) VALUES
('confirmé'),
('debutant'),
('intermediaire'),
('pro'),
('semi-pro');

-- --------------------------------------------------------

--
-- Structure de la table `rubrique`
--

CREATE TABLE `rubrique` (
  `Nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `rubrique`
--

INSERT INTO `rubrique` (`Nom`) VALUES
('Accompagnement'),
('Diffusion'),
('Éveil musical'),
('instrument'),
('Pratique');

-- --------------------------------------------------------

--
-- Structure de la table `structure`
--

CREATE TABLE `structure` (
  `Mail` varchar(50) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Tel` varchar(50) DEFAULT NULL,
  `SiteInternet` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `MotDePasse` varchar(50) DEFAULT NULL,
  `ZoneCarte` varchar(50) DEFAULT NULL,
  `Type` varchar(50) NOT NULL,
  `CodePostal` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `structure`
--

INSERT INTO `structure` (`Mail`, `Nom`, `Tel`, `SiteInternet`, `Adresse`, `Contact`, `MotDePasse`, `ZoneCarte`, `Type`, `CodePostal`, `Ville`) VALUES
('structure2@gmail.com', 'Structure 2', '23456789009', 'github@gmail.com', 'Ndogbon', 'contact 2', 'MAMA', 'Rodez', 'structure', '12000', 'Rodez'),
('structure4@gmail.com', 'Structure 4', '6789065433', 'structure4.fr', 'jean monet', 'Contact 4', '1234', 'Toulouse', 'structure', '31000', 'Toulouse'),
('tiffany@gmail.com', 'Structure 5', '1234567890', 'instagram.com', '5 rue de bruxelle', 'abcdefghijk', 'kinfack', 'Toulouse', 'structure', '12000', 'Rodez'),
('tiffanyedith08@gmail.com', 'Structure 3', '0777771199', 'facebook.com', '5 rue de bruxelle', 'abcdefghijk', 'tiffany', 'Toulouse', 'structure', '87000', 'Limoges'),
('toto@gmail.com', 'Structure1', '0234567819', 'snapchat.com', 'rue de nexon', 'contact1', '1234', 'Lyon', 'structure', '69000', 'Lyon');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`Mail`),
  ADD KEY `Type` (`Type`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`IdAnnonce`),
  ADD KEY `Nom` (`Nom`),
  ADD KEY `Texte_1` (`Texte_1`),
  ADD KEY `Nom_1` (`Nom_1`),
  ADD KEY `CodePostal` (`CodePostal`,`Ville`),
  ADD KEY `Mail` (`Mail`);

--
-- Index pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD PRIMARY KEY (`Mail`,`Nom`),
  ADD KEY `Nom` (`Nom`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`Type`);

--
-- Index pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD PRIMARY KEY (`Nom`),
  ADD KEY `Nom_1` (`Nom_1`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`CodePostal`,`Ville`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`Texte`);

--
-- Index pour la table `rubrique`
--
ALTER TABLE `rubrique`
  ADD PRIMARY KEY (`Nom`);

--
-- Index pour la table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`Mail`),
  ADD KEY `Type` (`Type`),
  ADD KEY `CodePostal` (`CodePostal`,`Ville`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `compte` (`Type`);

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`Nom`) REFERENCES `instrument` (`Nom`),
  ADD CONSTRAINT `annonce_ibfk_2` FOREIGN KEY (`Texte_1`) REFERENCES `niveau` (`Texte`),
  ADD CONSTRAINT `annonce_ibfk_3` FOREIGN KEY (`Nom_1`) REFERENCES `rubrique` (`Nom`),
  ADD CONSTRAINT `annonce_ibfk_4` FOREIGN KEY (`CodePostal`,`Ville`) REFERENCES `lieu` (`CodePostal`, `Ville`),
  ADD CONSTRAINT `annonce_ibfk_5` FOREIGN KEY (`Mail`) REFERENCES `structure` (`Mail`);

--
-- Contraintes pour la table `avoir`
--
ALTER TABLE `avoir`
  ADD CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`Mail`) REFERENCES `structure` (`Mail`),
  ADD CONSTRAINT `avoir_ibfk_2` FOREIGN KEY (`Nom`) REFERENCES `rubrique` (`Nom`);

--
-- Contraintes pour la table `instrument`
--
ALTER TABLE `instrument`
  ADD CONSTRAINT `instrument_ibfk_1` FOREIGN KEY (`Nom_1`) REFERENCES `rubrique` (`Nom`);

--
-- Contraintes pour la table `structure`
--
ALTER TABLE `structure`
  ADD CONSTRAINT `structure_ibfk_1` FOREIGN KEY (`Type`) REFERENCES `compte` (`Type`),
  ADD CONSTRAINT `structure_ibfk_2` FOREIGN KEY (`CodePostal`,`Ville`) REFERENCES `lieu` (`CodePostal`, `Ville`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
