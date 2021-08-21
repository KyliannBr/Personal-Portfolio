-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 25 juil. 2021 à 13:07
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
-- Base de données : `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `aile1`
--

CREATE TABLE `aile1` (
  `Login` text NOT NULL,
  `dateReservation` text NOT NULL,
  `NbrInvite` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `aile1`
--

INSERT INTO `aile1` (`Login`, `dateReservation`, `NbrInvite`, `type`) VALUES
('kyliann', '2021-02-23', 1, 'individuel'),
('Clem', '2021-02-27', 2, 'couple'),
('kyliann', '2021-02-28', 2, 'couple'),
('kyliann', '2021-03-12', 2, 'couple'),
('Kyliann', '2021-06-23', 2, 'couple');

-- --------------------------------------------------------

--
-- Structure de la table `aile2`
--

CREATE TABLE `aile2` (
  `Login` text NOT NULL,
  `dateReservation` text NOT NULL,
  `NbrInvite` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `aile2`
--

INSERT INTO `aile2` (`Login`, `dateReservation`, `NbrInvite`, `type`) VALUES
('kyliann', '2021-02-23', 2, 'couple'),
('Clem', '2021-02-28', 3, 'famille');

-- --------------------------------------------------------

--
-- Structure de la table `aile3`
--

CREATE TABLE `aile3` (
  `Login` text NOT NULL,
  `dateReservation` text NOT NULL,
  `NbrInvite` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `aile3`
--

INSERT INTO `aile3` (`Login`, `dateReservation`, `NbrInvite`, `type`) VALUES
('kyliann', '2021-02-23', 1, 'individuel'),
('tdris', '2021-02-28', 1, 'individuel');

-- --------------------------------------------------------

--
-- Structure de la table `aile4`
--

CREATE TABLE `aile4` (
  `Login` text NOT NULL,
  `dateReservation` text NOT NULL,
  `NbrInvite` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `aile4`
--

INSERT INTO `aile4` (`Login`, `dateReservation`, `NbrInvite`, `type`) VALUES
('kyliann', '2021-02-23', 3, 'famille'),
('kyliann', '2021-02-28', 4, 'famille');

-- --------------------------------------------------------

--
-- Structure de la table `connexions`
--

CREATE TABLE `connexions` (
  `Pseudo` text NOT NULL,
  `MDP` text NOT NULL,
  `dateHeure` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexions`
--

