-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Gegenereerd op: 03 jul 2023 om 09:35
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
  `Bedrag` int(11) NOT NULL,
  `Gebruiker-ID` int(11) NOT NULL,
  `Voornaam` varchar(30) NOT NULL,
  `Achternaam` varchar(30) NOT NULL,
  `DonatieDatum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `donatietabel`
--

INSERT INTO `donatietabel` (`Bedrag`, `Gebruiker-ID`, `Voornaam`, `Achternaam`, `DonatieDatum`) VALUES
(56000, 52, 'jeff', 'ebola', '2023-06-29 09:27:57'),
(2800, 54, 'brock', 'ger', '2023-06-29 09:28:24');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikerstabel`
--

CREATE TABLE `gebruikerstabel` (
  `Gebruiker-ID` int(11) NOT NULL,
  `Voornaam` varchar(30) NOT NULL,
  `Achternaam` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Adres` varchar(60) NOT NULL,
  `Telefoonnummer` varchar(20) NOT NULL,
  `Woonplaats` varchar(40) NOT NULL,
  `Wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikerstabel`
--

INSERT INTO `gebruikerstabel` (`Gebruiker-ID`, `Voornaam`, `Achternaam`, `Email`, `Adres`, `Telefoonnummer`, `Woonplaats`, `Wachtwoord`) VALUES
(3, 'jeff', 'potato', 'jeffreydahmer@human.com', 'dahmerstraat', '062327572464', 'eindhoven', 'meatlover'),
(4, 'pizza', 'boy', 'damherpizza@gmail.com', 'dahmerstraat 12', '06232765474', 'eindhoven', 'Poisen21'),
(5, 'justin', 'lit', 'justin@jerrylit.com', 'dahmerstraat 69', '062327572464', 'Veldhoven', 'Ninjaturtle7');

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
  ADD PRIMARY KEY (`Gebruiker-ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `donatietabel`
--
ALTER TABLE `donatietabel`
  MODIFY `Gebruiker-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT voor een tabel `gebruikerstabel`
--
ALTER TABLE `gebruikerstabel`
  MODIFY `Gebruiker-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
