-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 08:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inlamningsuppgift`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `LastName` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Street` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `ZipCode` int(5) NOT NULL,
  `City` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `Type` varchar(8) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`ID`, `FirstName`, `LastName`, `Street`, `ZipCode`, `City`, `Phone`, `Email`, `Type`) VALUES
(9, 'Kalle', 'Andersson', 'Storgatan 1', 47588, 'Eskilstuna', '17156688', 'kalle@andersson.se', 'business'),
(13, 'Nils', 'Nilsson', 'Lillgatan 1', 78090, 'Västerås', '731234567', 'nils@nilsson.se', 'private'),
(14, 'John', 'Doe', 'Lillvägen 1', 34478, 'Bollnäs', '4569867', 'john@doe.se', 'student'),
(16, 'Kalle', 'Andersson', 'Storgatan 1', 47588, 'Eskilstuna', '17156688', 'kalle@andersson.se', 'private'),
(17, 'John', 'Doe', 'Lillvägen 1', 34478, 'Bollnäs', '4569867', 'john@doe.se', 'business'),
(19, 'Lisa', 'Andersson', 'Fiskmås 1', 43567, 'Stadstaden', '0702342343', 'lisa@andersson.se', 'private'),
(20, 'Bert', 'Aronsson', 'Gatunivå 1', 67657, 'Borås', '0708458484', 'ber@aronsson.se', 'student'),
(21, 'John', 'Doe', 'Lillvägen 1', 34478, 'Bollnäs', '4569867', 'john@doe.se', 'student'),
(22, 'Kalle', 'Andersson', 'Storgatan 1', 47588, 'Eskilstuna', '17156688', 'kalle@andersson.se', 'business'),
(23, 'Nils', 'Nilsson', 'Lillgatan 1', 78090, 'Västerås', '731234567', 'nils@nilsson.se', 'student'),
(26, 'Kalle', 'Andersson', 'Storgatan 1', 47588, 'Eskilstuna', '17156688', 'kalle@andersson.se', 'student'),
(27, 'Rune', 'Persson', 'Stigstigen 1', 45689, 'Halmstad', '0708345678', 'rune@rune.se', 'business'),
(28, 'Bert', 'Samuaesson', 'Vegagatan 1', 67890, 'Ystad', '0702347685', 'ber@samuelsson.se', 'business'),
(32, 'John', 'Doe', 'Lillvägen 1', 34478, 'Bollnäs', '4569867', 'john@doe.se', 'business'),
(35, 'John', 'Doe', 'Lillvägen 1', 34478, 'Bollnäs', '4569867', 'john@doe.se', 'private'),
(36, 'Nils', 'Nilsson', 'Lillgatan 1', 78090, 'Västerås', '731234567', 'nils@nilsson.se', 'business'),
(37, 'Sven', 'Svensson', 'Villagatan 1', 23496, 'Arboga', '0702382323', 'sven@svensson.se', 'private'),
(38, 'Sten', 'Stensson', 'Gatuadressen 1', 56934, 'Villberga', '+46701234567', 'sten@stensson.se', 'private'),
(39, 'Karl', 'Karlsson', 'Husgatan 1', 23456, 'Sveg', '+46709873465', 'karl@karlsson.se', 'business'),
(40, 'Bertil', 'Bertilsson', 'Lokstallet 1', 98734, 'Grillby', '+46734569786', 'bertil@bertilsson.se', 'student'),
(41, 'Einar', 'Einarsson', 'Byggstigen 1', 94532, 'Bollnäs', '+46731239845', 'einar@einarsson.se', 'private'),
(42, 'Sara', 'Isaksson', 'Vreten 1', 76890, 'Härnösand', '+46734569786', 'sara@isaksson.se', 'student'),
(43, 'Inga', 'Ingasson', 'Kungsgatan 1', 76523, 'Kalmar', '0708574634', 'inga@ingasson.se', 'private'),
(44, 'Eva', 'Evasson', 'Bergsgatan 1', 85746, 'Rimbo', '0223456895', 'eva@evasson.se', 'student'),
(45, 'Leif', 'Leifsson', 'Stenvreten 1', 87694, 'Arboga', '0224878787', 'leif@leifsson.se', 'business'),
(46, 'Anders', 'Ã–stberg', 'FjÃ¤rdhundragatan 1', 98704, 'LuleÃ¥', '0452896745', 'anders@ostberg.se', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
