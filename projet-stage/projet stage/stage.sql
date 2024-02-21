-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 04:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stage`
--

-- --------------------------------------------------------

--
-- Table structure for table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `nomprenom` varchar(30) NOT NULL,
  `cin` varchar(8) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `tel` int(8) NOT NULL,
  `etablissement` varchar(100) NOT NULL,
  `organisme` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `c1` varchar(3) NOT NULL,
  `montant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stagiaire`
--

INSERT INTO `stagiaire` (`nomprenom`, `cin`, `date`, `lieu`, `adresse`, `niveau`, `tel`, `etablissement`, `organisme`, `type`, `sujet`, `debut`, `fin`, `c1`, `montant`) VALUES
('ihssen soussi', '13033595', '2024-02-02', 'bardo', 'bardo', 'bac', 50405154, 'isetjerba', 'siege biat', 'initiation', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaz', '2024-01-11', '2024-02-11', 'oui', 250);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
