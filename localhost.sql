-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2020 at 11:16 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Sync`
--
CREATE DATABASE IF NOT EXISTS `Sync` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Sync`;

-- --------------------------------------------------------

--
-- Table structure for table `Data`
--

CREATE TABLE `Data` (
  `Id` int(11) NOT NULL,
  `Username` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Data`
--

INSERT INTO `Data` (`Id`, `Username`, `Email`, `Password`) VALUES
(1, 'LNabith', 'luisnabith@nabstacks.comsd', 'Casper+213!'),
(2, 'Nabbye', 'Nabstacks@nabstdsack.com', 'NabStacks'),
(3, 'Casper2', 'casper@nab.comw', 'CasperNab'),
(4, 'asdesdsd', 'efe@tt.ccsd', 'qwerty123456'),
(5, 'rgrg', 'rgrg', 'rtt'),
(6, 'efe', 'ssdsd', 'fvvf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data`
--
ALTER TABLE `Data`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Data`
--
ALTER TABLE `Data`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
