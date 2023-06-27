-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Gegenereerd op: 27 jun 2023 om 15:11
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

--
-- Gegevens worden geëxporteerd voor tabel `donatietabel`
--

INSERT INTO `donatietabel` (`Achternaam`, `Voornaam`, `Bedrag`, `Gebruiker-ID`) VALUES
('Smith', 'John', 100, 1),
('ebola', 'jeff', 900, 2),
('ebola', 'jeff', 900, 3),
('Lit', 'justin', 2000, 4),
('Lit', 'justin', 2000, 5),
('yikes', 'ridley', 50, 6),
('the rock', 'brock', 1, 7),
('the rock', 'brock', 1, 8),
('bagguette', 'eddy', 2169, 9),
('bagguette', 'eddy', 2169, 10),
('bagguette', 'eddy', 2169, 11),
('bagguette', 'eddy', 2169, 12),
('Lit', 'justin', 2000, 13),
('Lit', 'justin', 2000, 14),
('bed', 'ted', 100, 15),
('ebola', 'jeff', 300, 17),
('lin', 'mama', 3000, 18),
('lin', 'mama', 3000, 19),
('lin', 'mama', 3000, 20),
('lin', 'mama', 3000, 21),
('lin', 'mama', 3000, 22),
('lin', 'mama', 3000, 23),
('lin', 'mama', 3000, 24),
('lin', 'mama', 3000, 25),
('obama', 'barrack', 10000, 26),
('nipple', 'jeff', 4000, 27),
('nipple', 'jeff', 4000, 28),
('nipple', 'jeff', 4000, 29),
('ebola', 'justin', 12000, 30),
('ebola', 'justin', 12000, 31),
('yikes', 'ridley', 13000, 32),
('ebola', 'jeff', 14000, 33),
('Lit', 'justin', 15000, 34),
('ipsum', 'lorem', 13000, 35),
('ipsum', 'lorem', 13000, 36),
('ipsum', 'lorem', 13000, 37),
('ipsum', 'lorem', 13000, 38),
('dahmer', 'jeffrey', 20000, 39),
('dahmer', 'jeffrey', 20000, 40),
('dahmer', 'jeffrey', 20000, 41),
('milky', 'melk', 30000, 42),
('weg', 'melk', 31000, 43),
('link', 'fingy', 40000, 44);

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
(4, 'pizza', 'boy', 'damherpizza@gmail.com', 'dahmerstraat 12', '06232765474', 'eindhoven', 'Poisen21');

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
  MODIFY `Gebruiker-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT voor een tabel `gebruikerstabel`
--
ALTER TABLE `gebruikerstabel`
  MODIFY `Gebruiker-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
