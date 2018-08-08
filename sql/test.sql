-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Gép: localhost
-- Létrehozás ideje: 2018. Aug 08. 11:12
-- Kiszolgáló verziója: 5.7.11
-- PHP verzió: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `mete`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `cikkszam` int(11) NOT NULL,
  `cikknev` text COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(11) NOT NULL,
  `gyarto` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `kategoria` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `garancia` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `leiras` text COLLATE utf8_hungarian_ci,
  `kep` text COLLATE utf8_hungarian_ci,
  `tomeg` varchar(11) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `x` varchar(11) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `y` varchar(11) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `z` varchar(11) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `megjegyzes` text COLLATE utf8_hungarian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