INSERT INTO `connexions` (`Pseudo`, `MDP`, `dateHeure`) VALUES
('test1', 'motdepasse1', '10-12-2020 16:27:22'),
('essainumero4', 'vcfghjvcghjvch', '11-12-2020 10:10:27'),
('vcxvx', 'fdsfdsfs', '11-12-2020 14:45:47'),
('essainumero1', 'dsqdqscsqc f ez dq', '11-12-2020 15:55:38'),
('essainumero3', 'dzadzadza', '11-12-2020 15:57:05'),
('essaiddqsdq', 'ezaeadaeaea', '11-12-2020 15:57:11'),
('clÃ©mence', 'batut', '11-12-2020 21:00:26'),
('LeTest', 'fdtghfg', '26-12-2020 10:10:40'),
('', '', ''),
('', '', ''),
('dzqdq', 'dsqfqs', ''),
('dzqdq', 'dsqfqs', '08-01-2021 09:40:57'),
('t-dris', 'tdris', '11-01-2021 14:37:11'),
('tdris', 'tdris', '11-01-2021 14:37:29'),
('t-dris', 'tdris', '12-01-2021 16:14:49'),
('t-dris', 'tdris', '12-01-2021 16:23:00'),
('t-dris', 'tdris', '12-01-2021 18:11:23'),
('t-dris', 'tdris', '12-01-2021 19:13:25'),
('t-dris', 'tdris', '12-01-2021 22:43:37'),
('Clemence', 'Batut', '13-01-2021 18:05:39'),
('Clemence', 'Batut', '13-01-2021 18:06:20'),
('Clemence', 'Batut', '13-01-2021 18:10:36'),
('Clemence', 'Batut', '14-01-2021 21:16:12'),
('Kyliann', 'brisson', '14-01-2021 21:18:57'),
('Kyliann', 'bRISSON', '14-01-2021 21:21:32'),
('Kyliann', 'brisson', '14-01-2021 21:33:47'),
('Kyliann', 'brisson', '14-01-2021 21:34:12'),
('Kyliann', 'brisson', '14-01-2021 21:36:16'),
('Kyliann', 'brisson', '14-01-2021 21:36:35'),
('Kyliann', 'brisson', '14-01-2021 22:33:42'),
('Kyliann', 'brisson', '14-01-2021 23:38:04'),
('Kyliann', 'brisson', '15-01-2021 00:08:14'),
('Kyliann', 'brisson', '15-01-2021 00:41:17'),
('Kyliann', 'brisson', '15-01-2021 00:41:37'),
('Kyliann', 'brisson', '15-01-2021 01:53:07'),
('Clemence', 'Batut', '15-01-2021 01:53:33'),
('Clemence', 'Batut', '15-01-2021 02:05:37'),
('Clemence', 'Batut', '15-01-2021 02:11:36'),
('Clemence', 'Batut', '15-01-2021 02:11:54'),
('Clemence', 'Batut', '15-01-2021 02:12:33'),
('Clemence', 'Batut', '15-01-2021 02:12:40'),
('Severine', 'Brisson', '15-01-2021 13:00:48'),
('Severine', 'Brisson', '15-01-2021 13:01:13'),
('Severine', 'Brisson', '15-01-2021 13:02:11'),
('Kyliann', 'Brisson', '15-01-2021 15:55:29'),
('Clemence', 'Batut', '15-01-2021 21:50:38'),
('Clemence', 'Batut', '15-01-2021 21:52:56'),
('Clemence', 'Batut', '17-01-2021 14:54:42'),
('Clemence', 'Batut', '17-01-2021 15:01:25'),
('Kyliann', 'Brisson', '17-02-2021 15:28:21'),
('Kyliann', 'brisson', '17-01-2021 21:27:19'),
('Damien', 'Polonia', '18-01-2021 08:40:11'),
('unpesude', 'poiuyt', '19-01-2021 19:22:56'),
('unpesude', 'mlkj', '19-01-2021 19:23:02'),
('unpesude', 'Miaou', '19-01-2021 19:26:13'),
('dazdzadza', 'njcezbckz', '19-01-2021 19:27:10'),
('dazdzadza', 'zadada', '19-01-2021 19:29:59'),
('Kyliann', 'brisson', '19-01-2021 19:30:32'),
('Kyliann', 'Brisson', '19-01-2021 19:31:18'),
('kyliann', 'brisson', '19-01-2021 19:48:26'),
('kyliann', 'Brisson', '19-01-2021 19:52:53'),
('Kyliann', 'bRISSON', '19-01-2021 19:55:46'),
('Kyliann', 'Brisson', '19-01-2021 20:02:39'),
('NouveauCompte', 'Nouveaumdp', ''),
('NouveauCompte', 'Nouveaumdp', ''),
('NouveauCompte1', 'NouveauMDP1', '2021-01-19 20:11:58'),
('NouveauCompte1', 'NouveauMDP1', '19-01-2021 20:12:34'),
('Kyliann', 'Brisson', '19-01-2021 20:16:35'),
('Papa', 'papa', '2021-01-19 20:17:45'),
('Kyliann', 'Brisson', '19-01-2021 20:20:16'),
('Kyliann', 'Brisson', '20-01-2021 21:26:57'),
('Kyliann', 'Brisson', '20-01-2021 21:28:15'),
('Kyliann', 'BRISSON', '22-01-2021 11:46:35'),
('kyky', 'brisson', '2021-01-22 14:27:19'),
('Kyliann', 'brisson', '22-01-2021 14:28:33'),
('Kyliann', 'brisson', '22-01-2021 14:58:58'),
('Kyliann', 'brisson', '22-01-2021 18:46:41'),
('Kyliann', 'Brisson', '22-01-2021 18:46:57'),
('Kyliann', 'brisson', '29-01-2021 15:19:21'),
('kyliann', 'brisson', '2021-02-9 12:45:39'),
('kyliann', 'brisson', '09-02-2021 12:47:38'),
('kyliann', 'brisson', '09-02-2021 12:52:37'),
('kyliann', 'brisson', '09-02-2021 12:53:12'),
('kyliann', 'brisson', '09-02-2021 13:59:56'),
('KyliaNN', 'Brisson', '2021-02-9 14:02:19'),
('KyLiAnN', 'KyLiAnN', '2021-02-9 14:03:24'),
('kyliann', 'brisson', '09-02-2021 14:21:20'),
('admin', 'admin', '2021-02-9 14:21:29'),
('admin', 'admin', '09-02-2021 14:21:37'),
('admin', 'admin', '09-02-2021 14:22:24'),
('admin', 'admin', '09-02-2021 14:36:49'),
('admin', 'admin', '09-02-2021 14:40:02'),
('', '', '2021-02-9 17:47:53'),
('admin', 'admin', '09-02-2021 17:48:14'),
('admin', 'admin', '09-02-2021 18:07:38'),
('kyliann', 'brisson', '2021-02-9 18:12:46'),
('admin', 'admin', '09-02-2021 18:12:53'),
('kyliann', 'brisson', '09-02-2021 18:14:29'),
('admin', 'admin', '09-02-2021 18:14:46'),
('admin', 'admin', '09-02-2021 18:17:34'),
('Clemence', 'batut', '2021-02-9 18:18:52'),
('admin', 'admin', '09-02-2021 18:18:58'),
('Kyliann', 'brisson', '2021-02-9 18:20:29'),
('tdris', 'tdris', '2021-02-9 18:20:41'),
('T-DRIS', 'tdris', '2021-02-9 18:20:51'),
('admin', 'admin', '09-02-2021 18:20:59'),
('Clem', 'batut', '2021-02-9 18:30:44'),
('Clem', 'batut', '09-02-2021 18:31:51'),
('Clem', 'batut', '09-02-2021 18:32:09'),
('Clem', 'batut', '09-02-2021 18:36:32'),
('Clem', 'batut', '09-02-2021 18:38:46'),
('Clem', 'batut', '09-02-2021 18:40:22'),
('Clem', 'batut', '09-02-2021 18:40:46'),
('kyliann', 'brisson', '2021-02-9 18:42:12'),
('kyliann', 'brisson', '09-02-2021 18:44:08'),
('kyliann', 'brisson', '09-02-2021 18:44:42'),
('kyliann', 'brisson', '09-02-2021 18:45:07'),
('kyliann', 'brisson', '09-02-2021 18:48:08'),
('kyliann', 'brisson', '09-02-2021 18:48:47'),
('kyliann', 'brisson', '09-02-2021 18:55:29'),
('kyliann', 'brisson', '09-02-2021 18:56:02'),
('kyliann', 'brisson', '09-02-2021 18:57:12'),
('kyliann', 'brisson', '10-02-2021 11:40:56'),
('kyliann', 'brisson', '11-02-2021 09:16:06'),
('testtest', 'test', '2021-02-12 19:33:23'),
('kyliann', 'brisson', '12-02-2021 19:47:40'),
('testtest', 'test', '12-02-2021 19:48:02'),
('testtesttest', 'test', '2021-02-13 23:35:21'),
('testtesttest', 'test', '14-02-2021 11:51:21'),
('kyliann', 'brisson', '14-02-2021 11:53:43'),
('kyliann', 'brisson', '14-02-2021 12:10:14'),
('kyliann', 'brisson', '14-02-2021 12:13:34'),
('kyliann', 'brisson', '14-02-2021 12:20:50'),
('kyliann', 'brisson', '14-02-2021 12:25:42'),
('kyliann', 'brisson', '14-02-2021 12:31:47'),
('kyliann', 'brisson', '14-02-2021 12:32:24'),
('kyliann', 'brisson', '14-02-2021 12:33:04'),
('kyliann', 'brisson', '14-02-2021 12:33:27'),
('kyliann', 'brisson', '14-02-2021 12:39:52'),
('kyliann', 'brisson', '14-02-2021 12:40:01'),
('kyliann', 'brisson', '14-02-2021 12:42:17'),
('kyliann', 'brisson', '14-02-2021 12:42:40'),
('kyliann', 'brisson', '14-02-2021 12:45:28'),
('kyliann', 'brisson', '14-02-2021 12:47:12'),
('kyliann', 'brisson', '14-02-2021 12:50:24'),
('kyliann', 'brisson', '14-02-2021 12:51:46'),
('kyliann', 'brisson', '14-02-2021 12:59:29'),
('kyliann', 'brisson', '14-02-2021 16:33:29'),
('kyliann', 'brisson', '14-02-2021 16:43:51'),
('kyliann', 'brisson', '14-02-2021 16:56:14'),
('kyliann', 'brisson', '14-02-2021 17:11:54'),
('kyliann', 'brisson', '23-02-2021 15:57:51'),
('kyliann', 'brisson', '24-02-2021 11:47:39'),
('kyliann', 'brisson', '24-02-2021 16:59:09'),
('kyliann', 'brisson', '24-02-2021 17:00:42'),
('kyliann', 'brisson', '24-02-2021 17:00:53'),
('kyliann', 'brisson', '24-02-2021 17:01:03'),
('kyliann', 'brisson', '24-02-2021 18:47:31'),
('kyliann', 'brisson', '24-02-2021 18:47:47'),
('kyliann', 'brisson', '24-02-2021 18:48:04'),
('kyliann', 'brisson', '24-02-2021 18:50:30'),
('kyliann', 'brisson', '24-02-2021 18:50:49'),
('kyliann', 'brisson', '24-02-2021 18:53:46'),
('kyliann', 'brisson', '24-02-2021 18:54:06'),
('kyliann', 'brisson', '24-02-2021 18:56:05'),
('kyliann', 'brisson', '24-02-2021 19:13:02'),
('kyliann', 'brisson', '24-02-2021 19:13:54'),
('kyliann', 'brisson', '26-02-2021 09:31:24'),
('kyliann', 'brisson', '26-02-2021 09:32:49'),
('kyliann', 'brisson', '26-02-2021 09:33:56'),
('kyliann', 'brisson', '26-02-2021 09:36:09'),
('kyliann', 'brisson', '26-02-2021 09:36:36'),
('kyliann', 'brisson', '26-02-2021 09:37:24'),
('kyliann', 'brisson', '26-02-2021 09:43:45'),
('kyliann', 'brisson', '26-02-2021 09:47:04'),
('kyliann', 'brisson', '26-02-2021 09:48:13'),
('kyliann', 'brisson', '26-02-2021 09:49:25'),
('kyliann', 'brisson', '26-02-2021 09:53:29'),
('inscription', 'inc', '2021-02-26 10:04:13'),
('Clem', 'batut', '26-02-2021 10:06:03'),
('kyliann', 'brisson', '26-02-2021 11:07:42'),
('Clem', 'batut', '26-02-2021 11:08:21'),
('tdris', 'tdris', '26-02-2021 11:08:58'),
('kyliann', 'brisson', '26-02-2021 11:09:16'),
('kyliann', 'brisson', '26-02-2021 11:09:34'),
('kyliann', 'brisson', '26-02-2021 11:12:41'),
('kyliann', 'brisson', '02-03-2021 11:53:30'),
('kyliann', 'brisson', '16-03-2021 14:14:17'),
('tdris', 'tdris', '04-04-2021 15:08:25'),
('Kyliann', 'brisson', '2021-06-23 16:12:54'),
('Kyliann', 'brisson', '23-06-2021 16:13:15'),
('Kyliann', 'brisson', '24-07-2021 15:44:34'),
('Kyliann', 'brisson', '24-07-2021 15:50:26'),
('Kyliann', 'brisson', '24-07-2021 22:58:04');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `login` text NOT NULL,
  `password` text NOT NULL,
  `dateInscription` text NOT NULL,
  `Verified` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`login`, `password`, `dateInscription`, `Verified`) VALUES
('Kyliann', 'brisson', '2021-06-23 16:12:54', 'false'),
('testtest', 'test', '2021-02-12 19:33:23', 'true'),
('kyliann', 'brisson', '2021-02-9 18:42:12', 'true'),
('tdris', 'tdris', '2021-02-9 18:20:41', 'true'),
('Clem', 'batut', '2021-02-9 18:30:44', 'true');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `loginLoueur` text NOT NULL,
  `dateReservation` date NOT NULL,
  `nombreInvites` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`loginLoueur`, `dateReservation`, `nombreInvites`, `type`) VALUES
('kyliann', '2021-02-28', 4, 'famille'),
('kyliann', '2021-02-23', 3, 'famille');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
