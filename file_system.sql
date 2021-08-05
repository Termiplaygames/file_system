-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Aug 2021 um 22:28
-- Server-Version: 10.4.20-MariaDB
-- PHP-Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `file_system`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adminf`
--

CREATE TABLE `adminf` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `adminf`
--

INSERT INTO `adminf` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adminm`
--

CREATE TABLE `adminm` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `adminm`
--

INSERT INTO `adminm` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `adminp`
--

CREATE TABLE `adminp` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `adminp`
--

INSERT INTO `adminp` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mechakten`
--

CREATE TABLE `mechakten` (
  `ID` int(255) NOT NULL,
  `adatum` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `officer` text CHARACTER SET utf8 NOT NULL,
  `vor` text CHARACTER SET utf8mb4 NOT NULL,
  `nach` text CHARACTER SET utf8 NOT NULL,
  `dob` varchar(10) CHARACTER SET utf8 NOT NULL,
  `statements` text CHARACTER SET utf8 NOT NULL,
  `time_of_act` varchar(16) CHARACTER SET utf8 NOT NULL,
  `place_of_act` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_of_act` text CHARACTER SET utf8 NOT NULL,
  `misc` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `medicakten`
--

CREATE TABLE `medicakten` (
  `ID` int(255) NOT NULL,
  `adatum` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `officer` text CHARACTER SET utf8 NOT NULL,
  `vor` text CHARACTER SET utf8mb4 NOT NULL,
  `nach` text CHARACTER SET utf8 NOT NULL,
  `dob` varchar(10) CHARACTER SET utf8 NOT NULL,
  `statements` text CHARACTER SET utf8 NOT NULL,
  `time_of_act` varchar(16) CHARACTER SET utf8 NOT NULL,
  `place_of_act` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_of_act` text CHARACTER SET utf8 NOT NULL,
  `misc` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `policeakten`
--

CREATE TABLE `policeakten` (
  `ID` int(255) NOT NULL,
  `adatum` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `officer` text CHARACTER SET utf8 NOT NULL,
  `vor` text CHARACTER SET utf8mb4 NOT NULL,
  `nach` text CHARACTER SET utf8 NOT NULL,
  `dob` varchar(10) CHARACTER SET utf8 NOT NULL,
  `statements` text CHARACTER SET utf8 NOT NULL,
  `time_of_act` varchar(16) CHARACTER SET utf8 NOT NULL,
  `place_of_act` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_of_act` text CHARACTER SET utf8 NOT NULL,
  `misc` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usersf`
--

CREATE TABLE `usersf` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `usersf`
--

INSERT INTO `usersf` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usersm`
--

CREATE TABLE `usersm` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `usersm`
--

INSERT INTO `usersm` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usersp`
--

CREATE TABLE `usersp` (
  `id` int(11) NOT NULL,
  `bn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `usersp`
--

INSERT INTO `usersp` (`id`, `bn`, `passwort`) VALUES
(1, 'Admin', '$2y$10$irjN78vDWUKDqckstZZWEey7ipnOLyOs4FG6T01RxKH5ieZAYC5xi');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `adminf`
--
ALTER TABLE `adminf`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `adminm`
--
ALTER TABLE `adminm`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `adminp`
--
ALTER TABLE `adminp`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `mechakten`
--
ALTER TABLE `mechakten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `medicakten`
--
ALTER TABLE `medicakten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `policeakten`
--
ALTER TABLE `policeakten`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `usersf`
--
ALTER TABLE `usersf`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `usersm`
--
ALTER TABLE `usersm`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `usersp`
--
ALTER TABLE `usersp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `adminf`
--
ALTER TABLE `adminf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `adminm`
--
ALTER TABLE `adminm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `adminp`
--
ALTER TABLE `adminp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `mechakten`
--
ALTER TABLE `mechakten`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `medicakten`
--
ALTER TABLE `medicakten`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `policeakten`
--
ALTER TABLE `policeakten`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `usersf`
--
ALTER TABLE `usersf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `usersm`
--
ALTER TABLE `usersm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `usersp`
--
ALTER TABLE `usersp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
