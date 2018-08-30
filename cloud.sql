-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 30 aug 2018 om 23:23
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `itemsort`
--

DROP TABLE IF EXISTS `itemsort`;
CREATE TABLE IF NOT EXISTS `itemsort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(45) NOT NULL,
  PRIMARY KEY (`roleId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roleId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `userName`, `password`, `roleId`) VALUES
(24, 'test', '$2y$10$Mf1ML9Roxq.JA0MMh8xkF.mmtXCbig96Aw73r4383qyEvsV9ne1sm', 0),
(23, 'bartvans', '$2y$10$MK4aJ6.f16.F8GBQa/s1geUe0OJV7/9NgKN4b1TrYRoEwoUraIvBO', 0),
(21, 'bart', '$2y$10$2hEPRUOT5usm96Fziqr0v.OoRn/s2wa2DPwXPlT72Z9MW5ukd4JXC', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
