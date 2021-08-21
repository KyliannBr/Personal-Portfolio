-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 22 juil. 2021 à 18:14
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `locationvoiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `dateConnexion` text NOT NULL,
  `passwordConnexion` text NOT NULL,
  `loginConnexion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`dateConnexion`, `passwordConnexion`, `loginConnexion`) VALUES
('2021-01-21 00:00:00', 'brisson', 'Kyliann'),
('2021-01-21 00:00:00', 'brisson', 'kyliann'),
('21-01-2021 16:29:58', 'brisson', 'Kyliann'),
('21-01-2021 19:06:30', 'brisson', 'kyliann'),
('21-01-2021 19:06:47', 'brisson', 'Kyliann'),
('21-01-2021 19:11:30', 'brisson', 'Kyliann'),
('21-01-2021 19:20:46', 'brisson', 'Kyliann'),
('21-01-2021 19:31:02', 'brisson', 'Kyliann'),
('21-01-2021 19:31:30', 'brisson', 'kyliann'),
('21-01-2021 19:32:34', 'brisson', 'Kyliann'),
('21-01-2021 20:03:46', 'brisson', 'kyliann'),
('21-01-2021 20:30:19', 'brisson', 'Kyliann'),
('21-01-2021 20:48:44', 'brisson', 'kyliann'),
('21-01-2021 20:58:57', 'brisson', 'kyliann'),
('21-01-2021 21:15:32', 'brisson', 'Kyliann'),
('21-01-2021 22:00:14', 'brisson', 'kyliann'),
('21-01-2021 22:01:11', 'brisson', 'kyliann'),
('2021-01-21 22:02:12', 'brisson', 'kyky'),
('22-01-2021 09:15:01', 'brisson', 'kyliann'),
('22-01-2021 12:10:52', 'brisson', 'Kyliann'),
('22-01-2021 18:49:18', 'brisson', 'Kyliann'),
('24-01-2021 12:17:15', 'brisson', 'Kyliann');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `login` text NOT NULL,
  `password` text NOT NULL,
  `dateInscription` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`login`, `password`, `dateInscription`) VALUES
('Kyliann', 'brisson', '2021-01-21 00:00:00'),
('kyliann', 'brisson', '2021-01-21 13:44:02'),
('kyky', 'brisson', '2021-01-21 22:02:12');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `age` int(11) NOT NULL,
  `login` text NOT NULL,
  `voitureChoisie` text NOT NULL,
  `coloris` text NOT NULL,
  `immatriculation` text NOT NULL,
  `puissance` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `immatriculation` text NOT NULL,
  `marque` text NOT NULL,
  `modele` text NOT NULL,
  `couleur` text NOT NULL,
  `chevaux` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`immatriculation`, `marque`, `modele`, `couleur`, `chevaux`) VALUES
('AA123AA', 'Audi', 'R8 V10 Decennium', 'Noir', '620'),
('BB123BB', 'Audi', 'RSQ8 ABT', 'Gris', '740'),
('CC123CC', 'Audi', 'RS7 Sportback', 'Vert Foret', '605'),
('DD123DD', 'Audi', 'RS3 Sportback', 'Gris metalique', '400'),
('EE123EE', 'Audi', 'TT RS Coupe', 'Rouge', '400'),
('FF123FF', 'BMW', 'M8 Competition Coupe', 'Orange', '617'),
('GG123GG', 'BMW', 'X6 M Competition', 'Noir', '625'),
('HH123HH', 'BMW', 'M5 Competition', 'Gris', '625'),
('II123II', 'BMW', 'M4 Competition Coupe', 'Jaune', '510'),
('JJ123JJ', 'BMW', 'M2 Competition', 'Blanche', '410'),
('KK123KK', 'Mercedes', 'A45 S AMG', 'Gris', '421'),
('LL123LL', 'Mercedes', 'C63 S', 'Noir', '510'),
('MM123MM', 'Mercedes', 'G63 AMG', 'Gris', '540'),
('NN123NN', 'Mercedes', 'GT Coupe', 'Noir', '585'),
('OO123OO', 'Mercedes', 'Classe S Sedan', 'Gris', '630'),
('PP123PP', 'Tesla', 'Model 3', 'Blanc', '483'),
('QQ123QQ', 'Tesla', 'Cybertruck', 'Gris', '500'),
('RR123RR', 'Tesla', 'Model S', 'Rouge', '611'),
('SS123SS', 'Tesla', 'Model X', 'Blanc', '611'),
('TT123TT', 'Tesla', 'Model Y', 'Blanc', '483'),
('UU123UU', 'Volkswagen', 'Golf 8 R', 'Bleu', '310'),
('VV123VV', 'Volkswagen', 'T-ROC R', 'Orange', '300'),
('WW123WW', 'Volkswagen', 'E-Golf', 'Blanc', '136'),
('XX123XX', 'Volkswagen', 'Tiguan R', 'Noir', '220'),
('YY123YY', 'Volkswagen', 'Golf 8 GTI', 'Blanc', '245');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
