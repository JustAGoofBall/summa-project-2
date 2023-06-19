-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Gegenereerd op: 19 jun 2023 om 13:09
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groenlinks`
--
CREATE DATABASE IF NOT EXISTS `groenlinks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `groenlinks`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `donatietabel`
--

CREATE TABLE `donatietabel` (
  `Achternaam` varchar(60) NOT NULL,
  `Voornaam` varchar(60) NOT NULL,
  `Bedrag` int(11) NOT NULL,
  `Gebruiker-ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikerstabel`
--

CREATE TABLE `gebruikerstabel` (
  `Gebruikers-ID` int(11) NOT NULL,
  `Voornaam` varchar(30) NOT NULL,
  `Achternaam` varchar(60) NOT NULL,
  `E-mailadres` varchar(60) NOT NULL,
  `Adres` varchar(60) NOT NULL,
  `telefoonummer` varchar(20) NOT NULL,
  `Woonplaats` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `donatietabel`
--
ALTER TABLE `donatietabel`
  ADD PRIMARY KEY (`Gebruiker-ID`);

--
-- Indexen voor tabel `gebruikerstabel`
--
ALTER TABLE `gebruikerstabel`
  ADD PRIMARY KEY (`Gebruikers-ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `donatietabel`
--
ALTER TABLE `donatietabel`
  MODIFY `Gebruiker-ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `gebruikerstabel`
--
ALTER TABLE `gebruikerstabel`
  MODIFY `Gebruikers-ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
