-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 nov 2021 om 16:31
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scheldwoord-filter`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `scheldwoorden`
--

CREATE TABLE `scheldwoorden` (
  `id` int(11) NOT NULL,
  `woord` varchar(255) NOT NULL,
  `goedgekeurd` varchar(255) NOT NULL,
  `gradatie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `scheldwoorden`
--

INSERT INTO `scheldwoorden` (`id`, `woord`, `goedgekeurd`, `gradatie`) VALUES
(1, 'kut', 'ja', '1'),
(2, 'kut', 'ja', '2'),
(3, 'kt', 'ja', '1'),
(4, 'teef', 'ja', '1'),
(5, 'teef', 'ja', '2'),
(6, 'mafketel', 'ja', '1'),
(7, 'mafketel', 'ja', '2'),
(8, 'sukkel', 'ja', '1'),
(9, 'sukkel', 'ja', '2'),
(10, 'skkl', 'ja', '1');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `scheldwoorden`
--
ALTER TABLE `scheldwoorden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `scheldwoorden`
--
ALTER TABLE `scheldwoorden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
